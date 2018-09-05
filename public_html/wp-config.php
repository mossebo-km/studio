<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'mossebo_studio');

/** Имя пользователя MySQL */
define('DB_USER', 'homestead');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'secret');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&qF:IFl#=3d&RX?/b^s2=,AywUM=FgCwVlX)Q1QJI2RPldes[4S5w!1%Yji/p~+z');
define('SECURE_AUTH_KEY',  'k,t:Gf8Q91+O[ULmNre3DVyEQc`(8r4lbq0AV<u*p=GJiP0F?a3QAb-x;^E94F50');
define('LOGGED_IN_KEY',    ')gfXkNfw}}-Ez9[_,:u:Y(v3pv[zsUU70y`CzsX|{(EE=]D;@e:5Pi*[%2.d=FvY');
define('NONCE_KEY',        'H$g}R>*[@Wt+p{g|:LNQ^m`$f1DU_p<?/Pud5J9EI,|ZJfY/XT]|8w.;?9^!X^{8');
define('AUTH_SALT',        'f Apgk9R=9t,ZpQY4]8tqO=AwBWu4DmP1m Z0>Yo7h}M5Zz29<g.N0BB>E2.@t?q');
define('SECURE_AUTH_SALT', ')Tt!>F+N,El7o[g#Shm%ts!h40K{LL:[t5,*9kW~GX;BNi4Xk*,8A*CUJGTV6d@l');
define('LOGGED_IN_SALT',   '8,IC0A5r&P!3|E2kPqS:!0N2hLL=tE=kza5{)paxlDKfk1gJmu`K9YmcnBc6>y}O');
define('NONCE_SALT',       '`3!/w$r?69b 4T;<]#RTh.Wh8,5}5e/f039$;vd;Vr3g2.9*sK3r2kGMSZ#`t8<X');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
