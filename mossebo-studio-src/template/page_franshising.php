<?php
/**
 * Template Name: Страница - Франчайзинг
 */

get_header();

?>


<main>

    <!-- Брэнды -->

    <div class="container">
        <div class="brands">
            <div class="brands__row row row--half">
                <div class="col-auto">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/brands/rbk.png"
                         srcset="<?php echo THEME_DIR; ?>/assets/images/brands/rbk@2x.png 2x" alt="RBK">
                </div>

                <div class="col-auto">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/brands/forbes.png"
                         srcset="<?php echo THEME_DIR; ?>/assets/images/brands/forbes@2x.png 2x"
                         alt="Forbes">
                </div>

                <div class="col-auto">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/brands/best.png"
                         srcset="<?php echo THEME_DIR; ?>/assets/images/brands/best@2x.png 2x"
                         alt="Лучшая компания России">
                </div>

                <div class="col-auto">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/brands/transformator.png"
                         srcset="<?php echo THEME_DIR; ?>/assets/images/brands/transformator@2x.png 2x" alt="Трансформатор">
                </div>

                <div class="col-auto">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/brands/tnt.png"
                         srcset="<?php echo THEME_DIR; ?>/assets/images/brands/tnt@2x.png 2x" alt="ТНТ">
                </div>

                <div class="col-auto">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/brands/kapitalist.png"
                         srcset="<?php echo THEME_DIR; ?>/assets/images/brands/kapitalist@2x.png 2x"
                         alt="Капиталист">
                </div>

                <div class="col-auto">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/brands/houzz.png"
                         srcset="<?php echo THEME_DIR; ?>/assets/images/brands/houzz@2x.png 2x"
                         alt="Houzz">
                </div>

                <div class="col-auto">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/brands/novate.png"
                         srcset="<?php echo THEME_DIR; ?>/assets/images/brands/novate@2x.png 2x"
                         alt="Novate">
                </div>

                <div class="col-auto">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/brands/myhome.png"
                         srcset="<?php echo THEME_DIR; ?>/assets/images/brands/myhome@2x.png 2x"
                         alt="My home">
                </div>

                <div class="col-auto">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/brands/ekspert.png"
                         srcset="<?php echo THEME_DIR; ?>/assets/images/brands/ekspert@2x.png 2x"
                         alt="Эксперт">
                </div>

                <div class="col-auto">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/brands/haip.png"
                         srcset="<?php echo THEME_DIR; ?>/assets/images/brands/haip@2x.png 2x"
                         alt="Хайповый бизнес">
                </div>
            </div>
        </div>
    </div>

    <!-- Брэнды конец -->


    <!-- Почему мы? -->

    <div class="container">
        <h2 class="title-h2">
            Почему именно мы
        </h2>

        <div class="row">
            <div class="col-lg-4">
                <div class="info-card block-ui">
                    <svg class="info-card__icon">
                        <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-rouble-in-circles"></use>
                    </svg>

                    <div class="info-card__title">
                        Только прибыльные заказы
                    </div>

                    <div class="info-card__text">
                        Вы работаете с клиентами изначально заинтересованными в создании дизайна интерьера, покупке
                        дорогих материалов отделки и эксклюзивной мебели.
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-card block-ui">
                    <svg class="info-card__icon">
                        <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-orbit"></use>
                    </svg>

                    <div class="info-card__title">
                        Не нужно заниматься поиском клиентов
                    </div>

                    <div class="info-card__text">
                        Mossebo создает и находит заявки на дизайн интерьера на собственных рекламных площадках.
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-card block-ui">
                    <svg class="info-card__icon">
                        <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-snow"></use>
                    </svg>

                    <div class="info-card__title">
                        Нет зависимости от сезонности
                    </div>

                    <div class="info-card__text">
                        Mossebo — единственная на рынке франшиза, гарантирующая клиентов по договору. Вы получаете их
                        ежемесячно из управляющей компании в Санкт-Петербурге.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Почему мы? конец -->


    <!-- Карта -->

    <div class="container">
        <h2 class="title-h2">
            Студии Mossebo работают по всему миру
        </h2>
    </div>

    <div class="studios-map">
        <div class="studios-map__map">
            <div class="studios-map-plug"></div>
        </div>

        <div class="studios-map__locations">
            <div class="container">
                <div class="studio-cities block-ui">
                    <div class="studio-cities__container row">

                        <div class="studio-cities__left col-lg-6">
                            <div class="studio-cities__block">
                                <span class="studio-cities__country">Россия</span>
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Москва</span>,
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Санкт-Петербург</span>,
                                <span
                                    class="link link--dashed studio-cities__link js-studio-cities-link">Ростов-на-Дону</span>,
                                <span
                                    class="link link--dashed studio-cities__link js-studio-cities-link">Краснодар</span>,
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Казань</span>,
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Сочи</span>,
                                <span
                                    class="link link--dashed studio-cities__link js-studio-cities-link">Волгоград</span>,
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Тюмень</span>,
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Самара</span>,
                                <span
                                    class="link link--dashed studio-cities__link js-studio-cities-link">Уссурийск</span>,
                                <span
                                    class="link link--dashed studio-cities__link js-studio-cities-link">Оренбург</span>,
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Тула</span>,
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Уфа</span>,
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Пенза</span>,
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Иркутск</span>,
                                <span
                                    class="link link--dashed studio-cities__link js-studio-cities-link">Магнитогорск</span>,
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Рязань</span>,
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Якутск</span>
                            </div>
                        </div>

                        <div class="studio-cities__center col-lg-3">
                            <div class="studio-cities__block">
                                <span class="studio-cities__country">Белорусь</span>
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Минск</span>
                            </div>

                            <div class="studio-cities__block">
                                <span class="studio-cities__country">Узбекистан</span>
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Ташкент</span>
                            </div>
                        </div>

                        <div class="studio-cities__right col-lg-3">
                            <div class="studio-cities__block">
                                <span class="studio-cities__country">Казахстан</span>
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Астана</span>,
                                <span
                                    class="link link--dashed studio-cities__link js-studio-cities-link">Алма-Ата</span>
                            </div>

                            <div class="studio-cities__block">
                                <span class="studio-cities__country">Латвия</span>
                                <span class="link link--dashed studio-cities__link js-studio-cities-link">Рига</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Карта конец -->

    <!-- Оформление студий -->

    <?php
    function getInteriorTabs() {
        $interiorTabs = [
            'studio' => 'Студия',
            'negotiating' => 'Переговорная',
            'designers' => 'Зона дизайнеров',
            'reception' => 'Ресепшн',
        ];

        return toJson($interiorTabs);
    }

    function getInteriorImages() {
        $interiorImages = [
            [
                "place"   => "studio",
                "preview" => THEME_DIR. "/assets/images/interior/bulbasaur__preview.jpg",
                "src"     => THEME_DIR. "/assets/images/interior/bulbasaur.jpg"
            ],
            [
                "place"   => "negotiating",
                "preview" => THEME_DIR. "/assets/images/interior/charmander__preview.jpg",
                "src"     => THEME_DIR. "/assets/images/interior/charmander.jpg"
            ],
            [
                "place"   => "designers",
                "preview" => THEME_DIR. "/assets/images/interior/pikachu__preview.jpg",
                "src"     => THEME_DIR. "/assets/images/interior/pikachu.jpg"
            ],
            [
                "place"   => "reception",
                "preview" => THEME_DIR. "/assets/images/interior/squirtle__preview.jpg",
                "src"     => THEME_DIR. "/assets/images/interior/squirtle.jpg"
            ]
        ];

        return toJson($interiorImages);
    }

    function toJson($data) {
        return htmlspecialchars(
            json_encode($data, JSON_UNESCAPED_UNICODE)
        );
    }
    ?>

    <div class="container">
        <h2 class="title-h2">
            Оформление студий дизайна интерьера Mossebo
        </h2>

        <p>
            Оснащение целиком приобретается в управляющей компании по методу «единого окна» с существенной экономией, в
            т.ч. на компьютерном оборудовании.
        </p>
    </div>

    <interior-pano
        :tabs="<?php echo getInteriorTabs(); ?>"
        :images="<?php echo getInteriorImages(); ?>"
    ></interior-pano>

    <!-- Оформление студий конец -->


</main>

<?php get_footer(); ?>
