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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'b=qUaL9MKM-UHN7:b|`XE]sIsLpJUQZT]vqyz&A#8mIqkd)1}1h)AM*;Hfle:QYO' );
define( 'SECURE_AUTH_KEY',  '8KV^]<ya}F8}ljpgz%L1ZH:=h=!DT33%K5k` .^Pc+4cz<t:DaMpuu.fgNrBw{#z' );
define( 'LOGGED_IN_KEY',    'jUK9r[ampLO0UBw,,RPP{ ~(ajRV-,%Lt7kvo|BlN4;rA]CmO}w.:W$-|/8Ms_t]' );
define( 'NONCE_KEY',        'vkUTO+*=*1uBb5&&^4fH]D3zk6XB](F!ZRHyWJb}?,%t3/t{11j6gG7yndcU7J}3' );
define( 'AUTH_SALT',        '.N?*t~&glo4E~i@3O.|Vsbf%5{oOAJEJZK*6{R]0_dszph,Tl[_:~pp,MQ~gLz{~' );
define( 'SECURE_AUTH_SALT', 'zHZ9D6>+Vqd%1KI[:#g|:fk7EGG3LMtXX3*tRHp~Z;f1wPtYBM7x&UMtQ[Lb9|fW' );
define( 'LOGGED_IN_SALT',   'XhE>n!Ya#Wx%PPl8Dv8<Ip[`i?N5]+4y8sG_gWn+a5Bva~=O`h@^v0bOYcy*24Sb' );
define( 'NONCE_SALT',       '6ZBW_Dp[BVU9s9[p}O%!1=u])3:t4/u2X<g:9D)o{bLNWQWQ|B#.W:;JNVymXDLF' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
