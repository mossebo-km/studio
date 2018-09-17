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
            <div class="swiper-container js-panorama">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="interior-pano__container row">
                            <div v-for="image in images$" :key="image.key" class="interior-pano__item col-3">
                                <a
                                    :href="image.src"
                                    :class="imageClass"
                                    target="_blank"
                                    :style="background(image)"
                                    data-fancybox="gallery"
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="interior-pano__container row">
                            <div v-for="image in images$" :key="image.key" class="interior-pano__item col-3">
                                <a
                                    :href="image.src"
                                    :class="imageClass"
                                    target="_blank"
                                    :style="background(image)"
                                    data-fancybox="gallery"
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="interior-pano__container row">
                            <div v-for="image in images$" :key="image.key" class="interior-pano__item col-3">
                                <a
                                    :href="image.src"
                                    :class="imageClass"
                                    target="_blank"
                                    :style="background(image)"
                                    data-fancybox="gallery"
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
          swiper: null,
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
        if (! this.swiper) return

        this.swiper.destroy(true, true)
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
          this.swiper = new Swiper(this.$el.querySelector('.js-panorama'), {
            direction: 'horizontal',
            slidesPerView: 'auto',
            centeredSlides	:true,
            spaceBetween: 32,
            pagination: false,
            freeMode: true,
            loop: true,
            freeModeMomentumVelocityRatio: 0.5
          });
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
              this.swiper.destroy(true, true);
              this.images$ = this.getImages()

              this.$nextTick(() => {
                // Активируем слайдер и показываем картинки
                this.activatePanno()

                this.setImagesClass('fade-in')
                  .then(() => {
                    // Заеверщение анимации
                    this.animationInProcess = false
                  })
              })
            })
        },

        setImagesClass(className) {
          return new Promise(resolve => {
            let imageEls = this.$el.querySelectorAll('.js-pano-image')
            let counter = 0

            ;[].forEach.call(imageEls, el => {
              counter++
              el.addEventListener('transitionend', () => {
                if (--counter === 0) {
                  resolve()
                }
              }, {once: true, passive: true})

              el.className = this.imageClass
              el.classList.add(className)
              el.classList.add(className + '--' + getRandomInt(1, 5))
            })
          })
        },
      },

      computed: {
        imageClass() {
          return 'interior-preview block-ui block-ui--with-hover js-pano-image' + (this.firstTime ? '' : ' hidden')
        }
      }
    }
</script>