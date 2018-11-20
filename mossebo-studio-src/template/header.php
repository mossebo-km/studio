<!DOCTYPE html>
<html>
<head>

    <?php get_template_part('includes/meta'); ?>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!-- APP -->
<div id="app">

    <header class="header">
        <div class="container">
            <div class="header-flex">
                <a href="javascript:void(0);" class="header--nav-icon burger">
                    <div class="burger__icon">
                        <span class="burger__icon-item"></span>
                        <span class="burger__icon-item"></span>
                        <span class="burger__icon-item"></span>
                    </div>
                </a>

                <a href="/" class="logo logo--header">
                    <svg class="symbol-logo symbol-logo--header">
                        <use xlink:href="<?= THEME_DIR ?>/assets/images/icons.svg#logo-header"></use>
                    </svg>
                </a>

                <div class="projects__layout">
                    <a href="javascript:void(0);" class="projects js-ht">
                        <svg class="symbol-icon symbol-projects">
                            <use xlink:href="<?= THEME_DIR ?>/assets/images/icons.svg#symbol-projects"></use>
                        </svg>
                        Наши проекты
                    </a>
                    <div class="ht-container ht-container--popup ht-container--projects">
                        <div class="ht-inner block-ui">
                            <div class="mossebo-projects">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="https://mossebo.market" target="_self"
                                           rel="nofollow noreferrer noopener" class="mossebo-project-link">
                                            <div class="mossebo-project-link__image image-preview image-preview--1-1"
                                                 style="background-image: url(https://mossebo.market/assets/images/projects/market.png);"></div>
                                            <div class="mossebo-project-link__name">
                                                <span class="mossebo-project-link__link">
                                                    Маркет
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mossebo-project-link is-active">
                                            <div class="mossebo-project-link__image image-preview image-preview--1-1"
                                                 style="background-image: url(https://mossebo.market/assets/images/projects/studio.png);"></div>
                                            <div class="mossebo-project-link__name">
                                                <span class="mossebo-project-link__link">
                                                    Студия
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="https://www.youtube.com/channel/UCmoIMunKnQwi0ui_G9W0Wmw"
                                           target="_blank" rel="nofollow noreferrer noopener"
                                           class="mossebo-project-link">
                                            <div class="mossebo-project-link__image image-preview image-preview--1-1"
                                                 style="background-image: url(https://mossebo.market/assets/images/projects/haip.png);"></div>
                                            <div class="mossebo-project-link__name">
                                                <span class="mossebo-project-link__link">
                                                    Хайповый бизнес
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="https://www.youtube.com/channel/UClJbFjwrAKSggogdIuHEHBg"
                                           target="_blank" rel="nofollow noreferrer noopener"
                                           class="mossebo-project-link">
                                            <div class="mossebo-project-link__image image-preview image-preview--1-1"
                                                 style="background-image: url(https://mossebo.market/assets/images/projects/travel.png);"></div>
                                            <div class="mossebo-project-link__name">
                                                <span class="mossebo-project-link__link">
                                                    Хайповый Travel
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="https://www.youtube.com/channel/UCX4d_WGl2y04iATm6DtXAWg"
                                           target="_blank" rel="nofollow noreferrer noopener"
                                           class="mossebo-project-link">
                                            <div class="mossebo-project-link__image image-preview image-preview--1-1"
                                                 style="background-image: url(https://mossebo.market/assets/images/projects/top_top.png);"></div>
                                            <div class="mossebo-project-link__name">
                                                <span class="mossebo-project-link__link">
                                                    TOP&nbsp;TOP
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="https://www.youtube.com/channel/UCmYjYyeZDuFb9hOgEUNYJuQ"
                                           target="_blank" rel="nofollow noreferrer noopener"
                                           class="mossebo-project-link">
                                            <div class="mossebo-project-link__image image-preview image-preview--1-1"
                                                 style="background-image: url(https://mossebo.market/assets/images/projects/dizainy.png);"></div>
                                            <div class="mossebo-project-link__name">
                                                <span class="mossebo-project-link__link">
                                                    ДизайНю
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="https://www.youtube.com/channel/UCdAe9MxWKjvU_jGGkU-Ke_Q"
                                           target="_blank" rel="nofollow noreferrer noopener"
                                           class="mossebo-project-link">
                                            <div class="mossebo-project-link__image image-preview image-preview--1-1"
                                                 style="background-image: url(https://mossebo.market/assets/images/projects/lost.png);"></div>
                                            <div class="mossebo-project-link__name">
                                                <span class="mossebo-project-link__link">
                                                    Потерянные
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="javascript:void(0);" class="header--nav-icon location">
                    <svg class="symbol-icon symbol-location">
                        <use xlink:href="<?= THEME_DIR ?>/assets/images/icons.svg#symbol-location"></use>
                    </svg>
                    <span class="location__text">
                        Санкт-Петербург
                    </span>
                </a>

                <div class="phone">
                    +7 (495) 000-00-00
                    <small>пн-пт с 10:00-19:00</small>
                </div>

                <div class="phone">
                    8 (800) 707-83-47
                    <small><?php _e('служба контроля качества', 'mossebo') ?></small>
                </div>

                <a href="javascript:void(0);" class="header--nav-icon callback">
                    <svg class="symbol-icon symbol-phone">
                        <use xlink:href="<?= THEME_DIR ?>/assets/images/icons.svg#symbol-phone"></use>
                    </svg>
                </a>

                <a href="#popup-call" class="button button-primary button-long js-form-popup">
                    <?php _e('Заказать звонок', 'mossebo') ?>
                </a>

            </div>
        </div>

        <nav class="nav">
            <div class="container">
                <div class="row align-items-center">
                    <a href="/portfolio/" class="portfolio-nav">
                        <div class="burger__icon">
                            <span class="burger__icon-item"></span>
                            <span class="burger__icon-item"></span>
                            <span class="burger__icon-item"></span>
                        </div>
                        Портфолио
                    </a>
                    <div class="col-8 pl-8">
                        <?php wp_nav_menu(array('theme_location' => 'header_menu')); ?>
                    </div>
                    <div class="col-2">
                        <?php //do_action('wpml_add_language_selector'); ?>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    <div class="header-fixed"></div>

