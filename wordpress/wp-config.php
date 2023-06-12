<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hanashop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!Be[tx11rPAKx)zd2(>kou}Hxf)ET6K|3&1Upj/Q17p,8Ib+eY`m{)kOJN8:Or7#' );
define( 'SECURE_AUTH_KEY',  'b2-ma9.(g?k4f!r.[YMgmA=?cHNJeGk7cOVu6fe7vdfdOTv0VHzApRm?5O`a@!3}' );
define( 'LOGGED_IN_KEY',    'YJ4Ce0M);y*HEAR2c8dJLmV!wwVS<|Uz*X20zF_HQj,kyD14qd_;;D,3L_BDjo>}' );
define( 'NONCE_KEY',        'o0XgQXZ3WEzGvqSIC6$s>,%ts{dD*4m02U:L:8@E|C^oa[tf^B23oe@a+8E,Ulag' );
define( 'AUTH_SALT',        '&#;`p>6e`M9%th)pUv3B2>M@pwN!+9R`K~Sa#>T6uR/^x[<nR]UoF3=t9:ZC*/~N' );
define( 'SECURE_AUTH_SALT', 'zT7:[!lTp<Ab9{*fR|h${ZoxFbw];3yb0WA@g4u$>*rWuiQ[T*(Xh{eTKIg6>:]#' );
define( 'LOGGED_IN_SALT',   '+av|*GT(^ :a/qiQ/@>AJ]7$e#Hyc!#3Y+#=I5]2BO6J4CCXo.JX>t~NFO1*MicQ' );
define( 'NONCE_SALT',       'S!NPASEu%zLtuY&i5SwdXZr)2lIH@]$y2Xq]uzbg37Ws(yw$;tnlz]zm(TdXhy/{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
