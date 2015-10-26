<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('AUTH_KEY',         'j[+BQ|f++Bf_2C@J2WS@K_X#IIq_j_Nx<X2(7lti)ZkG,=|yo)pOfg.m`KV~YzbG');
define('SECURE_AUTH_KEY',  'iH)8#@_6~-he*7cI/>aag4%rW7nkC=c7r;lKk[@b;`|/hd<KUIRHny+pOH`{+i`;');
define('LOGGED_IN_KEY',    '1e%72^6m|||dlMs:%6YMb<29|1E&pep_aIF)CvO^o/n_r&da cv7cy3@l^S>]*qb');
define('NONCE_KEY',        'paYm#-n7UB-amTRTgy.tGS.ea}H.#DErrd9(|l4AlG#[f|eg6uUFBs&!?[j?oeg]');
define('AUTH_SALT',        '_T1:VO5`;e>3.%VCD%c+-Q.@Va[glq|H1SqA;hb|O. #<!,3yS`_BTRy)*il{d`m');
define('SECURE_AUTH_SALT', 'F|58A|Cs(g.SQ<$t|&Xq[X?}y:wy|(J|D}5t:.oh-P+DD}-B1oRk||z}52(3@LUW');
define('LOGGED_IN_SALT',   'zY#A-BpEC{m&| #Y?: <-I`;1n2>+&E0~zhULcj06J)YJU_JdTDFzQ9n2zoDUp9Q');
define('NONCE_SALT',       ']/>Q/vdEf6TJe|izI-X=3^i;)=6[+lmb$|^ 53$.H<%^H>^SBD)B9JS|D9ZaLJBO');
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
