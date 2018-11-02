<?php
/**
 * Template Name: Страница - Спасибо - Дизайн интерьера
 */

get_header();
?>


<div class="youtube-channel-intro">
    <div class="container">
        <h1 class="title-h1">
            <?php _e('Спасибо за заявку! Посмотрите свежий выпуск блога основателей Mossebo') ?>
        </h1>

        <div class="row align-items-center">
            <div class="col-md-6">
                <youtube-video
                    video-id="VIBVyQ8P02M"
                ></youtube-video>
            </div>

            <div class="col-md-6">
                <div class="youtube-channel-intro__content">
                    <a href="<?php _the_field('youtube-channel-haip') ?>" target="_blank" rel="nofollow noreferrer noopener">
                        <img
                            src="<?= THEME_DIR ?>/assets/images/thanks/haip.png"
                            srcset="<?= THEME_DIR ?>/assets/images/thanks/haip@2x.png 2x"
                            alt="<?php _e('Блог основателей Mossebo') ?>"
                        >
                    </a>

                    <div class="youtube-channel-intro__text">
                        <?php _e('Cооснователи Mossebo Марк Еремин, Владислав Туржанский и Юрий Еремин общаются с бинес-партнерами из Яндекса, SkyEng, Yota, и многими другими') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="thanks-presentation">

    <div class="container">
        <div class="row align-items-center">
             <div class="col-md-6">
                 <img
                     class="thanks-presentation__image"
                     src="<?= THEME_DIR ?>/assets/images/thanks/presentation.jpg"
                     alt="Презентация о бизнесе по дизайну интерьера Mossebo"
                 >
             </div>

            <div class="col-md-6">
                <div class="thanks-presentation__content">
                    Обязательно прочтите презентацию о бизнесе по дизайну интерьера Mossebo

                    <div class="mt-40">
                        <a
                            class="button button-dark"
                            href="<?php _the_field('mossebo-presentation') ?>"
                            target="_blank"
                            rel="nofollow noreferrer noopener"
                        >
                            Прочитать
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="mt-48">
    <div class="container">
        <h2 class="title-h2">
            <a class="instagram-title-link" href="<?php _the_field('instagram-mossebo') ?>" target="_blank" rel="nofollow noreferrer noopener">
                <img
                    src="<?= THEME_DIR ?>/assets/images/icons/socials/instagram.png"
                    srcset="<?= THEME_DIR ?>/assets/images/icons/socials/instagram@2x.png 2x"
                    alt="@mossebo.official"
                >

                @mossebo.official
            </a>
        </h2>

        <div class="thanks-franchise-another-random-text">
            <?php _e('Лучшие проекты Mossebo сначала выходят в нашем Instagram. Найди идеи для интерьера вместе с 300 000 наших подписчиков!') ?>
        </div>

        <u-block-instagram
            profile="mossebo.official"
            :count="8"
        ></u-block-instagram>

        <div class="watch-all-btn-wrap">
            <a href="<?php _the_field('instagram-mossebo') ?>" class="watch-all-btn" target="_blank" rel="nofollow noreferrer noopener">
                <span class="watch-all-btn__label">
                    Смотреть все
                </span>

                <span class="watch-all-btn__icon-box">
                    <svg class="watch-all-btn__icon">
                        <use xlink:href="<?= THEME_DIR ?>/assets/images/icons.svg#symbol-arrow-forward"></use>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</div>

<div class="mt-48">
    <div class="container">
        <h2 class="title-h2">
            <a class="instagram-title-link" href="<?php _the_field('instagram-yuri') ?>" target="_blank" rel="nofollow noreferrer noopener">
                <img
                    src="<?= THEME_DIR ?>/assets/images/icons/socials/instagram.png"
                    srcset="<?= THEME_DIR ?>/assets/images/icons/socials/instagram@2x.png 2x"
                    alt="@yurieremin"
                >

                @yurieremin
            </a>
        </h2>

        <u-block-instagram
            profile="yuriereminv"
            :count="4"
        ></u-block-instagram>
    </div>
</div>

<div class="mt-48">
    <div class="container">
        <h2 class="title-h2">
            <a class="instagram-title-link" href="<?php _the_field('instagram-mark') ?>" target="_blank" rel="nofollow noreferrer noopener">
                <img
                    src="<?= THEME_DIR ?>/assets/images/icons/socials/instagram.png"
                    srcset="<?= THEME_DIR ?>/assets/images/icons/socials/instagram@2x.png 2x"
                    alt="@markeremin"
                >

                @markeremin
            </a>
        </h2>

        <u-block-instagram
            profile="markeremin"
            :count="4"
        ></u-block-instagram>
    </div>
</div>

<div class="mt-48">
    <div class="container">
        <h2 class="title-h2">
            <a class="instagram-title-link" href="<?php _the_field('instagram-turjanskii') ?>" target="_blank" rel="nofollow noreferrer noopener">
                <img
                    src="<?= THEME_DIR ?>/assets/images/icons/socials/instagram.png"
                    srcset="<?= THEME_DIR ?>/assets/images/icons/socials/instagram@2x.png 2x"
                    alt="@turjanskii"
                >

                @turjanskii
            </a>
        </h2>

        <u-block-instagram
            profile="turjanskii"
            :count="4"
        ></u-block-instagram>
    </div>
</div>

<?php get_footer(); ?>
