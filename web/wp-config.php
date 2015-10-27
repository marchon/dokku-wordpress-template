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
define('AUTH_KEY',         'GTT#0~l2cqi~|`nS2KueyrJkYJUR6rHp(hmZr3.#}cQ6<}~*- _-}c?0Q|<]-B4c');
define('SECURE_AUTH_KEY',  'yjH>EMi1n|XxL7^zo#_4G9b?6 =;H@w6beQ@a:4E:X[J-LPf4)L6 6X*9J/vX!+4');
define('LOGGED_IN_KEY',    '-E_R:bi`OoJs.-$y4zjtN]m8^(7z!{Ml}+b/Nr&x}0W9S-zU/1Ez4<R^^FB;vgZD');
define('NONCE_KEY',        'i*<PiX1b$D5nrCX1#kIX5 q;No(|:L9R.=ij 0&FG$+q7x(tF+rm[-`5Tg^@DIqB');
define('AUTH_SALT',        '4KS*RN,Q2UpJcYLW]|153:Afe0c5|NSRxXQ~,PCeY-GOxku4MsrOo,tSE- 9+xZ>');
define('SECURE_AUTH_SALT', ';GpW< Io_+C}CWVuEPZ3=6*-i|NO2t+#a#mmlI+o8-+(6)N-8dT}`m[c2R]bY-DK');
define('LOGGED_IN_SALT',   '=Z`7_]D{1>ug1c&4GD-sA m>e[p8!YP3L?M^6:Qd&+NL-?FtG&?f|(1,_0r|=[mo');
define('NONCE_SALT',       'Vjq+SSreeELa>UYrH(H2qWL2! z`OEUf^&|4&-cq&=+b#HL]uAHKVRn62RiLad<r');
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
