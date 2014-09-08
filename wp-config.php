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
define('DB_NAME', 'procxl');

/** MySQL database username */
define('DB_USER', 'procxl');

/** MySQL database password */
define('DB_PASSWORD', 'procxl');

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
define('AUTH_KEY',         'Y#=Eg{q(W)UNDfAqnW8%6]%sYU$^+Uv4qopGy_|mgUf?5{eON?hxB~!#ckI|b;l_');
define('SECURE_AUTH_KEY',  ')iJ/uY/cuQIW5YZ0>?hn#|6rSy2P1OnM_D],Xx8~|_t<0E(o;ir+c9|7dYW:RSh^');
define('LOGGED_IN_KEY',    'w/4QOfesb-Y(xRe.7uU8u6hcjALzq9lq<TeUFc]q9(+U+OHa f )_#?q`w< YJZE');
define('NONCE_KEY',        'HsHn=%,<ox-!<U3P|3)1V#4;bN1Ky}_pX75#Hf{S89aJUku1c%X75nu@g$)e=|W%');
define('AUTH_SALT',        'i]u*I#gCGXp60wzV}MYgITf#eqI]B9-0-=rv;.T-M%%1D<DmK<Ql&-r_ugGLEUyd');
define('SECURE_AUTH_SALT', '+YAOP%t</&s3^{Dr~  EhHZkFqls{sw,M1^1m`k~P=dAQi9w).U-Fx%qcwk}!<0-');
define('LOGGED_IN_SALT',   'Wlyva*R8U V0w., 9i`+=yQ=LzvkqMC)DfWRJt/3dB(ahzgP,E|s(`^@n|Z-9]Cy');
define('NONCE_SALT',       'yy:m:L-3t2f[+bw-c-naufuOEP4+GPplf-exjA0pY*1OWIK#qS|7-{gflv!a;vZ>');

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
