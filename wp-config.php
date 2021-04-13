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
define( 'DB_NAME', 'exam' );

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
define( 'AUTH_KEY',         '8jj;KLCK1]5MY:lRUula_LQYTK02} f|@=KPv vSO&]lq{7.G;x&]eHP}fU%tEJS' );
define( 'SECURE_AUTH_KEY',  'r59Q4_[{-y;|:!~vF4Fn#R$KlcT#8hDK`WwoOdkYHK7LYh:?&?g5|4vG{y>&4yZo' );
define( 'LOGGED_IN_KEY',    'v=;b?-IbTX<H{tV>T>5t<&#%N1 B[)gi~)/HX`v>OUp:I9YO![dr/`L|te-vEb>(' );
define( 'NONCE_KEY',        'ScJ/V.GwS~g&pl,<;B:US]]sHdn~*J@1.Bo{9rZgNC@f;J.[aSM2E{CdreJ(oy=w' );
define( 'AUTH_SALT',        ',l[`x,Q<@Qe1NMhmbCy7WbRBp/;^mz8Pro mmAmnH?:~KX5 G{yj#w0wUBUR(CLQ' );
define( 'SECURE_AUTH_SALT', 'v]}chqyI4*dl65BLY?0m?fnt5e(UACll.xo!UU_=7oF1v.Ws)FFk_RRks W]9vO<' );
define( 'LOGGED_IN_SALT',   '`(>ZEw+]x,v.ngD|^p1r&I0vuiBCB/%Wue6hPTV?BWV|@c4B,.j2a+sOc>uc#Xo ' );
define( 'NONCE_SALT',       'XuFTX8Me)xKXE~7yYF:J~b<mP0wX|e,Ax<i0x7uE?OiR8_|~ qYz!%GIX:U3[>wb' );

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
