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
define('DB_NAME', 'dbdef');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '}>LxmyFhO#9Gi%/SSdlz7-x|C0Demmwu39cEg{$fetvc(euCQ-H0XA|jPlenP5PX');
define('SECURE_AUTH_KEY',  'XXYQG4-N5k^8Ctr}5P5Gcci(G0i{gx:&B^.yxO#o`,w7q]|g5t`Kk;?J?fGy*Eg_');
define('LOGGED_IN_KEY',    '.lzkEJC~7@Lgpo0jGP3S@D9rdug)4[pz<5ZSoWdh`$NmrQIxW7wu:Z<Rjz|fQ7n[');
define('NONCE_KEY',        'Xlq*Pb2ZIA#66snIG_=k&=~zquy-Cf|i$K{]77HSY/zur<)6y&-97CX[U-W.OMMA');
define('AUTH_SALT',        'c.c;A)B9FsTS GQ%Z)(-(dP#b@v.Rlue+M&VaXfX]CIif1YnX-yh?LJ1R]V%$IF%');
define('SECURE_AUTH_SALT', '_!b[LI8>>w#[N+exs;%IYW1$}-n#}ue}iaA!ZVY77FUt-DL1`[<ks38*R1aZr^U.');
define('LOGGED_IN_SALT',   ')11I*:*e<O{_=)(onW&4?b4I CpLQH?5NTv*%Kpa;[nIqb1)~iUga/}WPdd9W>0%');
define('NONCE_SALT',       'O-qoRmr!OqB2zU;1FskHP?,=PDkxx>6H]@ir|Vy.-nDZs$x=t|:[U8x3Uyz W4Y9');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */

// Если сайт работает по протоколу https:
// define('FORCE_SSL_ADMIN', true);
// if (isset($_SERVER['HTTP_X_FORWARDED_PROTO'])&&$_SERVER['HTTP_X_FORWARDED_PROTO']==https)
// $_SERVER['HTTPS']='on';

$prefix = str_replace( array( 'www.', '-', '.' ), '', $_SERVER['HTTP_HOST'] );
$table_prefix = $prefix . '_';
// $table_prefix  = 'forwp_';

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

define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
// Для поддоменов - true, для подкаталогов - false
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'forwp');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');