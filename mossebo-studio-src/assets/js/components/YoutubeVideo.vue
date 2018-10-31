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

<style lang="scss">
    @import "../../scss/variables/colors";

    .player-box {
        position: relative;
        padding: 0;

        &__button {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 50%;
            left: 50%;
            margin-top: -35px;
            margin-left: -35px;
            width: 70px;
            height: 70px;
            padding: 0 0 0 5px;
            color: $color-background;
            background: $color-primary;
            border: 1px solid $color-primary;
            border-radius: 50%;
            z-index: 9;
            cursor: pointer;
            box-sizing: border-box;
            transition: 0.3s;
            opacity: .8;
        }

        &__icon {
            width: 30px;
            height: 32px;
            fill: #fff;
        }

        &__preview {
            margin: auto;
            width: 100%;
            max-width: 100%;
            background-size: cover;
            background-position: 50%;
            background-repeat: no-repeat;

            &:before {
                content: "";
                display: block;
                padding-top: 56.25%;
            }
        }

        &__wrap:hover {
            cursor: pointer;
        }

        &__wrap:hover &__button {
            opacity: 1;
        }

        &__video,
        &__wrap {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
        }

        &__video {
            z-index: 3;
        }
    }
</style>
