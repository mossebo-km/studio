<?php
    function getBlogVideos() {
        return [
            [
                'title' => 'Женский бизнес. Платье за 1 млн. руб. Бизнес идеи для женин. Бизнесвумен 6+',
                'code' => 'gysv3y8ZoZk'
            ],
            [
                'title' => 'Нестандартный выпуск. Разговор по душам. Бизнес. Сотрудники. Франчайзинг. ICO 6+',
                'code' => 'HNH5SFCOugs'
            ],
            [
                'title' => 'Онлайн касса по 54 ФЗ – кто обязан купить?',
                'code' => 'LAQwIUbpXoY'
            ],
            [
                'title' => 'Инвестиции в новостройки. Обзор аппартаментов Docklands. Как выгодно купить квартиру. Бизнес аренда',
                'code' => 'E28SvHaDr9U'
            ],
            [
                'title' => 'Сайт за 1 рубль. В гостях у Nethouse. Бизнес на онлайн конструкторе сайтов. cms для сайта',
                'code' => 'hINksd7ynWo'
            ],
            [
                'title' => 'От свадебных платьев до IT бизнеса. Интервью с LPTracker. CRM для продаж. СРМ система 6+',
                'code' => 'wA9Hunx5jyw'
            ],
            [
                'title' => '3d принтер за 27 млн.руб. Альфа-Поток. Краудфандинг в России. Где взять деньги на бизнес',
                'code' => 'rysufC6Byiw'
            ]
        ];
    }
?>

<div class="container">
    <h2 class="title-h2">
        Видеоблог основателей компании Mossebo
    </h2>
</div>

<div class="videoblog-slider swiper-container js-blog-slider">
    <div class="swiper-wrapper">
        <?php foreach (getBlogVideos() as $video) : ?>
        <div class="swiper-slide">
            <a href="https://www.youtube.com/watch?v=<?= $video['code'] ?>" data-fancybox="gallery" class="videoblog-card">
                <div class="video-preview block-ui" style="background-image: url(//img.youtube.com/vi/<?= $video['code'] ?>/maxresdefault.jpg)"></div>

                <div class="videoblog-card__title">
                    <?= $video['title'] ?>
                </div>
            </a>
        </div>
        <?php endforeach ?>
    </div>
</div>
