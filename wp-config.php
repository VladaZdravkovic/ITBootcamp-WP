<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'vzdravkovic_portfolio' );
/** Database username */
define( 'DB_USER', 'vzdravkovic_portfolioVladaZ' );
/** Database password */
define( 'DB_PASSWORD', 'l&,fS={RbbFT' );
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
define( 'AUTH_KEY',         ';N8eaHadxkeB+D8LU! Yl4[(WGk$4_z:s+&aBMQcy+W;[zQ<LdV/G|#}1AiwjSi9' );
define( 'SECURE_AUTH_KEY',  'Cc0y+y8Xe;/c.?3di`aJ6_2-C)yUBT[X_;*VZrA^IlmmRE r+NP<[o6 SL_W;8uZ' );
define( 'LOGGED_IN_KEY',    'JIH&qwqe(Ay~{WO4@dVn[M$q7B~u~6titt9&o1TV*v[0|%gmsFAlO,$(3qd!zi&R' );
define( 'NONCE_KEY',        'ODDE^[;(<?qpqFb,J)j^@<K$2]EIyn}M`G~ZjEn}qVuYu+?U2BOXX?ir[DL[vK%0' );
define( 'AUTH_SALT',        ']w7#X0hz<Fvn }OYU[Z&fQziD8TExVdi-Bg9xYM{Oh85L),VS&B!3#1C(UJ/SyL(' );
define( 'SECURE_AUTH_SALT', '|@Z/G-,}e0V<uIg(;8CFxs6NA3cfowFe1h6 cs$F6<s)hK?Z2x}v)bV&2WSs}gd4' );
define( 'LOGGED_IN_SALT',   'u}qKyWMO6xS=!n$8aC@-qV}duhty#HzqKbUd$x;@ki;xrWas`WMw!+e~j*N/MA%n' );
define( 'NONCE_SALT',       ',N6NIu@Y3={xRWHj VsmYuu_XAIF=&Y~F!Of/Y,<i<1!)1aZ&]C87g7VKSO_KL2W' );
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