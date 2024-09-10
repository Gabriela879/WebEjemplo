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
define( 'DB_NAME', 'webEjemplo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|. }est_I@68;3?=Kwj@ti -$xho `gm]BrmIE#7(tIUc-y?j7u.~OW&7S=1{?C]' );
define( 'SECURE_AUTH_KEY',  'Eqh/})5u/k1D]qB7|j1En[llW,wUf5&]r2a0|K5mfj1$}o+aE$p42=*-]~sGB,C~' );
define( 'LOGGED_IN_KEY',    'i]+eD;HMU*1|LL/?u2FWKw{%>jbPr<D[M<6{.yk,tzG)K|t_GHaGoWx3uVAuXFM+' );
define( 'NONCE_KEY',        'rEpKPc4qWk2tXG1[VI )Yx>P2?,,Dg]V`sCg;n_A6Tpt?,t@yfu04K8}qKc:LvFt' );
define( 'AUTH_SALT',        '>5=.vaTLX&_huI9k4GR<pm0o3F4E+aeDa`D}y45{Q{2z9=x1{o?MB]*yqo*GZd6h' );
define( 'SECURE_AUTH_SALT', 'o&e]1lKwbV)ZY/y4W[ma3 y&,,14&*!pw;vnmPg]B?(K!RU4D4!NUd>k2SB/][r.' );
define( 'LOGGED_IN_SALT',   '$v;A}I^;vdno}gUOk9S[%tO4jdb,3WAFdW,Z7@1QUe?M7&BrDcM/DElH2tE.F(&G' );
define( 'NONCE_SALT',       'o _P9Up2+2c ,f.Xp^6|HAXj>4Hlq{D*AsFa1j2hvHJS&v``9,F(r<~cxBJxWu v' );

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
