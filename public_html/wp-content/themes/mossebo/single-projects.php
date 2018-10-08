<?php get_header(); ?>

<article class="single-project">
    <div class="container">
        <h1 class="title-h1"><?php the_title(); ?></h1>
        <div class="row">
            <div class="col-md-9">
                <div class="block-ui">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php the_post_thumbnail( 'full' ); ?>

                        <div class="single-project__status-bar">
                            <div class="single-project__date">
                                <?php get_the_date(); ?>
                            </div>
                            <div class="single-project__views">

                            </div>
                            <div class="single-project__comments">

                            </div>
                        </div>

                        <div class="content-text pd-40">
                            <?php the_content(); ?>
                        </div>

                    <?php endwhile;
                    else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
</article>


<?php get_footer(); ?>
