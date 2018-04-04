<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'pularmain');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'admin');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5}{1pp^@*IIODu,s04S|swGD!.w_;w<h>fSz7.o4Y6NFLc/8@pD_NG(&Yx1_zY[P');
define('SECURE_AUTH_KEY',  'i+D(sSA_{Aq{AZvw}@:4(s.qsD^?@PaR!g9z1UQeha1r|8|wbo,cq[n; xxj4IY8');
define('LOGGED_IN_KEY',    ' =&y?Mc?d*..Eqh1*K2U2EiMPw|R }fO$%3Q8NMIP6&y~4I42dX!Y7|AE$>PYy7w');
define('NONCE_KEY',        'Lw&8M(>{w?GXg%L6$27[e$13{ZlFb1f(`x@O(<jxfkJ!ydhzt@R_qoybr.E8Auu9');
define('AUTH_SALT',        'a42D!a[Xc$gY!se%S9sYT-&AO-J`WR{!Zg1yG{3z@=^WETHPCxgX*o`/ho4wxo@/');
define('SECURE_AUTH_SALT', 'Evkcxn&4q?3^aox-=*joZg5xY)Jh0@g-J-UO)8l:g,n&qUiy](&8Ks2V1#}E7P/j');
define('LOGGED_IN_SALT',   '1fm{>!m&y0`U,3Zy`*8cc t2NpaV [*[=<Q#;1~)2!R,=`keiq=%=;*c~fPsx@dF');
define('NONCE_SALT',       'X,c<]$dHCX)X-t4(k0gDB_iW>AEB$Pae]:W-lFXIf5<A@hCnq/e?Oj7)`SDXP@cW');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
