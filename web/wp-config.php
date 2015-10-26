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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASS'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         'lJN5Q9OIk)?I`CY56Pk|?K`i%r_wkhiUtysu^<~P(|YNqgJ3EV^pi_;}8>A+R:_|');
define('SECURE_AUTH_KEY',  'lQoE,n,`EgL|um8&BvA$$*RB3A&(IfGi)8czE`,PTKQ4m}$;t-,}{5v5vrNalqL3');
define('LOGGED_IN_KEY',    '[{=kGjsp:AlJxvg~,FqLr|[6X>|I$/q I7IHUxY!V&DAih&ZFCS;&CVM$o+;1M.r');
define('NONCE_KEY',        'v1h5~--AL!iNG#4% )wyIu~X#R$T}+KENxZLC6Q:WLx/x&8Ey^Rf^x#ZQSGtE//+');
define('AUTH_SALT',        '[+5cXN:-3Lb]EF/jfT@Nc68f?|TQ5dfr:JF)1~lCW!i-h<r%[eV+]htDYvRX;J:q');
define('SECURE_AUTH_SALT', '1x<{[Y&n<t4ACo;)Kq(B0X4{=!xrry{]t_V(<d+y>vkpQ=/?4t}Jq+x`$8=&%_>9');
define('LOGGED_IN_SALT',   'VQM^?Eh-IBf-HaM-E(Gck%P<)y%<U+-$^C@e:mJA_[hyF%`Sy+;$-)<JK2!ErRZW');
define('NONCE_SALT',       '+,>z.bXZ>mPagAx0hE,`bQ2Py$]2{Lc|(RdU.<Y0B8`2)<L^/*jLsJwF J}^=1h3');
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
