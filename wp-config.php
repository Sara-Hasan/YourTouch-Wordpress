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
define( 'DB_NAME', 'yourtouch' );

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
define( 'AUTH_KEY',         '09Q?7ZUANJo_J[]>g5U?:jtU;k)@$sj$Q# Jci6y>kki`(/OYP2bFR4Q2EcjDFm^' );
define( 'SECURE_AUTH_KEY',  '#)zb<Jqt)F-61&xjBF7kUzR%$M2#RJ,gpz8|d3**GGlYF3[+,/*sMP5SMZ*[Ftfd' );
define( 'LOGGED_IN_KEY',    '!S,0a4;ll+Hbu:=60e]_>>LY;>:s2~_HFevg%WU9;0(]78%w`MO&94A!5}}$h.]&' );
define( 'NONCE_KEY',        'T4cj|siDTUc?%K:nSJZ=[U5,ev&?vI7wl]VR*KxyH!]Kq%#A[iz)_]DxDFfVC<ir' );
define( 'AUTH_SALT',        '`H!CX?HV5+H+FY%FaL@_@}!VFl,J.k$/cw:&B7(wgI,d{+uicxa4sWE..:POaiaF' );
define( 'SECURE_AUTH_SALT', '$;.W&CSa(n$gL,(r4NrkD0ik|K/ynZK_}1u[JN`7,9Ln!)%Af/GDnWN{(si09$ny' );
define( 'LOGGED_IN_SALT',   'TtlUS@K6DM2E2GeTCny7w2=IEslM?j-XNKVHKS+ox218GXpp`~z>s )0`lS024L0' );
define( 'NONCE_SALT',       'ib%?TxYG;QA8#*=#2il6xXy<]TfRue(aj4=E]oCbtyfuFWg+PSOAJ9tt}i>zJ-g/' );

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
