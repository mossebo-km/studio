<?php get_header(); ?>

<div class="landing-header"
     style="background-image: url(<?= THEME_DIR ?>/assets/images/interior-design/header-bg-1.jpg);"
>
    <div class="landing-header__layout">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-7">
                    <div class="title-h1 landing-header__title">
                        Дизайн интерьера<br>
                        в Cанкт-Петербурге
                    </div>
                    <div class="landing-header__subtitle">
                        Создаем дизайн квартир и коммерческих помещений
                    </div>
                </div>
                <div class="col-lg-5">
                    <form-calc class="form-calc"
                               form-action="<?php echo admin_url('admin-ajax.php'); ?>"
                               form-hidden-ajax-nonce="<?php echo wp_create_nonce( 'DESIGN_INTERIOR_FORM_nonce' ); ?>"
                               form-hidden-name-action="DESIGN_INTERIOR_FORM"
                               form-hidden-page-url="<?= currentUrl() ?>"

                               form-title="Рассчитайте стоимость дизайна и ремонта вашей квартиры прямо сейчас"
                               form-input-area="площадь помещения, м²"
                               form-input-phone="<?php _e('Ваш телефон', 'mossebo') ?>"
                               form-button-text="Узнать стоимость"

                               :privacy-policy="true"
                               privacy-policy-text="<?php _e('Согласен на обработку персональных данных и принимаю', 'mossebo') ?>"
                               privacy-policy-link="/privacy-policy"
                               privacy-policy-link-text="политику конфиденциальности"
                    >

                    </form-calc>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="interior-design-features pt-32 pb-48">
    <div class="container">
        <mobile-slider
            js-class="js-slider-why-we"
            breakpoint="md"
            class="row justify-content-center"
        >
            <div class="col-md-4">
                <div class="block-ui">
                    <div class="interior-design-features__image"
                         style="background-image: url(<?= THEME_DIR ?>/assets/images/interior-design/features_1.png);"
                    ></div>
                    <div class="interior-design-features__title">
                        <?php _e('Бесплатный авторский надзор', 'mossebo') ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block-ui">
                    <div class="interior-design-features__image"
                         style="background-image: url(<?= THEME_DIR ?>/assets/images/interior-design/features_2.png);"
                    ></div>
                    <div class="interior-design-features__title">
                        <?php _e('Дизайн интерера за один месяц', 'mossebo') ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block-ui">
                    <div class="interior-design-features__image"
                         style="background-image: url(<?= THEME_DIR ?>/assets/images/interior-design/features_3.png);"
                    ></div>
                    <div class="interior-design-features__title">
                        <?php _e('Эксклюзивные материалы, мебель', 'mossebo') ?>
                    </div>
                </div>
            </div>
        </mobile-slider>
    </div>
</div>


<div class="interior-design-portfolio">
    <div class="container">
        <div class="title-h2">
            <?php _e('Портфолио', 'mossebo') ?>
        </div>
        <div class="h-sub mb-32">
            <?php _e('Лучшие проекты компании в 32 стилях интерьера', 'mossebo') ?>
        </div>

        <?php get_template_part( 'interior-design/portfolio-all' ) ?>

        <div class="watch-all-btn-wrap">
            <a href="/portfolio/" class="watch-all-btn">
                <span class="watch-all-btn__label">
                    <?php _e('Смотреть все', 'mossebo') ?>
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



<div class="interior-design-stats mt-64">
    <div class="container">
        <div class="title-h2">
            <?php _e('Международная сеть студий дизайна интерьера', 'mossebo') ?>
        </div>
        <div class="h-sub mb-32">
            <?php _e('Mossebo – сама крупная сеть студий дизайна интерьера', 'mossebo') ?>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="block-ui stat-1">
                    <strong>7</strong> стран со студиями Mossebo
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-ui stat-2">
                    <strong>40</strong> студий дизайна интерьера
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-ui stat-3">
                    <strong>932</strong> реализованных проекта
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-ui stat-4">
                    <strong>13264</strong> визуализиации
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Сми о нас -->
<div class="mt-64">
    <div class="container">
        <div class="title-h2">
            <?php _e('О нас говорят', 'mossebo') ?>
        </div>
        <div class="h-sub mb-32">
            <?php _e('СМИ и блогеры о Mossebo', 'mossebo') ?>
        </div>
    </div>
    <?php get_template_part( 'franshising/media-about-us' ) ?>
</div>
<!-- Сми о нас конец -->



<!-- Блог последние 4 статьи -->
<div class="mt-64">
    <div class="interior-design-blog">
        <div class="container">
            <div class="title-h2">
                <?php _e('Блог', 'mossebo') ?>
            </div>
            <div class="h-sub mb-32">
                <?php _e('Авторские статьи от дизайнеров Mossebo', 'mossebo') ?>
            </div>
        </div>

        <?php get_template_part( 'interior-design/blog-last-post-4' ) ?>

        <div class="container">
            <div class="watch-all-btn-wrap pt-32">
                <a href="/blog/" class="watch-all-btn">
                <span class="watch-all-btn__label">
                    <?php _e('Смотреть все', 'mossebo') ?>
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
</div>
<!-- Блог последние 4 статьи конец -->


<!-- Банер моссэбо маркет -->
<div class="mt-64">
    <?php get_template_part( 'includes/banners/mossebo-market' ) ?>
</div>
<!-- Банер моссэбо маркет конец -->


<!-- Инстаграм -->
<div class="mt-64">
    <?php get_template_part( 'includes/instagram-last-8' ) ?>
</div>
<!-- Инстаграм конец -->


<!-- Банер получить каталог -->
<div class="mt-64">
    <?php get_template_part( 'includes/banners/take-catalog' ) ?>
</div>
<!-- Банер получить каталог конец -->


<!-- Медиа проекты -->
<div class="mt-32">
    <div class="container">
        <div class="title-h2">
            <?php _e('Медиа-проекты Mossebo', 'mossebo') ?>
        </div>
        <div class="h-sub mb-32">
            <?php _e('Еще больше о Mossebo и проектах найдешь тут ', 'mossebo') ?>
        </div>
    </div>
    <!-- Слайдер соц сетей -->
    <?php get_template_part( 'includes/social-slider' ) ?>
    <!-- Слайдер соц сетей конец -->
</div>
<!-- Медиа проекты конец -->



<!-- Карта -->
<div class="mt-64">
    <?php get_template_part( 'franshising/map' ) ?>
</div>
<!-- Карта конец -->



<!-- Форма - Подвал -->
<div class="mt-64">
    <?php get_template_part( 'interior-design/form-bottom' ) ?>
</div>
<!-- Форма - Подвал конец -->


<?php get_footer(); ?>
