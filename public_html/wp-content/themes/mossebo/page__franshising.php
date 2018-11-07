<?php
/**
 * Template Name: Страница - Франчайзинг
 */

get_header();

?>

<main>
    <?php get_template_part( 'franshising/franchise-head' ) ?>

    <!-- Брэнды -->
    <div class="mt-40">
        <?php get_template_part( 'franshising/brands' ) ?>
    </div>
    <!-- Брэнды конец -->

    <!-- Почему мы? -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/why_we' ) ?>
    </div>
    <!-- Почему мы? конец -->

    <!-- Карта -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/map' ) ?>
    </div>
    <!-- Карта конец -->

    <!-- Оформление студий -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/interior' ) ?>
    </div>
    <!-- Оформление студий конец -->

    <!-- Блог основателей -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/videoblog' ) ?>
    </div>
    <!-- Блог основателей конец -->

    <!-- Получите план прибыли -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/franchise-plan' ) ?>
    </div>
    <!-- Получите план прибыли конец -->

    <!-- Франшиза №1 -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/franchise-top' ) ?>
    </div>
    <!-- Франшиза №1 конец -->

    <!-- Риски франшизы -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/franchise-risks' ) ?>
    </div>
    <!-- Риски франшизы конец -->

    <!-- Прибыль с франшизы -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/franchise-profit' ) ?>
    </div>
    <!-- Прибыль с франшизы конец -->

    <!-- Портфолио -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/franchise-portfolio' ) ?>
    </div>
    <!-- Портфолио конец -->

    <!-- Единый фирменный стиль -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/single-style' ) ?>
    </div>
    <!-- Единый фирменный стиль конец -->

    <!-- О маркете -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/market' ) ?>
    </div>
    <!-- О маркете конец -->

    <!-- Независимость от сезонности -->
    <div class="mt-80">
        <?php get_template_part( 'franshising/seasonality-chart' ) ?>
    </div>
    <!-- Независимость от сезонности конец -->

    <!-- Стоимость получения франшизы -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/franchise-pricing' ) ?>
    </div>
    <!-- Стоимость получения франшизы конец -->

    <!-- Скачать презентацию -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/franchise-presentation' ) ?>
    </div>
    <!-- Скачать презентацию конец -->

    <!-- Требования к франчайзи -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/franchise-requirements' ) ?>
    </div>
    <!-- Требования к франчайзи конец -->

    <!-- Обучение франчайзи -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/franchise-training' ) ?>
    </div>
    <!-- Обучение франчайзи конец -->

    <!-- Аудитория социальных сетей -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/audience-socials-slider' ) ?>
    </div>
    <!-- Аудитория социальных сетей конец -->

    <!-- Друзья -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/friends' ) ?>
    </div>
    <!-- Друзья конец -->

    <!-- Сми о нас -->
    <div class="mt-64">
        <div class="container">
            <h2 class="title-h2">
                <?php _e('Mossebo в медиа и СМИ', 'mossebo') ?>
            </h2>
        </div>
        <?php get_template_part( 'franshising/media-about-us' ) ?>
    </div>
    <!-- Сми о нас конец -->

    <!-- График охвата аудитории -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/audience-coverage-chart' ) ?>
    </div>
    <!-- График охвата аудитории конец -->

    <!-- Важное о компании -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/company-important-info' ) ?>
    </div>
    <!-- Важное о компании конец -->

    <!-- Откройте франшизу Mossebo уже сейчас -->
    <div class="mt-64">
        <?php get_template_part( 'franshising/franchise-open' ) ?>
    </div>
    <!-- Откройте франшизу Mossebo уже сейчас конец -->

</main>

<?php get_footer(); ?>



