<?php

$args = array(
    'post_type' => 'studios',
    'posts_per_page' => 9999,
);

$query = new WP_Query( $args );

// Цикл
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();

        echo '<li>' . get_the_title() . '</li>';


    }
} else {
    // Постов не найдено
    echo 'Постов не найдено';
}
/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
wp_reset_postdata();

?>

<div class="container">
    <h2 class="title-h2">
        <?php _e('Студии Mossebo работают по всему миру', 'mossebo') ?>
    </h2>
</div>

<div class="studios-map">
    <div class="studios-map__map">
        <div class="studios-map-plug">

        </div>
    </div>

    <div class="studios-map__locations">
        <div class="container">
            <div class="studio-cities block-ui">
                <div class="studio-cities__container row">

                    <div class="studio-cities__left col-lg-6">
                        <div class="studio-cities__block">
                            <span class="studio-cities__country"><?php _e('Россия', 'mossebo') ?></span>
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Москва', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Санкт-Петербург', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Ростов-на-Дону', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Краснодар', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Казань', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Сочи', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Волгоград', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Тюмень', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Самара', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Уссурийск', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Оренбург', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Тула', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Уфа', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Пенза', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Иркутск', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Магнитогорск', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Рязань', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Якутск', 'mossebo') ?></span>
                        </div>
                    </div>

                    <div class="studio-cities__center col-lg-3">
                        <div class="studio-cities__block">
                            <span class="studio-cities__country"><?php _e('Белорусь', 'mossebo') ?></span>
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Минск', 'mossebo') ?></span>
                        </div>

                        <div class="studio-cities__block">
                            <span class="studio-cities__country"><?php _e('Узбекистан', 'mossebo') ?></span>
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Ташкент', 'mossebo') ?></span>
                        </div>
                    </div>

                    <div class="studio-cities__right col-lg-3">
                        <div class="studio-cities__block">
                            <span class="studio-cities__country"><?php _e('Казахстан', 'mossebo') ?></span>
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Астана', 'mossebo') ?></span>,
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Алма-Ата', 'mossebo') ?></span>
                        </div>

                        <div class="studio-cities__block">
                            <span class="studio-cities__country"><?php _e('Латвия', 'mossebo') ?></span>
                            <span class="link link--dashed studio-cities__link js-studio-cities-link"><?php _e('Рига', 'mossebo') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
