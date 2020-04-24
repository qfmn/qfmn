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
define( 'DB_NAME', 'qfmn_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Mx.+4)j#YmDJ!=X~V=Z5b!=in)tQG3=oh&z.coNG0`X+`3,]d/O;F67!b/MY.m3@' );
define( 'SECURE_AUTH_KEY',  '*[E@*Aa?2n:PtkY^Xv*iy0G8D(zj;L`l!nV:xSBXJZNA/3-xXDPPcF;~SNpLcR)z' );
define( 'LOGGED_IN_KEY',    ':M^,j0^XF%hVO2`]2AeN},SA$jtB`[*mHF$ZXOzZdI%de%8R0fb-`,XYCz#v9>7m' );
define( 'NONCE_KEY',        '7C}325*@{0Y&;9T:i+B}(j]qMl3159)ZaHQdhu?H8rN9.D/G.5n-em3*}2U:1fZ=' );
define( 'AUTH_SALT',        '(V4=ECX7yYipJFR3[}6=2X>U(47b@s&B=gqo,HC)2Pwx l+!70MUMCSX&-|HJ-hv' );
define( 'SECURE_AUTH_SALT', 'G@M213X^684G{qGqK)k&,0{x2d<f](rz+na6RHEN%nu56TQ*v6.Jxy>}<gmJ,#{W' );
define( 'LOGGED_IN_SALT',   '$l4MA9/2f<*DBAp??7N+g[fb26}U?y!Yc_, 0iL@p*c/:`>fV<R@4:$ShUp%ZECs' );
define( 'NONCE_SALT',       '3FoI%?3l[4u]G4FD2w8da.~MhW@b$Lbzg42E!o 9vlLaHnfZDJ$|{G7<y5:zLM2O' );

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
