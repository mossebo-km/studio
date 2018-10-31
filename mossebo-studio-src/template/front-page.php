<?php get_header(); ?>
<?php
// Формируем запрос на получение всех студий
$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order' => 'DESC'
);
// Делаем WP_Query
$query = new WP_Query($args);
?>
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
        <div class="archives-project">
            <div class="row">
                <?php
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post(); ?>

                        <div class="col-md-6">
                            <div class="archives-project__item">
                                <article class="block-ui mb-40">
                                    <a href="<?php echo get_permalink(); ?>"
                                       class="archives-project__image"
                                       style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>);">
                                    </a>
                                    <div class="archives-project__hover pt-16 pb-16">
                                        <a href="<?php echo get_permalink(); ?>"
                                           class="title-h4 pl-16 pr-16 pb-16">
                                            <?php the_title(); ?>
                                        </a>

                                        <a href="<?php echo get_permalink(); ?>"
                                           class="content-text excerpt-text pl-16 pr-16">
                                            <?php the_excerpt(); ?>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <?php
                    }
                } else {
                    // Постов не найдено
                }
                /* Возвращаем оригинальные данные поста. Сбрасываем $post. */
                wp_reset_postdata();
                ?>

            </div>
        </div>
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


<div class="interior-design-blog mt-64">
    <?php
    // Формируем запрос на получение последней записи 1 шт
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'offset' => 0,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    // Делаем WP_Query
    $query = new WP_Query($args);

    // Формируем запрос на получение последней записи 1 шт
    $args1 = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'offset' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    // Делаем WP_Query
    $query1 = new WP_Query($args1);
    ?>
    <div class="container">
        <div class="title-h2">
            <?php _e('Блог', 'mossebo') ?>
        </div>
        <div class="title-sub mb-32">
            <?php _e('Авторские статьи от дизайнеров Mossebo', 'mossebo') ?>
        </div>
        <div class="row">
            <div class="col-6">
                <?php
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();

                        get_template_part('includes/blog-card');
                    }
                } else {
                    // Постов не найдено
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="col-6">
                <div class="interior-design-blog--flexcolumn">
                    <?php
                    if ($query1->have_posts()) {
                        while ($query1->have_posts()) {
                            $query1->the_post();
                            ?>

                            <a href="<?php echo get_permalink(); ?>"
                               class="interior-design-blog__small">
                                <div class="block-ui">
                                    <div class="interior-design-blog__small--image"
                                         style="background-image: url(<?php the_post_thumbnail_url('large', get_the_ID()); ?>);">

                                        <div class="interior-design-blog__small--text">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <?php
                        }
                    } else {
                        // Постов не найдено
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Инстаграм -->
<div class="mt-64">
    <?php get_template_part( 'includes/instagram-last-8' ) ?>
</div>
<!-- Инстаграм конец -->

<!-- Медиа проекты -->
<div class="mt-64">
    <?php get_template_part( 'franshising/media-projects' ) ?>
</div>
<!-- Медиа проекты конец -->

<!-- Карта -->
<div class="mt-64">
    <?php get_template_part( 'franshising/map' ) ?>
</div>
<!-- Карта конец -->


<?php get_footer(); ?>
