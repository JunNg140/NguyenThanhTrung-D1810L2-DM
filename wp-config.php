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
define( 'DB_NAME', 'JunNg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'lZK],TbU9sCH7bmm+w(<MOmp<zR>1!.4ZgAMWAV-i+=oW[bZa6vk6PFAS2MN08@-' );
define( 'SECURE_AUTH_KEY',  '*Lbi~ZW^-:concv$eb(;XX^t >yn7*nJy}Sz]*WAW3~FZ)CdyZF#LdG)C8Q.1He7' );
define( 'LOGGED_IN_KEY',    '=f_-Sv#AHO H>YEtcdfzpH0!lX1*[n;G-6Wd?q=?X?woW=kK@1U72W,O7s<!.yIE' );
define( 'NONCE_KEY',        's%QR4@ktUP1^JWlt6G/0G9:6aC)zw[~vA,QOdS7RJ%=jQvWp wwA3nqK_1TDLN~B' );
define( 'AUTH_SALT',        ' @|t1 @;^E+{{A,)T..h,Jxt!e2[3-~r!&aqsC!_d6BIkd?7 <afh5O?#z}Kni(f' );
define( 'SECURE_AUTH_SALT', '@qtNh9ET&8EKHR!Nh_]vnfYWO4,vcy ^h KhRI;&GGJp]F&Goq*;3Mz~.e[hN@_,' );
define( 'LOGGED_IN_SALT',   '.UV{2:sZ@FQ=.C7j8{hg!yH}-juZa(iQq4azphz<FQT|e-`TiM1XTbFl1F)$A}5x' );
define( 'NONCE_SALT',       '7$dq0p:c3+_t>[$s/@s 6Xa|&[#GxJeBxI~va&v,TM`dBo{9BtwG@@($R^T[n4Pw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
