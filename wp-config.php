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
define( 'DB_NAME', 'naszigyakorlo' );

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
define( 'AUTH_KEY',         '%~BdLz!kV8CJe+Qi3B:Z,Xm}r77y^om$DKg!f^++4!N(xn=ZRt VW?u o2Y1kEZM' );
define( 'SECURE_AUTH_KEY',  'h|c_2D@-fB]0!6[;S-|Jm$D0xPk6q#GdE9gQ!, DcaP`Z.&.]?qz*6jK?}?Z1%y0' );
define( 'LOGGED_IN_KEY',    'YIAE[}fpGPO,%tvD)V5_G=Gp6}AQ!zT=[]jG*x]jWr[Nm7Z68JQr$JL{hXqoh)FW' );
define( 'NONCE_KEY',        'uWt(Y)91Fu1S`|]ABCVy!j>3nJWZsS.69|--1th~{ivG #+/70-A>seJw>]b/8][' );
define( 'AUTH_SALT',        'z7uj0EDGbt]F2r[ J/qlY/JenU]lurR6R=B5%$ZStjO?^<b-jf0:;AKEokv]]_8[' );
define( 'SECURE_AUTH_SALT', '&HR{&o)n:1l7]FJDQT|=<b5UT$#?3{[4(^N@hCj2RkXFiZ%|;SM]j{oM5VzeXWpT' );
define( 'LOGGED_IN_SALT',   'geh_i^z(|bS<eQA LKqz[|0{_CM3rn6VL8eP~wA^a|?g2,-lIhC8.+7lLS$gTowr' );
define( 'NONCE_SALT',       '~w_>V^5x>loYCeg<&i9/G8SG.JR;BPs;hqwHq;H<l$mHyX<kEeq*ii(yq:c3Ofvo' );

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
