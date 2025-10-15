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
define( 'DB_NAME', 'wp-fresh' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[SG ay,UsEv6N<Z!R|TWQV~xbW)r*=-br9hYY^,L#qG;BZob+$=o,rN 4-4HnFes' );
define( 'SECURE_AUTH_KEY',  '~Hx@GgTRqTJoSFpQ!a,m2#?}8g08DjgZhol~E&$23BJ>L8}4VFllw3TLQHJjXAYe' );
define( 'LOGGED_IN_KEY',    'jR.<&0IgaXv tMjrg@ZQW:G}/CC/%NCM@qT6#j_nJN#{oL.M>zlWEb,P&p$EY|YH' );
define( 'NONCE_KEY',        'Q,6va2w?./Y1X2OJ8u+`fxQ?vvj,02^DO5fLLo-/4y2:0V<7?2Hq?I9k}W!{D;I8' );
define( 'AUTH_SALT',        'Ia3LkZX=hfUAT=H?;>gvW%:ryP>v+# xPKru58}.%wo[EJI#sQ2y/~+l8S_n4{%S' );
define( 'SECURE_AUTH_SALT', 'B{8Zv@X4.<vc57s&?E89|?<.P)<t5xtOn2&,Z}3``D}xszksu!?%S:$~>mFxszdY' );
define( 'LOGGED_IN_SALT',   'r`]2A;!cLS|nq*^C1aHB1byPdgf~ac0<ga;[,Va1_wKP)<_{NQAT&4F%>itFI~JD' );
define( 'NONCE_SALT',       'jU-S?]QchNqCYY_w/f?dybn#9qske7=X)(KkuZ|T0I.Lbjnc^6^`xC!- #CZ.r9!' );

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
