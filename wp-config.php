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
define( 'DB_NAME', 'cristoreyhuetortajar' );

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
define( 'AUTH_KEY',         'bOvhI{/i5;g_c/v0;O4<JV$SEyl1F!m.nGnPI]1;sM5IU=[aa0O6j+^5jfr`nmT@' );
define( 'SECURE_AUTH_KEY',  '4r&%d6^D{,aK:R;!PZvU!m5*2N8oCU|T/G&jQ&UG,*oA|sc_>T`UpWs2|0REx`7;' );
define( 'LOGGED_IN_KEY',    'hm9Pf4MA[E>u)%o0lcH?&L!F4!zq[D/)Ry,2.L GwtE`Mg3-u3XbWv-8~HZ[w$By' );
define( 'NONCE_KEY',        '&ee/(c~k~7B{AF:FfZJ#;H%e^CR(?;}|~tPAASh()RnC$M(?jo2]@NChVUh_/gJm' );
define( 'AUTH_SALT',        'Hey ,pcH_M`sqF;oeU6C,%E`VdWA/pcN|(NETx)Db~[@qL<#js}YD)o0=8V71BSC' );
define( 'SECURE_AUTH_SALT', '2lg=^&m~oBik3o-nB}:$2d9E$Fj*4Z`!nctMgk3Lsy=NQXH3O/?tX]Q5a,gh2~*?' );
define( 'LOGGED_IN_SALT',   'e|y,Pv%F$r~x>|8xF=sK]] .h(W8>wq96vH@`6UH%6uel2s-QT]/vM)F#gz6)yy*' );
define( 'NONCE_SALT',       'CQE%G;?hQ!cXnll]:UDMz,N2U0Pe-V_O12&gUgZi!$Jn_)DNnV%G!Hq)I#xL+=-R' );

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
