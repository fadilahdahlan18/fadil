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
define( 'DB_NAME', 'web_fadilah' );

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
define( 'AUTH_KEY',         'mGA?R*Ni:iJ$F;>9sBF?q-WDl4D gp{;d>]6G:0<AG&T2XflA__9b[0Qq2Dc?Nul' );
define( 'SECURE_AUTH_KEY',  '!D]~U.U<}2~h|WIP!i<sNulezq*Azb(p]Y2$uYMQ7$(1$. iJ^=pWIb{%vPk;7.{' );
define( 'LOGGED_IN_KEY',    ' ht;[c gC_`W}Gx%r(lSH+o_.!T#FIk}$eMF{yD~sxII8zRRW=r<D.q`)z<%>](<' );
define( 'NONCE_KEY',        'ROg^d%)*2)6c`D?9=0r@z(;GqvxuTq;6p^sK>Um9{RpX_AZq-}1;^#.~;5&B`S,c' );
define( 'AUTH_SALT',        'c^XN+v8Ik[hUUOP5jd xmd*(}exJJIJ#aaK_Z!r31;#HZ)-(=xc5/14@S?ZS2|ng' );
define( 'SECURE_AUTH_SALT', '.hj-nPr8F2HXeKG!MMuVR>fW;#K2j1Qyc(zFWK{M<[&ud,S`$JSud,0-oGG,}kV=' );
define( 'LOGGED_IN_SALT',   'I_IgMBfeSK(X F<$tV{xwV<N.lh^T~AHJ5_7V (B&Z35=(MUerzXFXMo<+<)f?)K' );
define( 'NONCE_SALT',       'Iy33@Q=iePh}bYQ2#{2VJ?+k]6,Yb|(U Z~&WBRQ!x;ZrR5*bgQg0|_EAC]Y;-?3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
