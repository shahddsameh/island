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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'island test' );

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
define( 'AUTH_KEY',         'OzG8@W-Q`$He55t[^3t4%&H/L{%7K$/uyO9NF5raHTr<gZ]J_X]&(lh!R+ePV0jU' );
define( 'SECURE_AUTH_KEY',  'I%6E%3]V,c_,rEJyk]l5^/SR[;[#wF,gYiH#5Z4=.}bRC^GP;br!5dxU*WoI(b^T' );
define( 'LOGGED_IN_KEY',    '06_w`T@,6{G6KO{pg*e!A>T!6<6,~whenr|eaJ=6}a]?r2MGT$E5A}I[V`DONDWS' );
define( 'NONCE_KEY',        'oXX##L]W:T~:{7zn!>##fc4U44&9PuofpZm^6;| :i!B!i$+Ck|q].ABo1E=.zaS' );
define( 'AUTH_SALT',        'Z$l {#}<1MQU,IDm!jdeHo5B6}j33]Gh0OK/f+.B,gC.4~ZM_&b!E$9j.jO?9_iO' );
define( 'SECURE_AUTH_SALT', 'I8do~Bv3&TYU)H%YbR0[a?bRnSkDj_bcNRW#x=At?<:5Lq{-(YH{3?&.a}CTyy1u' );
define( 'LOGGED_IN_SALT',   '`DHO_6}^XVj?.[PpJx.SEUDdKJ%u?Ab0X;gD,H8d+$Kp<!.P4{< ,1hXxBCFaC0K' );
define( 'NONCE_SALT',       'c~vrc9![}TcRW_7(1j4#7ILU1vOX%i{*1XjksQ?vH:px,OYzZqwnT>jLvN;?/;4a' );

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
