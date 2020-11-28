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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'b2hym9hUkI}|fu7<&|3#VT|foO!XqmN,/;F7,:C<VFQ.%4~o%MZ+h|>jlI`I*0,_' );
define( 'SECURE_AUTH_KEY',  ' 1;hd%eU&K0>r@]_v9~^R[+.NI;#_PBh&XB@v{cvx~:%^CV~j5.7/5Oa3cfV3Y:K' );
define( 'LOGGED_IN_KEY',    '7VG2z/AxnO B=<K2q/i!pRsSLfWW5:HqPjxENs&KwH|B3V~ MFzGg}^r>Sr0I=j1' );
define( 'NONCE_KEY',        'f6@8d@FAHsjAXv=X_Gm** Z&)6+ nH@fj|4>xg$DCij/&Ut]v:[?z )2v&~K2]b+' );
define( 'AUTH_SALT',        'URw@[<[R;>m-3/Yt80`jvXuV?4Q>w;2R,k/+BCbh-F_MP`3Ve4+H-Bft8Imw(-j5' );
define( 'SECURE_AUTH_SALT', 'rGkNWwdYe3A?m[VQhxI1Y#B<V9u3Q`!Zx0Q<m<W j{y<>nfeT04u=xga&+CG8i&>' );
define( 'LOGGED_IN_SALT',   '=eAN6Oqn*k63@3phI,oeA7$cWlb[[8?S|HKm9I <:9aEwwaPx`$kn?p[y;Ec5j.n' );
define( 'NONCE_SALT',       'Kx{IgUGR&^K@8YH4=2r1.;YpOD<]32_ita& SO]t&e)PrD?j&ULTdHZijs@jG6Cb' );

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
