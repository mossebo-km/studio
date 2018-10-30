<template>
    <div>
        <div class="row">
            <div class="col-3"
                 v-for="photo in photos"
            >
                <a class="instagram-photo"
                   :href="photo.link"
                   :style="{ backgroundImage: 'url(' + photo.src + ')' }"
                   target="_blank"
                >
                    <div class="instagram-likes">
                        <svg class="symbol-icon instagram-icon">
                            <use xlink:href="/wp-content/themes/mossebo/assets/images/icons.svg#symbol-heart"></use>
                        </svg>
                        {{ photo.likes }}
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "UBlockInstagram",
        data() {
            return {
                photos: [
                    {
                        link: 'https://www.instagram.com/p/BphdfvKHLXs/',
                        src: 'https://scontent-arn2-1.cdninstagram.com/vp/1db9f6fc949bcd2e89410d1ebbf7394f/5C6452AE/t51.2885-15/e35/s1080x1080/43820575_113725412877163_6767113257458388321_n.jpg',
                        likes: 6423
                    },
                    {
                        link: 'https://www.instagram.com/p/BphdfvKHLXs/',
                        src: 'https://scontent-arn2-1.cdninstagram.com/vp/1db9f6fc949bcd2e89410d1ebbf7394f/5C6452AE/t51.2885-15/e35/s1080x1080/43820575_113725412877163_6767113257458388321_n.jpg',
                        likes: 523423
                    },
                    {
                        link: 'https://www.instagram.com/p/BphdfvKHLXs/',
                        src: 'https://scontent-arn2-1.cdninstagram.com/vp/1db9f6fc949bcd2e89410d1ebbf7394f/5C6452AE/t51.2885-15/e35/s1080x1080/43820575_113725412877163_6767113257458388321_n.jpg',
                        likes: 24523
                    },
                    {
                        link: 'https://www.instagram.com/p/BphdfvKHLXs/',
                        src: 'https://scontent-arn2-1.cdninstagram.com/vp/1db9f6fc949bcd2e89410d1ebbf7394f/5C6452AE/t51.2885-15/e35/s1080x1080/43820575_113725412877163_6767113257458388321_n.jpg',
                        likes: 234234
                    },
                    {
                        link: 'https://www.instagram.com/p/BphdfvKHLXs/',
                        src: 'https://scontent-arn2-1.cdninstagram.com/vp/1db9f6fc949bcd2e89410d1ebbf7394f/5C6452AE/t51.2885-15/e35/s1080x1080/43820575_113725412877163_6767113257458388321_n.jpg',
                        likes: 23433
                    },
                    {
                        link: 'https://www.instagram.com/p/BphdfvKHLXs/',
                        src: 'https://scontent-arn2-1.cdninstagram.com/vp/1db9f6fc949bcd2e89410d1ebbf7394f/5C6452AE/t51.2885-15/e35/s1080x1080/43820575_113725412877163_6767113257458388321_n.jpg',
                        likes: 23421
                    },
                    {
                        link: 'https://www.instagram.com/p/BphdfvKHLXs/',
                        src: 'https://scontent-arn2-1.cdninstagram.com/vp/1db9f6fc949bcd2e89410d1ebbf7394f/5C6452AE/t51.2885-15/e35/s1080x1080/43820575_113725412877163_6767113257458388321_n.jpg',
                        likes: 61423
                    },
                    {
                        link: 'https://www.instagram.com/p/BphdfvKHLXs/',
                        src: 'https://scontent-arn2-1.cdninstagram.com/vp/1db9f6fc949bcd2e89410d1ebbf7394f/5C6452AE/t51.2885-15/e35/s1080x1080/43820575_113725412877163_6767113257458388321_n.jpg',
                        likes: 67423
                    },
                ]
            }
        }
    }
</script>

<style scoped lang="scss">

    @import "../../scss/variables/variables";
    @import "../../scss/variables/colors";

.instagram {
    &-photo {
        width: 100%;
        position: relative;
        display: block;
        text-decoration: none;
        color: $color-text-primary;
        border-radius: $radius;
        margin-bottom: 32px;
        background-position: center center;
        background-size: cover;
        &:before {
            content: '';
            display: block;
            padding-top: 100%;
        }
    }
    &-likes {
        position: absolute;
        bottom: 8px;
        left: 12px;
        color: $color-ui;
        font-weight: 500;
        font-size: 20px;
    }
    &-icon {
        width: 24px;
        height: 24px;
        vertical-align: text-bottom;
        margin-right: 4px;
        display: inline-block;
        fill: $color-ui;
    }
}

</style>
