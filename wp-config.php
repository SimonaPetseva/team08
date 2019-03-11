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
define( 'DB_NAME', 'team08' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '$!kbDw= 13JxDS%@4S2zticoAm4RF6&:drhfCK3Lht{VO~9L{jD#sL4K>3)orJZr' );
define( 'SECURE_AUTH_KEY',  'bhka?rVY@h {zHh2QbO88/=I-E}lAe})c/bej@y$%mX^~t>#.8WU(4~U)~a=sL_y' );
define( 'LOGGED_IN_KEY',    'F@YbJDc{P(q~ujtIipu&:[DAB1wYwzzEM]l>^Scg:?;Ai9D9aO<Mu9]RC.H)Uf[O' );
define( 'NONCE_KEY',        '@!H8ngnJb}e!d;bP{jbM~V+l];?LdMM@XZ->;6.~^y;Nk/A<6kZheA_wd-SY;6Mr' );
define( 'AUTH_SALT',        '[`My7pOKu5@<clU{UtVkmQ]7u5K<S6?YK&#?m)z|%L2)_l-4ZI6a_N#X5hl9Kehq' );
define( 'SECURE_AUTH_SALT', 'C}Opby#h6U66qeu?/Vo&oY7Kx==*:c%&C3 fZ{wG*@?_gc0CyT<y(w~d*U,=TB&,' );
define( 'LOGGED_IN_SALT',   'x^ PsB/gJtQ> Gb5snFYd^qh zpOLS}pk1dACl)yI{so@,,QNK#.)1Enq|jT#A0/' );
define( 'NONCE_SALT',       'PqpGyyH~oL,|sfXyQ`;8<g<syry*yFeEM$=Q[i$+BV>WR#/x?S[cX6e5LXY%M$Ga' );

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
