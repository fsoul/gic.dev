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
define('DB_NAME', 'jgjghjgh_gis');

/** Имя пользователя MySQL */
define('DB_USER', 'jgjghjgh_gis');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '5qd65vyg');

/** Имя сервера MySQL */
define('DB_HOST', 'jgjghjgh.mysql.ukraine.com.ua');

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
define('AUTH_KEY',         'iAKw_{VmS&5a+3RCgR/WfMqcA)-M}00stgjF.:Oo-$>%-pOrdT0nP[j]$36-^?Mw');
define('SECURE_AUTH_KEY',  'V!sV#y.Y!!BQZY0z,+H 17?$`w@F}mII/(w7d(,?b]8X;,g|W%b{p?n#S0<^nVZt');
define('LOGGED_IN_KEY',    'j{r>N#Jy@qOwi@9GusHsY+I]a}-*#s^+DzUrDqv]+UTDmN9t-rZR`2i;s|lO#-A0');
define('NONCE_KEY',        '&]ywpYuHC`ft`!&*/I,8Z*)<@[F4,cx5-P]?$SvS9*B 0NIOV+yxDJjoq=)cGpwz');
define('AUTH_SALT',        'cZ:.s>4UZN,+V<dgb#DJ IP|ulutt&d&Kh2:BO-`D$Eq~@~@pO/~@1?J9k%DmXuu');
define('SECURE_AUTH_SALT', '.3bC7!=]X9w3{X,y}R+B|+eTeF?qBsfr5$?B[5?nsce@g9oq+DjOsRCSUj+N}b22');
define('LOGGED_IN_SALT',   'n6jt]@^xCrzEU5!ZA/? f+9?+qN5+G[Xo|V}oc:f+QB!];l:fW!Q75|I4_!vEO`j');
define('NONCE_SALT',       'L%Qm-6|][nq 6 r0nSgng|QFi3IxlVQ7+ $frlB{nHmhGV..~-wt7WZEy.Lgq.:3');

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
