<?php get_header(); ?>



    <div class="blocks blocks-arhive">
        <div class="wrap">
            <h2><?php wp_title(); ?></h2>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post-item flex">


                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( '320_240' ); ?>
                    </a>
                    <div class="post-content">
                        <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                        <div class="content-text">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn-form">Подробнее...</a>
                    </div>


                </div>
            <?php endwhile;
            else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
    </div>


<?php get_footer(); ?>