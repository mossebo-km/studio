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
        $gallery__studios = get_field('gallery-studios',17);
        $gallery__negotiating = get_field('gallery-negotiating',17);
        $gallery__designers = get_field('gallery-designers',17);
        $gallery__reception = get_field('gallery-reception',17);

        $gallery__all = [];

        foreach($gallery__studios as $studio) {
            $gallery__all[] = [
                "place"   => "studio",
                "preview" => $studio['sizes']['thumbnail'],
                "src"     => $studio['url']
            ];
        }
        foreach($gallery__negotiating as $negotiating) {
            $gallery__all[] = [
                "place"   => "negotiating",
                "preview" => $negotiating['sizes']['thumbnail'],
                "src"     => $negotiating['url']
            ];
        }
        foreach($gallery__designers as $designers) {
            $gallery__all[] = [
                "place"   => "designers",
                "preview" => $designers['sizes']['thumbnail'],
                "src"     => $designers['url']
            ];
        }
        foreach($gallery__reception as $reception) {
            $gallery__all[] = [
                "place"   => "reception",
                "preview" => $reception['sizes']['thumbnail'],
                "src"     => $reception['url']
            ];
        }

        return toEscapedJson($gallery__all);
    }
?>

<div class="franchise-interiors-pano">
    <div class="container">
        <h2 class="title-h2">
            <?php _e('Оформление студий дизайна интерьера Mossebo', 'mossebo') ?>
        </h2>

        <div class="franchise-interiors-pano__text">
            <?php _e('Оснащение целиком приобретается в управляющей компании по методу «единого окна» с существенной экономией, в
        т.ч. на компьютерном оборудовании.', 'mossebo') ?>
        </div>
    </div>

    <interior-pano
        :tabs="<?= getInteriorTabs(); ?>"
        :images="<?= getInteriorImages(); ?>"
    ></interior-pano>

</div>
