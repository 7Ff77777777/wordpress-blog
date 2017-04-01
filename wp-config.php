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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',z]wPg%ebKVU*/,:<Cs`WxgxP6q<|u}UNT5s>M@cbNH5TGf#3tKe)/3mp/L&M/PI');
define('SECURE_AUTH_KEY',  '5dm(@>dg:&tzyr(Aav>H]8E0V`IJPjfN!G`$i}&UGU<10.V*cwv<6xS< ncOPY~4');
define('LOGGED_IN_KEY',    'Od(Ah3amOC2hc}gqkC6] j_ZJqM,cyux$*iP`UbNo:#xt_Ed0l!@*7Tih@gnB@&^');
define('NONCE_KEY',        'Q46.q<:DPH)fpbdmYF)G%vFW!zV,`Lt(]nEYSkg$1J7>i{nApbe1yz:8~Q;~{EE~');
define('AUTH_SALT',        'BHmfePFXX$V-wslb(/%=Rp;|wCm&Pnk-G1N[#`t@-ID3}892t=!`Z~hTc|Th{BXS');
define('SECURE_AUTH_SALT', 'KKV9jUwe@X?~h8lr.A~0dMB.Kw`57zstnDaan@0#6H-~: oN85gBphXti@C@*v=$');
define('LOGGED_IN_SALT',   'JP/T8B4Cc4-m5B(ue*qY=1IJDq{67X(mI.(#vMSyge-wi@Nj{4-}&i{YMh.j9{4j');
define('NONCE_SALT',       's9q~LJ.(<Wd^-<M?QA~]%$<+}+lSUM>K^+&CC{f@F[EmnMha$ !Gf5wC}8{m+]e-');

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
