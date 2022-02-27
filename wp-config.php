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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'git-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Mlw._3N5c!yE6=?<#NsI0fn|$<.0JSIi$A<*&KjM`PJ{j}ev=[o#7SWG;Knx{E.&' );
define( 'SECURE_AUTH_KEY',  '%!_v>iggUk bK7Ym`dC=k?r)vkbBO23/NbU~F<u03!z)+v((r (}9iE62hTOw<]>' );
define( 'LOGGED_IN_KEY',    'HnVG4f-TNnQ q~l~pWY[*0.QVG>b(kNp<f&~z@zz*cwpTAb3K:QLUo1Pti`/{U;<' );
define( 'NONCE_KEY',        '|D>W_=%/dvr&XgHcv>.{]v|uu1_*>l$[Ov#1)j6}N[vZO>z^P_c`mZF}kP[<2u)^' );
define( 'AUTH_SALT',        '*Yf~x^VRz`R&T?~gJ5)[fZgA49C{WeHIc5GvL$3?&IclMP{p~blBcB/_@*Xvi5`a' );
define( 'SECURE_AUTH_SALT', 'cy+$Eb(L:{n?h3`0q%UZ,aF$Mpe[Yp*rtMvYsi;1diYvS!PgIzUB6RZ4;uYoYUX7' );
define( 'LOGGED_IN_SALT',   'f*s9`4Zu{5h3.-UWS.)4[cr-A!LHWJ)x]A)HN,)>~4cn:D5?Zi2%.rOw?Y*#q3F4' );
define( 'NONCE_SALT',       'ZL:;tF*KwU{dv0=?`3bc)Jy8)xe.ZVwcwql>_J_n)<Q6v{/X.M5>Z2(e/zs$eN{]' );

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
