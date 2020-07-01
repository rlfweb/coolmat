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
define( 'DB_NAME', getenv('MYSQL_DATABASE') ?: 'coolmat' );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') ?: 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') ?: 'root' );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') ?: 'localhost' );

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
define( 'AUTH_KEY', getenv('AUTH_KEY') ?: '8D$Xpo%G:^s@4a/7qW$Ojk]ow!3?hDrX2A2sVDj,dGU`*22k27YH1] 1dUl:90xM' );

define( 'SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') ?: ')lphS(8u(stg!8L@&ihs[*Xlp|5]}b:FUqM$$?>Gb%l E-6y.wr$6;stpK61W@!8' );

define( 'LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') ?: 'P!rEjvW}f.gTSU^Div>}h`MX@^b]zjh>nI%EMI4;:G)uHxYRtVRz#%Mw;DrvDMd.' );

define( 'NONCE_KEY', getenv('NONCE_KEY') ?: 'i$yE}vbW-C*d05I`SKYY$+s1RD-dQHJ8=hd$#Qz,~UsG/867O~^9woLec*h~DZj8' );

define( 'AUTH_SALT', getenv('AUTH_SALT') ?: 'VfA6mWf+Q.[Q^BN:<mpG/7/CWe*b%P(?[}~WOJ~Qlz2lp/wlKTZL3%:XvD!Y}*PQ' );

define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?: 'RZ49  [5.|l-_gf:evC7v`23KQo:]X/-F-,$o2,SlO7G(sZDR3Bk}BrV>B=P:wL?' );

define( 'LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?: 'Ui]I,&rJ]0i)1n>ZkxTr}hN/DGz_)=KfLVj*JmbsV$e~5tOi6z!I`h4c OzPBX~]' );

define( 'NONCE_SALT', getenv('NONCE_SALT') ?: 'mn*B5@.Ok:){-HQn[N[gtSfPt.G!gyDR/5{L)m;Uz&ne^l-P7R>ho9IqOd<#wsU7' );

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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
