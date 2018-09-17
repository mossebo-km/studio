<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo mix('assets/css/app.css') ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!-- APP -->
<div id="app">

    <div class="container">
        <header>
            <div class="row">
                <div class="flex flex-align-mid">
                    <a href="/" class="logo"></a>
                    <div class="phone">
                        +7 (495) 000-00-00
                        <small>пн-пт с 10:00-19:00</small>
                    </div>
                </div>
            </div>
        </header>
    </div>


    <div class="container">
        <div class="row">
            <?php wp_nav_menu(array('theme_location' => 'header_menu', 'container_class' => 'header-nav')); ?>
        </div>
    </div>
