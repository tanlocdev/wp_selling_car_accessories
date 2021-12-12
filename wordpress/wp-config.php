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
define( 'DB_NAME', 'tmdt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'g6d#MHC*}@I,F$V?hD(eVgx-[`NOF=REB?6)R[U+m|#fd@KDAEWtm;qd,#9*w3el' );
define( 'SECURE_AUTH_KEY',  'BHE1JCUh#i5&dJEq5e3daR:u;8Q[D//j^3^Q)6VpLmq+S<^:^c@Nj/T#@hFj2PUP' );
define( 'LOGGED_IN_KEY',    'Lxu: >^}w2,i9VS[?Ul|2|7NMGxA9Vs6=$~zB:WN$`oG9FIZ#NpqyE.~@9XG?78;' );
define( 'NONCE_KEY',        'aNBe4MQhnq8mB 7|7uoBbWAUJZTKX$cW!7M8$-kzEJ/GskbkFL^/DgrSe?L:*k!>' );
define( 'AUTH_SALT',        'fg</hB)#HektjiO,%`!F=75sC@J|4W%VD5406@EypLDcaP wVZF[TR-UmNocUqeP' );
define( 'SECURE_AUTH_SALT', '2Ex1@fClF/^B<u5=|-4yMW7e^#aw+iLEy}]ipUo4qtqjpn|~]y|[(8B+{JX>l:#P' );
define( 'LOGGED_IN_SALT',   '!ruvjm<K(~Q<R|b*HxJX@MX_s3dcqD; Q;Rk:G%g4ksN#}CcsbEM)+G^<8ei3mT2' );
define( 'NONCE_SALT',       '(A*w*@@^AvOm2~|%5leL*0u&;*sQT6Gk).u3`.cIXJsjNpx_S &mpS2v_ux6Hy8n' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
