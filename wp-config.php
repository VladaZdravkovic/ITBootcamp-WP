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
define( 'DB_NAME', 'vzdravkovic_roman' );

/** Database username */
define( 'DB_USER', 'vzdravkovic_romanUser' );

/** Database password */
define( 'DB_PASSWORD', '%sye)1^K)8_&' );

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
define( 'AUTH_KEY',         'lb~CmZsMenh%Y4G;A[3<y2X7x!,^%AKXt9ZPbrvIZEdU^AbO`y[:/Rr:ur5;ttc>' );
define( 'SECURE_AUTH_KEY',  '^<DoHuwQe7^xW~MiF28Ote;6LuQBmYVT({;J_^4mF4dC|QDK<qq*@T51sRJLoj1;' );
define( 'LOGGED_IN_KEY',    'mKgeOPr>y+&T~R5^=FT?V]4jvgq}#{Be<JWLH?lke$xgZ?>_Z[,I`Xeq,PtjvCU1' );
define( 'NONCE_KEY',        'ec8,9[l#ZFp^*W}qv({QE42Y7vg|BLv}W1]np53C1_j289?4|$}Le.EceZU*5HT^' );
define( 'AUTH_SALT',        '6h+y!elaf3qmPrx?cw~tDq(f~@7YLDa`*GsEXKy#:AIt4so=gEC.Wh/IAJm@-s5e' );
define( 'SECURE_AUTH_SALT', 's)i*w%!L&NDj)P; OIyJZ,HMR<>@w(jx{eD.%7Uhwk 2>1|(|OGKF2S{s5(P7}bZ' );
define( 'LOGGED_IN_SALT',   '+J~_HKLWvQ 6B+F%sXgr{%AK$_%a#^6%M(xJ7!BK||jUQPF*{ZF(5Uj^ke+s{vud' );
define( 'NONCE_SALT',       'kV88Nr2,[>u}fnVc9 IY9E,mm O#idS]nC1,;?fkLOp7<v}kN?uH*>Po e4iR|_4' );

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
