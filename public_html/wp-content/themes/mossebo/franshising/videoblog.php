<?php
    function getBlogVideos()
    {
        return [
            [
                'title' => __('Женский бизнес. Платье за 1 млн. руб. Бизнес идеи для женин. Бизнесвумен 6+', 'mossebo'),
                'code' => 'gysv3y8ZoZk'
            ],
            [
                'title' => __('Нестандартный выпуск. Разговор по душам. Бизнес. Сотрудники. Франчайзинг. ICO 6+', 'mossebo'),
                'code' => 'HNH5SFCOugs'
            ],
            [
                'title' => __('Онлайн касса по 54 ФЗ – кто обязан купить?', 'mossebo'),
                'code' => 'LAQwIUbpXoY'
            ],
            [
                'title' => __('Инвестиции в новостройки. Обзор аппартаментов Docklands. Как выгодно купить квартиру. Бизнес аренда', 'mossebo'),
                'code' => 'E28SvHaDr9U'
            ],
            [
                'title' => __('Сайт за 1 рубль. В гостях у Nethouse. Бизнес на онлайн конструкторе сайтов. cms для сайта', 'mossebo'),
                'code' => 'hINksd7ynWo'
            ],
            [
                'title' => __('От свадебных платьев до IT бизнеса. Интервью с LPTracker. CRM для продаж. СРМ система 6+', 'mossebo'),
                'code' => 'wA9Hunx5jyw'
            ],
            [
                'title' => __('3d принтер за 27 млн.руб. Альфа-Поток. Краудфандинг в России. Где взять деньги на бизнес', 'mossebo'),
                'code' => 'rysufC6Byiw'
            ]
        ];
    }
?>

<div class="container">
    <h2 class="title-h2">
        <?php _e('Видеоблог основателей компании Mossebo', 'mossebo') ?>
    </h2>
</div>

<div class="videoblog-slider swiper-container js-videoblog-slider">
    <div class="swiper-wrapper">
        <?php foreach (getBlogVideos() as $video) : ?>
        <div class="swiper-slide">
            <a
                href="https://www.youtube.com/watch?v=<?= $video['code'] ?>"
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
