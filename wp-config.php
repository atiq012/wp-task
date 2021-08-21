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
define( 'DB_NAME', 'testwordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4YLHbqWNmyawMIvtvWpGrMbtuNxRLZTBhYrkxBA8zyOlHRX46A7LBW0KDHo55GzP' );
define( 'SECURE_AUTH_KEY',  'DEyeaA2fSo5zTG5xIlTuwjYQc6uVs5HGNnHcVNWC10x3S1UnZMxkTuJPjFFJgnmF' );
define( 'LOGGED_IN_KEY',    '1wXflecf1CfsB72eLUvIzJDdJrYVYJPGpowrxqXgqfBI9NKRk2qyOutphBBQD1q7' );
define( 'NONCE_KEY',        'A8ThN1je7r2mq4Dn9hzShlJNK1XWFQUluJKhCwX2HZYQDYDwdRmIKPYNgUeWTqtJ' );
define( 'AUTH_SALT',        'bwamEpgqfVbS1ev9X4co8PreWHJwNaFJYzbC6x0UY5SxyWoj3xWlBwayuCtOPyUY' );
define( 'SECURE_AUTH_SALT', '4zb2HZXjPEvaK0eSo6fS9jQwtuKKy7LVLhe7I5TLh2WNO104m2IMK9R9FOG1gtrf' );
define( 'LOGGED_IN_SALT',   'pTEN8V0zfS7YOzHC2C0gvMFvFtgezhxJaKyPGEJyCGlcJkWHH6ROuxAnMUNQGY0A' );
define( 'NONCE_SALT',       'uK4WX4LVcdaqX25JBv5kynbMmdKvvDiZRR2V6LOfW94tUKQhAvaz2F7rG8kzUXog' );

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
