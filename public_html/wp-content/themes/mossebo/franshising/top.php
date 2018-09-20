<?php
    function getFranchiseTopImages() {
        return [
            [
                "preview" => THEME_DIR. "/assets/images/interior/bulbasaur__preview.jpg",
                "src"     => THEME_DIR. "/assets/images/interior/bulbasaur.jpg"
            ],
            [
                "preview" => THEME_DIR. "/assets/images/interior/charmander__preview.jpg",
                "src"     => THEME_DIR. "/assets/images/interior/charmander.jpg"
            ],
            [
                "preview" => THEME_DIR. "/assets/images/interior/pikachu__preview.jpg",
                "src"     => THEME_DIR. "/assets/images/interior/pikachu.jpg"
            ],
            [
                "preview" => THEME_DIR. "/assets/images/interior/squirtle__preview.jpg",
                "src"     => THEME_DIR. "/assets/images/interior/squirtle.jpg"
            ]
        ];
    }
?>

<div class="franchise-top">
    <div class="container">
        <h2 class="title-h2">
            Франшиза №1 по версии РБК
        </h2>

        <div class="row">
            <div class="col-md-5">

                <div class="franchise-top__text article">
                    <p>
                        Каждый клиент открывается дизайнеру и рассказывает о своих желаниях и предпочтениях.
                        За счет статуса лидера отрасли бренду доверяют и клиенты премиум класса.
                    </p>

                    <ul class="mt-24">
                        <li>
                            <div class="franchise-top__list-title">
                                Лидер отрасли
                            </div>

                            Крупнейший бренд по дизайну интерьера в мире
                        </li>

                        <li>
                            <div class="franchise-top__list-title">
                                8 часовых поясов
                            </div>

                            Работа call-центра и маркетинга адаптирована для всех регионов
                        </li>

                        <li>
                            <div class="franchise-top__list-title">
                                5 стран
                            </div>

                            Международный статус открывает двери для любых поставщиков
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-7">
                <div class="row">
                    <?php foreach (getFranchiseTopImages() as $image): ?>

                    <div class="col-lg-6">
                        <a
                            href="<?= $image['src'] ?>"
                            class="image-preview image-preview--3-2 block-ui block-ui--with-hover"
                            style="background-image: url(<?= $image['preview'] ?>)"
                            data-fancybox="gallery"
                        ></a>
                    </div>

                    <?php endforeach ?>
                </div>
            </div>
        </div>

    </div>
</div>
