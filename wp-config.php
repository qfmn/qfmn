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
define( 'AUTH_KEY',         'v?eJ^7sZtijT?>JT&v53=mr q=/=!RZJ5qo}15vZ^yj,5;4J,hNl-G8_iPYI9Z|$' );
define( 'SECURE_AUTH_KEY',  'z!aoE$krPtjnCQt8%?zU[2#NjPo}!yN[X5AD6n!,nr<vqK2H)?F~%K2/|k IFY_o' );
define( 'LOGGED_IN_KEY',    'G(Mzb_(<u0FdfXAr.6~@ (nn08YJfV2XlsR^LsXq7h7|O$l[XC7{OmMVldk^I&/c' );
define( 'NONCE_KEY',        ']^PiHlsZl~fo+Dc|iXg61rh?E;P#9feSSQkpHDo>zm^aqhnR&9Fdc;lTK12pZl>o' );
define( 'AUTH_SALT',        'CE1%1D+7$,7x`d<;|%#z=uI{+`wJMm?$!}HO&2}=*.BkHlMwI8bw;a?D(M`;, fi' );
define( 'SECURE_AUTH_SALT', 'XS3o}j{%L,=Ht ~<=G`/zMf]2&K.<v+-04tRm>|w&>O[Y!fu?53E;1U|Pk$[@ho ' );
define( 'LOGGED_IN_SALT',   'vyQrT&v=U-^H#MZ:Iar<W~*B0m+`$&myddVx/Suz)}Ce]l#p1H-UkCm:5KgbZW5s' );
define( 'NONCE_SALT',       '!ma1N*MhksZBOi$K*5bkDa2)5dHo[cLiH5b];anB1iY20lt5 +t2}.o*Iv__9f2q' );

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
