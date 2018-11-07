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
            <div class="header__flex">
                <div class="header__flex_item">
                    <a href="" class="header__flex_item--link burger">
                        <div class="burger__icon">
                            <span class="burger__icon-item"></span>
                            <span class="burger__icon-item"></span>
                            <span class="burger__icon-item"></span>
                        </div>
                    </a>
                </div>
                <div class="header__flex_item">
                    <a href="/" class="logo logo--header">
                        <svg class="symbol-logo symbol-logo--header">
                            <use xlink:href="<?= THEME_DIR ?>/assets/images/icons.svg#logo-header"></use>
                        </svg>
                    </a>
                </div>
                <div class="header__flex_item">
                    <a href="" class="header__flex_item--link projects">
                        <svg class="symbol-icon symbol-projects">
                            <use xlink:href="<?= THEME_DIR ?>/assets/images/icons.svg#symbol-projects"></use>
                        </svg>
                        Наши проекты
                    </a>
                </div>
                <div class="header__flex_item">
                    <a href="" class="header__flex_item--link location">
                        <svg class="symbol-icon symbol-location">
                            <use xlink:href="<?= THEME_DIR ?>/assets/images/icons.svg#symbol-location"></use>
                        </svg>
                        Санкт-Петербург
                    </a>
                </div>
                <div class="header__flex_item">
                    <div class="phone">
                        +7 (495) 000-00-00
                        <small>пн-пт с 10:00-19:00</small>
                    </div>
                </div>
                <div class="header__flex_item">
                    <div class="phone">
                        8 (800) 707-83-47
                        <small><?php _e('служба контроля качества', 'mossebo') ?></small>
                    </div>
                </div>
                <div class="header__flex_item">
                    <a href="" class="header__flex_item--link phone">
                        <svg class="symbol-icon symbol-phone">
                            <use xlink:href="<?= THEME_DIR ?>/assets/images/icons.svg#symbol-phone"></use>
                        </svg>
                    </a>
                    <a href="#popup-call" class="button button-primary button-long js-form-popup">
                        <?php _e('Заказать звонок', 'mossebo') ?>
                    </a>
                </div>
            </div>
        </div>

        <nav class="nav">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-10">
                        <?php wp_nav_menu(array('theme_location' => 'header_menu')); ?>
                    </div>
                    <div class="col-2">
                        <?php //do_action('wpml_add_language_selector'); ?>
                    </div>

                </div>
            </div>
        </nav>
    </header>
