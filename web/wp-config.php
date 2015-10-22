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
define('AUTH_KEY',         '&iC9Dsia [qiaV1AROV;-FT=>hS8jK$KjQ$A]^(U,fcGp39^]jfJ-Nk_9#VT#,B,');
define('SECURE_AUTH_KEY',  'Wa7@J#ViUmlKd6L~;X%3zK](E}nAS!v-tehnfLBS6cu>T_Lk;^+-Aj(Bf(eO}[UP');
define('LOGGED_IN_KEY',    'k,Q+}oSr~ijP~b:@<C0FGQ_-ynA@xu-@6[eIx}kW)]<&1iZE& YB01DQv_VIBMOe');
define('NONCE_KEY',        'WEdPrlML`xOkyrbmzu~]|!%@ft4)pKJ&-qmaJ#:Rlth|A*?AM>5[~lJ6+Voez Fa');
define('AUTH_SALT',        '6}g-a)-lW>:ZWIJ*}@B)&jQzb4|d53H|3z*a2)@vXu87%+^Z!xVX)JOJoV2&/B-K');
define('SECURE_AUTH_SALT', '{zemT$||NA_U P./<^N7cEUcO-vu!cP-)Kud[||P3FzvWH8{z5tx&6F?0)~b6mYI');
define('LOGGED_IN_SALT',   '(:S5Mjm(n;>J)`QO>CxW]<V.,((H-tW33;292xx[,3:/lV?2,42ID+8HE{(!]uSb');
define('NONCE_SALT',       '7|@k]9o*Ve5y04; [<sN6${OQ2>{MFmZI;Qr+T[yh4$Da+Y-/YOX.&|Tz+!3+?Ve');
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
