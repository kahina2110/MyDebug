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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DEBUGG' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'UzSL1ba=T$z%>1L|}UIMNc|U.P0JRd8zwn}ie_`M+x2k}{v0~F|h(9#@Ng4QOu)h');
	define('SECURE_AUTH_KEY',  's!iOlNwEdKOAEoWwkVsQKP^.[^wM]((-pZIbp-/B)/~*fUS7VpIiq_3?wuP.bQ$l');
	define('LOGGED_IN_KEY',    '({TcOy<bV,fv/faw~OD~nzv.9)f<d*L1&D&Whql VPdn?W2;yDN[xmoMgRhu9J&X');
	define('NONCE_KEY',        '@A9sJQpHiD_z2P W@.J@T:9f{jt/{YR6{?L~V$13Der#zpLj8RXXa>G/h3&5 A#2');
	define('AUTH_SALT',        'E-5>kj$)VDC-9D9J-oSQaW5}q&-XTxI-oO|B2BPXdg%*#Y&2Om`^8^TFjfxc;|9R');
	define('SECURE_AUTH_SALT', '~%UALv|dA6[~~UQUi)s#S`A;2#;kT_aREVrcW){=?_y4Ov<CrCmZtxTm)llfD3k');
	define('LOGGED_IN_SALT',   'UnJ.ABd&M3^j>:6#fM1}U<ugcZCA~eDwi_f:Ehp&dof@pkTi=yC9&JhNG~Q8SQBF');
	define('NONCE_SALT',       '`%KRwR~S~1ewcv^u4kakw}hukLV3PhU.`3OKNexK`^xlXecj)p|+T3(JHzX:Djn_');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
