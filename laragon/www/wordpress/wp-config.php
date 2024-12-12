<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|klNi@|UFJXdcz@_kS51N4|DI3.N0^|n%6f<z;>K.i|H#KPW;)hd[z1|sRxYa<YT' );
define( 'SECURE_AUTH_KEY',  '#-2YD@~9@B3fM*K}}R2pu.]shX.Uz{.aq)!7~oUAs$KCsHr%CYI.:otaYVq{0RjB' );
define( 'LOGGED_IN_KEY',    'a7;M?_IB~Z;:Y9)!MPo:TaY?<c|1;KY@DhvMHDK6j) Cek#)fF?7/2l~U#TPK01l' );
define( 'NONCE_KEY',        'ymqt=;&pqt-^-+{z0j5ZB A7LR~)~oN>`2Nqx)}~ye:]%sbDg-KQ,Vxm}=bxeeTB' );
define( 'AUTH_SALT',        '@=q9]?8z3+<0yTr!eEBBfn0XM*~J#kz*9BVcqaGKugnow)2`.+n7*-Mh3ro,KICU' );
define( 'SECURE_AUTH_SALT', 'zN{%&UZO{12r +%LTqZB {AHFw<d1YGm]]u6WZJ<xYUdzjOo:LZCO+A@x##$kW;p' );
define( 'LOGGED_IN_SALT',   '0?sdZi(x9kG!fr,n?4(*qci3WE.`U3&%z!l3i(:0me$Xa!*!X_Z=_oSP1~w)Mv64' );
define( 'NONCE_SALT',       'TVDX>uAk{h;_[.%/?%<*},L=Z5T0#n#<T>cD+Sj17(KOE%CFU>x=b#~e)mSW}>m2' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/*Multisite*/

define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
