<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wow_db');

/** Имя пользователя MySQL */
define('DB_USER', 'wow_user');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'weQBcVnqaCuHeyUa');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BL:j;UUurWQS~yRBQH6dESmHdU0D<ZX[Bw%3Eagio([#SxSV~ji/!9fUGo6,e0k ');
define('SECURE_AUTH_KEY',  '|=wfZiEu;lHVV}5-3etwg`k/gZL)iQ!`O?PJ1R%E5aEU3-q[<sQ_O{-jk><a.Dwh');
define('LOGGED_IN_KEY',    ':mo~|):eo95,uir8jU+o.VB;N]0;M!s@iRrc=|+FrhQVw3xtTeh|c-63%-p9L51m');
define('NONCE_KEY',        '#Au2j7.Qoq#PuSE4-6#x*T2!WVK&4 }{`jh2^,v=|]A-hFpZ=6,lN$*S219&+h%^');
define('AUTH_SALT',        'rE?Vg$bI<-Kf#,.M1t0-Tc<9?BHf}U;bED+%-QO&r|`0zAXIO6efr::c+M]]DHq7');
define('SECURE_AUTH_SALT', 'g=l[>u.Hjy<`fY&9_2c3,*|(uFx0;OGz@b05+,-h:#|1^!xmQ>&3 u1K6&h|;!-M');
define('LOGGED_IN_SALT',   '+Tz?o8P//f>JgTd39gUZW]Xah<$m_#+KX{Q1==Wa %Y<#7hz<dO_.v5}&c>53Eh#');
define('NONCE_SALT',       '7M<J&{d_4bm+r7i^=lq- s?yOI|OModCzpHvN#TugM,-SA;_Y1j[uAa!OyiFamn]');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
