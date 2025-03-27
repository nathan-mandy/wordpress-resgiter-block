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
define( 'DB_NAME', 'wordpress-register' );

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
define( 'AUTH_KEY',          'o_FL&WGX]L40_k& xPJ;;w>3FNLT~GvIAoTW[[FwOZ[j$T?_63;B<0m.l}l[z/Kq' );
define( 'SECURE_AUTH_KEY',   '8=Og.1Uy[D Ljz{B,_g7URy;HMnyS%#s$=/EVU7k.(NwnTOW{&[:yd9eCRzo.huf' );
define( 'LOGGED_IN_KEY',     'An[O;Yqat*LpkB3%=L[L>`#<Gfl]uQ8UaT`?o~^gWB]:*^fqmj}t5Mu^JRKbrc`b' );
define( 'NONCE_KEY',         '$(GuK1@UL7839cA9@F[E~j2-tOnM4^D;Lc8AV:~9{;(Ew=T}8q+>+[kb1w5czt5b' );
define( 'AUTH_SALT',         '(_nL,[xpu&Vhc7D6A9~xio0P}lDQ)eB-98PXTPpD[-0EI*Jx1!atah*+sM.JC6O.' );
define( 'SECURE_AUTH_SALT',  'YoRT}@kRwM4@k~YIhz!)pUl[CwO6+YE-Sjt>z1@+$vDLVXb$@/q@;0VJH0Tn|<d8' );
define( 'LOGGED_IN_SALT',    'yQk@[;)ekS]Mq858%3e=@3`@4:MBgC{CBq*qhNY)j]Q&S.D>nq:{P&10[&&w|2KG' );
define( 'NONCE_SALT',        ':7g/mGj>r+R?<7@.t4vbRJs:;-?)`FP4:eI>?*/f1NLz9 <@SJ(J8w%op$}c)#7V' );
define( 'WP_CACHE_KEY_SALT', 'wNzrHP*muKMMS{oXH4nGl6c)t-!<bc$BJVg& |fx}7=O&zOQrHHwBycZorH_T<k,' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_DEBUG_LOG', true); // Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_DISPLAY', false); // Disable display of errors by WP
@ini_set('display_errors', 0); // Disable display of errors by PHP
// define('SAVEQUERIES', true); // Save Database Queries for later analysis
// define('SCRIPT_DEBUG', true); // Use non-minified core styles and scripts


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
	define( 'WP_DEBUG', true );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
