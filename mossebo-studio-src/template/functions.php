<?php


define('SITE_TITLE', get_bloginfo('name'));
define('SITE_DESCRIPTION', get_bloginfo('description'));
define('SITE_CHARSET', get_bloginfo('charset'));
define('SITE_URL', get_bloginfo('url'));
define('THEME_DIR', get_template_directory_uri());

if ($_SERVER["SCRIPT_NAME"] == THEME_DIR . "functions.php") {
    die();
}

function theme_files()
{
    // JQuery
    wp_deregister_script('jquery');
    // JQuery-migrate
    wp_deregister_script('jquery-migrate');
}
add_action('wp_enqueue_scripts', 'theme_files');

// Поддержка миниатюр
add_theme_support('post-thumbnails');
//add_image_size( '220_220', 220, 220, array( 'center', 'center' ) );
//add_image_size( 'photo-otziv', 120, 120, array( 'center', 'center' ) );


// This theme uses wp_nav_menu() in two locations.
add_action('after_setup_theme', function () {
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
        'footer_menu_market' => 'Footer Menu Market'
    ));
});

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
    return preg_replace('~^[^:]+: ~', '', $title );
});

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



if (! function_exists('mix')) {
    /**
     * Get the path to a versioned Mix file.
     *
     * @param string $path
     * @param string $manifestDirectory
     * @return string
     *
     * @throws \Exception
     */
    function mix($path, $manifestDirectory = 'wp-content/themes/mossebo')
    {
        static $manifest;
        $publicFolder = '';
        $rootPath = $_SERVER['DOCUMENT_ROOT'];
        $publicPath = $rootPath . $publicFolder;
        if ($manifestDirectory && strpos($manifestDirectory, '/') !== 0) {
            $manifestDirectory = "/{$manifestDirectory}";
        }
        if (! $manifest) {
            if (! file_exists($manifestPath = ($rootPath . $manifestDirectory.'/mix-manifest.json') )) {
                //echo $manifestPath;
                throw new Exception('The Mix manifest does not exist.');
            }
            $manifest = json_decode(file_get_contents($manifestPath), true);
        }
        if (strpos($path, '/') !== 0) {
            $path = "/{$path}";
        }
        $path = $publicFolder . $path;
        if (! array_key_exists($path, $manifest)) {
            throw new Exception(
                "Unable to locate Mix file: {$path}. Please check your ".
                'webpack.mix.js output paths and try again.'
            );
        }
        return file_exists($publicPath . ($manifestDirectory.'/hot'))
            ? "http://localhost:8080{$manifest[$path]}"
            : $manifestDirectory.$manifest[$path];
    }
}


// ACF options page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}



if (! function_exists('toEscapedJson')) {
    function toEscapedJson($data)
    {
        return htmlspecialchars(
            json_encode($data, JSON_UNESCAPED_UNICODE)
        );
    }
}

if (! function_exists('_get_field')) {
    function _get_field($key)
    {
        //return '#';
        return get_field($key, 2722);
    }
}

if (! function_exists('_the_field')) {
    function _the_field($key)
    {
        echo _get_field($key);
    }
}


/*
 * Обработка форм
 */

if (! function_exists('sendAjaxErrorResponse')) {
    function sendAjaxErrorResponse($message)
    {
        wp_send_json([
            'status' => 'error',
            'message' => $message
        ]);
    }
}

if (! function_exists('handleAjaxForm')) {
    function handleAjaxForm()
    {
        $action = sanitize_text_field($_POST['action']);

        if (! check_ajax_referer($action . '_nonce', false, false)) {
            sendAjaxErrorResponse(
                __('Техническая ошибка! Пожалуйста обновите страницу и попробуйте снова.')
            );
        }

        switch ($action) {
            case 'FRANCHISE_FORM':
                handleAmoForm('/thanks-franchise');
                break;

            case 'DESIGN_INTERIOR_FORM':
                handleAmoForm('/thanks');
                break;

            case 'SUBSCRIBE_FORM':
                handleSubscribe();
                break;

            default:
                break;
        }
    }
}

if (! function_exists('handleAmoForm')) {
    function handleAmoForm($redirectTo)
    {
        require_once __DIR__ . '/includes/amo-form.php';

        try {
            $amoForm = new AmoForm($_POST);
            $amoForm->send();
        } catch (Exception $e) {
            //                sendAjaxErrorResponse();
        }

        wp_send_json([
            'status' => 'success',
            'redirect' => $redirectTo
        ], 200);
    }
}

if (! function_exists('handleSubscribe')) {
    function handleSubscribe()
    {
        require_once __DIR__ . '/includes/mossebo-api.php';

        $request = new MosseboServicesRequest();

        $type = sanitize_text_field($_POST['type']);

        $request->put('subscribe', [
            'email' => sanitize_text_field($_POST['email']),
            'type'  => $type,
        ]);

        $result = $request->send();

        $response = [
            'status' => 'success',
            'message' => __('Спасибо! Чувствуйте себя хорошо, пожалуйста!')
        ];

        // файл-портфолио
        if ($type === 'studio-styles') {
            $response['file'] = home_url('/wp-content/uploads/2017/04/BRj8BH9KB10.zip');
        }

        wp_send_json($response, 200);
    }
}

if (wp_doing_ajax()) {
    add_action('wp_ajax_FRANCHISE_FORM', 'handleAjaxForm');
    add_action('wp_ajax_nopriv_FRANCHISE_FORM', 'handleAjaxForm');

    add_action('wp_ajax_DESIGN_INTERIOR_FORM', 'handleAjaxForm');
    add_action('wp_ajax_nopriv_DESIGN_INTERIOR_FORM', 'handleAjaxForm');

    add_action('wp_ajax_SUBSCRIBE_FORM', 'handleAjaxForm');
    add_action('wp_ajax_nopriv_SUBSCRIBE_FORM', 'handleAjaxForm');
}

if (! function_exists('currentUrl')) {
    function currentUrl()
    {
        global $wp;
        return home_url( $wp->request );
    }
}

