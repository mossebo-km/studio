<div class="audience-socials-slider__slider swiper-container js-socials-slider">
    <div class="swiper-wrapper">
        <?php
        if (have_rows('media-projects')):
            while (have_rows('media-projects')) : the_row();
        ?>
                <div class="swiper-slide">
                    <a
                        href="<?php the_sub_field('link'); ?>"
                        class="social-slider-card block-ui block-ui--with-hover"
                        rel="nofollow noreferrer noopener"
                        target="_blank"
                    >
                        <img class="social-slider-card__image"
                             src="<?php the_sub_field('image'); ?>"
                             alt="<?php the_sub_field('title'); ?>">
                    </a>
                </div>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </div>
</div>
