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
define( 'DB_NAME', 'vzdravkovic_digitel' );

/** Database username */
define( 'DB_USER', 'vzdravkovic_digitelUser' );

/** Database password */
define( 'DB_PASSWORD', '~F^bFdHm^t3o' );

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
define( 'AUTH_KEY',         '/&YLC aVQ`rUm705i5L#se3p#j4C6g[Np@aXyxNhq1#e|2ER*23:T?_qO4rGp7>q' );
define( 'SECURE_AUTH_KEY',  'k5*;{w%s5 -:z],?t7k_VF2%2UG/]YF1>#aKf^;2> be^,w== oh}USV.}mr4/s$' );
define( 'LOGGED_IN_KEY',    'uLdjSZBW+P+%`}m_?haXyuEO^~]QozGL$] <A6V{8ys+Dy(P7f2G8}<}`7h]V-As' );
define( 'NONCE_KEY',        'pb|H%,c0ckF>Q5AuUHCfL-+^y^OSBM;;mucf]ncxfUAdo.TUz0qiG]p=}`~7p/)k' );
define( 'AUTH_SALT',        '%JBG2I-^jRgomXSNyS@smoLOyY*P,oHQ%B#FBDh+T1Qqzie><z> /30!G0Kk^K9i' );
define( 'SECURE_AUTH_SALT', '`Y5>ja6?1MY-0DxS=j(Gun}){&APMd*h,:47kWCMRby/<L MS#8<=V?)9b#EwwaG' );
define( 'LOGGED_IN_SALT',   'lhUvEwqcOjw+=D]!ip05H;2oY(Log0+}H~tKvzw<IHyf1Jdq?4;^=Qw?!Zf5m}D(' );
define( 'NONCE_SALT',       't:|dDUu.2EOydSxkR=9c|O[n~k{/weMSA6A96.O;qqp*|U%g_a;=$2ytv>qOGY5~' );

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
