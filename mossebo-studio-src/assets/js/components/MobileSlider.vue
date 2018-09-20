<script>
    const defaultSliderConfig = {
        direction: 'horizontal',
        centeredSlides: true,
        spaceBetween: 32,
        slidesPerView: 1,
        loop: true,
    }

    export default {
        name: 'mobile-slider',

        props: {
            jsClass: '',
            breakpoint: '',
            config: {
                default() {
                    return {}
                }
            }
        },

        data() {
            return {
                initialized: false
            }
        },

        render(createElement) {
            if (this.$root.windowLessThan(this.breakpoint)) {
                return this.slider(createElement)
            }
            else {
                return createElement(
                    'div',
                    null,
                    [
                        this.$slots.default
                    ]
                )
            }
        },

        mounted() {
            this.$root.$on('resize', this.handleResize)
            this.handleResize()
        },

        beforeDestroy() {
            this.$root.$off('resize', this.handleResize)
        },

        methods: {
            handleResize() {
                if (this.$root.windowLessThan(this.breakpoint)) {
                    if (! this.initialized) {
                        this.initialized = true
                        this.initSlider()
                    }
                }
                else {
                    if (this.initialized) {
                        this.initialized = false
                    }
                }
            },

            initSlider() {
                this.$nextTick(() => {
                    this.$el.className = 'swiper-mobile swiper-container ' + this.jsClass

                    initSliderWithFancybox('.' + this.jsClass, this.getSliderConfig())
                })
            },

            getSliderConfig() {
                return {
                    ... defaultSliderConfig,
                    ... this.config,
                    navigation: {
                        nextEl: '.js-slider-next',
                        prevEl: '.js-slider-prev',
                    }
                }
            },

            slider(createElement) {
                return createElement(
                    'div',
                    [
                        createElement(
                            'div',
                            {
                                class: 'swiper-wrapper'
                            },
                            [
                                this.slotsToSlides()
                            ]
                        ),

                        ... this.arrows(createElement)
                    ]
                )
            },

            arrows(createElement) {
                return ['prev', 'next'].map(direction => {
                    return createElement(
                        'button',
                        {
                            class: `swiper-arrow swiper-arrow--small swiper-${direction} js-slider-${direction}`,
                            attrs: {
                                type: 'button'
                            }
                        },
                        [
                            createElement(
                                'svg',
                                {
                                    class: 'swiper-arrow-icon'
                                },
                                [
                                    createElement(
                                        'use',
                                        {
                                            attrs: {
                                                'xlink:href': '/wp-content/themes/mossebo/assets/images/icons.svg#symbol-arrow-' + direction
                                            }
                                        }
                                    )
                                ]
                            )
                        ]
                    )
                })
            },

            slotsToSlides() {
                return this.$slots.default.reduce((acc, slot) => {
                    if (!slot.tag) return acc
                    slot = $.extend(true, Object.create(Object.getPrototypeOf(slot)), slot)

                    slot.data.staticClass = 'swiper-slide'
                    acc.push(slot)

                    return acc
                }, [])
            }
        }
    }
</script>
