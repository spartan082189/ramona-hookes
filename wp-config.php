<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'drm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '4R)hcJ&h%xZC!<v7i+=.xEPaHyDjCct GnMtn0zGdP,80)_a?![,`U?FHvY9u|O+');
define('SECURE_AUTH_KEY',  '9$8<0&G>`Pg[X({oVM8V8H5cEJOiZXZYfe#LGZpYro,OARFoFp`KQu%dkG:[-%+%');
define('LOGGED_IN_KEY',    '25RE9U2Ao_6O.HM8<YeSP#R{?Q~z^I~Yzc45.)FH}qXep[=r$IUr@=}iE_qyAS(Q');
define('NONCE_KEY',        '^qascfo9gNh|{{g;.=Zlzictv@=1QxmQo19qA6-N)AN^*#uZ(8QN-u54]]x!|Y-o');
define('AUTH_SALT',        '_sjcAZ&UAE91!Z$],b?P^T{XP6zx04[g2A_7Bx.QjMD6=Ness,>mY?CoqgMJ$>Te');
define('SECURE_AUTH_SALT', '({q_v-$22,LAc!Ax_nMM@bxaGt<_)We4B(Z`CpzJyR8Wv _!C)z(,Cn8!h1mlU&A');
define('LOGGED_IN_SALT',   '0jgu),^5g`V=$CwH$/n%F]^#D6E~_ycvWz M>)Kg}(V&ZEQJ&J3TR0VNR9<PQ>3[');
define('NONCE_SALT',       'Z~[h&73yvg$Y?C3sdi#Ru^1&y0%r6-I1DFAHyp`8QrO&dcil]{*rzc<z[8qIvK}i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
