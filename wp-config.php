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
define( 'DB_NAME', 'my-portfolio-wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ' p{ba$WBEp,I!}0E`)$*hp.7}-zK[jZ4J><CcZOG$Cv@.l)-2C8A n=DlcmdcLZU' );
define( 'SECURE_AUTH_KEY',  'N]8ty/OulaRAT/h*N=L|Cz3JNKME(7Ud[T!h}:pqe;0t_w7i}` Tt!j.l;;!;@<A' );
define( 'LOGGED_IN_KEY',    '2XwAZ|8,YYl>r85S8s=-j8cckh-2|q{I?@15?:>:yg`XKL35mJS(BxU`Go`xga z' );
define( 'NONCE_KEY',        'JR35~?}{vS]34H.%J8@f;}2W]y^]dKGMe3PR< q;9;>.P*hk`O8-o^d[9JQk:qbE' );
define( 'AUTH_SALT',        'E)Z0)uK{#8*UR5Zrbfs=)TL(}Lo_~;Z({lR@r1yPEKUUuyq&&8I0wBAjLPI9ME;}' );
define( 'SECURE_AUTH_SALT', '3>}_$>zUAa$`~~?q&lKbRh}{<K1-;1Jih SaR_rER4:g8Ye,96Ecimq?D44TBr(o' );
define( 'LOGGED_IN_SALT',   'Wo3Riz[&[ T[R: 4y(dMdG&iIcPr9@.4c31Bg$)uq.mq)V:# $c8pO|LQht>_4Hp' );
define( 'NONCE_SALT',       'GbTLu_|=UhU)|br%:IJh=ptC<-Y4hj~xYx{)jgWV<9*9^P:VKM[Pp7F:HbZVaZ%G' );

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
