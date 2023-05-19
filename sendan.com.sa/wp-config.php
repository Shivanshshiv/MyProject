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
/*define( 'DB_NAME', 'sendanadmin_main' );*/
define( 'DB_NAME', 'crebruns_web_sendan' );

/** MySQL database username */
define( 'DB_USER', 'crebruns_wp730' );

/** MySQL database password */
define( 'DB_PASSWORD', '6!0S@JHJp4' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WPCF7_AUTOP', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3)RJO*M#!mJH{L|`.]zoXOoAc0sO#&}EuSAb?NBA5+H7W/ACXKF JqxRIPEQxcpZ' );
define( 'SECURE_AUTH_KEY',  's:RlN]Kzi/Vv7+qm/}6aTK;A^M#uh(8Zt|j$o%GD=`WveR:sAn$py)[yCDI6J-6J' );
define( 'LOGGED_IN_KEY',    '-k>,kcSf$j]4`m9Lmttxk3ze.,H 4_whz6xlhF?wWXR_@~O*^`XvUp#lQLm&E:>!' );
define( 'NONCE_KEY',        '%m&,y!b$7rZxE`@4`<fMurw&W8^Up7xNS&{cc!)R=w8HOwg6qrS3ooRjn$~*gChq' );
define( 'AUTH_SALT',        'nLG0)12@;.NKx&GYC02/7`jjw@_lw@^V/!avAV#jXF>qU%LG|skMmnK^Q] irOd!' );
define( 'SECURE_AUTH_SALT', '#|J0?Y=H%lM}Vl[+)4z9]TdCB?guDs[5>ZI06F$mFdx}2ob#5V^q@8lSh%&LV=Np' );
define( 'LOGGED_IN_SALT',   'o5BvlW@bg(N7;=GB^g;EQ,!ozs9YH&Rp_=jdAH4}K+*OGPa?C1+G}_gs&ilw`Xxp' );
define( 'NONCE_SALT',       '8po_=5MR6.4brEVZl~ph%hxUItgab_UR<U[|]CY<ZgX@0lH=v]RTC0,@m~u9qEEb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sentech_';

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
define( 'WP_DEBUG', false); 

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );