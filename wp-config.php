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

// ** MySQL settings - You can get this info from your web host ** //
if(strstr($_SERVER['SERVER_NAME'], 'localhost')){
	define( 'DB_NAME', 'liquorHutKawerau' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', '127.0.0.1' );
}
else{ 
	define( 'DB_NAME', 'dbst8kazvn3ctc');
	define( 'DB_USER', 'ugpyjfbav3dpv');
	define( 'DB_PASSWORD', '(3(4jbol}1c6');
	define( 'DB_HOST', '127.0.0.1' );
}


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
define( 'AUTH_KEY',         'xO8/tW(P)`;OkV7?fkZ&0C0*n:D@mo:1m(h@(CH0&D+-+x7bFeL~T7{lG-P.Y`C[' );
define( 'SECURE_AUTH_KEY',  'i1t#Q62S&A,M-xH,x/{biff.tp)$<|5!PA,Y`?w6,+z@*?u; :$xP<MhNaR^U;.]' );
define( 'LOGGED_IN_KEY',    '!I!w[7/2CM4$$M<fwsQ%Toh[>:IJv3Ek]Wh[6}{r@iVgolWn*@zetOD z#B:FDD%' );
define( 'NONCE_KEY',        '%8B/b,(YC0d({Rx1p|@vI7xe?P1n+wqltWpWMZ%OGKp;P!FE[.diJT5Mj_KRO4,K' );
define( 'AUTH_SALT',        '~$zA<o!E3ml$o}2Apiv2RL2RLr^wT+w#EJc [w+T*^D/[2/sFwna;&rJOWDwLAAL' );
define( 'SECURE_AUTH_SALT', 'Y;3JxbodigV{-3OTE00C8v(L9DGOu<jwIwZS@pvJ3/<~u2U3V2ZNGsCjd-$)no@n' );
define( 'LOGGED_IN_SALT',   ';l Xb)czfM}P1kG~}?}_gr^vCC_A#O(voDK$((Wbia5.&#NR6Kg#sO5C;k+X4#CC' );
define( 'NONCE_SALT',       '{MqN5Laqaf,j%ba%!>FKr5-Q!an^Htf:C8qLMIilY>A%KJfyO*hT8YPLT5*Z w;o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nzb_';

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
