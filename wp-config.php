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
define('DB_NAME', 'awesometheme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Change permission of FTP */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tmbKb.(pFHYdarOhT5+av@Pi:<Vf,86w^b48;C.oh ^XWU;5^knORND$1%yD~X/:');
define('SECURE_AUTH_KEY',  'FN>pPP?4 ;;H!Nb Ik3I7n+x+J?MhE@}%V#k}!mfkl A6HsPgn4W7{YtN4wwMEL ');
define('LOGGED_IN_KEY',    '@l).u4s>|n-<}<h2+0B(WgN|3p0({#$]wt6G-mD?8ooR<Rw(n`&v{.rk.s/.X|5F');
define('NONCE_KEY',        'DYt@+~ol=4.(8;+RV[4q<WPVffH45z0*5gPzov;]X>6,*p2|g[h_~!6Z)*WfW]pS');
define('AUTH_SALT',        'IL*4U&ik4Yiovf@`oQ]fDa06$pj.+W%SK?<V?(39iWkE~kw8:Cfgg[=)2c,yG!5>');
define('SECURE_AUTH_SALT', 'X%5ol9?^jwZg`#!/o!e<lK@xmPabb/rWsnQhoxH[Hoz#:0(*@/ Nx<_{n?#jdT/t');
define('LOGGED_IN_SALT',   '$lvcX|Lqa9U~HWB{Im5C& %4-p<2D_|~II#_Ka[9Jsd6P=WN$w2GaM4EjU${:jR@');
define('NONCE_SALT',       'F^3Y+<::]Z:a>YBh E%IxbA~g=D%.attcXO1RN.(-?lQG3g5jDO9jDC-g9]PXm.]');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
