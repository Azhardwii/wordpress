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
define( 'DB_NAME', 'dbazhar' );

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
define( 'AUTH_KEY',         'kT-)yt_C2iJ@I5|gz+0l>bKyG32TE44xhixNj9%qEFdj^4e_<W*77J:C3G@f4eJm' );
define( 'SECURE_AUTH_KEY',  'z8 q}_m+ -tj8jQykN4&i(Rbh>c{<-U[vEWJ~p9@ON:C]K^Cc[$9ShfE|SVA09/v' );
define( 'LOGGED_IN_KEY',    'j`iGpJL>,:5{v9u,^^h+k>Q<[>K;!l{X3}Kxp5<SwKz,tda3[:k$H!=cvWmZ6ZI&' );
define( 'NONCE_KEY',        'cXXVxIfjoQTam]@{;)]pUi&z[+ koE=K5O|u-@3c|l*gLS%-,*utTern!tXO)w#q' );
define( 'AUTH_SALT',        'VD#4n7af*5%>sr,YL(Sq?6K#AKvt<frRC-=t3zR=#ph+mbf za*SSciYdK=:`do{' );
define( 'SECURE_AUTH_SALT', 'fcC/G<[>t|8k&u ZjK%N^vbM+?DP=Z~bo7 b@,8r.sEs[Qpcf#j+,+onK<0[f]M;' );
define( 'LOGGED_IN_SALT',   'XkaJ) caTmW-}TN&6G}5T418H5|J2]8PkV0=c)d4Y^ZuQpZ$|<m&yQQ$$iaVR0GK' );
define( 'NONCE_SALT',       '@X$g&w!}TdI;:6Ls70vb#>RR3_5ei$FrUwH7e%D.SZ1z<m:JgqJ5hd+X_iyLAo1w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'biodata';

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
