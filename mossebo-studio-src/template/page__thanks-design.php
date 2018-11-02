<?php
/**
 * Template Name: Страница - Спасибо - Дизайн интерьера
 */

get_header();
?>

<div class="thanks-subscribe">
    <div class="container">
        <div class="thanks-subscribe__form">
            <div class="accent-form accent-form--transparent block-ui">
                <div class="accent-form__content">
                    <div class="accent-form__title">
                        Спасибо за обращение!
                    </div>

                    <div class="accent-form__under-title">
                        Ищите идеи для своего интерьера? Получите подборку идей от дизайнеров Mossebo в нашей рассылке
                    </div>

                    <div class="accent-form__form">
                        <form class="form js-fs" action="<?php echo admin_url('admin-ajax.php'); ?>">
                            <input type="hidden" name="_ajax_nonce" value="<?php echo wp_create_nonce( 'SUBSCRIBE_FORM_nonce' ); ?>">
                            <input type="hidden" name="action" value="SUBSCRIBE_FORM">
                            <input type="hidden" name="page_url" value="<?= currentUrl() ?>">
                            <input type="hidden" name="type" value="studio-interior">

                            <div class="form-group mt-16">
                                <input
                                    class="form-input form-input--large"
                                    type="email"
                                    name="email"
                                    placeholder="E-mail"
                                    required
                                >
                            </div>

                            <div class="form-submit mt-32">
                                <button type="submit" class="button button-loading button-primary">
                                    <span class="button-loading__content">
                                        Подписаться
                                    </span>

                                    <svg class="button-loading__loader">
                                        <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-spinner"></use>
                                    </svg>
                                </button>
                            </div>

                            <div class="accent-form__policy">
                                <label class="form-checkbox form-checkbox--dark form-checkbox--white-check mt-32">
                                    <input
                                        type="checkbox"
                                        class="form-checkbox__input"
                                        required
                                        checked
                                    >

                                    <span class="form-checkbox__checkmark"></span>

                                    <span class="form-checkbox__value">
                                        Согласен на обработку персональных данных и принимаю <a class="link link--inverse" href="/privacy-policy" target="_blank">политику конфиденциальности</a>
                                    </span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="mt-64">
    <div class="container">
        <div class="styles-subscribe block-ui">

            <div class="styles-subscribe__form">
                <div class="accent-form accent-form--empty">
                    <div class="accent-form__content">
                        <div class="accent-form__title">
                            Не определились со стилем своего интерьера?
                        </div>

                        <div class="accent-form__under-title">
                            Получите каталог 32 популярных стилей от Mossebo
                        </div>

                        <div class="accent-form__form">
                            <form class="form js-fs" action="<?php echo admin_url('admin-ajax.php'); ?>">
                                <input type="hidden" name="_ajax_nonce" value="<?php echo wp_create_nonce( 'SUBSCRIBE_FORM_nonce' ); ?>">
                                <input type="hidden" name="action" value="SUBSCRIBE_FORM">
                                <input type="hidden" name="page_url" value="<?= currentUrl() ?>">
                                <input type="hidden" name="type" value="studio-styles">

                                <div class="form-group mt-16">
                                    <input
                                        class="form-input form-input--large"
                                        type="email"
                                        name="email"
                                        placeholder="E-mail"
                                        required
                                    >
                                </div>

                                <div class="form-submit mt-32">
                                    <button type="submit" class="button button-loading button-dark">
                                        <span class="button-loading__content">
                                            Скачать
                                        </span>

                                        <svg class="button-loading__loader">
                                            <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-spinner"></use>
                                        </svg>
                                    </button>
                                </div>

                                <div class="accent-form__policy">
                                    <label class="form-checkbox form-checkbox--dark form-checkbox--white-check mt-32">
                                        <input
                                            type="checkbox"
                                            class="form-checkbox__input"
                                            required
                                            checked
                                        >

                                        <span class="form-checkbox__checkmark"></span>

                                        <span class="form-checkbox__value">
                                            Согласен на обработку персональных данных и принимаю <a class="link link--inverse" href="/privacy-policy" target="_blank">политику конфиденциальности</a>
                                        </span>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <img
                class="styles-subscribe__image"
                src="<?= THEME_DIR ?>/assets/images/thanks/styles-catalog.png"
                alt="Каталог 32 популярных стилей от Mossebo"
            >

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
            Советы для задумавшихся о ремонте и дизайне
        </h2>

        <div class="thanks-franchise-another-random-text">
            <?php _e('Избранные статьи от дизайнеров Mossebo') ?>
        </div>
    </div>

    <?php get_template_part( 'interior-design/blog-last-post-4' ) ?>
</div>

<?php get_footer(); ?>
