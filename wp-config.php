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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v!K1.0Q,zDbsE9y7(VTS#x9!I1uonL6jGg]8-O{PSEojSBu^@Gq5dEYDHoW[E$8C' );
define( 'SECURE_AUTH_KEY',  'Y%`SN&oMw8,pQeE|D+ZZicU=s`o.jSfms%WEF;Xdf=Zl|51L#?HDvvjN{D@bps?|' );
define( 'LOGGED_IN_KEY',    'NxY^R59HnaI7(V81QPE3*oP4]Vy2frxmHFhZWV.U/u&wZ~Ja:hB7xpZn+WWdSU@&' );
define( 'NONCE_KEY',        'UqfoX*975sw#Xb@7;s5U:L_Oegh)TUb:D;nF%{V0qkb|F^E[!9Fmv)[Qx,QT0<cB' );
define( 'AUTH_SALT',        ']=-7DP&~$HW{ne<5g?Ss*b$T_kloA^c-sVl6A%B%=Fh~y6,wKB//!8%Fios+KIkJ' );
define( 'SECURE_AUTH_SALT', ' mHYF&{#8?]%fA?^MU*S-JC62`z>3k|Cg=WckO ?.ijbs$^r+;VZwcv$AJ>j#3AB' );
define( 'LOGGED_IN_SALT',   '1V-Lxk?07cuiJ7l8h=r9y>ttYei21m],fYte$Sqw+~[W:[6@Eu=6aBMk#< %v+`z' );
define( 'NONCE_SALT',       'G?QI[xQsIvug]Za.=fc?J)^I:s*y_j7kr06B]#]fps,O{fI@?L%^ 7M(Nld.rDDL' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wpt_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
