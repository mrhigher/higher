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
define('DB_NAME', 'u61_is0aa');

/** Имя пользователя MySQL */
define('DB_USER', 'u61_is0aa');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'XW67Xn16');

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
define('AUTH_KEY',         '+U#;h]=lUO1^25tVZ uTuGaU#,p5>>FPBg!mS?z}F_uN+#AXNMKSgnx<>%B[U=J]');
define('SECURE_AUTH_KEY',  '(fs_Mb]C{yE~~z#i3-%TB|~0-$a573D*Tqt0`?|%PIyB[9=>WMUK]F]yf3x&xZ_^');
define('LOGGED_IN_KEY',    'a%E%DL8+GHCBD>4rD>];d|%kpc.k~gW-Y|:,(lr<5iC-S~N[S}}+)s&rYyps@o#y');
define('NONCE_KEY',        ' 8:[mwTl.P6(?Nmy`s[ar?g|-/DtCWhs9W)Ai1qC4}6x9z5B+FdRB0-]3G%]9^<K');
define('AUTH_SALT',        '):s(rRP|K;(+OMSFxt;BZY&s2Vj))K+tb3-OzOk-7;vYls0d8Hb$V2$xSCY<$y+O');
define('SECURE_AUTH_SALT', ']U~lk1mK,Dg;Em#NCt`4BE(STdm27YCqO9(+dzQ`,m6XP-vgB+!_g3+X(){fQboc');
define('LOGGED_IN_SALT',   'IPj=@X?}-6K*Kr6>ZvohlKubIN]Emeq?HY|$M%O>|nw=Bkr2bH| &C7Sk|+Wh@NT');
define('NONCE_SALT',       'l8T;Sy(jyi28+,Cpy-Jt$DH/K+yT7vbg0Y+!u(~3zTY+O,0,Pb{aYb7=:b@p}%L%');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wa_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

define('WP_MEMORY_LIMIT', '240M');
define('WP_MAX_MEMORY_LIMIT', '240M');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
