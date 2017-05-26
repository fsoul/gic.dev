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
define('DB_NAME', 'jgjghjgh_giseng');

/** Имя пользователя MySQL */
define('DB_USER', 'jgjghjgh_giseng');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '6cp43kf4');

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
define('AUTH_KEY',         '4vJGw23`N+7%B%=76z%]kom*vRx-z)l;b7?+XsFR[|l4wR*5|2-RH2].l_%WC,<6');
define('SECURE_AUTH_KEY',  's o+$;_|6vclXy+*T6Pl_!-EK557#Y|BY-Zpiko2g{-Co;wG*2si.!g+Q^&KtBb!');
define('LOGGED_IN_KEY',    '6*m4-=D4u=znGn^R<Xj}goSR[9y%9^,A`e)7pIy-~(WCVef(TT|[59@-~Wj!lhUY');
define('NONCE_KEY',        'E>%3HdGq3Yizgpqj65=7X.n)Uge]9Dmk@FrV5Odqt*zI527%7LRqGk~g?85r/iR3');
define('AUTH_SALT',        'Si|vg),Barg_l:H<^JrDOVC=VGy-+c~&vJ?;?$EwxRqQO58}oC<.osSVfFC(/1J&');
define('SECURE_AUTH_SALT', '/Yg1LS(4@}/m7+F|a48Ik6{ZEugk6uiGBhwlX7_r2z+B+Y|173],C9m;G%[8R;-<');
define('LOGGED_IN_SALT',   'G4a61F m):>U Ng~LW}iVeddAtw!+:?u+bo-?$=tfG, TRvaLGLmE*_w=$ToVrSa');
define('NONCE_SALT',       'DEe*ctobS:BQ+w|-r|#v,<gJY%||r+2KXNU9pMAl@@tWC+}hOxDT);Bh|.RT-LL|');

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
