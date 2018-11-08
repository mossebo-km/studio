<?php get_header();

$caterogys = wp_get_post_categories(get_the_ID());
?>

<div class="archive-blog">
    <div class="container">
        <?php
        get_template_part('includes/breadcrumbs');
        ?>
        <h1 class="title-h1"><?php the_title(); ?></h1>
        <div class="row">
            <div class="col-md-9">

                <div class="mb-40">
                    <article class="blog-card block-ui">
                        <a href="<?php echo get_permalink(); ?>"
                           class="blog-card__link">
                            <div class="blog-card__image"
                                 style="background-image: url(<?php the_post_thumbnail_url('large', get_the_ID()); ?>);">
                                <div class="blog-card__bage mb-16 ml-16">
                                    <div class="blog-card__date">
                                        <svg class="symbol-icon">
                                            <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-calendar"></use>
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

                        <div class="content-text excerpt-text pl-16 pr-16 pt-16">
                            <?php the_content(); ?>
                        </div>

                    </article>
                </div>

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
