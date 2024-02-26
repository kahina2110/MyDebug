<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'debug' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*<QFQ:|*b80Mu:Qh>oAp=qC~nOUb&KvHqSmA<!XZ$Y1xUl]7oqtP^K)fk[Krx^D/' );
define( 'SECURE_AUTH_KEY',  ';Ul2!O:yt-03R},g?hU<RFJ|Jt]r[_sU1eZCqX!O~RJBs -T>|`PU. 2=:N;VgTz' );
define( 'LOGGED_IN_KEY',    '7pRC#TjRD(U7}!fJ_!7-=x#cSYimLyTT~#*Bn,[6@m9@eS~(^;gRpTHs^hMD$G| ' );
define( 'NONCE_KEY',        '6po?!pVkB_kBj{u1NYH: }DA8|ip.#5]s2!b+&Y#TX UE4<g`rb:-LX<7w4sm6,g' );
define( 'AUTH_SALT',        ' Ngzo4@S?EeNL!=($/zbzv_cBSE73QYpNu|j,x0(s$xCjo|u&+li,9-VWQ6c|%fd' );
define( 'SECURE_AUTH_SALT', '}vS[^2PZil$F6xR8:DX5(,DFMla.2czf/k@i,t+HWtn>F8H*wsloC{&A=i|H}[u!' );
define( 'LOGGED_IN_SALT',   '/~e{x;XxOwk.H9?;L!LupDgb%3<9xt^8P~{zT8^{OK!J0RpX6gY<UMITnkSAmyF{' );
define( 'NONCE_SALT',       'gDcb0/4kbQ1BbKBW@5Tr5;_k8c5+fgT5cf=t|>:vMP+j%3m8fLnO=pj`K>O}Xy[y' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
