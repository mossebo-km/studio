<?php
$caterogys = wp_get_post_categories(get_the_ID());
?>


<article class="blog-card block-ui mb-40">
    <a href="<?php echo get_permalink(); ?>"
       class="blog-card__link">
        <div class="blog-card__image"
             style="background-image: url(<?php the_post_thumbnail_url('large', get_the_ID()); ?>);">
            <div class="blog-card__bage mb-16 ml-16">
                <div class="blog-card__date">
                    <svg class="symbol-icon">
                        <use
                            xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-calendar"></use>
                    </svg>
                    <?php echo get_the_date('j F Y', get_the_ID()); ?>
                </div>
            </div>
            <div class="blog-card__categorys">
                <?php
                foreach ($caterogys as $caterogy) {
                    ?>
                    <div class="blog-card__bage blog-card__<?php echo $caterogy; ?>">
                        <?php echo get_the_category_by_ID($caterogy); ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </a>

    <a href="<?php echo get_permalink(); ?>"
       class="blog-card__link">
        <div class="title-h4 pd-16">
            <?php the_title(); ?>
        </div>
    </a>

    <div class="content-text excerpt-text pl-16 pr-16 pt-16">
        <?php the_excerpt(); ?>
    </div>

    <div class="blog-card__status-bar pd-16">
        <svg class="symbol-icon">
            <use
                xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-views"></use>
        </svg>
        <div class="blog-card__views">
            <?php the_field('post_views'); ?>
        </div>
        <svg class="symbol-icon">
            <use
                xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-comments"></use>
        </svg>
        <div class="blog-card__comments">
            <?php comments_number(); ?>
        </div>
    </div>

</article>
