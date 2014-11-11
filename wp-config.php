<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'devunion');

/** MySQL database username */
define('DB_USER', 'devunion_admin');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'yA?0w(|Hq$qP5`u#6v&?6#E(a-@f{+K8l$UH_CL?HFF4bVxJ.cv)+u|S&k+!L2ey');
define('SECURE_AUTH_KEY',  'PT<|8<<)MT1:f+o^0!b#Vp7Cd -MncH_P-H.Mcy9j4BhQr;E*N)0B^cJ+4+R?#j4');
define('LOGGED_IN_KEY',    'gj1Y&#|>%.dQ2&,6B/+@SS~H?0HZvW.+Wx+|J<u:<E>EBAao>yd2[[N@*$X8xqE$');
define('NONCE_KEY',        'o/=@?~3iaFSkYb!2%vn~_Ke7?:WW_|)#zMfCJ>Lbf-:<o!C.GSEDs OH%v95`7DS');
define('AUTH_SALT',        ']`)*A+]| 6A3u,~z=:Ipk@!Z)@*x-!2RZeOVk8q/0R*ZjH>>:~%>.hf&Aq$.P:!2');
define('SECURE_AUTH_SALT', '+?;L0}::%[]9E<L5j;O@;qPI/@hEZC$!W12@{,4L!yq?m0^YrRE8sF{8Hiur~<wt');
define('LOGGED_IN_SALT',   'uB%PD/mIfX^8B Wi58.uM/-M-:TYVw}AvGfd+|TRF|nx@QZk&;9#leAshNo{nE;x');
define('NONCE_SALT',       '-Q}[z/{U#HN,<+l +vQQ6Ae0Q{W>LVt54l<F>sxpjwtj~2gJ19NDQ0%K.A;k(w{}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'du_';

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
