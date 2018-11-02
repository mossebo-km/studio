<?php get_header(); ?>

<div class="landing-header">
    <div class="landing-header__image"
         style="background-image: url(https://pp.userapi.com/c848636/v848636859/a4efc/Oy6iIzIa8CU.jpg);"
    ></div>
    <div class="landing-header__layout">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="landing-header__title">
                        Дизайн интерьера в Cанкт-Петербурге
                    </div>
                    <div class="landing-header__subtitle">
                        Создаем дизайн квартир и коммерческих помещений
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="interior-design-features pt-32 pb-64">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="block-ui">
                    <div class="interior-design-features__image"
                         style="background-image: url(https://pp.userapi.com/c848636/v848636859/a4efc/Oy6iIzIa8CU.jpg);"
                    ></div>
                    <div class="interior-design-features__title">
                        <?php _e('Бесплатный авторский надзор', 'mossebo') ?>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="block-ui">
                    <div class="interior-design-features__image"
                         style="background-image: url(https://pp.userapi.com/c848636/v848636859/a4efc/Oy6iIzIa8CU.jpg);"
                    ></div>
                    <div class="interior-design-features__title">
                        <?php _e('Дизайн интерера за один месяц', 'mossebo') ?>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="block-ui">
                    <div class="interior-design-features__image"
                         style="background-image: url(https://pp.userapi.com/c848636/v848636859/a4efc/Oy6iIzIa8CU.jpg);"
                    ></div>
                    <div class="interior-design-features__title">
                        <?php _e('Эксклюзивные материалы, мебель', 'mossebo') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="interior-design-portfolio">
    <div class="container">
        <div class="title-h2">
            <?php _e('Портфолио', 'mossebo') ?>
        </div>
        <div class="title-sub mb-32">
            <?php _e('Наши проекты в 32 стилях интерьера', 'mossebo') ?>
        </div>

        <?php get_template_part( 'interior-design/portfolio-all' ) ?>

    </div>
</div>



<div class="interior-design-stats">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="block-ui stat-1">
                    <strong>932</strong> реализованных проекта
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="block-ui stat-2">
                            <strong>40</strong> студий
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="block-ui stat-3">
                            в <strong>7</strong> странах
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="block-ui stat-4">
                    <strong>13264</strong> визуализаций
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Сми о нас -->
<div class="mt-64">
    <?php get_template_part( 'franshising/media-about-us' ) ?>
</div>
<!-- Сми о нас конец -->



<!-- Блог последние 4 статьи -->
<div class="mt-64">
    <div class="container">
        <div class="title-h2">
            <?php _e('Блог', 'mossebo') ?>
        </div>
        <div class="title-sub mb-32">
            <?php _e('Авторские статьи от дизайнеров Mossebo', 'mossebo') ?>
        </div>
    </div>
    <?php get_template_part( 'interior-design/blog-last-post-4' ) ?>
</div>
<!-- Блог последние 4 статьи конец -->


<!-- Инстаграм -->
<div class="mt-64">
    <?php get_template_part( 'includes/instagram-last-8' ) ?>
</div>
<!-- Инстаграм конец -->



<!-- Медиа проекты -->
<div class="mt-32">
    <div class="container">
        <div class="title-h2 mb-0"><?php _e('Медиа-проекты Mossebo', 'mossebo') ?></div>
        <div class="title-sub"><?php _e('Еще больше о Mossebo и проектах найдешь тут ', 'mossebo') ?></div>
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
