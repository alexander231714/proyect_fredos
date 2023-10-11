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
define( 'DB_NAME', 'fredos_studio' );

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
define( 'AUTH_KEY',         ';Q=m5bmIYJ>=K[D(x1pu1rkurpX3j%]_5T]OqrAinq8)Ji0~6wpFU}*=Xo+:y/ug' );
define( 'SECURE_AUTH_KEY',  'v4vxsx)>T!Jkc1?|j[chTbs~$@.(p~Hn?I6xr@S#1J@$$bxY8uF4S/G`&y=HMM8V' );
define( 'LOGGED_IN_KEY',    'C@WEnpz2.2~I}ib20t7$tYS(.{LsDrJ~.vsFZuxO[Z[U+?NIKy]cu|gsF_xw~<%[' );
define( 'NONCE_KEY',        'i_FG5LEJ87Xq:G:chNJhcnqpetK.3rvb`~u:Ad=[mB2T}TL;bGW-sBz?sMd_yE)j' );
define( 'AUTH_SALT',        'g2=kP#G0izO#^].{lJDqmRLrbSlrbjhq#gLH6.$GU&S/d[g{^-F<W=XZZxlK|<w#' );
define( 'SECURE_AUTH_SALT', 'i7Jl>rV4GnQ!(VU1q9}4fb-i%*;*Y|KO{0JE3M>-!HxnQP+pJR LO~.buo7oW!E%' );
define( 'LOGGED_IN_SALT',   'On&EDOmafM^*rnEw=-Ko39=._$eNOvD2_FSG)d(Q,fhXSn,>@yh_DJ:#8S~s#*k0' );
define( 'NONCE_SALT',       'x_gqrXkrn(D&jgTYi#S!{vQVT5w78~&co+ty=DM&11#_hKGbdWJ4u|$g@p!M)aaB' );

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
