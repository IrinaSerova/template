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
define('DB_NAME', 'sdff');

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
define('AUTH_KEY',         '8*J@E/3V7L acrz]}w0~X@I>yJYEN.}>%1pWioHXQH?I*$RJ^=!PB[ON{RsuP$X<');
define('SECURE_AUTH_KEY',  'AYr5yw@ceRiBXo{-C<J FXTq<SvIRXq*no78-Cyegoa3Bplw$?gx[}{&[dtPIDJ|');
define('LOGGED_IN_KEY',    'k`y,os?R|87H17]pWLN2__N8wu//_(:pWfR%s+pH%kmFKJ{qz2eC:Bam=!{,FoRe');
define('NONCE_KEY',        'KKT<sdH9jA0.SYV#cT(=#R;?M-m,Sila5?wzN>JKpZ@shOicG[V7`CoH>-/TY(Q`');
define('AUTH_SALT',        'zOqQ-Qip)d$JEkF/LBQy7,[fP%a?/#y0Vg}>]8XeGm=HoYTKu|VfS}WH4jwCYXe/');
define('SECURE_AUTH_SALT', 'lmx) }KfoYb-YaP6qylcS,]Z9?9jQV* @t]Y__[$,f>k4+iV]WRZ<x4iO!?Q~r2)');
define('LOGGED_IN_SALT',   'B1cye4N,%QSlb4=@.xWG`4MidfjU3Q4>b0BFcf%4H_z]?%wbO9GBSgE :~/0T,e3');
define('NONCE_SALT',       'MpBzr%rtQQ3^IKZ$cLS4,(FYF$!mZf{aD=|QTQf,o7g~.r!j41MpR+KLvGfT WQl');

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
