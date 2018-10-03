<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo mix('assets/css/app.css') ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!-- APP -->
<div id="app">

    <header class="header">
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-3">
                        <a href="/" class="logo">
                            <svg class="symbol-logo symbol-logo--header">
                                <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#logo-header"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-2">
                        <div class="location">
                            Санкт-Петербург
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="phone">
                            +7 (495) 000-00-00
                            <small>пн-пт с 10:00-19:00</small>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-2"></div>
                </div>
        </div>


        <div class="container">
            <div class="row">
                <?php wp_nav_menu(array('theme_location' => 'header_menu', 'container_class' => 'header-nav')); ?>
            </div>
        </div>
    </header>
