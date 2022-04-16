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
define( 'DB_NAME', 'wordpress_ADS' );

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
define( 'AUTH_KEY',         'Ib2c5d_1e!=R?-*ow+]ob^aj={u.>YquSFRnU+A2NJ{0V ysARpoEv_YSUBhpW(s' );
define( 'SECURE_AUTH_KEY',  'G<r`x)Y 5:S$PX|C/Q%nL6`_}pU=eD5-<abgt8 !p;ZWjbzT6Xugj4Hz=j0&|bNK' );
define( 'LOGGED_IN_KEY',    'B=}F-|_ymo`j [wH5sH>(M%j_p@x8 Byps;vJqjQv,o.ai&$ZuJ#V1MDsD$S-/dX' );
define( 'NONCE_KEY',        'mrz|Moo`!:ET|YyL`E#bD.LxY&)TeZ+^%6{,?6y7~(/;9];f4C!(wGg*H$b+>5cm' );
define( 'AUTH_SALT',        '<3RGCJ|-fd]nxkQarL:K6w~[N]^4Ku><rDVs%nH(W|P70h4-fS}lL=$rV$#Fv*)g' );
define( 'SECURE_AUTH_SALT', 'R`-NoI%vl|b;sRdc+a)It0/8]I.5ArE!BZ2Hq>X=+aS)$nah2#bT}3`nTFi=ArXQ' );
define( 'LOGGED_IN_SALT',   'TYb@<~JM|X=s!E}bd >Pvb@}21C%ww-|Z*y_t2/2Tq@ KJ2+38osI E(jAy9[vS+' );
define( 'NONCE_SALT',       'yD7?_^>J[Z)<WM$Y5XU?<;<%@#X;p}kjK1oL/`3>A!H%;R]+3l@%/9?qklVi1%_B' );

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
