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
define('DB_NAME', 'CMPII_local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '()n1#v Ky S6P.hY&&T7Pa6u^=4sH&Pzq0YIO&;7ZRQsw#WqU=c|zB1/Cf&d:a*P');
define('SECURE_AUTH_KEY',  'w`Vk{ikdNT^E#ba?t huVkGk2`$_]cXlf9%I~b6C7U9xV2ZKPMG-k]!yv9&~(of9');
define('LOGGED_IN_KEY',    'TF4m^S,/$9ZV|vj^pTltxNIG5(.h,-biJ>/b6g-u90zli[Qpq}gs;XXyGE![jQY)');
define('NONCE_KEY',        '5*qQZnb,ewc4h-of=#Ch1W%&j+qWs7G t%Q3v=`b07Z#cn#iWh;fgRAFH%>F#]Gx');
define('AUTH_SALT',        '~Z&=6+n39i!m$!mxSRI.4j=M$pyNe<.x%S,F&+O0b,NQV{H_j.c^1ggskiJa/@pG');
define('SECURE_AUTH_SALT', 'tL{LW$JAc0T~#+E1n3W_k9|2FuGwhK2S!zUTfC^uX7+aSM<4Y|IZq9{wbllh$;F(');
define('LOGGED_IN_SALT',   'YKlldE$}LHqpkZcXqog7&#!a;vgZQ`Zk6L^DD)H;xa!9Cli,Du31mc,y5$?N*CZ8');
define('NONCE_SALT',       'LuTlQIYzl.T<<hK,xWC~<0IoA8H(5//H|jx0f:5@nq({A?-}z2hOk!MT:GLDu]2&');

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
