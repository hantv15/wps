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
define( 'DB_NAME', 'wordpress6' );

/** MySQL database username */
define( 'DB_USER', 'wordpress6' );

/** MySQL database password */
define( 'DB_PASSWORD', '43haimot' );

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
define( 'AUTH_KEY',         '/Q3F||y=5}2P.Rx8W>! pIStAH{va~x{55:Ca^7K,/`ivyA,lx]>_i:t;SI4+(-9' );
define( 'SECURE_AUTH_KEY',  '5|!c.]m3eF@N{/2H~S7EIIrubHo5=Fzf<NY6_`z8y-YiJF1{+suUg%>z8-pOx83h' );
define( 'LOGGED_IN_KEY',    'q)mD6) nAl&Xm3h|dBCJ0x&LJnXY6<@sP09/M;jqg]o~X[;WtuDw_5%:uLLF0frz' );
define( 'NONCE_KEY',        '+%<P6BBt:Vw_e1^fp!@=a+vzW26VIJInk-UYY6?bq2pG=wdbT/VkpHFC@(`w20zx' );
define( 'AUTH_SALT',        '|%eO[!q`XL2zTOw)]mUB*R9<$9sGakg1~]P4>OpD*D!ROmvc`KNx+$ +7)5`(y01' );
define( 'SECURE_AUTH_SALT', 'u{{qq0Y(X.r $mA%?:!>`p#wr;f%^V[X-rG2iL:h>zyl&E9>v}{Y,o!_6)O`^aYI' );
define( 'LOGGED_IN_SALT',   'P(mm/`?x {|0lRz[~TNK}bi3!rbPkvKq%o/=zS8C}u1>iN+c?{W%@k>zoA0H9{n@' );
define( 'NONCE_SALT',       ')_i&$zW;L-jY*Qoi<bt)FRt|~VRn<Aa)*DaelX;sAZ@nh|JWxe+d]H9:&I`mHFgZ' );

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
