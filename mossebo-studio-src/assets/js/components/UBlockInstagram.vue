<template>
    <loading :loading="loading">
        <div class="row">
            <div class="col-6 col-sm-4 col-md-3"
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
    </loading>
</template>

<script>
    import Loading from './Loading'
    import instagramDataLoader from '../scripts/InstagramData'

    export default {
        name: "UBlockInstagram",

        components: {
            Loading
        },

        props: {
            profile: {
                type: String,
            },
            count: {
                type: Number,
                default: 8
            }
        },

        data() {
            return {
                loading: true,
                photos: [],
            }
        },

        mounted() {
            instagramDataLoader.getData(this.profile, this.count, images => {
                this.photos = images

                this.$nextTick(() => this.loading = false)
            })
        },
    }
</script>
