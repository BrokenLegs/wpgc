<?php
/**
 * Baskonfiguration f�r WordPress.
 *
 * Denna fil inneh�ller f�ljande konfigurationer: Inst�llningar f�r MySQL,
 * Tabellprefix, S�kerhetsnycklar, WordPress-spr�k, och ABSPATH.
 * Mer information p� {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter f�r du fr�n ditt webbhotell.
 *
 * Denna fil anv�nds av wp-config.php-genereringsskript under installationen.
 * Du beh�ver inte anv�nda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i v�rdena.
 *
 * @package WordPress
 */

// ** MySQL-inst�llningar - MySQL-uppgifter f�r du fr�n ditt webbhotell ** //
/** Namnet p� databasen du vill anv�nda f�r WordPress */
define('DB_NAME', 'wpgc');

/** MySQL-databasens anv�ndarnamn */
define('DB_USER', 'root');

/** MySQL-databasens l�senord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning f�r tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp f�r databasen. �ndra inte om du �r os�ker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * �ndra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan n�r som helst �ndra dessa nycklar f�r att g�ra aktiva cookies obrukbara, vilket tvingar alla anv�ndare att logga in p� nytt.
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
 * Tabellprefix f�r WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokst�ver och understreck!
 */
$table_prefix  = 'wp_';

/**
 * WordPress-spr�k, f�rinst�llt f�r svenska.
 *
 * Du kan �ndra detta f�r att �ndra spr�k f�r WordPress.  En motsvarande .mo-fil
 * f�r det valda spr�ket m�ste finnas i wp-content/languages. Exempel, l�gg till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' f�r att f� sidan
 * p� svenska.
 */
define('WPLANG', 'sv_SE');

/** 
 * F�r utvecklare: WordPress fels�kningsl�ge. 
 * 
 * �ndra detta till true f�r att aktivera meddelanden under utveckling. 
 * Det �r rekommderat att man som till�ggsskapare och temaskapare anv�nder WP_DEBUG 
 * i sin utvecklingsmilj�. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera h�r! Blogga p�. */

/** Absoluta s�kv�g till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-v�rden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');