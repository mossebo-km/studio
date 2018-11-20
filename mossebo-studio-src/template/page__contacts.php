<?php
/**
 * Template Name: Страница - Контакты
 */

get_header();

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

<div class="landing-header"
     style="background-image: url(<?= THEME_DIR ?>/assets/images/contacts/office-central.png);"
>
    <div class="landing-header__layout">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-7">
                    <div class="title-h1 landing-header__title">
                        Свяжитесь<br>
                        с нами
                    </div>
                    <div class="landing-header__subtitle">
                        Все адреса и контакты студий Mossebo
                    </div>
                </div>
                <div class="col-lg-5">
                    <form-standart class="form-standart"
                                   form-action="<?php echo admin_url('admin-ajax.php'); ?>"
                                   form-hidden-ajax-nonce="<?php echo wp_create_nonce( 'DESIGN_INTERIOR_nonce' ); ?>"
                                   form-hidden-name-action="DESIGN_INTERIOR"
                                   form-hidden-page-url="<?= currentUrl() ?>"
                                   form-title="Запишитесь на встречу в Mossebo"
                                   form-subtitle="в офисе в г. Санкт-Петербург"
                                   form-input-name="<?php _e('Ваше имя', 'mossebo') ?>"
                                   form-input-phone="<?php _e('Ваш телефон', 'mossebo') ?>"
                                   :form-email="false"
                                   form-button-text="Отправить заявку"
                                   :privacy-policy="true"
                                   privacy-policy-text="<?php _e('Согласен на обработку персональных данных и принимаю', 'mossebo') ?>"
                                   privacy-policy-link="/privacy-policy"
                                   privacy-policy-link-text="политику конфиденциальности"
                    >
                    </form-standart>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="mt-64">
    <div class="contacts-central">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contacts-central__left block-ui">
                        <div class="title-h4">Управляющий офис по России и СНГ</div>
                        <div class="contacts-central__link">
                            г. Санкт-Петербург
                        </div>
                        <div class="contacts-central__text">
                            Обводного канала наб, дом 118а, литера Х, БЦ "Малевич"
                            <br><br>
                            8 (800) 707-83-47
                            <br><br>
                            +7 (812) 612-48-19
                        </div>
                        <div class="contacts-central__office-image"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contacts-central__right block-ui">
                        <div class="title-h4">Пишите на наш E-mail</div>
                        <div class="row">
                            <?php
                            if( have_rows('email-list') ): ?>
                                <?php while ( have_rows('email-list') ) : the_row(); ?>

                                    <div class="col-md-6">
                                        <a href="mailto:<?php the_sub_field('email'); ?>"
                                           class="contacts-central__mail">
                                            <?php the_sub_field('email'); ?>
                                        </a>
                                        <div class="contacts-central__text">
                                            <?php the_sub_field('name'); ?>
                                        </div>
                                    </div>

                                <?php
                                endwhile;
                            else :
                                // no rows found
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Карта -->
<div class="mt-64">
    <?php get_template_part( 'franshising/map' ) ?>
</div>
<!-- Карта конец -->


<div class="mt-64">
    <div class="container">
        <div class="title-h2">
            Студии в России и СНГ
        </div>

        <studios-cards class="studios-cards"
                       :studios="<?php echo htmlspecialchars(json_encode($studios, JSON_UNESCAPED_UNICODE)) ?>"
        >
        </studios-cards>
    </div>
</div>

<?php

$contacts__form_bottom = get_field('contact-gallery');

if (! function_exists('getContactFormBottomImages')) {
    function getContactFormBottomImages($gallery)
    {
        return [
            [
                "preview"   => $gallery[0]['sizes']['thumbnail'],
                "src"       => $gallery[0]['url'],
                "itemClass" => 'col-xl-6'
            ],
            [
                "preview"   => $gallery[1]['sizes']['thumbnail'],
                "src"       => $gallery[1]['url'],
                "itemClass" => 'col-lg-4 col-xl-6'
            ],
            [
                "preview"   => $gallery[2]['sizes']['thumbnail'],
                "src"       => $gallery[2]['url'],
                "itemClass" => 'd-md-none d-lg-block col-lg-4 col-xl-6'
            ],
            [
                "preview"   => $gallery[3]['sizes']['thumbnail'],
                "src"       => $gallery[3]['url'],
                "itemClass" => 'd-md-none d-lg-block col-lg-4 col-xl-6'
            ]
        ];
    }
}

?>

<div class="mt-64">
    <div class="container">
        <div class="contacts__form-bottom form-row">
            <h2 class="title-h2">
                <?php _e('Узнайте больше информации в нашем офисе', 'mossebo'); ?>
            </h2>

            <p>
                <?php //_e('Откройте франшизу Mossebo уже сейчас', 'mossebo'); ?>
            </p>

            <div class="form-row__content">
                <div class="form-row__left">
                    <div class="contacts__form-bottom__images">
                        <mobile-slider
                            js-class="js-slider-open"
                            breakpoint="md"
                            class="row"
                        >
                            <?php foreach (getContactFormBottomImages($contacts__form_bottom) as $image): ?>
                                <div class="contacts__form-bottom__image <?= $image['itemClass'] ?>">
                                    <a
                                        href="<?= $image['src'] ?>"
                                        class="image-preview image-preview--4-3 block-ui block-ui--with-hover"
                                        style="background-image: url(<?= $image['preview'] ?>);"
                                        data-fancybox="franchise-open-gallery"
                                    ></a>
                                </div>
                            <?php endforeach ?>
                        </mobile-slider>
                    </div>
                </div>

                <div class="form-row__right">
                    <form-standart class="form-standart"
                                   form-action="<?php echo admin_url('admin-ajax.php'); ?>"
                                   form-hidden-ajax-nonce="<?php echo wp_create_nonce( 'DESIGN_INTERIOR_nonce' ); ?>"
                                   form-hidden-name-action="DESIGN_INTERIOR"
                                   form-hidden-page-url="<?= currentUrl() ?>"
                                   form-title="Запишитесь на встречу в Mossebo"
                                   form-subtitle="в офисе в г. Санкт-Петербург"
                                   form-input-name="<?php _e('Ваше имя', 'mossebo') ?>"
                                   form-input-phone="<?php _e('Ваш телефон', 'mossebo') ?>"
                                   :form-email="false"
                                   form-button-text="Отправить заявку"
                                   :privacy-policy="true"
                                   privacy-policy-text="<?php _e('Согласен на обработку персональных данных и принимаю', 'mossebo') ?>"
                                   privacy-policy-link="/privacy-policy"
                                   privacy-policy-link-text="политику конфиденциальности"
                    >
                    </form-standart>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
