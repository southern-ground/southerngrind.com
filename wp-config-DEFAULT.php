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
define('DB_NAME', 'i794731_wp3');

/** MySQL database username */
define('DB_USER', 'i794731_wp3');

/** MySQL database password */
define('DB_PASSWORD', 'Q[Yx(DFITN40&]8');

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
define('AUTH_KEY',         '3uKK2YrQ3bibn3lB3hk4bCPKer9OVAWU70XLoNP8oTJVaVG5tnUwM0ponJj0C961');
define('SECURE_AUTH_KEY',  'qtW7ctl4qZ7akcFqnv9NkFiK813T37RlCIGgQVEo2oTLJsrp1kDe15V6Ya9sMizY');
define('LOGGED_IN_KEY',    'xWDshI4m4PVBmUKAPd5Ni6VIvZHdSVUKvtF3V5b39pGvv56eI1hKHQNCyKPBNd9J');
define('NONCE_KEY',        '59YVGsp7jJJeHZEDntlLTax0Xm0xSs2yRu607PWHO3iDBLMND3k4sZebB7npxsqH');
define('AUTH_SALT',        'IVJMSRYe5qL93A378MG1mgIp0FMuy8nFFJXZwCcixootesCTQBs5j8cCggm7SV9B');
define('SECURE_AUTH_SALT', '7aKLIcbE4esN1Fvzuv8F2D2iv4PSkTVkV8WERZ9nEhRvo3kjYkzIqYtzjmDNvuEM');
define('LOGGED_IN_SALT',   '739VKINXaILVYWcU27d2X1mOyrYHERgigo2oals4947ZeGHjKBRkgbu9JpQhwGI8');
define('NONCE_SALT',       'bGyKSj7BoFpIjyV3c4pgDUVaMWKLIJCEn5WIJuZdHvcJTU80sEowifPb2ZvjObFB');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0777);define('FS_CHMOD_FILE',0666);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
