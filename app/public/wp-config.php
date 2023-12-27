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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          'a&Wc)K 7ode4r0d5%]K1R?3:OU.2O;8,^7aK.!ca[^4_cJ^s;ggn+$P{Wo{qh3qH' );
define( 'SECURE_AUTH_KEY',   'aJt[Mmji2:S&0R1H6VY:{f*sExJgOg3KYw7H6,?Q3<!>8otfv @*e,2uX~-kU&`a' );
define( 'LOGGED_IN_KEY',     '!S}G[>i/wy`;$T@V~(XO,0C0|>+VGk01ix,;)+#iz{p5O/D~6?CwQgX!jQjm(<IV' );
define( 'NONCE_KEY',         '*x8a8!9+IkwF+rg#46pJ8MEVWiwy)9oe T{31CT47r@WsNH`;B-6 SI,^B#Xy!o)' );
define( 'AUTH_SALT',         'WMZ-)H_FVO)TQm,Nwz7#bJ[YL9M<,Bl8r*N[xi|Yc%9xENQz*9y3:0-{RU~!KfcE' );
define( 'SECURE_AUTH_SALT',  'wosY8MHNskBpg2IH?F7$c<m+aXQ,nbLgo9pO4`AZW;w/Pz:{{dj;;)?? cYU9{g}' );
define( 'LOGGED_IN_SALT',    'yVeh/kE]z|jM1d@f:2&c2)zwR4Xf12#-:*j& n.Gl|bqTbBV(C[cLD^h1KTXX#{n' );
define( 'NONCE_SALT',        '@o9V5|2]@7{!)%FI896]UOr&.RSJ$dv-s[<MO0_j/VSI/<r]O=9{XYd.!1)xW,2V' );
define( 'WP_CACHE_KEY_SALT', 'Ue29EVE!p[hD]n1bLk}7* $!rg9)$HrX nK/SgM]QjGvbG-eP(EuXzn 0sG{nfe!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
