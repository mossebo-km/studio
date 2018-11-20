<?php
$caterogys = wp_get_post_categories(get_the_ID());
?>



<article class="blog-cards block-ui">
    <a href="<?php echo get_permalink(); ?>" class="blog-cards__link">
        <div class="blog-cards__image"
             style="background-image: url(<?php the_post_thumbnail_url('large', get_the_ID()); ?>);"
        >
            <div class="date pd-16">
                <?php echo get_the_date('j F Y', get_the_ID()); ?>
            </div>
            <div class="title-h4 pd-16">
                <?php the_title(); ?>
            </div>
        </div>
    </a>
</article>
