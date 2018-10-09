<template>
    <div class="interior-pano">
        <div class="interior-pano__tabs">
            <div class="container">
                <tabs
                    :tabs="tabs"
                    :active="activeTab"
                    @activation="setTab"
                ></tabs>
            </div>
        </div>

        <div class="interior-pano__pano">
            <div class="swiper-container swiper-mobile js-panorama">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="interior-pano__container row">
                            <div v-for="image in images$" class="interior-pano__item col-lg-3">
                                <a
                                    :key="image.key + '-1'"
                                    :href="image.src"
                                    :class="imageClass"
                                    :style="background(image)"
                                    :data-key="image.key"
                                    target="_blank"
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="interior-pano__container row">
                            <div v-for="image in images$" class="interior-pano__item col-lg-3">
                                <a
                                    :key="image.key + '-2'"
                                    :href="image.src"
                                    :class="imageClass + ' js-fancybox-true'"
                                    :style="background(image)"
                                    :data-key="image.key"
                                    target="_blank"
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="interior-pano__container row">
                            <div v-for="image in images$" class="interior-pano__item col-lg-3">
                                <a
                                    :key="image.key + '-3'"
                                    :href="image.src"
                                    :class="imageClass"
                                    :style="background(image)"
                                    :data-key="image.key"
                                    target="_blank"
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Tabs from './Tabs'

    function fillArray(arr, quantity) {
        if (arr.length === 0) {
            return []
        }

        if (arr.length === quantity) {
            return arr
        }

        if (arr.length > quantity) {
            return arr.slice(0, quantity)
        }

        arr = [
            ... arr,
            ... arr,
        ];

        return fillArray(arr, quantity)
    }

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min
    }

    export default {
        name: 'interior-pano',

        components: {
            Tabs
        },

        props: {
            tabs: {
                type: Object,
                default() {
                    return {}
                }
            },
            images: {
                type: Array,
                default() {
                    return []
                }
            }
        },

        data() {
            return {
                activeTab: this.getActiveTab(),
                images$: [],
                animationInProcess: false,
                slider: null,
                firstTime: true
            }
        },

        created() {
            this.images$ = this.getImages()
        },

        mounted() {
            this.activatePanno()
        },

        beforeDestroy() {
            this.destroyPano()
        },

        methods: {
            getActiveTab() {
                return Object.keys(this.tabs)[0]
            },

            getImages() {
                let images = this.images.filter(item => item.place === this.activeTab)

                if (! images) return []

                if (images.length < 16) {
                    images = fillArray(images, 16)
                }

                let counter = 0

                return images.map(item => {
                    counter++

                    return {
                        key: this.activeTab + '-' + counter,
                        ... item
                    }
                })
            },

            activatePanno() {
                this.slider = initSliderWithFancybox('.js-panorama', {
                    direction: 'horizontal',
                    slidesPerView: 'auto',
                    centeredSlides: false,
                    spaceBetween: 32,
                    pagination: false,
                    freeMode: true,
                    loop: true,
                    freeModeMomentumVelocityRatio: 0.5
                })
            },

            destroyPano() {
                if (! this.slider) return
                this.slider.destroy()
            },

            background(image) {
                return {
                    backgroundImage: 'url(' + image.preview + ')'
                }
            },

            setTab(key) {
                if (this.animationInProcess) return

                this.animationInProcess = true
                this.activeTab = key

                // Скрываем картинки
                this.setImagesClass('fade-out')
                    .then(() => {
                        this.firstTime = false

                        // Разрушаем слайдер, ставим новые картинки
                        this.destroyPano()
                        this.images$ = this.getImages()

                        this.$nextTick(() => {
                            // Активируем слайдер и показываем картинки
                            this.activatePanno()

                            this.setImagesClass('fade-in')
                                .then(() => {
                                    // Завершение анимации
                                    this.animationInProcess = false
                                })
                        })
                    })
            },

            setImagesClass(className) {
                return new Promise(resolve => {
                    let imageEls = this.$el.querySelectorAll('.js-fancybox-clicker')
                    let counter = 0

                    ;[].forEach.call(imageEls, el => {
                        counter++

                        el.addEventListener('transitionend', () => {
                            if (--counter === 0) {
                                resolve()
                            }
                        }, {once: true, passive: true})

                        let hasFancy = el.classList.contains('js-fancybox-true')

                        el.className = this.imageClass
                        el.classList.add(className)
                        el.classList.add(className + '--' + getRandomInt(1, 5))

                        if (hasFancy) {
                            el.classList.add('js-fancybox-true')
                        }
                    })
                })
            },
        },

        computed: {
            imageClass() {
                return 'interior-preview block-ui block-ui--with-hover js-fancybox-clicker' + (this.firstTime ? '' : ' hidden')
            }
        }
    }
</script>
