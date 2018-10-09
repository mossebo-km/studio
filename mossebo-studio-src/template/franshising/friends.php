<?php
    function getFriends() {
        return [
            [
                'image' => THEME_DIR. "/assets/images/interior/squirtle__preview.jpg",
                'name' => 'Вячеслав Малафеев',
                'text' => 'Российский футболист, владелец агентства недвижимости "М16"',
            ],
            [
                'image' => THEME_DIR. "/assets/images/interior/pikachu__preview.jpg",
                'name' => 'Руслан Татунашвили',
                'text' => 'Основатель крупнейшего сервиса коллтрекинга Callbackhunter',
            ],
            [
                'image' => THEME_DIR. "/assets/images/interior/charmander__preview.jpg",
                'name' => 'Дмитрий Портнягин',
                'text' => 'Топ 1 бизнес-блогер в Youtube, создатель канала Трансформатор, основатель экспортно-импортной компании TRANSITplus',
            ],
            [
                'image' => THEME_DIR. "/assets/images/interior/bulbasaur__preview.jpg",
                'name' => 'Евгений Гаврилин',
                'text' => 'Сооснователь boomstarter.ru, MediaToday, и YouTube канала Жизнь Би',
            ],
            [
                'image' => THEME_DIR. "/assets/images/interior/squirtle__preview.jpg",
                'name' => 'Ольга Блудовская',
                'text' => 'Президент компании "Subway Россия"',
            ],
            [
                'image' => THEME_DIR. "/assets/images/interior/pikachu__preview.jpg",
                'name' => 'Сергей Полонский',
                'text' => 'Миллиардер с собственным стилем создания и развития бизнеса',
            ],
        ];
    }
?>

<div class="friends-list">
    <div class="container">
        <h2 class="title-h2">
            <?php _e('Наши друзья',  'mossebo') ?>
        </h2>

        <div class="friends-list__container">
            <mobile-slider
                js-class="js-slider-friends"
                breakpoint="md"
                class="row justify-content-center"
            >
                <?php foreach (getFriends() as $friend) : ?>
                    <div class="friends-list__item col-sm-6 col-lg-4">
                        <div class="friend-card block-ui">
                            <div
                                class="friend-card__image image-preview"
                                style="background-image: url(<?= $friend['image'] ?>)"
                            ></div>

                            <div class="friend-card__info">
                                <div class="friend-card__name">
                                    <?= $friend['name'] ?>
                                </div>

                                <div class="friend-card__text">
                                    <?= $friend['text'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </mobile-slider>
        </div>
    </div>
</div>

