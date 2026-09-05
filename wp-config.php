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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abanener_db' );

/** Database username */
define( 'DB_USER', 'abanener_db' );

/** Database password */
define( 'DB_PASSWORD', 'i-;gAR!81Pxr' );

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
define( 'AUTH_KEY',         ']3|XyIyqw=t*IVKB*HHiyGaBtHU<?%8m^e:<Or8*-3CK[nT0)@sdyd)YoU5 /vQ5' );
define( 'SECURE_AUTH_KEY',  '{iv9b}MOb)^#+g,ngIE9<wE@1[4ckf_dQ;1&!{{dY9>J$soR`/El@%B.k3}_bx^H' );
define( 'LOGGED_IN_KEY',    'EgJ#IL!!7M{^~;(%9`iQrz]v4lwh|(O3jtQ/^6[X+H?t*=d.htM9Xm`,>G4d{(iF' );
define( 'NONCE_KEY',        'J%4*`A}S)/nL+mt2f]_{KV-.c@C97p?/3vj7&Ek~CMoPtqycMvWtCT^TU|>QyJAI' );
define( 'AUTH_SALT',        '(I44A}]+KrL>#*+5*u<sZ%z8M&>r!f/y$OZH}rhv?6&s}B9sEQV(m0$m!/:`{<nl' );
define( 'SECURE_AUTH_SALT', ':ZX}IOg@y&)U(c WMSS<s#T#~:^?<gn`C>kH]d|~<{(#+&D=K<o6SC!J8-NfEw^?' );
define( 'LOGGED_IN_SALT',   'z0U*Y2T5/dPxB(E^wq-0j8sy%QS<q+qa9:acJihjh([5*o!I@M!_%fq16udby&*n' );
define( 'NONCE_SALT',       'A%@b-ldeabd^hqp~Cmk@4! ZkUCz=DaN])gd)zZ. {]M7f0#=dYUS1aAw[lS_j}(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
