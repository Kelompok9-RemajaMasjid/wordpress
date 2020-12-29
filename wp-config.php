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
define( 'DB_NAME', 'remaja_masjid_db' );

/** MySQL database username */
define( 'DB_USER', 'akmal_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'akmal123' );

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
define( 'AUTH_KEY',         '_]g 8#wZD1E1<d VhzrlLP5O^4LY,CrIWm5D}Z^ZvvHo-@Kkfpm6H4(O^w@e# /w' );
define( 'SECURE_AUTH_KEY',  '4(pi>#Y Uzf? `+PA>#(XfgS`HUw*L?[`E^sPPZ%ua-#HK7T]R~DhbQgF>`2i~k&' );
define( 'LOGGED_IN_KEY',    ')C.t2zM ^:}2|`XJSF.@n8E>+C=XH[pzJ:!KzQ5+^<;p70L199?pb0U4X:;pL#9]' );
define( 'NONCE_KEY',        'vpf[*K@++QM6*AeD+jEMi:Y7PA7,%C]9Tchl /_E4li#JhRFQ+M4,^2PA=<hO$Q2' );
define( 'AUTH_SALT',        ' KG15$ckEF)>Mc([A}*M:.sV~W?e*%{{aJ2VGJ:oR 5HOEdIAPf7@l0aB.c/xCSq' );
define( 'SECURE_AUTH_SALT', '{npF|G:/&v:c2w%PU~BZ@#H+4S0GVxSI#b(q*p{rjA5Z-`{|7!?LT,>NN|&]}+oD' );
define( 'LOGGED_IN_SALT',   'tL9M#xWNTdN)`#N7eP)@1t]?}{9z}9dmW]>?ZNn{U v9tXw5rbEItc4ZZf|JStJh' );
define( 'NONCE_SALT',       'L=roOGQ[Zl?3/~r}wrmU&x&H1>4 9LaP>RJj9BfDHfH,}>)o1`g1uBi-peb6wtj.' );

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
