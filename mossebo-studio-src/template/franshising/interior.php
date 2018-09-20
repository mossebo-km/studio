<?php
    function getInteriorTabs()
    {
        $interiorTabs = [
            'studio' => __('Студия'),
            'negotiating' => __('Переговорная'),
            'designers' => __('Зона дизайнеров'),
            'reception' => __('Ресепшн'),
        ];

        return toEscapedJson($interiorTabs);
    }

    function getInteriorImages()
    {
        $interiorImages = [
            [
                "place"   => "studio",
                "preview" => THEME_DIR . "/assets/images/interior/bulbasaur__preview.jpg",
                "src"     => THEME_DIR . "/assets/images/interior/bulbasaur.jpg"
            ],
            [
                "place"   => "negotiating",
                "preview" => THEME_DIR . "/assets/images/interior/charmander__preview.jpg",
                "src"     => THEME_DIR . "/assets/images/interior/charmander.jpg"
            ],
            [
                "place"   => "designers",
                "preview" => THEME_DIR . "/assets/images/interior/pikachu__preview.jpg",
                "src"     => THEME_DIR . "/assets/images/interior/pikachu.jpg"
            ],
            [
                "place"   => "reception",
                "preview" => THEME_DIR . "/assets/images/interior/squirtle__preview.jpg",
                "src"     => THEME_DIR . "/assets/images/interior/squirtle.jpg"
            ]
        ];

        return toEscapedJson($interiorImages);
    }
?>

<div class="container">
    <h2 class="title-h2">
        <?php _e('Оформление студий дизайна интерьера Mossebo', 'mossebo') ?>
    </h2>

    <p>
        <?php _e('Оснащение целиком приобретается в управляющей компании по методу «единого окна» с существенной экономией, в
        т.ч. на компьютерном оборудовании.', 'mossebo') ?>
    </p>
</div>

<interior-pano
    :tabs="<?= getInteriorTabs(); ?>"
    :images="<?= getInteriorImages(); ?>"
></interior-pano>
