<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sgrind2013');

/** MySQL database username */
define('DB_USER', 'sgrind2013');

/** MySQL database password */
define('DB_PASSWORD', 'Zbb2013!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PW7bN26~fD+([};5nL>psXBnA]3xtxn7J}WR^<2hXz`]ANVS?1[pB!pqa<8ZlCc-');
define('SECURE_AUTH_KEY',  '*8;>X!{3Rm-!rE ,DU^W{ufj:3nS|< iGV-Sedc_!u.a^w70yybQXnA[x?*j5XK>');
define('LOGGED_IN_KEY',    '_aj<y>4szD(S+kMJWPtBkc{r{R$WY/JJ@cZM7M,$I]_l/7>qEA(m*HFU;J?|+&G$');
define('NONCE_KEY',        'T6N<k67h?oNHeDHT>aos#Ul%5UU:Ei3)e}x.bnvCi[;PNs&$UY0%NRxI8*_vqKW/');
define('AUTH_SALT',        'G1A.2z9B&.YM|X+HBBFsMKd[C+;@Nu;E[+(@Ef.#OZb()dtPaIFi]Px(%:E6:c0x');
define('SECURE_AUTH_SALT', 's3$qzR1 7mW~Ys7M+N<)Dm_;!S*6acx:_%`.O:FJWR1ko-q :5;_Ud$*u@^hkQ1e');
define('LOGGED_IN_SALT',   '_/KF* pyJL|W|`3|yu#?8@-9}`q`T9%[@l88/+8((YeGK7W7!1>_+821eEr^Q[1[');
define('NONCE_SALT',       '.@|Y~E(5Uc*46J$rh8}zFTgpyqwGA+,)EE(+a?yW KuA_khq.+{FP=C[g_*,c Ri');

define('WP_ALLOW_REPAIR', true);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
