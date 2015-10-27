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
define('AUTH_KEY',         'fZ[]b{(RKV@+/ g0 hTf|sEwG.eE#O9A*]xBqFUJn`*1XpLz&!h!eFhYyO2Ee+To');
define('SECURE_AUTH_KEY',  'l4Onk6p^uCc*|r&KLSFxA~^t--F/#a.J!Kj<_u&L0 6Y_2t*,,2n:~p;tm2, k!w');
define('LOGGED_IN_KEY',    'cI;lU/EtST8{Qu~|(HDMnk]VkHDZN+S^=jh~+Ageo,Nqk=@V`,C1`*i,X`xnJL,&');
define('NONCE_KEY',        'w>-yADQu_3(^|Pf!t;9ZmB_6}8f,=GjY+lV47tf+YoF_$)Nc-(sEW:KxfEdP|iye');
define('AUTH_SALT',        '|%3T|(Ym`,j(p(}war7r[bNZksela8A]URts&q3|/mLZ:u&WhrLc^)2ah@|}k%aN');
define('SECURE_AUTH_SALT', 'TEQ,k;}p65W!ITzbx[A=GNa;qgFIr|b|feIUXb-ju9*}ZfPUl*|ZJ:-2mco{:W+9');
define('LOGGED_IN_SALT',   'zR=]4uK`;(__.DdM.KSA/}9Pmzh<vNziC|/Y^-V&<u0!^W57W.;l3 }:aW-r4#-9');
define('NONCE_SALT',       '|@/U6qD_-fLBZGqN3Z,Bc|_>^EywKx~4uf(gJ(V5|jJmvpTQa`3-/|Im9%t`D<h8');
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
