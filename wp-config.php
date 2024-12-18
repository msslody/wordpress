<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_database' );

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
define( 'AUTH_KEY',         ':&-83%`+}325*B)Y?*L~FCweI7 }0;P)oGcc>Q<+oZ(Q[*crUCcv>@6<jYDKN*$B' );
define( 'SECURE_AUTH_KEY',  ';<tGGI3!=o:EghV;S$=B!oc-Iq3wh-:!i)iYZp1E{g$=.fA~+vET;&B,MLe|JwMc' );
define( 'LOGGED_IN_KEY',    ':Ar9wCu=&u9ga@XF2<yuNL1sPOG/nbJ82yp:U.5KrX,f^BP@sI[#2#P^D>Kkjy$E' );
define( 'NONCE_KEY',        '=0bgLx41QLTUa,OXe]q~gz*66G_e1h!G(8<RC&S($$1|,4WFvv_ABMJu-u%IK|J;' );
define( 'AUTH_SALT',        'Jyv`_Yd)H1d`0#1e*F|j<a>]UyTx{S3),ZS,?w40 .VX_>]xZ/5 aNY?`<J5#%*w' );
define( 'SECURE_AUTH_SALT', 'TDW$q>|Lcorh(~7&`^~cQxeYSMt^I~y/8u+.iYj;79`aCzAZ&NO_/`*Mckz|#+W*' );
define( 'LOGGED_IN_SALT',   'Vm@jlyRGqu{%QXtri[@M}-b%A1$rTN%KsV.U0W#=({qX};)&wu_(5<A]v[[S3dy?' );
define( 'NONCE_SALT',       '{6s-L/3@HTYkZ.Hj,zP]X.P{<]:/Fkq&z9{k]&ZC_8W:(Xy`1&yJTHM)/A7ML=-O' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
