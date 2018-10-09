<template>
    <div v-if="$root.windowLessThan('md')" class="container">
        <studio-cities
            :menu="citiesMenu"
            :text="text"
            @setCity="showCityPopup"
        ></studio-cities>

        <div style="display: none;">
            <div class="popup-map-wrap">
                <div :class="{'studios-map-plane js-map': true, 'is-loading': loading}" key="map"></div>
            </div>
        </div>
    </div>

    <div v-else :class="{'studios-map': true, 'studios-map--no-menu': ! citiesMenu.length}">
        <div class="container">
            <div class="studios-map__controls">

                <div class="studios-map-control">

                    <div class="studios-map-control__center block-ui">
                        <studio-cities
                            :menu="citiesMenu"
                            :text="text"
                            @setCity="showCity"
                        ></studio-cities>
                    </div>

                </div>
            </div>
        </div>

        <div class="studios-map__map">
            <div :class="{'studios-map-plane js-map': true, 'is-loading': loading}" key="map"></div>
        </div>

        <div class="studios-map__loading">
            <loading-icon class="studios-map__loading-icon"></loading-icon>
        </div>
    </div>
</template>

<script>
    // <style lang="scss">
        // .studios-map .ymaps-2-1-69-ground-pane {
        //     filter: saturate(0);
        // }
    // </style>

    import LoadingIcon from '../LoadingIcon'
    import StudioCities from './StudioCities'

    class transitionEndHandler {
        constructor(el, cb) {
            this.ended = false
            this.cb = cb

            let start = performance.now()

            el.addEventListener('transitionend', () => {
                let fin = performance.now()

                if (fin - start < 300) {
                    setTimeout(() => {
                        this.end()
                    }, 300 - fin + start)
                }
                else {
                    this.end()
                }
            }, {passive: true, once: true})


            setTimeout(() => {
                this.end()
            }, 600)
        }

        end() {
            if (this.ended) return

            this.ended = true
            this.cb()
        }
    }


    export default {
        name: 'studios-map',

        props: {
            points: null,
            text: null
        },

        components: {
            LoadingIcon,
            StudioCities
        },

        data() {
            return {
                loading: false,
                ready: false,
                locations: [],
                ymap: null,
                zoom: 11,
                infoOffsetX: -440,
                infoOffsetY: -210,
                infoHidden: false,

                countries$: [],
                cities$: [],
                points$: [],

                lastBalloon: null,
            }
        },

        created() {
            // this.setLocations()

            $.getScript('//api-maps.yandex.ru/2.1/?lang=ru_RU', () => {
                this.ready = true
                this.$emit('ready')
            })
        },

        mounted() {
            this.mapEl = this.$el.querySelector('.js-map')

            if (this.ready) {
                this.buildMap()
            }
            else {
                this.$once('ready', this.buildMap)
            }
        },

        methods: {

            linkIsActive() {
                return false
            },

            buildMap() {
                this.setLoading(cb => {
                    ymaps.ready(() => {
                        this.makeGeneralPlan()
                            .then(this.preparePoints)
                            .then(this.prepareCityClusters)
                            .then(this.putPointsOnMap)
                            .then(this.setMapCenterWithOffset)
                            .then(cb)
                    })
                })

            },

            /**
             *  Создается пустая карта.
             *  Иначе ничего работать не будет.
             */
            makeGeneralPlan() {
                return new Promise(resolve => {
                    let geocoder = ymaps.geocode('Россия')

                    geocoder.then(res => {
                        let coords = res.geoObjects.get(0).geometry.getCoordinates()

                        this.ymap = new ymaps.Map(this.mapEl, {
                            center: coords,
                            zoom: this.zoom,
                            type: 'yandex#map',
                            controls: ['zoomControl'],
                        })

                        this.ymap.behaviors.disable('scrollZoom')

                        this.ymap.events.add('boundschange', e => {
                            let newZoom = e.get('newZoom')

                            if (newZoom < this.zoom) {
                                if (this.lastBalloon) {
                                    this.lastBalloon.close()
                                    this.lastBalloon = null
                                }
                            }

                            this.zoom = newZoom
                        });

                        resolve()
                    });
                });
            },

            /**
             * Подготовка данных.
             * Формируются списки стран, городов, точек.
             * Странам и городам присваиваются id.
             * Точкам создаются геообъекты.
             */
            preparePoints() {
                return new Promise(resolve => {
                    let pointsCount = 0

                    let countries = []
                    let cities = []
                    let points = this.points.map(point => {
                        pointsCount++

                        let city = cities.find(item => item.title === _.trim(point.city))

                        if (! city) {
                            city = {
                                id: cities.length + 1,
                                title: _.trim(point.city),
                                points: []
                            }

                            cities.push(city)
                        }

                        city.points.push(point.id)


                        let country = countries.find(item => item.title === _.trim(point.country))

                        if (! country) {
                            country = {
                                id: countries.length + 1,
                                title: _.trim(point.country),
                                cities: [],
                            }

                            countries.push(country)
                        }

                        if (country.cities.indexOf(city.id) === -1) {
                            country.cities.push(city.id)
                        }

                        point.cityId    = city.id
                        point.countryId = country.id

                        this.makePointGeoObject(point)
                            .then(() => {
                                if (--pointsCount === 0) {
                                    this.countries$ = countries
                                    this.cities$ = cities
                                    this.points$ = points

                                    resolve()
                                }
                            })

                        return point
                    })
                })
            },

            prepareCityClusters() {
                return new Promise(resolve => {
                    this.cities$.forEach(city => {
                        city.cluster = this.getCityPointsCluster(city)
                    })

                    resolve()
                })
            },

            /**
             * Кладём-ложим на карту точки.
             */
            putPointsOnMap() {
                return new Promise(resolve => {
                    let clusters = []

                    this.cities$.forEach(city => {
                        this.ymap.geoObjects.add(city.cluster)
                        clusters.push(city.cluster)
                    })

                    this.ymap.setBounds(this.getCollectionBounds(clusters), {
                        checkZoomRange: true,
                        zoomMargin: 30,
                    })
                        .then(resolve)
                });
            },

            setMapCenterWithOffset() {
                return this.ymap.setCenter(this.getCoordsWithOffset(this.ymap.getCenter()))
            },

            getCollectionBounds(collection) {
                return collection.slice(1).reduce((acc, item) => {
                    let bounds = item.getBounds()

                    acc[0][0] = Math.max(acc[0][0], bounds[0][0])
                    acc[0][1] = Math.min(acc[0][1], bounds[0][1])
                    acc[1][0] = Math.min(acc[1][0], bounds[1][0])
                    acc[1][1] = Math.max(acc[1][1], bounds[1][1])

                    return acc
                }, collection[0].getBounds())
            },

            /**
             * Формирование балуна точки.
             */
            makeBalloonLayout(point) {
                let html = [
                    point.adress,
                    point.phone
                ].join('</p><p>')

                html = `<div class="js-map-shops-balloon" data-id="${point.id}">
                    <p>${html}</p>
                </div>`

                return ymaps.templateLayoutFactory.createClass(html)
            },

            /**
             * Получение координат точки.
             * Если они указаны - просто возвращаем, иначе - используем геодекодер яндекса.
             */
            getPointCoordinates(point) {
                return new Promise(resolve => {
                    if (point.lat && point.lng) {
                        resolve([
                            point.lat,
                            point.lng
                        ])
                    }
                    else {
                        let geocoder = ymaps.geocode(
                            [point.country, point.city, point.address].join(', ')
                        )

                        geocoder.then(res => resolve(res.geoObjects.get(0).geometry.getCoordinates()))
                    }
                })
            },

            /**
             * Создаем точку для карты. Указываем позицию, layout и событие на клик.
             * Но на карту пока не ставим.
             */
            makePointGeoObject(point) {
                return new Promise(resolve => {
                    this.getPointCoordinates(point)
                        .then(coords => {
                            let balloonLayout = this.makeBalloonLayout(point)

                            let geoObject = new ymaps.GeoObject({
                                    geometry: {
                                        type: 'Point',
                                        coordinates: coords
                                    },
                                    properties: {
                                        pointId: point.id
                                    }
                                },
                                {
                                    openBalloonOnClick: false,
                                    balloonAutoPan: false,
                                    balloonContentLayout: balloonLayout,
                                    hideIconOnBalloonOpen: false,
                                    balloonPanelMaxMapArea: 0,
                                    iconColor: '#fcc600',
                                    // iconLayout: 'default#image',
                                    // iconImageHref: mapIcon,
                                    // iconImageSize: [30, 32],
                                    // iconImageOffset: [-15, -16],
                                });

                            geoObject.events.add('click', e => {
                                e.preventDefault()
                                e.stopPropagation()

                                console.log('point click: ' + point.id)

                                this.showStudio(
                                    e.get('target').properties.get('pointId')
                                )
                            })

                            point.geoObject = geoObject

                            resolve();
                        })
                })
            },

            setLoading(cb) {
                return new Promise(resolve => {

                    let parent = this.mapEl.parentNode

                    new transitionEndHandler(this.mapEl, () => {
                        cb(() => {
                            parent.removeAttribute('style')
                            this.loading = false

                            resolve.apply(_, arguments)
                        })
                    })

                    parent.style.height = this.mapEl.scrollHeight + 'px'
                    this.loading = true
                });
            },

            showCity(cityId) {
                if (this.loading) return

                let city = this.getCity(cityId)

                if (city.points.length === 1) {
                    this.showStudio(city.points[0])
                    return
                }

                this.setLoading(cb => {
                    this.ymap.setBounds(city.cluster.getBounds(), {
                        precizeZoom: true,
                        checkZoomRange: true,
                        zoomMargin: 30,
                    }).then(() => {
                        this.$nextTick(() => {
                            this.ymap.container.fitToViewport()

                            this.ymap.setCenter(this.getCoordsWithOffset(this.ymap.getCenter()))
                                .then(cb)
                        })
                    })
                })
            },

            showStudio(placeId) {
                if (this.loading) return

                let place = this.getPoint(placeId)

                this.setLoading(cb => {
                    let zoom = Math.max(17, this.ymap.getZoom())

                    let coords = this.getCoordsWithOffset(
                        place.geoObject.geometry.getCoordinates(),
                        zoom
                    )

                    this.ymap.setCenter(coords, zoom, {
                        duration: 300,
                        timingFunction: 'ease-in-out'
                    })
                        .then(() => {
                            this.openBalloon(place.geoObject.balloon)

                            cb()
                        })
                })
            },

            openBalloon(balloon) {
                this.lastBalloon = balloon
                this.lastBalloon.open()
            },

            getNewCluster() {
                let cluster = new ymaps.Clusterer({
                    groupByCoordinates: false,
                    clusterDisableClickZoom: true,
                    clusterOpenBalloonOnClick: false,
                }, {
                    iconColor: '#fcc600',
                })

                cluster.events.add('dblclick', e => e.preventDefault())

                return cluster
            },

            /**
             * Собирает гео-коллекцию гео-объектов точек.
             */
            getCityPointsCluster(city) {
                let cluster = this.getNewCluster()

                cluster.events.add('click', () => {
                    console.log('cluster click: ' + city.id)

                    this.showCity(city.id)
                })

                if (city && city.points && city.points.length) {
                    city.points.forEach(pointId => {
                        cluster.add(
                            this.getPoint(pointId).geoObject
                        )
                    })
                }

                return cluster
            },

            getCountry(countryId) {
                return this.countries$.find(country => country.id === countryId)
            },

            getCity(cityId) {
                return this.cities$.find(city => city.id === cityId)
            },

            getPoint(pointId) {
                return this.points$.find(point => point.id === pointId)
            },


            getCoordsWithOffset(coords, zoom) {
                if (this.infoHidden) {
                    return coords
                }

                zoom = zoom || this.ymap.getZoom()

                let projection = this.ymap.options.get('projection')

                let pixels = this.ymap.converter.globalToPage(
                    projection.toGlobalPixels(coords, zoom)
                )

                if (window.innerWidth >= 768) {
                    pixels[0] += this.infoOffsetX
                } else {
                    pixels[1] += this.infoOffsetY
                }

                return projection.fromGlobalPixels(
                    this.ymap.converter.pageToGlobal(pixels),
                    zoom
                )
            },

            showCityPopup() {
                $.fancybox.open({
                    src: '.popup-map-wrap',
                    type: 'inline',
                    touch: {
                        vertical: false,
                        horizontal: false,
                        momentum: false
                    },
                });
            }
        },

        computed: {
            citiesMenu() {
                let countries = this.countries$.sort((a, b) => b.cities.length - a.cities.length)

                return countries.map(country => {
                    return {
                        id: country.id,
                        title: country.title,
                        cities: country.cities.map(cityId => this.cities$.find(city => city.id === cityId))
                    }
                })
            }
        },
    }
</script>
