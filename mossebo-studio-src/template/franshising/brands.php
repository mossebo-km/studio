<?php
    function getMedia()
    {
        return [
            [
                'src' => THEME_DIR . '/assets/images/brands/rbk.png',
                'srcset' => THEME_DIR . '/assets/images/brands/rbk@2x.png',
                'name' => 'RBK',
                'link' => '#'
            ],
            [
                'src' => THEME_DIR . '/assets/images/brands/forbes.png',
                'srcset' => THEME_DIR . '/assets/images/brands/forbes@2x.png',
                'name' => 'Forbes',
                'link' => '#'
            ],
            [
                'src' => THEME_DIR . '/assets/images/brands/best.png',
                'srcset' => THEME_DIR . '/assets/images/brands/best@2x.png',
                'name' => 'Лучшая компания России',
                'link' => '#'
            ],
            [
                'src' => THEME_DIR . '/assets/images/brands/transformator.png',
                'srcset' => THEME_DIR . '/assets/images/brands/transformator@2x.png',
                'name' => 'Трансформатор',
                'link' => '#'
            ],
            [
                'src' => THEME_DIR . '/assets/images/brands/tnt.png',
                'srcset' => THEME_DIR . '/assets/images/brands/tnt@2x.png',
                'name' => 'ТНТ',
                'link' => '#'
            ],
            [
                'src' => THEME_DIR . '/assets/images/brands/kapitalist.png',
                'srcset' => THEME_DIR . '/assets/images/brands/kapitalist@2x.png',
                'name' => 'Капиталист',
                'link' => '#'
            ],
            [
                'src' => THEME_DIR . '/assets/images/brands/houzz.png',
                'srcset' => THEME_DIR . '/assets/images/brands/houzz@2x.png',
                'name' => 'Houzz',
                'link' => '#'
            ],
            [
                'src' => THEME_DIR . '/assets/images/brands/novate.png',
                'srcset' => THEME_DIR . '/assets/images/brands/novate@2x.png',
                'name' => 'Novate',
                'link' => '#'
            ],
            [
                'src' => THEME_DIR . '/assets/images/brands/myhome.png',
                'srcset' => THEME_DIR . '/assets/images/brands/myhome@2x.png',
                'name' => 'My home',
                'link' => '#'
            ],
            [
                'src' => THEME_DIR . '/assets/images/brands/ekspert.png',
                'srcset' => THEME_DIR . '/assets/images/brands/ekspert@2x.png',
                'name' => 'Эксперт',
                'link' => '#'
            ],
            [
                'src' => THEME_DIR . '/assets/images/brands/haip.png',
                'srcset' => THEME_DIR . '/assets/images/brands/haip@2x.png',
                'name' => 'Хайповый бизнес',
                'link' => '#'
            ],
        ];
    }
?>

<div class="container">
    <div class="brands">
        <div class="brands__row row row--half">
            <?php foreach (getMedia() as $media) : ?>
            <div class="col-auto">
                <img
                    src="<?= $media['src'] ?>"
                    srcset="<?= $media['srcset'] ?> 2x"
                    alt="<?= $media['name'] ?>"
                    class="brand-image"
                >
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
