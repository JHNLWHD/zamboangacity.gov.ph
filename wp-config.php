<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'z4mb04ng4city' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xk00swB@a+U)bLbrXp^B.5>KmGNvQZX[IW}{QF)0wpCswdif`HVX)LX`4#g&Z!p-' );
define( 'SECURE_AUTH_KEY',  'yuKWWfq3}T8{fOd&r->8p#uQ9; jbJc6AgL1L<,o[T~@i<>mdk eZ1=Cp;KIsqN2' );
define( 'LOGGED_IN_KEY',    'G0+w-HzgZC#l{YOvwrB?`ziRN(yl5-0NLHEB7n<`B[mF7<N.2gH4.fa;;fR!6$dD' );
define( 'NONCE_KEY',        'AxRK;Bb`,6$&^j%hY*jPW.T?F8)4)]iX-q >=G5@%(&/c/r/f8yT0r1}`tcaH.:Y' );
define( 'AUTH_SALT',        'MaEq@i?QwJQW^$vt;olG^5v~zAxny%xG[hy-]6gd/auJtKR~((>:-}L+Mv[o/iDU' );
define( 'SECURE_AUTH_SALT', 'j2tJ7ls%h,JULb1c0EyK%-Tm^k!wCmlBgMT]L..7;E85Fl(9O.;D0]7m7~e73I7k' );
define( 'LOGGED_IN_SALT',   'G9OrFEx=]T`}N{{@@npI^!6wk$x#CD0yN5x,s`ewBK[A[t@NoE*3(l1F?1pUJ}@o' );
define( 'NONCE_SALT',       ')V<Fv>4hjFS$egd+hH=6*p-5vR(!2(kybG>hP?R|HD|ul*a2[e`HQ3Mu!`=/=R1q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
