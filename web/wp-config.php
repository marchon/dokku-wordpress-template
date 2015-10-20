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
define('AUTH_KEY',         'fnsaVN_)P-I4+>$Nwu`GCyR^%p.OE%Csxl&-w%xQRYzsm?At|]F}D)&6-u2;-MN(');
define('SECURE_AUTH_KEY',  '/@MZ09M|Ue4$u~=dMm<W+=.c;P2b.`Id|NS~aHxO8;F2J`Ap4dSO<Oiv`_ G}1$1');
define('LOGGED_IN_KEY',    '-`U._6X>4M*f%)sAw+eT-[`!0`!V{3a|-d;y%W>~k/3{h4UU$?+lW7*]uAxa$p]^');
define('NONCE_KEY',        '2+d3tP;?Mn5rVg(X[(9lM{38xKBcZD?{mFhf,+s=R5m+tT&V8?* aOOm>)V6&,qt');
define('AUTH_SALT',        'K4~`kiWJ!:6<y$bPfRz}[+aM%JqE+`FIxS)ihsJ{S+[CM.E^*kAi^e=Sga3AWwL3');
define('SECURE_AUTH_SALT', '4SM,=C5k$cawF+NJ-!MG-6$xI-*|h|)/I(S1Xsg8)mzU%9vH3N33l+|*g ]Y}2HL');
define('LOGGED_IN_SALT',   '+Gszi$7&oEeN9Em=Wg68[[$k*S< Fy|P<Il|JZ*0a&g$vw[g;H _cZDg@5U+heS+');
define('NONCE_SALT',       '30KBCT:t(0Zt&?VGl8D-8yad4]mrm/b/B_GP6#4dXoicqJe1t9iQiJOhJTNZPF~/');
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
