<?php
$mossebo_studios_photo = get_field('mossebo-studios-photo');

if (! function_exists('getFranchiseTopImages')) {
    function getFranchiseTopImages($gallery)
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

<div class="franchise-top">
    <div class="container">
        <h2 class="title-h2">
            <?php _e('Студия Mossebo – атмосфера доверия и стиля', 'mossebo') ?>
        </h2>

        <div class="row">
            <div class="col-md-6 col-lg-5">

                <div class="franchise-top__text article">
                    <p>
                        <?php _e('Каждый клиент открывается дизайнеру и рассказывает о своих желаниях и предпочтениях. За счет статуса лидера отрасли бренду доверяют и клиенты премиум класса.', 'mossebo') ?>
                    </p>

                    <ul class="franchise-top__list mt-24">
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
                        js-class="js-slider-top"
                        breakpoint="md"
                        class="row"
                    >
                        <?php foreach (getFranchiseTopImages($mossebo_studios_photo) as $image): ?>

                            <div class="franchise-top__image-item <?= $image['itemClass'] ?>">
                                <a
                                    href="<?= $image['src'] ?>"
                                    class="image-preview image-preview--3-2 block-ui block-ui--with-hover"
                                    style="background-image: url(<?= $image['preview'] ?>);"
                                    data-fancybox="franchise-top-gallery"
                                ></a>
                            </div>

                        <?php endforeach ?>
                    </mobile-slider>
                </div>

            </div>
        </div>

    </div>
</div>
