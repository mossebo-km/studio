<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="container">
        <div class="row">
            <h1 class=""><?php the_title(); ?></h1>

            <div class="editor-text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

<?php endwhile;
else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
