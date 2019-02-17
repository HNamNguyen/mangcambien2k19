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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'namnguyen');

/** MySQL database password */
define('DB_PASSWORD', '1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'WUR0gh+W0BOGVCAP#JT9JeHZv&+mM<[^tAS.?W)8W?aT+2j#Ac;*1k+,:_&tRO+0');
define('SECURE_AUTH_KEY',  'C3& {)4c`UAJYD|^:=5N#{_@At~.x?JU|U2Ifzl=rbtoFZJ;=l(&e8R#TC9$Lr-Z');
define('LOGGED_IN_KEY',    'IFw#|ihq]J7<W{bPkjj<2+C-Sl[v;2=+O%w|XdG/f[pJsj?VVG(,+<!F;RDt+4E4');
define('NONCE_KEY',        '&_xnEb|tO$+n__E+sT!4- 9,0rZ6YUdgn|+;g>u|s|L<?j|L-{oGj/lp%|j&HKZx');
define('AUTH_SALT',        ':7{{l (41uTW1w_Hn4@ZDbq)VS%/3[]?R}+*`w#A0d!.oGw6bMT,SgP.GGK41cTT');
define('SECURE_AUTH_SALT', 'ajU>9iA:(b0mz/Q(24WcGdTa $@3!XPZ@*3uj-}cI@P|_<`!Q~cO:LI}/8|2O?C,');
define('LOGGED_IN_SALT',   '2<FtV+iG8+64_UD-r-!oB@d rP5Jv$[S!34(]o+6l[@O.k~Mya|UzVvkTKfn-wUa');
define('NONCE_SALT',       'Qj[NW/4p^V#sl$&s69]ML+BPU-Nk7bArN,H|r U-Jfql4y5*7Mmtzhue|/D&Y8+R');

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
