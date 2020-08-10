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
define( 'DB_NAME', 'wakmania' );

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
define( 'AUTH_KEY',         '8iTMk[>4P~$P}hZW(`MlADI ]jpkyxEwks,3>Hl+o_3[|HdFhNC/h *{mg_N]c g' );
define( 'SECURE_AUTH_KEY',  'Cc$Cw1mUYj2..J^zPyo[}w{Y#K-=$?@8$G;cRTy&bq6NCs47()5Ke)gGM&;#<@34' );
define( 'LOGGED_IN_KEY',    'p9;l7]3;5!o+6es|U$|X;]g^&Cj5_&4W:.a%l^+Sc0aGFI}me:wit<ry.r+3L@Cn' );
define( 'NONCE_KEY',        '$K5-aOucrW|N*Q:UWcWvR<d/(a4c]!wiP$Tg&-2f*fW~l]aYbm0j]Up*6o19-7S@' );
define( 'AUTH_SALT',        ';Ix~ZMnT}/5M6x}z5P2s[*(Tr0~&5*?7KTbk%)7*q3A[%:>+8*qZ)-r@=_ZoUA4v' );
define( 'SECURE_AUTH_SALT', '[v>[fKN WI([dErU:T:XMnpuGa3:lXK]{IYTOmN->jj|%)pf5EC>w;GN=]ZbUEki' );
define( 'LOGGED_IN_SALT',   'B2}(Egg1bk=PMnF`Af[Ul)<`W4w}6o&pJb63nB&IoNOi[*O^0QVqPGy.W[g6pWVz' );
define( 'NONCE_SALT',       'Nf@yzg=/%C?k{-qZI`GTYUPZ9?wpm=yMtZ&vke,7Ui)Y!QWJDu~!j,@Xhm0bMFIR' );

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
