<?php get_header(); ?>
<div class="archives-project">
    <div class="container">
        <?php
        get_template_part('includes/breadcrumbs');
        ?>
        <h1 class="title-h1"><?php the_archive_title(); ?></h1>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

                    <?php endwhile;
                    else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
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
