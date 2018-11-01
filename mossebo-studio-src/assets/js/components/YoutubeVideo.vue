<template>
    <div class="player-box">
        <div class="player-box__preview" :style="{ backgroundImage: 'url(' + videoThumb + ')' }">
            <div @click="showVideo" class="player-box__wrap">
                <button
                    class="player-box__button"
                    v-show="activeButton"
                >
                    <svg class="player-box__icon">
                        <use xlink:href="/wp-content/themes/mossebo/assets/images/icons.svg#symbol-triangle"></use>
                    </svg>
                </button>
            </div>

            <iframe
                class="player-box__video"
                :src="videoUrl"
                v-show="activeVideo"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen
            ></iframe>
        </div>
    </div>
</template>

<script>
    export default {
        name: "youtube-video",

        props: {
            videoId: String,
        },

        data() {
            return {
                activeButton: true,
                activeVideo: false,
                videoUrl: null,
            }
        },

        methods: {
            showVideo(e) {
                e.preventDefault()

                this.activeButton = false
                this.activeVideo = true
                this.videoUrl = this.video
            }
        },

        computed: {
            video() {
                return '//www.youtube.com/embed/' + this.videoId + '?enablejsapi=1&rel=0&playsinline=1&autoplay=1&showinfo=0&autohide=1&modestbranding=1'
            },

            videoThumb() {
                console.log('//img.youtube.com/vi/' + this.videoId + '/hqdefault.jpg')
                return '//img.youtube.com/vi/' + this.videoId + '/hqdefault.jpg'
            }
        }
    }
</script>

