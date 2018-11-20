<template>
    <div>
        <div class="row">
            <template v-for="(city,id_1) in citys">
                <template v-for="(studio, id_2) in studios">

                    <div class="col-md-4"
                         v-if="city.title == studio.city"
                         :key="id_1 + '-' +id_2"
                    >
                        <div class="studios-cards__item block-ui">
                            <div class="studios-cards__city">
                                <svg class="symbol-icon symbol-location">
                                    <use xlink:href="/wp-content/themes/mossebo/assets/images/icons.svg#symbol-location"></use>
                                </svg>
                                {{ city.title }}
                            </div>
                            <div class="studios-cards__adress">
                                {{ studio.adress }}
                            </div>
                            <div class="studios-cards__adress">
                                {{ studio.phone }}
                            </div>
                        </div>
                    </div>
                </template>
            </template>
        </div>
    </div>
</template>

<script>
    export default {
        name: "StudiosCards",
        props: {
            studios: null,
        },
        data() {
            return {
                citys: null
            }
        },
        mounted() {
            this.prepareStudiosCards();
        },
        methods: {
            prepareStudiosCards() {
                let citys = []

                let studios = this.studios.map(studio => {

                    let city = citys.find(item => item.title === _.trim(studio.city))

                    if (!city) {
                        city = {
                            id: citys.length + 1,
                            title: _.trim(studio.city)
                        }

                        citys.push(city)
                    }

                })
                let filteredCitys = citys.filter(item => item.title)
                this.citys = citys
            }
        }
    }
</script>
