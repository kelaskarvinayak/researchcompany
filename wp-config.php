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
define( 'DB_NAME', 'mocrin' );

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
define( 'AUTH_KEY',         ';9N-26TL~/5Kw5R4Vu=-rk1kc2?WE+>Qzf/I!`s)A5#_V(xp1Tk5y[;JTbPB)A}{' );
define( 'SECURE_AUTH_KEY',  'MxBqL.}tA|zUCA<^$N=Fr]F|nO: `?r[/m275Gp2=q1xMZDlwg^(=E0G:Uo=E|Px' );
define( 'LOGGED_IN_KEY',    '^5Tb`<?(RWAwr`iTF _|WW2-JR^haeeUjKC=&Z6(KJ0T3o~Jh$(o`l/=@$F<]KF$' );
define( 'NONCE_KEY',        ' [)3`D$UG5hAS@qyG[RIxB>zr,|HI@<[`;Rze.4AuP)gR/< v~f+G`l8Rm7FDM@q' );
define( 'AUTH_SALT',        '/P(?8J3H4.(uH&Em6@XlQ1y+;ST$Dg}q=k&rtsL&3+;)Y&Sv:)x^oy6jj6Ze:>#L' );
define( 'SECURE_AUTH_SALT', '1*~`RKdRWzCP(OPb~$3,8Jp^.>p3/@MtSbZ54QCE~9OOtzc]=:C?nAF4[,<0J8_e' );
define( 'LOGGED_IN_SALT',   'g=S >zq&&:@mJ7~MsXce1Eq7;QtPp#oG PPI[C^t|pnw8=&le+FJ0*|O;f4xk~FZ' );
define( 'NONCE_SALT',       '!=Ab2>]L055!*8o`a>6hJI]%:9z8mD;W8*@TJ$>yhC0i;Y3?Oah&}[e})kRfk>S`' );

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
