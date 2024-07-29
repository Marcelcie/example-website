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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'example-website' );

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
define( 'AUTH_KEY',         'm>qPGs-5.,B>-w4g!5QSSGE9nXQ(lhtm$ubQ)!!_xs-Q%.shE=YcQ[R%7CdcIgDX' );
define( 'SECURE_AUTH_KEY',  'uOq(@S}RTu*p4oHPn(IN=_0=D2v0_nN{>^W^v-itq>[CRvi][ER4y&.y<Py/:O!q' );
define( 'LOGGED_IN_KEY',    'uK&i`Xyq_M}7/?eF:RJK#i-[j<hfs$_K!(Y{G1Y1:IUCE}pJFlDD`wEev+CY$^dc' );
define( 'NONCE_KEY',        '(6ZCFv[8TY=MxkfhHq>;2W1]IrvY>w9^ZEKn|p+/@.U8G.GOqZS(;E;*viL6pB5s' );
define( 'AUTH_SALT',        '!ii6Nmy;%Y6TLN@gljAX&#S#L_|BX;;biPu$(FG~o(5^w;:2m.yd;7J$zRJWCv{;' );
define( 'SECURE_AUTH_SALT', 'qeyZkB0JfKaVL(+r}!I]_{!6Q8?H=T?[fn,@LdrzXZJ!4kM|oRH:Ed)dWkk7*nUR' );
define( 'LOGGED_IN_SALT',   '0B<1/Qvq`WKr{&7]*0*z}a`^6~Qb<bv):Lr+R>&]3S*%88}}b#}M9NU6S}mBZ?c-' );
define( 'NONCE_SALT',       'x/X0:NYk|NMz %UvSQ(!h*SCPjoR[RvD.JRYy1l#ochC)i/x{$I>3UD.%:C#i^K2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
