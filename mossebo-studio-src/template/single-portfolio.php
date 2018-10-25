<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php
    $count = (int)get_field('flat_views');
    $count++;
    update_field('flat_views', $count);
    ?>

    <article class="single-project">
        <div class="container">
            <?php
            get_template_part('includes/breadcrumbs');
            ?>
            <h1 class="title-h1"><?php the_title(); ?></h1>
            <div class="row">
                <div class="col-md-9">
                    <div class="block-ui">

                        <?php the_post_thumbnail('full'); ?>

                        <div class="single-project__status-bar pd-40">
                            <svg class="symbol-icon">
                                <use
                                    xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-calendar"></use>
                            </svg>
                            <div class="single-project__date">
                                <?php echo get_the_date('j F Y', get_the_ID()); ?>
                            </div>
                            <svg class="symbol-icon">
                                <use xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-views"></use>
                            </svg>
                            <div class="single-project__views">
                                <?php the_field('flat_views'); ?>
                            </div>
                            <svg class="symbol-icon">
                                <use
                                    xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-comments"></use>
                            </svg>
                            <div class="single-project__comments">
                                <?php comments_number(); ?>
                            </div>
                        </div>

                        <div class="single-project__params pl-40 pr-40 pb-40">
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <svg class="symbol-icon">
                                        <use
                                            xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-location"></use>
                                    </svg>
                                    <div class="single-project__params-title">
                                        <?php _e('Город', 'mossebo') ?>
                                    </div>
                                    <div class="single-project__params-value">
                                        <?php the_field('flat_place'); ?>
                                    </div>

                                </div>
                                <div class="col-6 col-md-4">
                                    <svg class="symbol-icon">
                                        <use
                                            xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-flat_rooms"></use>
                                    </svg>
                                    <div class="single-project__params-title">
                                        <?php _e('Количество комнат', 'mossebo') ?>
                                    </div>
                                    <div class="single-project__params-value">
                                        <?php the_field('flat_rooms'); ?>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <svg class="symbol-icon">
                                        <use
                                            xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-flat_area"></use>
                                    </svg>
                                    <div class="single-project__params-title">
                                        <?php _e('Общая площадь', 'mossebo') ?>
                                    </div>
                                    <div class="single-project__params-value">
                                        <?php the_field('flat_area'); ?>
                                        <?php _e('м²', 'mossebo') ?>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <svg class="symbol-icon">
                                        <use
                                            xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-flat_type"></use>
                                    </svg>
                                    <div class="single-project__params-title">
                                        <?php _e('Тип помещения', 'mossebo') ?>
                                    </div>
                                    <div class="single-project__params-value">
                                        <?php the_field('flat_type'); ?>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <svg class="symbol-icon">
                                        <use
                                            xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-flat_height"></use>
                                    </svg>
                                    <div class="single-project__params-title">
                                        <?php _e('Высота потолков', 'mossebo') ?>
                                    </div>
                                    <div class="single-project__params-value">
                                        <?php the_field('flat_height'); ?>
                                        <?php _e('м', 'mossebo') ?>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <svg class="symbol-icon">
                                        <use
                                            xlink:href="<?php echo THEME_DIR; ?>/assets/images/icons.svg#symbol-flat_style"></use>
                                    </svg>
                                    <div class="single-project__params-title">
                                        <?php _e('Стиль интерьера', 'mossebo') ?>
                                    </div>
                                    <div class="single-project__params-value">
                                        <?php the_field('flat_style'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content-text pd-40">
                            <?php the_content(); ?>
                        </div>

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
    </article>

<?php endwhile;
else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
