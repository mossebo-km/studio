<?php get_header(); ?>
<div class="page-default">
    <div class="container">
        <?php
        get_template_part('includes/breadcrumbs');
        ?>
        <h1 class="title-h1"><?php the_title(); ?></h1>
        <div class="row">
            <div class="col-md-9">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="mb-40 block-ui pd-40">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile;
                else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>

            </div>
            <div class="col-md-3">
                <?php get_sidebar('right'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
