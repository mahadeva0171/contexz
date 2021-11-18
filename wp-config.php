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
define( 'DB_NAME', 'Contexz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'D6wa(zsU^M}dXMq28xpZ~b_n6jtaBv-+^B(Kum?r}Z0n7MacHV[{E6TNUoD?s_$m' );
define( 'SECURE_AUTH_KEY',  'E~=qc^~faJRA }u G!G/YgpBBX+>_OZN.c_&5B%m_ANm.rw!Heqh?hb%RHeeQZ@}' );
define( 'LOGGED_IN_KEY',    '+%#Nqo$3anRQ@Q8m[T-Eyq y~sRqgcN=JsA(98<`2l;@NAWt{_i0D=%IJ2S!@ozR' );
define( 'NONCE_KEY',        '!,6QyyKeImcW%4S JC]uI%^Y%L*:kRG64*Yx8SmChi]<fk~IzxtLtI!s@3@HhK;J' );
define( 'AUTH_SALT',        '<(tMvxAr7!?g@,dNAa_Pz!XJeAnxP(?j$$wuzbLQ_x 53*5L#lG*W/CdOUMK-ykr' );
define( 'SECURE_AUTH_SALT', '$7.oe*X{`*tb?lYIkzc,ze#w$dXZ#jR6<P*3@Sh$Mw=R$)8-qW .oPl]jY8b.<20' );
define( 'LOGGED_IN_SALT',   '5p)9=nf fp0E*%0oAM(`;s>wO*GFjwL%d&d0_|8xc-PX{gpMK%j]!/,`4dIF?d ,' );
define( 'NONCE_SALT',       'R6Y@{Uetf|Kp#dR|DMfQ5]xj.d+=&g>F)9Vs/zEvDo%A*pXfYzf%G]iU6:ZQ&abi' );

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
