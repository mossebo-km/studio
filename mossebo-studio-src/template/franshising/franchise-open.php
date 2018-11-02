<?php
if (! function_exists('getFranchiseOpenImages')) {
    function getFranchiseOpenImages()
    {
        return [
            [
                "preview"   => THEME_DIR. "/assets/images/interior/bulbasaur__preview.jpg",
                "src"       => THEME_DIR. "/assets/images/interior/bulbasaur.jpg",
                "itemClass" => 'col-xl-6'
            ],
            [
                "preview"   => THEME_DIR. "/assets/images/interior/charmander__preview.jpg",
                "src"       => THEME_DIR. "/assets/images/interior/charmander.jpg",
                "itemClass" => 'col-lg-4 col-xl-6'
            ],
            [
                "preview"   => THEME_DIR. "/assets/images/interior/pikachu__preview.jpg",
                "src"       => THEME_DIR. "/assets/images/interior/pikachu.jpg",
                "itemClass" => 'd-md-none d-lg-block col-lg-4 col-xl-6'
            ],
            [
                "preview"   => THEME_DIR. "/assets/images/interior/squirtle__preview.jpg",
                "src"       => THEME_DIR. "/assets/images/interior/squirtle.jpg",
                "itemClass" => 'd-md-none d-lg-block col-lg-4 col-xl-6'
            ]
        ];
    }
}

?>

<div class="container">
    <div class="franchise-open form-row">
        <h2 class="title-h2">
            <?php _e('Откройте франшизу Mossebo уже сейчас', 'mossebo'); ?>
        </h2>

        <p>
            На основе фактических финансовых показателей студий Mossebo за последние несколько лет.
        </p>

        <div class="form-row__content">
            <div class="form-row__left">
                <div class="franchise-open__images">
                    <mobile-slider
                        js-class="js-slider-open"
                        breakpoint="md"
                        class="row"
                    >
                        <?php foreach (getFranchiseOpenImages() as $image): ?>
                            <div class="franchise-open__image <?= $image['itemClass'] ?>">
                                <a
                                    href="<?= $image['src'] ?>"
                                    class="image-preview image-preview--4-3 block-ui block-ui--with-hover"
                                    style="background-image: url(<?= $image['preview'] ?>);"
                                    data-fancybox="franchise-open-gallery"
                                ></a>
                            </div>
                        <?php endforeach ?>
                    </mobile-slider>
                </div>
            </div>

            <div class="form-row__right">
                <?php get_template_part( 'franshising/franchise-form' ) ?>
            </div>
        </div>
    </div>
</div>
