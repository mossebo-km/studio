<?php
$form_bottom_photos = get_field('form-bottom');

if (! function_exists('getFranchiseOpenImages')) {
    function getFranchiseOpenImages($gallery)
    {
        return [
            [
                "preview"   => $gallery[0]['sizes']['thumbnail'],
                "src"       => $gallery[0]['url'],
                "itemClass" => 'col-xl-6'
            ],
            [
                "preview"   => $gallery[1]['sizes']['thumbnail'],
                "src"       => $gallery[1]['url'],
                "itemClass" => 'col-lg-4 col-xl-6'
            ],
            [
                "preview"   => $gallery[2]['sizes']['thumbnail'],
                "src"       => $gallery[2]['url'],
                "itemClass" => 'd-md-none d-lg-block col-lg-4 col-xl-6'
            ],
            [
                "preview"   => $gallery[3]['sizes']['thumbnail'],
                "src"       => $gallery[3]['url'],
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
                        <?php foreach (getFranchiseOpenImages($form_bottom_photos) as $image): ?>
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
