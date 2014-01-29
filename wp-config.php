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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'ninafood');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c#jg5at{a2 +*QJ%+e,WPS#*3GsQHc@NI69CwSy9H]D|Qy#VJ3uSwhGD_|L8y(M.');
define('SECURE_AUTH_KEY',  'ns!`9[}tDR]OkH.90m_S<Ty=F?fXzDvl&l+!-j7x69qbWhHnhkwyTnyG:jc03C8`');
define('LOGGED_IN_KEY',    'O%~@3k%u~JP^B:H?5z xJthG-{]:2--;5u{G0CfV~,HQHVfl+6P&2N-B*`~u}8i|');
define('NONCE_KEY',        'Ci0-8jmr~#|k3iK:d9X|OF#HY_d$V/FW:8V,jRR|io|p|-ud/T:K-dFktzc2kGbd');
define('AUTH_SALT',        '|2&:G-E85FYz_c{+*ylB5yh->~jp:V,z-VOUI.9Ns-nqDeo}Al6I[;uE:VU>x+b|');
define('SECURE_AUTH_SALT', 'Rtup8)A3 )M*bb}5@}GI<?Yt/ 2d6*|dm|uzN$)}u wQQl*PMt8`LK:B.kVu/0i.');
define('LOGGED_IN_SALT',   'l|WcFv9aE+7vHLC-iA$7[74-i?}^!cqQI}6vTWtJLu67A }P**Ote}#-R|4>jIxb');
define('NONCE_SALT',       'eGHHP0K->SjwZsQl0^6*<ia?z E*Y-rS{/oC-h{]Vt.CJy0*+R0I(f3jTOrn/fu ');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
