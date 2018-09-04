<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="blocks blocks-content">
        <div class="wrap">
            <h2><?php the_title(); ?></h2>
            <div class="content-text"><?php the_content(); ?></div>
        </div>
    </div>

<?php endwhile;
else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
