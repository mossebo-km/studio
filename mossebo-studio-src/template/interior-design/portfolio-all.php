<?php
// Формируем запрос на получение всех проектов
$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => 6,
    'orderby' => 'date',
    'order' => 'DESC'
);
// Делаем WP_Query
$query = new WP_Query($args);
?>
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
