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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'quanao' );

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
define( 'AUTH_KEY',         'lG7/eWd{8/ApZe&isl9irH9X^jrkci`Mz}@7j)fC6q-.OpMm}G+<F,3$)q^tfBCT' );
define( 'SECURE_AUTH_KEY',  '$8);-Oxo=2LKd*.:=E?&zE<3+@ju+Dp]+IBX!)!CV|P.q/I<;tvBXv=]<1z&P)),' );
define( 'LOGGED_IN_KEY',    '>=|~FI5HqV]Gax8faEr1AhFMlE^~$c~fRUiO1Ky*JDua!}e4k:&+e^g.D3vMN6oa' );
define( 'NONCE_KEY',        '?hFAI@Um{UYSwa>T)4d=McR wN+=aMx1bbj300m3D1ih;u@vc.]t8}{Y3EL#]6n~' );
define( 'AUTH_SALT',        '-eHfd%=*{+ARjc`0!@<6m3?bunhVy!}OxUn5i1mf_vhEB-1!(dp*0USto<3aRb`6' );
define( 'SECURE_AUTH_SALT', '@R^GjVc)`ErbPB<_4gy>t!}eUth!z_}l(Twm@S]f8CZ 4]r)Kx hh7^rgRTw=pVG' );
define( 'LOGGED_IN_SALT',   'JtE(twvD`v.7M8j%XaEY2,lsj2Pu1][?N773sU-^UkN**)wBaNwVQDDWMU(uQU@A' );
define( 'NONCE_SALT',       'zxi(io+zND4yQ@*p,yL$4:eN>KW>J?z|zuN<{@BNud/^)qB)QKqO-|mXO:g?GEU3' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
