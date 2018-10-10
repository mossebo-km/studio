<?php get_header(); ?>

файл шаблона проектов archive-project.php

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="blocks block-content">
        <div class="wrap">
            <h1><?php the_title(); ?></h1>

            <div class="content-text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endwhile;
else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
