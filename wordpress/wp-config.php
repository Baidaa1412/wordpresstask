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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '&@#i;{XSVtlw&&,gJ.d{,7/Z!L3u:MgBc+Ejp,;Bzt1x*q(R1pAXd1(wZG#od9O3' );
define( 'SECURE_AUTH_KEY',  'H1~qhw8f[3muXm!Be#AQ<8AlIQD*n!U`cz= kU3e65jco@f}zEs27]%wG_)Swb!,' );
define( 'LOGGED_IN_KEY',    'bh_]Ad{s{+9,2#T4[wq#ny3*Mr^#lROKWei]ghzf68Td[+!_Od$[ >j^^QQOFq)q' );
define( 'NONCE_KEY',        'vs4BQQZVn}C<%{-CdhfP0iSm3D!BlC7bUL1~v,/ry?)FREy+Kzl>n5?{GN!0*w&;' );
define( 'AUTH_SALT',        '{qUb^?4vQb%y#5jd`dbA{?{gBW>>GsY3k^@kd_8/(QM2q DVoeY/$t}-;@@#31Gy' );
define( 'SECURE_AUTH_SALT', 't-)g~l,%Wb!1kJi)EFdM@E]M~d9Jkrh>&!;.FiomUK8US$+EQAx;O45=7;~j%AOe' );
define( 'LOGGED_IN_SALT',   'sucd4>51CbUZ&wiVi$5?%eR6IOnUtTM n6i,2RofhN9aZc,p,rN$jpGksiVx3wzg' );
define( 'NONCE_SALT',       'O|B]+%@yn:}d>*zP{:`0h3w*ZvptdTg(7lwb=J%gsvHxD?h?NQ.&)Gl`]`h5pSfy' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
