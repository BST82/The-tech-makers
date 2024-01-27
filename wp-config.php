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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test-the-tech-makers' );

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
define( 'AUTH_KEY',         '!.V[eVFoJ[V6ePr$L(oKpHr`VD3p#v>gvo!c~<({JGP$_2;!!]m/`|+#MOL)N&u<' );
define( 'SECURE_AUTH_KEY',  'V|*AnK;tM}_FzkU5YF=?!cS5c8g J%{m]Di3m+d<o7Z_1lO%wMN+`bK=p6z=U(Cw' );
define( 'LOGGED_IN_KEY',    '_2eyG=P5bh+(5tA/MK6N|gP+?wBu:6xHK@2.nq:=r_pNASCAD!) d;:_tS(UKC5M' );
define( 'NONCE_KEY',        '_:=/MW+aUKG9`kp@.>mx4qH1l9i.U1ACAK17Jkk.C[wL>tc^nukF`8@YI4,i`PX}' );
define( 'AUTH_SALT',        '=-vgchD(A4F/Q{7aE&v@|?`td74YA@nU4`v Dr/SqA!u4&CA:DIaDr>A{Q|MW>d:' );
define( 'SECURE_AUTH_SALT', 'J1sZ.Uo&%<C<(x4Moo8>Aa%`A?!/%rDh0$[>RnU(<fW_vEdt^wPLye.r8p%iW`J)' );
define( 'LOGGED_IN_SALT',   'i3>:SG~n%g(b< BGq:V$ :.TCn}~==(m|VA#|5VrY+QR.lu@-@&w9d%%v.4YJ7BK' );
define( 'NONCE_SALT',       ' bP4~I~C#2ig+HEkso3ga:b<$>/LINB{[@@mtOA;y+:;$w,kyWjD?V6h6-LE<@1=' );

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
