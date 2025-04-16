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
define( 'DB_NAME', 'mywebsite' );

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
define( 'AUTH_KEY',         'j!$ ;Tlgr}W2 qt.}A8o[:$=hUAfmq_-GL7UjX^:)(~xZ5a$F/h};OU6kOL1}dkg' );
define( 'SECURE_AUTH_KEY',  'c9,_}WWM`}I)(<O$=F+)6aCPCS!VF)5$$g&NULQDbYlsVvr]J,{-}-T2si(w}{0S' );
define( 'LOGGED_IN_KEY',    'if0qp=XrXr`~J^wyXs+ o:?+V.~Q1g|nGsX=aXF/WLU d79Mjkw<y,mFZPSXimDw' );
define( 'NONCE_KEY',        'bSLg9?3st=Pdk6VFpw<6w!=~ OZ; 3-lVZLB-lGcb$/f&dLkII[_J,Hj8~bI,;8S' );
define( 'AUTH_SALT',        'J zk_)7ks&,SikA|ak;W`-.B@;Ujo}fty!hP#GQ?h}ro#-),OMEB}#@,RJ>4z:0n' );
define( 'SECURE_AUTH_SALT', 'gY9*<PcdbX5-_O7*>zXOyV]U@d3nC>l%k]rmzH0Jf$&R4v2e[L >ak1F{`$z0 He' );
define( 'LOGGED_IN_SALT',   'W+m/oQ4X~2joZqC;g&ddoj{WINj$KL<+duzYO<0nW$LY3#n}g)UrtLb#3z<8.Qe;' );
define( 'NONCE_SALT',       ']oC+;+|?k3ql&Ou4m^_1(Y<[1(K/vjMC*# @% %WGb]3hj_paGa?o;)-_m1bj^5I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
