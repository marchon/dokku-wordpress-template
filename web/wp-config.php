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
define('AUTH_KEY',         '{/_t++CB:Q+LACPHWu|>yHlJ[V)`,jyCqCINa9P++|k3U6#k/SF4T0v-ar2x [9d');
define('SECURE_AUTH_KEY',  'w)hBpfvouh{4Z@:|[{zNm:]b7^  ef.WC3OL+FHl(hYUzq5ZOr(d;>V2C>-{0G;Z');
define('LOGGED_IN_KEY',    '8(}b1ThrK@Tx] ;_Pd-7=Kvf+#xfSy6wfDp9A?:B0SOv4f<f_(BtcTnAW+!0dc2;');
define('NONCE_KEY',        'y@3+_-k,XpQEl|NTq>Z!s;pJ7D}Y(Qw|i4_,g,UOvBS`;&`jD;$_iJ]+YR7]C741');
define('AUTH_SALT',        'Arp-4JSTcDLin6Z:L[(fqPNYrP=p_q$n{{CSI[9>d`3sQvo/tHL*s ag(-qAQVLG');
define('SECURE_AUTH_SALT', '>?Sm-DTk1Y?MQ+A*-:_X)S&><%l)sX%RrwuCk&XXYmt#k0[,j[Ul-p-GZE7j!#cN');
define('LOGGED_IN_SALT',   ')8/fv-&bTSZ*i5[_$rlQCs#LBZ]NPi>9Rt0-K*&@^VVd*RPX-dnbsrD=-[1m^g-L');
define('NONCE_SALT',       'p{%rqLC4BsG@RdU&)|-2i[mT#Qe,pTmHH7wM)_Q7y~0RPz_J^~h`wIFKeug/o?`J');
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
