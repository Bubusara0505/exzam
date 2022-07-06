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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'hPUsHW~3JvBQTLDh(3.)0qzf~1j?@yw[a~ekNd/]^0Pq5(zCn4N[+!D8[8M @r0k' );
define( 'SECURE_AUTH_KEY',  'vsqEt-.%!_q~tCyMsMW ~jerP `2TC)jt;GKAX,?O;p/,C P2xGn7pe!1Jd,AAHU' );
define( 'LOGGED_IN_KEY',    '59/%:CxcvGI.So)y~1z^|(z)l%yocJ!R|.85(xNMfqkwhG5@>r>Tb#|FD0[(mz-S' );
define( 'NONCE_KEY',        '>AT;O&3+fIG}H*33l,Il58SKMNa?o9RS:-hN-YK=V&JW`fAe)66~-7z_q<^`Azb&' );
define( 'AUTH_SALT',        '^/RHBVKZt;x{vcZW[NL1nHoAi#Ejs3]C{]nUZ{a?6-<E[&Jh*LPZfrTQ.aJ3s)=G' );
define( 'SECURE_AUTH_SALT', 'ov~S&}Ot&,lOv:PD4CQ;7k&OnT{*NFt_G)(@mtjO]F+2[lCS5iU:.Rs )YNK~q_$' );
define( 'LOGGED_IN_SALT',   'Vo3uXt5MxtQeQyYNXmGED!eGmhY(4W |>N25_5Z7#O|SCG+Xc=Rm>Gc4j_[N@M6U' );
define( 'NONCE_SALT',       '5L/g]|!3q+SOB@BiPH,q1#r:By,gz)tT!XSEiQuc$s5n`%F@u}jSTz%vJG:v,6SE' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
