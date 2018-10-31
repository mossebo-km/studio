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

if (! function_exists('toEscapedJson')) {
    function toEscapedJson($data)
    {
        return htmlspecialchars(
            json_encode($data, JSON_UNESCAPED_UNICODE)
        );
    }
}

function FRANCHISE_HEAD_FORM_processing_function(){
    check_ajax_referer('FRANCHISE_HEAD_FORM_nonce');

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    if (empty($first_name) || empty($last_name)) {
        echo json_encode([
            'success' => 0,
            'message' => 'Вы не указали имя или фамилию.'
        ]);

        wp_die();
    }

    echo json_encode([
        'success' => 1,
        'message' => 'Все окей.'
    ]);

    wp_die();
}

//если вы хотите принимать запрос только от авторизованных пользователей, тогда добавьте этот хук
add_action('wp_ajax_FRANCHISE_HEAD_FORM', 'FRANCHISE_HEAD_FORM_processing_function');
//если вы хотите получить запрос от неавторизованных пользователей, тогда добавьте этот хук
add_action('wp_ajax_nopriv_FRANCHISE_HEAD_FORM', 'FRANCHISE_HEAD_FORM_processing_function');
//Если хотите, чтобы оба вариант работали, тогда оставьте оба хука
