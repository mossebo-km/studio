<?php
/**
 * Template Name: Страница - Блог
 */

get_header();

// Формируем запрос на получение всех студий
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 9999,
    'orderby' => 'date',
    'order' => 'DESC'
);
// Делаем WP_Query
$query = new WP_Query($args);
?>

<div class="archive-blog">
    <div class="container">
        <?php
            get_template_part('includes/breadcrumbs');
        ?>
        <h1 class="title-h1"><?php the_title(); ?></h1>
        <div class="row">
            <div class="col-md-9">

                <?php
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <div class="mb-40">
                            <?php get_template_part('includes/blog-card'); ?>
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
            <div class="col-md-3">
                <div class="">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/tmp/project-single.png" alt="">
                </div>
                <div class="pt-40 pb-40">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/tmp/project-single.png" alt="">
                </div>
                <div class="">
                    <img src="<?php echo THEME_DIR; ?>/assets/images/tmp/project-single.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
