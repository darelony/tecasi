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
define( 'AUTH_KEY',          'E,{L#:nmA{jJ2+<Rc5UDlg KF~1$>y]~xjw]v#(_+snIoxd>N0#_W[#FFY/Iy<=i' );
define( 'SECURE_AUTH_KEY',   '?K`B7#@)3/HdCpefPc`#YqstC`ToHGMuLVRE|&1oD8?fu8,34sgDC2kerum&|Jft' );
define( 'LOGGED_IN_KEY',     'PTn9&/rs8 1Sv]XVs,{@1 BrH#OjzLy<*[o*:; |zTxG} Iw6V?G}tPE4*F]xlFg' );
define( 'NONCE_KEY',         'hu<}!nv2&B!^gnM%p`s/h5TQq)fEz0-M@lG^zm| P{FpS;!6fKFh(J,5ruJfkSw<' );
define( 'AUTH_SALT',         '2.#6$JAn:>-p-:;{i:M4Do4>7Ul}M(-hUPy(X}xv~jd^v[>lYQukt%mEUU`Nugwf' );
define( 'SECURE_AUTH_SALT',  'C245B12sQ57#FWnKD[NEYO=*aZE&t l7^7sHs%~[ypfH=K,jYuq(j-!XX4gvrQ(B' );
define( 'LOGGED_IN_SALT',    'Kpe?tFcvi/|g_|(`_j9xG@qyM;qBF?t`{eV&V:@zoyU*&<-!=e/F@<qj2l!w^&)R' );
define( 'NONCE_SALT',        'l5rIIG^<A%LZMP|MBJtY1]TP=$e$7gb6iCiNa;4S+g-j#6$l}uYaL6!k&!UDnCJZ' );
define( 'WP_CACHE_KEY_SALT', '@[`nIeG.e,{e&a;*}a^y%H9}ZJFRJ@&7ubGC+3e&kre3>?:b+w2s4Vve1cHWo={/' );


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
