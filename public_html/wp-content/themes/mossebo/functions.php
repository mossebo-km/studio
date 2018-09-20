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
        'footer_menu' => 'Footer Menu'
    ));
});


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
