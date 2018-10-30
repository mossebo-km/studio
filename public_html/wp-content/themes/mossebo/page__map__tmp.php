<?php
/**
 * Template Name: Страница - Карта студий
 */

?>

<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(); ?></title>

<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="format-detection" content="telephone=no">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&amp;subset=cyrillic-ext" rel="stylesheet">
<link rel="stylesheet" href="<?php echo mix('assets/css/app.css') ?>">

<?php wp_head(); ?>

<div id="app">
    <!-- Карта -->
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

    <studios-map
        :points="<?php echo htmlspecialchars(json_encode($studios, JSON_UNESCAPED_UNICODE)) ?>"
        text="Таким образом консультация с широким активом представляет собой интересный эксперимент проверки направлений прогрессивного развития."
    >
        <div class="studio-map-plug"></div>
    </studios-map>

    <!-- Карта конец -->
</div>

    <script src="<?php echo mix('assets/js/manifest.js') ?>" defer></script>
    <script src="<?php echo mix('assets/js/vendor.js') ?>" defer></script>
    <script src="<?php echo mix('assets/js/app.js') ?>" defer></script>


<?php wp_footer(); ?>
