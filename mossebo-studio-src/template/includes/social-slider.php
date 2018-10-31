<?php
function getSocials() {
    return [
        [
            'link' => 'https://www.instagram.com/loft_like/',
            'image' => THEME_DIR . '/assets/images/socials/1.jpg',
            'title' => 'Loft like',
        ],
        [
            'link' => 'https://www.youtube.com/channel/UCX4d_WGl2y04iATm6DtXAWg',
            'image' => THEME_DIR . '/assets/images/socials/2.jpg',
            'title' => 'TOP TOP \ ИДЕИ ДЛЯ БИЗНЕСА',
        ],
        [
            'link' => 'https://www.instagram.com/mossebo.official/',
            'image' => THEME_DIR . '/assets/images/socials/4.jpg',
            'title' => 'Mossebo official',
        ],
        [
            'link' => 'https://www.youtube.com/channel/UCmoIMunKnQwi0ui_G9W0Wmw',
            'image' => THEME_DIR . '/assets/images/socials/5.jpg',
            'title' => 'Хайповый Бизнеc.Travel',
        ],
        [
            'link' => 'https://www.instagram.com/scandi_like/',
            'image' => THEME_DIR . '/assets/images/socials/7.jpg',
            'title' => 'Scandi like',
        ],
        [
            'link' => 'https://www.youtube.com/channel/UCmYjYyeZDuFb9hOgEUNYJuQ',
            'image' => THEME_DIR . '/assets/images/socials/8.jpg',
            'title' => 'ДизайНю',
        ],
        [
            'link' => 'https://vk.com/design_mossebo',
            'image' => THEME_DIR . '/assets/images/socials/9.jpg',
            'title' => 'Mossebo | Дизайн интерьера',
        ]
    ];
}
?>


<div class="audience-socials-slider__slider swiper-container js-socials-slider">
    <div class="swiper-wrapper">
        <?php foreach (getSocials() as $social) : ?>

            <div class="swiper-slide">
                <a
                    href="<?= $social['link'] ?>"
                    class="social-slider-card block-ui block-ui--with-hover"
                    rel="nofollow noreferrer noopener"
                    target="_blank"
                >
                    <img class="social-slider-card__image" src="<?= $social['image'] ?>" alt="<?= htmlspecialchars($social['title']) ?>">
                </a>
            </div>

        <?php endforeach ?>
    </div>
</div>
