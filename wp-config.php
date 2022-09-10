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
define( 'DB_NAME', 'vzdravkovic_trpkovic' );

/** Database username */
define( 'DB_USER', 'vzdravkovic_trpkovicUser' );

/** Database password */
define( 'DB_PASSWORD', 'd7,ntX6$Pcql' );

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
define( 'AUTH_KEY',         'PZB^ ?{:Z@B42T}LroF{]0<IAj!SSHK(%hzA;l}Q%&ffu;oY^y=7y$My$`ES:rsF' );
define( 'SECURE_AUTH_KEY',  '<]b^7M62d&?Kqb&i*eMB[9TDQJiHi?u&ir1~k#9[Wxy~CMY3,Ua;0C(Fz]$0M}W$' );
define( 'LOGGED_IN_KEY',    'HwlfH^QdPXmWhF-- 8?VkGxo kC,AMQZ=5]5[39%S45-;d?fGs1~&JHq*|} v=0(' );
define( 'NONCE_KEY',        'tgm#q=n|Tl%~pydq:`|Xx;Gf,Q?o_V?&?~;9N]FbHFw9jEjyNXIpIIbB)m$mwQb|' );
define( 'AUTH_SALT',        'a@2BDsj3It1IM3+5wY{o}OYCud#InyI_q-4a4~O$K|vRn@p-#{F_CH;,z^&k&duf' );
define( 'SECURE_AUTH_SALT', 'LukK]U14w{YLc(oUJzK$KSrb5M:v<^n0hs;rxXQ%$):Hxz|$t-HX(F-_=vF}a]!!' );
define( 'LOGGED_IN_SALT',   '{N=U_2G$?&9|54gHmqtms:-nV..L$/Wm6_T4L0@&BA1cdeKGy_Q~~phL3K&0tmKV' );
define( 'NONCE_SALT',       'KUn?S8|<5I6f7f;_?EDv7+8tYl33 F?(..R:7l6]$3s3a<3B9[Oo!6OkH{%LN/ 8' );

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
