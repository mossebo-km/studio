<div class="interior-design-blog">
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
