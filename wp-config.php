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
define( 'DB_NAME', 'obsid_db' );

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
define( 'AUTH_KEY',         'nrQr1kFs@Qory1,Hgj509DtaCNF)Nta/Kvfj/Gxv)5v:G;IU,?>w~4MIIYW%_?c.' );
define( 'SECURE_AUTH_KEY',  '2}Ll>o 8!cY9X}Vsa[cZp`0+aV]$L7dQ9TLW$L{uvTmQMK-16D%h`# ]7j;6`%*?' );
define( 'LOGGED_IN_KEY',    ' o2A=V*(flqq fW:;vUu9L%:7q+?!3WdB!moL}3L9U^2RhDHpNJz-Fvt@%`T!*]H' );
define( 'NONCE_KEY',        '6IA>+QGM!`mFD{}_8=[/28r T`=Aqu4@o8I($p5NQR{HhzuoF2SQGfI?TUY+SFL{' );
define( 'AUTH_SALT',        '4phD8c4pOj<qvOMT^=X>Y_+pUqdW~e&vw.8?z:@_Fr^nzJ`) JS A+-;OlRe;(92' );
define( 'SECURE_AUTH_SALT', 'Uvqa;XnWIs]DIt-F;.xTl,U`!Up&}XX/PxPPJF4c;-]OPtt$+jfx!W&}awHxn-U ' );
define( 'LOGGED_IN_SALT',   '^LxP(D.,}gF+/xoUK N7,(rZU0*9r!9^.X*^YSjBMRP_|MTr>r~eyqhq4D8F&.Iq' );
define( 'NONCE_SALT',       '.!QCaxgl,#a-1F<G*]lnlL.)+t*]A@LV4yZb<zv`K6$FxOJyeO1tj}Zw+Y:$BEEf' );

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
