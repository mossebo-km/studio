<div class="container">
    <h2 class="title-h2">
        <?php _e('Медиа-проекты Mossebo', 'mossebo') ?>
    </h2>

    <div class="h-sub">
        <?php _e('Обучение проходит в Санкт-Петербурге. Вы получите всю информацию в нужной форме и сможете запустить студию в работу', 'mossebo') ?>
    </div>
</div>

<div class="media-projects swiper-container js-mediaprojects-slider">
    <div class="swiper-wrapper">
        <?php  ?>
            <div class="swiper-slide">
                <a
                    href="https://www.youtube.com/watch?v=<?= $video['code'] ?>"
                    class="videoblog-card js-fancybox-true js-fancybox-clicker"
                    data-key="<?= $video['code'] ?>"
                >
                    <div class="image-preview block-ui"
                         style="background-image: url(//img.youtube.com/vi/<?= $video['code'] ?>/sddefault.jpg)"></div>

                    <div class="videoblog-card__title">
                    <span>
                        <?= $video['title'] ?>
                    </span>
                    </div>
                </a>
            </div>
        <?php  ?>
    </div>

    <div class="swiper-pagination js-mediaprojects-slider-pagination"></div>
</div>
