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
define( 'DB_NAME', 'poornalakmalportfolio' );

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
define( 'AUTH_KEY',         '.C~vJ0ZgTHLE)q ,Ew ?VFr|gM[#>{GvZMN>u(hnkYb}mY!yQTyxf<oyD-;FxO.g' );
define( 'SECURE_AUTH_KEY',  'i]0H%_ooMe(]}+h9yHvz&JJ##I, 9a;?5.C7s0yQnN5H|TyA(!86AMM5.mrF1Mg!' );
define( 'LOGGED_IN_KEY',    'q]Wj-xQL_.eRnA=Zg):iJh0L=Qm__t*Cy.@VD!DlwnDb,G_j&9@,{u3RAS0dOH8`' );
define( 'NONCE_KEY',        'xpSZO4Qr40..(F7ZV*2;(B_QxE)Xof71/,u_Ac_:[|_3ex^zqL+J{[/hKxHK`>c[' );
define( 'AUTH_SALT',        ',Gl5W+q9**po>(0m!CXybguKdGSVlhy.52dk}+,V|Cobr;%I8?.jP2UqTg~8I4wN' );
define( 'SECURE_AUTH_SALT', 'T$7Ul>BmMnr[gCkuBkv+mA^N`|i$s<Z=!{|q8YX(mvZr.aJ8tTImYES{c)K~xRrb' );
define( 'LOGGED_IN_SALT',   'm&!G*KRRAOXM4W|<dvi( +0`^9sVu;GnP*7?f6i)~XIvDg]Uwsw=J,?N=o,^sBB ' );
define( 'NONCE_SALT',       ',I+reo6NG=sMiO%tSYbs>rmi7%0h,!*9!q[F}pDR`L#p*-Z]q~%dN%{5-jIuQc%V' );

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
