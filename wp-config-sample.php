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
define('DB_NAME', 'database_name_here');

/** Имя пользователя MySQL */
define('DB_USER', 'username_here');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'password_here');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '&1LmN[jX/oG+>Q/$4{Zfgq&pDI^dm-e/1wq)1_`=GfV<)b*IaG-4E-|1bn1/.wpC');
define('SECURE_AUTH_KEY',  ')jV:,{[-,.J}$`wY/$]oRov<+9A|dfeY#Ztsafz/LrM?|fDb/cK]nxYx+p~r`N0W');
define('LOGGED_IN_KEY',    '1+<#FNG<cg+3Na-+2qoE$kmgEqReP_nvucE#&.?R|M%h0]^~a|^FXHJI<kS?B9NX');
define('NONCE_KEY',        'lFSpgU(H/_Llty/,GVDJ!Nt-v9V~ql%G%R@&oWRfTt[G99z+nE54l|sQWAdfU) i');
define('AUTH_SALT',        '`>xtB+x{xJVP+#,dw .8,J5+{JeJELKv4+1}EsX/g6B1@)gsc]W}z{(j1v:(<XLg');
define('SECURE_AUTH_SALT', 'ZJga_d9-3f^,Q-s;rUWF7v0ViZCoEh5BA|s2^TN*n!A^xcU(/.MN|+0:WUTLMA]2');
define('LOGGED_IN_SALT',   'yBQxU4_||~-C8~1[]py4U_-FHC%|78alVMv64(|_HZwH(&z#OXW_wFl2Qf0EFa(p');
define('NONCE_SALT',       'Qs<ZnUSHC{HZDSh$|=>^8C4Bpjd;K|(uIgM1j@^D7XZ,s ij|/P/z~sCZ-NT(wv.');

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
