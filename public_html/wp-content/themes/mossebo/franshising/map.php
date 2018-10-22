<?php
// Формируем запрос на получение всех студий
$args = array(
    'post_type' => 'studios',
    'posts_per_page' => 9999,
);
// Делаем WP_Query
$query = new WP_Query($args);

$studios_id = 0;
$studios = [];

// Перебираем все студии
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        $map = json_decode(get_field('map'), true);

        $studios[$studios_id] = [
            'id'      => get_the_ID(),
            'country' => get_field('country'),
            'city'    => get_field('сity'),
            'adress'  => get_field('adress'),
            'phone'   => get_field('phone'),
            'lat'     => $map['marks'][0]['coords'][0],
            'lng'     => $map['marks'][0]['coords'][1]
        ];

        $studios_id++;
    }
} else {
    // Постов не найдено
}
/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
wp_reset_postdata();

?>

<div class="container">
    <h2 class="title-h2">
        <?php _e('Студии Mossebo работают по всему миру', 'mossebo') ?>
    </h2>
</div>
<studios-map
    :points="<?php echo htmlspecialchars(json_encode($studios, JSON_UNESCAPED_UNICODE)) ?>"
    text="Таким образом консультация с широким активом представляет собой интересный эксперимент проверки направлений прогрессивного развития."
>
    <div class="studio-map-plug"></div>
</studios-map>
