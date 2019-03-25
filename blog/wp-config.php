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
define('DB_NAME', 'egreenbo_gb_blog');

/** MySQL database username */
define('DB_USER', 'egreenbo_gb_blog');

/** MySQL database password */
define('DB_PASSWORD', 'gb_2016_@_pass');

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
define('AUTH_KEY',         'H5ueD54a74QPGKrM`*QC/, )#TV,;j{SSpL{]t>I;>a/%DuTS#$i32_<Q*C~y^ET');
define('SECURE_AUTH_KEY',  ';(Nie#8|xo c-Z[cc!,!F#.XJ}MlcdzWy,T=?E!#^tufs&BFMr:)!&]{-IWp @)A');
define('LOGGED_IN_KEY',    '1WjZ>3AJ.7:QN1%70uUsu7j]*-tnd^Usw*_gsmNY3}62*pC,-~&|1@wy[<_.C/,,');
define('NONCE_KEY',        'ttO,$L)^4<0C94y`z{Ft[;fDyN`X@z,%>yLiuF7k&rOojwO|KzB&x,#k,ucEAnz%');
define('AUTH_SALT',        'CAoL?<%pF?1X5n0?g._oI3Jj|-E%,^{O>}b.G:cY,_sW8`>.hw7jaI_<WqcLjnvl');
define('SECURE_AUTH_SALT', '&ZqgA{#2RsB#/!oGm):BmRQqqR_Rmz.)w0` vt?*C2$fj.IKHEc4si^k`ZY=`P#i');
define('LOGGED_IN_SALT',   '[tYHSXJ0yq-/a/Z+ /tu<q#ASD)2pPwpzO3Ny|oXtp7Do0e2=1|l_jo)lF^^P -c');
define('NONCE_SALT',       'Ao?ttR[Im)zMy,Eqdxj_gRzD8:^cCLnyH.O.=A=.Fe]$$#ji p0fuT7F``MD,[*P');

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
