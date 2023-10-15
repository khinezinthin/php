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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'kzt' );

/** Database password */
define( 'DB_PASSWORD', 'kzt12345' );

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
define( 'AUTH_KEY',         'q[A=3|@O1^4#%$KSd5gw-c<RNrwn6Gb&6DZlkc(bT`=y7M>B;Uu0O1:16(T6J<_8' );
define( 'SECURE_AUTH_KEY',  'NZy=c7G$7u OG ]~#XXljOY.GO~@WG/;!(PB@kXYn`f*zFyhXXu3J8@w1t`=<-QI' );
define( 'LOGGED_IN_KEY',    '&!,`QnG6[kH_}X%zohZLkl!?!NW*E[-H1.}j9|A+u81 pk}9fD~HIZ*|2e!e(Nod' );
define( 'NONCE_KEY',        'I`/8l0I,Qs[8OA}panu9XQW)v-/InB}N&|$;QVCY,%wir>ph<(4cHJsw):W]va;b' );
define( 'AUTH_SALT',        '<[)`ITl;lxU7]V!d3m}$!<EEc NCLj~d9dA*t.56mcW >sUb(tfUFne*0D&aE(E]' );
define( 'SECURE_AUTH_SALT', 'cxh0J2@3S8&<a.:N;D}7dT4>eCMxBvt^ RCQ.ZS.WiY|^B]]ruc7cTF3!_UO:qH(' );
define( 'LOGGED_IN_SALT',   '4H0I/A3Zt*c4T>Lv:AS79opMxUG>gmWbzXt9:}xb>XALO>F4lx 9u]f7[-xujzx/' );
define( 'NONCE_SALT',       '&C3C@1Oan7(FiijURu{H&DqryFV$]i/Dm_3D1G,P0hd4tzlcbO7G3 wJpx<?/KmE' );

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
