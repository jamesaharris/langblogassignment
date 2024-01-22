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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'y}+3dG6yQhk/m+G@fq $=T1LKhi!<IcCehqE<~5bi;~C&+mOkLUP5Ir2FFZ,J64k' );
define( 'SECURE_AUTH_KEY',   'dB{*M(^t6NF%pO$l+O^Taj r(uBBg5$wLv9BSx7VwJxmYvsw#)zw>B!@A~F|re)M' );
define( 'LOGGED_IN_KEY',     '{#OoC>OAeUjU_4A!pBE,[ZuSJ7wZ,Aq90*?I5ys:&) 1@d*)_^FzSU;uN:=]WQRH' );
define( 'NONCE_KEY',         'ecqAcDqjSnLIpo*|][5vbV4KKLM-FU@%n<Ya!R.%#UTK33P@ISb?cDy&!@tsGBaA' );
define( 'AUTH_SALT',         'tq)=6lT$zDCO=zku8pT*m`%{;:`hhkmJ~e=-|/OqyV*6;ls[z4Xsgd>gDO4a e&N' );
define( 'SECURE_AUTH_SALT',  'QEM@y+W%9wb)/@<D_2W2Z.?}HYuU*8>;EGe =- cY&20+iJKpzHx/4]Z`3Cn_J1R' );
define( 'LOGGED_IN_SALT',    'ZWVn)3Jd_>qGZ.exB-]6H9ji0!#4(YCvxbgZG1C~!{9j!*UKnw`yG}nEE&IiG -5' );
define( 'NONCE_SALT',        'NVX7D!.3/a=)I26DFv+DY<pl{gC-U9J{  4<tqv3za=gX@}U;72SxCLcrEo8+C`U' );
define( 'WP_CACHE_KEY_SALT', '`5qw=z:^8H)g+2=6UsUzVpP}l`PrYY&mU&W/q1seY:lb%pmoRsGSdg;tKo$)i@rr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
