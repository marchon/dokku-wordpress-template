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
define('AUTH_KEY',         '<Yr>E|:!b!]OmO6^$ajS8>${1fapf0l){dK!&m^X6iz9+HE1gRq=/ztu49U<h3)%');
define('SECURE_AUTH_KEY',  'd&>Ez#za8`4[3:(U6o-FI~F6;7LQEj[p9y/hq-6U<2,GayLOIpve-5TKolIQ[-p}');
define('LOGGED_IN_KEY',    'SQG4,ZZ9obQ4]wccclJjf&1XuCz1prqE[x@%V:YI-P%;)$|qWo+Ck|4+K537-;5^');
define('NONCE_KEY',        '%dK~v(Ll+:|{FZKd&|>m;]*-bq9<3}H!3BIf^ eLsh`O-sVb<JCy95+//kfn _C1');
define('AUTH_SALT',        'v2K+xn+puEZyDD.`Le}cJY]E$4^jsrG,%D`-;_)_xg9%9Sp(-(]&[Brj6qXn]+Yv');
define('SECURE_AUTH_SALT', '1`=Hj8DZNl.GbGBcri6-Zgc{L,-R`yJBufizra+4~Uo{)fB:4{+2+:2oqm)xJT~^');
define('LOGGED_IN_SALT',   '8Fi%GR|XkUbT?8V0W1ly9Qmw&gHqR-h*-L-QCde1)8hLDzT-QYKCt0YGF+AcR+n~');
define('NONCE_SALT',       'C$ns)khAs`(@xqs%[=T0+DrR :k_(n~h><v>6qq_Y:T}j8<o-/CR##Sqzxp]bGG4');
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
