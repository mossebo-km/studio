<div class="franchise-head form-row">

    <div class="container">
        <div class="form-row__content">
            <div class="form-row__left">
                <h1 class="franchise-head__title title-h1">
                    <?php the_field('header-title'); ?>
                </h1>

                <div class="franchise-head__text">
                    <?php the_field('header-subtitle'); ?>
                </div>

                <div class="franchise-head__video">
                    <youtube-video
                        video-id="<?php the_field('youtube-code'); ?>"
                    ></youtube-video>
                </div>
            </div>

            <div class="form-row__right">
                <div class="franchise-head__form">
                    <?php get_template_part( 'franshising/franchise-form' ) ?>
                </div>
            </div>
        </div>
    </div>

</div>
