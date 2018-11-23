<?php
    $videoblog_videos = [];
    if( have_rows('videoblog') ):
        while ( have_rows('videoblog') ) : the_row();
            $videoblog_videos[] = [
                'title' => get_sub_field('title'),
                'code' => get_sub_field('youtube')
            ];
        endwhile;
    else:
    endif;
?>

<div class="container">
    <h2 class="title-h2">
        <?php _e('Видеоблог основателей компании Mossebo', 'mossebo') ?>
    </h2>
</div>

<div class="videoblog-slider swiper-container js-videoblog-slider">
    <div class="swiper-wrapper">
        <?php foreach ($videoblog_videos as $video) : ?>
        <div class="swiper-slide">
            <a
                href="https://www.youtube.com/embed/<?= $video['code'] ?>?controls=0"
                class="videoblog-card js-fancybox-true js-fancybox-clicker"
                data-key="<?= $video['code'] ?>"
            >
                <div class="image-preview block-ui" style="background-image: url(//img.youtube.com/vi/<?= $video['code'] ?>/sddefault.jpg)"></div>

                <div class="videoblog-card__title">
                    <span>
                        <?= $video['title'] ?>
                    </span>
                </div>
            </a>
        </div>
        <?php endforeach ?>
    </div>

    <div class="swiper-pagination js-videoblog-slider-pagination"></div>
</div>
