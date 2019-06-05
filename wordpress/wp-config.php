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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'CQ3-DUXp4QgNTzL2WZiUw`q|GQB|Oye?@~>LW_0=f$~D7NGiyc`d=E>M1+=]t`dt');
define('SECURE_AUTH_KEY',  '=kM+ln~(~Gz^gw1;Jq[%.3,YQ&Yh`<ck,b;7 9?cM,2=OUrwd24uF>pV^^u8,}Jp');
define('LOGGED_IN_KEY',    '-{GR$-5Gk_5Ayw=4=$u*z~_~aI0pej-d .9#p,|k>Uum+2%K0Mk_/{-gjN*-G@kI');
define('NONCE_KEY',        '2pZl5& i?-uxJ. u ,}c.qq9l#P{wy*=g%;ak&WcXA7PH:LZlk_}n<>*zVs+8`eF');
define('AUTH_SALT',        'F+$6h[a=3!LoDJcfOe},uLerTOO[odBcLVG9N;uEe5Lf#2#}xv(:gM35b^S|jD*w');
define('SECURE_AUTH_SALT', 'hTE>$#b5Iim3&XbI}IEX+mZ~zc$]~9!Vc<R51Enc[y[3 1e7XhU^WC)1q~NE|g}&');
define('LOGGED_IN_SALT',   'Ly7S|AKu{0ixc&l(-)[FYh@Ih@IYJ~45Ebgg!U,|A:){1#|ez&`?*~/vj+ITBAp@');
define('NONCE_SALT',       '?w$RY`+:egG-HkgG{:G,-tIV{|oqqNt!3T{MbDA33@xeOGRRT<>lv>8W|c4*C-D2');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
