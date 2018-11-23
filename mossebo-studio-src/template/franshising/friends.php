<?php
$mossebo_frends = [];
if( have_rows('mossebo-friends') ):
    while ( have_rows('mossebo-friends') ) : the_row();
        $mossebo_frends[] = [
            'image' => get_sub_field('photo'),
            'name' => get_sub_field('name'),
            'text' => get_sub_field('text')
        ];
    endwhile;
else:
endif;
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
                <?php foreach ($mossebo_frends as $friend) : ?>
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

