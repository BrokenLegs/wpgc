<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil innehåller följande konfigurationer: Inställningar för MySQL,
 * Tabellprefix, Säkerhetsnycklar, WordPress-språk, och ABSPATH.
 * Mer information på {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter får du från ditt webbhotell.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'wpgc');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$0p9ueu[h~C&R_hF0f>2c6Z#71mj<czF9mXNt7Wa$1uL<&Di5;&C578.7<J^fA~I');
define('SECURE_AUTH_KEY',  '!lJ.A )^-[q8R3ud`<UpP !}wpuFbz5rb%_7zH{ <70=8TF$)j!@w0Xu-O|]$jE8');
define('LOGGED_IN_KEY',    'W(wOE$IK9J,hi1.]_jh7xPeGFSS*kh;%msvIfVk@&;RzNIg#XKemk(q(5TUGC3Tz');
define('NONCE_KEY',        '4,$=3Iugi.;f%.w9jbrC1EM4Jl]r.e%uypa]8AZ^zyfobeJ=2nbIoj3`z)4F&m_}');
define('AUTH_SALT',        '%y4%H$Lk04/JR=f9Z gqU(LqF:Adq66.XxXAfg)a+JBB+St$yO-wHp~VTps3 2;h');
define('SECURE_AUTH_SALT', 'nH*7]JMAbS>7KD9bLVJWT!6Nkor6#+4&k!=AHU$REsZJhM6M?k|M=Z1q O{|C;1 ');
define('LOGGED_IN_SALT',   '56J}Ldk@I0e;AyOm{%46:^E,jF)w W,z^8kT ?tEPgIJMfqY05G&E[I}|qx9_MJf');
define('NONCE_SALT',       'LFpmu9-s#I;%Ejg)VM!K(DM?[wK5rSh{jKt^S~IyX:cNa3pV]ETT1)&$@z6,+vrY');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/**
 * WordPress-språk, förinställt för svenska.
 *
 * Du kan ändra detta för att ändra språk för WordPress.  En motsvarande .mo-fil
 * för det valda språket måste finnas i wp-content/languages. Exempel, lägg till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' för att få sidan
 * på svenska.
 */
define('WPLANG', 'sv_SE');

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');