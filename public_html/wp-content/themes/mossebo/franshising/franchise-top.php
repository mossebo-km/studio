<?php
    function getFranchiseTopImages()
    {
        return [
            [
                "preview"   => THEME_DIR. "/assets/images/interior/bulbasaur__preview.jpg",
                "src"       => THEME_DIR. "/assets/images/interior/bulbasaur.jpg",
                "itemClass" => 'col-lg-6'
            ],
            [
                "preview"   => THEME_DIR. "/assets/images/interior/charmander__preview.jpg",
                "src"       => THEME_DIR. "/assets/images/interior/charmander.jpg",
                "itemClass" => 'col-lg-6'
            ],
            [
                "preview"   => THEME_DIR. "/assets/images/interior/pikachu__preview.jpg",
                "src"       => THEME_DIR. "/assets/images/interior/pikachu.jpg",
                "itemClass" => 'd-md-none d-lg-block col-lg-6'
            ],
            [
                "preview"   => THEME_DIR. "/assets/images/interior/squirtle__preview.jpg",
                "src"       => THEME_DIR. "/assets/images/interior/squirtle.jpg",
                "itemClass" => 'd-md-none d-lg-block col-lg-6'
            ]
        ];
    }
?>

<div class="franchise-top">
    <div class="container">
        <h2 class="title-h2">
            <?php _e('Франшиза №1 по версии РБК', 'mossebo') ?>
        </h2>

        <div class="row">
            <div class="col-md-6 col-lg-5">

                <div class="franchise-top__text article">
                    <p>
                        <?php _e('Каждый клиент открывается дизайнеру и рассказывает о своих желаниях и предпочтениях.
                        За счет статуса лидера отрасли бренду доверяют и клиенты премиум класса.', 'mossebo') ?>
                    </p>

                    <ul class="mt-24">
                        <li>
                            <div class="franchise-top__list-title">
                                <?php _e('Лидер отрасли', 'mossebo') ?>
                            </div>

                            <?php _e('Крупнейший бренд по дизайну интерьера в мире', 'mossebo') ?>
                        </li>

                        <li>
                            <div class="franchise-top__list-title">
                                <?php _e('8 часовых поясов', 'mossebo') ?>
                            </div>

                            <?php _e('Работа call-центра и маркетинга адаптирована для всех регионов', 'mossebo') ?>
                        </li>

                        <li>
                            <div class="franchise-top__list-title">
                                <?php _e('5 стран', 'mossebo') ?>
                            </div>

                            <?php _e('Международный статус открывает двери для любых поставщиков', 'mossebo') ?>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-6 col-lg-7">

                <div class="franchise-top__images">
                    <mobile-slider
                        js-class="js-slider-top-1"
                        breakpoint="md"
                        class="row"
                    >
                        <?php foreach (getFranchiseTopImages() as $image): ?>

                            <div class="franchise-top__image-item <?= $image['itemClass'] ?>">
                                <a
                                    href="<?= $image['src'] ?>"
                                    class="image-preview image-preview--3-2 block-ui block-ui--with-hover"
                                    style="background-image: url(<?= $image['preview'] ?>);"
                                    data-fancybox="gallery"
                                ></a>
                            </div>

                        <?php endforeach ?>
                    </mobile-slider>
                </div>

            </div>
        </div>

    </div>
</div>
