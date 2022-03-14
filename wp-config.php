<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u300895621_2gc08' );

/** Database username */
define( 'DB_USER', 'u300895621_qPbGH' );

/** Database password */
define( 'DB_PASSWORD', 'bkHFBTNzr8' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'z_4B/V-AZg!3~Y~p%h&uw^O.%25vzF=ZU8m)VxK*6oT:t{}rN{=1WDgAu#5T;Ta2' );
define( 'SECURE_AUTH_KEY',   'wM>{MwEn8e*v zGcAl|1)1&l2o:69K[^9/CEuDpj/3oD,o?m8bH3G*I^gSUfkD#z' );
define( 'LOGGED_IN_KEY',     '2275]s}[,nJm6doknK;Yaz!fllah+tBmpm:@Hq4Z7{)A2!t!dx`yI#7Wzb%@iM,>' );
define( 'NONCE_KEY',         'p0u~o7V$~2LX.JV9PkS;e_DGM/FWZFdP9{|y@)Edp,qkirT,oG,mw4$XsrUCVD,o' );
define( 'AUTH_SALT',         'Jw`,}@ZI^CDC>PmFuGr*xnkx:6r2{50W)#RLM~P2n<S-3#BS^Nbw;[<WS6sh}5>Z' );
define( 'SECURE_AUTH_SALT',  'O$$N=l&!ij{&[0u2.gcylM|+9,2^TnvTP&Sv;C6q1!9eC<~?=B5XeCS|.i47}zJx' );
define( 'LOGGED_IN_SALT',    'vjp]THxKuYZNdXlHLxIcLQv!F&jF}C? n0eN]}/u~VUp<&E+vPUGSz9[$O*S*.?#' );
define( 'NONCE_SALT',        'go4:X{tIA3a}^Yg>]1kzND1<t$HPV*kMSswmi>/`/A RzVuUTmmkWw2DQ%Ibg9]+' );
define( 'WP_CACHE_KEY_SALT', '0,hvh]9kVgG ^^]?/GNEicwDOtv~Z]Voqv{(M!*&U_*V[Huy&J ,(<`!H{=@<gPC' );


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
