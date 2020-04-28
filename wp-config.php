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
define( 'DB_NAME', 'chung' );

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
define( 'AUTH_KEY',         '(H3+Fc?BQ>=WHXMpNPA6X}Bq?kn@5%:b+^N3!:LMXoK[u8 aEQVC=2aw2RCHhkB5' );
define( 'SECURE_AUTH_KEY',  'K{#k^kCPx)2pt0R=UL$X{+$ty:f?bvJ.RhpZGgSXFV+7T-_f8.A9+n6,7AAB]JUc' );
define( 'LOGGED_IN_KEY',    'eg>%u(+GY2sgnY63OWz!%ksGu>eAng{wE4^w*% ?8L5Y*zVliP)A%_yjNJ?iujN7' );
define( 'NONCE_KEY',        'm8v}Rk#U7d:ei@;,~Bbh!2q@0069&%aCNX*jQ)8TRt2hFiky}:3Es2VV$K1GOTb3' );
define( 'AUTH_SALT',        'L%F.yVctId=s8A+-9c305sY7GH9f`1$;[V}dg%hzI`Hh)Z/7Zpz?dA^pwdBfyUW.' );
define( 'SECURE_AUTH_SALT', 'bNFroeJth,.o]q}vbXoImb;}1uTTcI{6EJ(h{tV}q^1B#0cB?qJn2[@@D<&I%De8' );
define( 'LOGGED_IN_SALT',   '4j|V)7[T;Yz]GkJpM{=!wtYT~taAtW<jy2xQv2A!7}2(n=bVtDDd}b7p9vW_ujB*' );
define( 'NONCE_SALT',       'UsT&~6%fj=ag|?cMq`rmD0if0~4/I1j]#[3OihKNvdm-4(VH,da,GQN^P4w9`C7S' );

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
