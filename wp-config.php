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
define( 'DB_NAME', 'VashiSushi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'mysql-8.0' );

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
define( 'AUTH_KEY',         '=T8^gGtL2xuad2)Wh2pK0=}jr|Yuyw~qNA}IuEieTbgn_%8!1fh$vUv&b$yzn.>9' );
define( 'SECURE_AUTH_KEY',  '{,/)wyqx&9OsXa+47f!:aa1-t{qjgDnY}U,=m3|?B~vM%6V2]%0V:5fNh(p G3?]' );
define( 'LOGGED_IN_KEY',    'q}q]8fBRLh0 t5<.del<{!Zmsu=0kWP+Eo`_qzO5X^C2</K0i|`7yi.V?NFWH g,' );
define( 'NONCE_KEY',        '$= #e`Z~0VSHwa?knc IH8=(kJ`{16ndZ>9icY$!=`pD4XxPLspk*<9XbogK((:p' );
define( 'AUTH_SALT',        'B5mN5yirjZ(9:UKSlV &f]Xx-(R#/pUfD&4|U1R6l[!pVx~=(EQ1kwL6;_ammvuP' );
define( 'SECURE_AUTH_SALT', '|_cOCNQw/?@}(B/b[j[UR^iKO3vadF#ZjtAyWeIaovAugY&AyFUSEsG^fp)tks:,' );
define( 'LOGGED_IN_SALT',   ']%N%iSw^qR[8!Kg.BecazYB|T4>@42I7Ab}fSBfGiH&ftIZL+iO;C9t7&9}_#9.}' );
define( 'NONCE_SALT',       ']/a)hYx/*4l|0W8Ofmki;G~>Epdtp9Kj9Xe1#.3xr^E81@EYEGko+m{w|VXZ@sj@' );

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
