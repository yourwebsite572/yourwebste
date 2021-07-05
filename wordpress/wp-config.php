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
define( 'DB_NAME', 'yourwebsite' );

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
define( 'AUTH_KEY',         '6mm4AoyLn(]kdw?6GA}#UMt7Fd~PvP4Sh^cZyt;zSt.fc55]tb-pq{lDdGO*V:L ' );
define( 'SECURE_AUTH_KEY',  'r/vGI5FRyA]9$@b11PZi-SOkE2mnG]U;`5LK!UwttDoSmNBj2Ro _X20?e>~;yzr' );
define( 'LOGGED_IN_KEY',    'YbL%7R{wbv2gcTFJz?s!~d>*r18UlA*5FHBctP;SK0,ioU>@9HTx.;GR*]or0d``' );
define( 'NONCE_KEY',        'zh4(Xi>Z>`|396S=%p`7VKc,6cu44/0$pD2i[?G}mCNLyfZC%+Oq;NeE|We^4h!}' );
define( 'AUTH_SALT',        'aVRtDu?Sk.Foc[-|:(.7-$C8}]YCzKac~c,lP0V+~%!B3X~Bc_82q~ZuXkrg(((h' );
define( 'SECURE_AUTH_SALT', 'm+dL,&~5/&vE]^@wau8-{a|h1WO#BZjI{AH*Pq$Id-w.rfZ8r#jAhOjk*eSi1GyQ' );
define( 'LOGGED_IN_SALT',   '/ZTafhbsY?);7)2L*UH@&[6kyMw;4+`Et]C6 7oNcga-UXM5z@I/{I;V(YZ rI5A' );
define( 'NONCE_SALT',       'GG!D?0)8H3m=eLyot5F_+Da#TLd!=Um)!e#3Xk,z*?^PaSfsYV7$Zn&o:Ure[LV|' );

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
