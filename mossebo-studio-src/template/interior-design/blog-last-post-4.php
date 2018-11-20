<div class="interior-design-blog">
    <?php
    // Формируем запрос на получение последней записи 1 шт
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'offset' => 0,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    // Делаем WP_Query
    $query = new WP_Query($args);
    ?>
    <div class="container">
        <div class="row">
        <?php
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post(); ?>
                    <div class="col-md-6">
                        <?php get_template_part('includes/blog-card'); ?>
                    </div>
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
