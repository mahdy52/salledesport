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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'salledesport' );

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
define( 'AUTH_KEY',         '4>7 r.2RYb;sFijrHK+njpz;[jX!GU5qZ:bDc5u xng!SSoArk?=<~Xh0?w/byIz' );
define( 'SECURE_AUTH_KEY',  'zd^NYC@PmvLz^CV[]yJ-KG3cT,y?7uWQlRU=g#-vo>;A47l8:H|<f${;{FJ}DBsn' );
define( 'LOGGED_IN_KEY',    '+Hd/4V+WgAo&y`vp0k.D4recnH; fWN:mP_sXu;~!D6)(z1*`K6jOw]yPk2Sz{Z(' );
define( 'NONCE_KEY',        '!Q:D=!VKP=6zr-5Hlo%0A|3#mQ@Fg6[(4z;Sze6ob5rIrm[%A)76z%/@Ec+J3]|N' );
define( 'AUTH_SALT',        '-N}KQU:x^#rPhy~C&H{zrx^__OV@t6qCIj4CLo4p_`sCDv8>H;5r[eF6[^me)(~s' );
define( 'SECURE_AUTH_SALT', ')P5pHUz_:B[x4*R1*@zhPW$xi7ULov!FMbU:Yv39D p}>Wu=ioI]bv My6{v?>RK' );
define( 'LOGGED_IN_SALT',   'E/}2vQ=?RtC9f`ge93jM.;)WsI)TXL/4UfwII8Nb#[+$td}~J9 o-KO;P;{D(5_!' );
define( 'NONCE_SALT',       'hvdZ,6Svw|k@U.o]blL-KAa(^`_^sch]`nvGyMm~RqC8| Vq@|?jeh?+ZQ_h^1VY' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define( 'FS_METHOD', 'direct' );


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
