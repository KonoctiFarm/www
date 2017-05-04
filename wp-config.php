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
define('DB_NAME', $_SERVER[DB_DATABASE]);

/** MySQL database username */
define('DB_USER', $_SERVER[DB_USERNAME]);

/** MySQL database password */
define('DB_PASSWORD', $_SERVER[DB_PASSWORD]);

/** MySQL hostname */
define('DB_HOST', $_SERVER[DB_SERVER]);

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
define('AUTH_KEY',         'y[V!4YBaP%fT8u;8xCP;EzTy45+jIxaFs_y:*^-IVZCupd5>:^+~IdSB/0L#(9Ug');
define('SECURE_AUTH_KEY',  '7LY(5wY=/UtDy()bWlr~xi{:0`Z0vKz_(9_)aLHTc4Y]P{?Xf>-6M7~7:NRQ5mb_');
define('LOGGED_IN_KEY',    'YUAY$,0d]Ua8G?]@}q[(xeMS&%,C8{1`U6fD7;,9]}47F/V k3+p3~$suMmfJ:Uf');
define('NONCE_KEY',        'f,Is929J!2!H$w<SXag3oDG_C82ktb]7]cT`KKAk&9q#,?ES]}s3+LKdX+?:v?Jv');
define('AUTH_SALT',        'F:MTUp3OmvX(t/pvd2,@71Km(p9s[3+4s6<P;SPSKi[lU mX?*FK9iCeP|_#P{=V');
define('SECURE_AUTH_SALT', '<j+;lbcD^5!W}gr2aQD^mnq.}:xhd05!-C1NQrt](C?Q)U^0uC~S)k.9&GL(+CL_');
define('LOGGED_IN_SALT',   'q )7RjjO75Y!*)Y3NFgEyP1K01sx@ICzaFnCgmO]w$ueD Zi/n[e6~Ikihr3|Um6');
define('NONCE_SALT',       'K@gD^E,zdo&Wx:tk>%jd~gSr]g?+,i.-kA0X*LDLMH0B2;#n+o9$x,Q,xNS-X(s/');

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
