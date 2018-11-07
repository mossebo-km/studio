<div class="container">
    <h2 class="title-h2">
        <a class="instagram-title-link" href="<?php _the_field('instagram-mossebo') ?>" target="_blank" rel="nofollow noreferrer noopener">
            <img
                src="<?= THEME_DIR ?>/assets/images/icons/socials/instagram.png"
                srcset="<?= THEME_DIR ?>/assets/images/icons/socials/instagram@2x.png 2x"
                alt="@mossebo.official"
            >

            @mossebo.official
        </a>
    </h2>

    <div class="thanks-franchise-another-random-text">
        <?php _e('Лучшие проекты Mossebo сначала выходят в нашем Instagram. Найди идеи для интерьера вместе с 300 000 наших подписчиков!') ?>
    </div>

    <u-block-instagram
        profile="mossebo.official"
        :count="8"
    ></u-block-instagram>

    <div class="watch-all-btn-wrap">
        <a href="https://www.instagram.com/mossebo.official/"
           class="watch-all-btn"
           target="_blank"
           rel="nofollow noreferrer noopener"
        >
                <span class="watch-all-btn__label">
                    Смотреть все
                </span>

            <span class="watch-all-btn__icon-box">
                    <svg class="watch-all-btn__icon">
                        <use xlink:href="<?= THEME_DIR ?>/assets/images/icons.svg#symbol-arrow-forward"></use>
                    </svg>
                </span>
        </a>
    </div>
</div>
