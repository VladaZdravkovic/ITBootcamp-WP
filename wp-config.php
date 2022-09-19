<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'vzdravkovic_projekat' );

/** Database username */
define( 'DB_USER', 'vzdravkovic_projekatV' );

/** Database password */
define( 'DB_PASSWORD', '_6RF^(X^nLQv' );

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
define( 'AUTH_KEY',         '?>]h*k+V%LLxz,i~L*cl`O~CeY,5iweyeD?JYH8}ERmP:v+ju#.bHC{w4Kh48` m' );
define( 'SECURE_AUTH_KEY',  'K:QN>yja%l1gH9+ZBcuN=*d|<*~yxRQfj2mmfTrrTcIK&w-L!zz_7a++gx6 t[lj' );
define( 'LOGGED_IN_KEY',    '>b)E5|/8;Q%ukWp>1}O4y#RNPq+m);SyEV[O2Ovo0Bqvn_:/})G^#p_V*$*XA:S9' );
define( 'NONCE_KEY',        ';[v1=RDJzk<,?0>kG1swAZpyY=aZ~m+G_WN@|E]dhwvJ1*iR^Jwt|V~?8 L[_TfT' );
define( 'AUTH_SALT',        'dfKQ~$Bm-BnGeH|X{<I;ZiB}<F$6&KK4p$@%PQo`sd+kRRA&<zn>p0N2-|f$@o-.' );
define( 'SECURE_AUTH_SALT', 'y!hY9{ OD/nh`osfSnD!%/ij&ruC876{P(bkPqW+`Ha~]>sOcFZJimT{|0#2q?K<' );
define( 'LOGGED_IN_SALT',   '(Az5k+Vi,h=NeCoK#k/s[Ic-|xoO|nsIUj7Wq?:{gwSkc3a*`R=9d|[PaMUD~n;j' );
define( 'NONCE_SALT',       ',2c|Ng6>zLlX04=oH];d$E(wW<vCJyraU[@*#O7l4yEONtE7;]f})+q$Iqp6z#P3' );

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
