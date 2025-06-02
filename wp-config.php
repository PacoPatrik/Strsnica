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
define( 'DB_NAME', 'projetk2025' );

/** Database username */
define( 'DB_USER', 'projekt' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '2*>?!o|G#h)x=o{u3(7D<0kS]J@-oxbGj5<hPF4?0CR@v3E3{y;D_bQeX MXMgP9' );
define( 'SECURE_AUTH_KEY',  'x0!h15hwLg6W09&H [<Nk&>n:_ 8%dH:~.^S}?Gm^@4B}1`UOTSbzj[?-*m8@Z7z' );
define( 'LOGGED_IN_KEY',    's#,PezT*/QvHcqhYee`Q[9%[K/$U8hg8i9!;rXAG{%r&#b}4gL*+t1P-:Rq|b[kT' );
define( 'NONCE_KEY',        '/O`U.hg3V<h$@!yVeli>![T.2NgyaR] (jxD6|#iIC~kCn;*vC6xd`JJJqIxe;2R' );
define( 'AUTH_SALT',        'P[cBj8X@gzgGOV)m[Zn.N[S(5AZsuJOMc<<Ip>x,LJHAuYAo:+7ciah^Rlfb#4 C' );
define( 'SECURE_AUTH_SALT', ',AY${I;VO9~*q>wNJs Y#Xi~*9yRo87n|`ThwvW#=(G2NS3iX}JiqEvdpgd.qb+0' );
define( 'LOGGED_IN_SALT',   'biqeprvS<.V;U7vKm9$I;%O><5D>adK+DysJ6gwt5kf46v#+%M^vFuEBxOp6dezw' );
define( 'NONCE_SALT',       'cw<?#YM,E*-9xPEFk/@_VOuehgThjh3*jfX#CiHC,A>)zvEe7kcVRCz-%>smQBN5' );

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
