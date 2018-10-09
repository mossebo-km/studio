<template>
    <div class="studio-cities block-ui">
        <div class="studio-cities__top">
            <div class="studio-cities__container">
                <template v-for="country in menu">
                    <div class="studio-cities__block">
                        <span class="studio-cities__country">
                            {{ country.title }}
                        </span>

                        <template v-for="(city, index) in country.cities">
                            <span
                                class="link link--dashed studio-cities__link"
                                @click="cityClick(city.id)"
                            >{{ city.title }}</span><template v-if="index !== country.cities.length - 1">,&#32;</template>
                        </template>
                    </div>
                </template>
            </div>
        </div>

        <div v-if="text" class="studio-cities__bottom">
            {{ text }}
        </div>
    </div>
</template>

<script>
    export default {
        name: "StudioCities",

        props: {
            menu: null,
            text: null
        },

        data() {
            return {

            }
        },

        methods: {
            cityClick(cityId) {
                this.$emit('setCity', cityId)
            }
        }
    }
</script>
