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
define( 'DB_NAME', 'invoff' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aviox123' );

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
define( 'AUTH_KEY',         'Rm-t}AK}r5Exx78f$/o/vS:>n%u;G VtDuo^eMCA:YaHL!l#b0S&E)v+)i)T}j]<' );
define( 'SECURE_AUTH_KEY',  '#]P7I!3_OvFR]|g<Vab=C(~9u4Ns`B5<39:1(E/G$N9[LMSHIv]:3N!F8`b!c(60' );
define( 'LOGGED_IN_KEY',    '^Hx;]!#7KV&ftkO|_zP@/[gIeHL?S}3c qY@?>:(>$i8el[Wsp.{(.mKm^){B|35' );
define( 'NONCE_KEY',        'Yo9v!e@!(fU8D,7YVdQ6ed6l|^q~M6/>9TGj4vttKcOU!V|s^%ROa]3Bqv4D;qyK' );
define( 'AUTH_SALT',        'i|{ow2rMx/SkD.q7|0!D=T8A&t-H|EspFNjonyAr6#{-<S^arZ}fCs2IF$6`pqPe' );
define( 'SECURE_AUTH_SALT', 'j(C?0kJO qq/$ZU,!,9E6M-)vYon*FjbWe)P;PxG!WR{HU<:+<JYPqX.qgDBwlza' );
define( 'LOGGED_IN_SALT',   'sOqjJZ>#h5RS>0;VQw<e(|vn2[Tv;=O,qPPqxd8sJ,_0)YPtB%1WsXJ3=D]:0Ax/' );
define( 'NONCE_SALT',       '3bKQl-iT_riqIw&Tu>cyuy#C>+QVQq2Vum>/Up*jmD>k5, 0`NloK;G>*PR3Q|J7' );

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
define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
