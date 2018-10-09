<?php

/**
 * Получает данные о студиях по api
 * Затем кэширует и отдает
 *
 * @return array|bool|mixed
 */
function getMapData()
{
    $cacheKey = implode('::', [
        'franchisee-map-points',
        apply_filters('wpml_current_language', NULL)
    ]);

    $mapData = wp_cache_get($cacheKey, 'franchisee');

    if (! $mapData) {
        $request = new WP_REST_Request('GET', '/wp/v2/studios');
        $request->set_query_params(['per_page' => 100]);

        $requestResult = rest_do_request($request);

        if ($requestResult->is_error()) {
            $mapData = [];
        }
        else {
            $data = $requestResult->get_data();

            $mapData = array_reduce($data, function($acc, $item) {
                if ($item['acf']['show_on']) {
                    $map = json_decode($item['acf']['map'], true);

                    $acc[] = [
                        'id'      => $item['id'],
                        'country' => $item['acf']['country'],
                        'city'    => $item['acf']['сity'],
                        'adress'  => $item['acf']['adress'],
                        'phone'   => $item['acf']['phone'],
                        'lat'     => $map['center_lat'],
                        'lng'     => $map['center_lng']
                    ];
                }

                return $acc;
            }, []);

            wp_cache_set($cacheKey, $mapData, 'franchisee', 30 * 60);
        }
    }

    return $mapData;
}
?>

<div class="container">
    <h2 class="title-h2">
        <?php _e('Студии Mossebo работают по всему миру', 'mossebo') ?>
    </h2>
</div>

<studios-map
    :points="<?php echo htmlspecialchars(json_encode(getMapData(), JSON_UNESCAPED_UNICODE)) ?>"
    text="Таким образом консультация с широким активом представляет собой интересный эксперимент проверки направлений прогрессивного развития."
>
    <div class="studio-map-plug"></div>
</studios-map>
