<?php

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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
define('DB_NAME', 'gentlemens-club');

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eMhN c67BtP5$<u/(4JqZo2O,c?5T{{j$#Q4kdFQS?_k]~(#81>[8m>)bH8r/Cc+');
define('SECURE_AUTH_KEY',  '@JN y0p}9N5U?j/%+otIkx3Encwr3KT/[Rw,?<?cV)1L92n,W-y753-9&6[8/X#(');
define('LOGGED_IN_KEY',    'im3O@C<#DuHU=iDF2RL_GtEu_l7rRkka//0p1E4|{ac{q^^WV%/m%VP]O{j[~zjz');
define('NONCE_KEY',        '19,R-sZJD7gFW9M<C~s<w7I%=A:r,d;k8<YR 25^5j 0D]?=p~:=I>I7-3p.g[jv');
define('AUTH_SALT',        '->)ggU&{jAfS%OD7>]y@3uImU+mHz}$UPfO_VXC[y{[_El]_6b58x9!e=?2M&R+!');
define('SECURE_AUTH_SALT', '{H[Bh?Z05v[swo9WYyJ_+swv[|_|REi.Mg:d^,x^?oLp%sbI%C2`$*TL+SmL_e.&');
define('LOGGED_IN_SALT',   '#h8KMoTF[w=o>qeHbt+85]YRw=0QjsZ-K_U4[n1tu@A0GvhE TuvEq{hY13QyqUV');
define('NONCE_SALT',       '}Y!ZHDeerEM>=lUi/)KfOey:cE3fH^5-}Fz);B:S.B>x5g-8V=b Z)o)@(5pKLXS');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define('WP_DEBUG', false);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
