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
define( 'DB_NAME', 'ecommerce' );

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

/** INI SUPAYA BISA INSTALL THEME KETIK INI DI WP-CONFIG.PHP*/
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SXEDR]Tq$F*+lwdK&DDP)Muu<R3hM?[sx_Yx5e+bX&q5Xm*q<8^xj;EVP$DBF<[f' );
define( 'SECURE_AUTH_KEY',  ' _f,RS=e|Q};=~Phi%x@+ET$h55AS([~l(vl1S75M0y&Z&#.-)#KLTidTgZB|-oD' );
define( 'LOGGED_IN_KEY',    'AEuXd|E~+HmbYS7h)siR:^n;Olk{>)-azKGMZxM~L2~B^r|iH&2J~%Uyj0TVfbso' );
define( 'NONCE_KEY',        'x:>ie,ri,o}Cd3E]*17E]d|,d^0y&}Iws5WE~/5T;-}OQgy swn|asf6=zNzF,4l' );
define( 'AUTH_SALT',        'In$XJR1aN|bi77 ce6r*AhneKESWxH)Y*dm[X+ccII%.wv>o|o^;M F1[LoO8)F[' );
define( 'SECURE_AUTH_SALT', 'k&3@<z}PtV>r9Y|-3A[p<v0 J3:rDd*P8W?mpsb=-T>4-vKSKbZLd _x^Ne0r~Dm' );
define( 'LOGGED_IN_SALT',   'tA$|EA_e/HXFqkyl-MO>*?!?2nFz<~mTf1wrIy7$@fJ6#[cka|t`Vl;bLHBQ$QVq' );
define( 'NONCE_SALT',       '9>@cX7c}k8;q.r`:EyjOPF=@9ULcjTc%Q?ki@I3WPzG )aq6s5b5N{//QB2x.!Un' );

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
