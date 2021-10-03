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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JnEg1xshfqqsGngYnn7/alTqXz7yLhoTTR3xF7lPAhE52xBNZyYxxV2cF+Ty5lTrNqyCh0bK7/M86IlbwfYLcg==');
define('SECURE_AUTH_KEY',  'WyMl/pPUiRDoCfmhoJpi4Oi0dOjVOBN7xff9Nm/rmF6fLqz8NfYGtHKeO5CEZND+Pv5Q7tRuhYnrR1D5KLsleA==');
define('LOGGED_IN_KEY',    'MaVgPDC30j2zjnoU0/129ezexVaDZPlH8xnVEiRgE1oyLkyzspuKxWJ7j/Txo3Q+IDZ6YGZZnhzMIQLIUK4XHA==');
define('NONCE_KEY',        'AU1MR5mC1Yw6BvovTV6vGTRq+MRKFzGa4QztaomWCSAKaEWNHgqfFlgh4Oec+jKIVlpVQ2iaDUW9WT3HlmHRvQ==');
define('AUTH_SALT',        'b/GSevkv6bXSRgA8Gf+QPUqdcl79mcovfhJboWq8LwSvSDxsIrlxyioX3ZpPHeNOyTisJ3QQW3TN7KkF5nIBug==');
define('SECURE_AUTH_SALT', 'YW6OQTvOJvYIK2EQ6DRBpClTicmR+mLeSZdt/m2zlEyFfYzSCDpojSO/kZmYgLoryX763b9xAMjRSigbEA7zUg==');
define('LOGGED_IN_SALT',   'pbt9UKGwCB5XP3cRddLb4SXhiZ4qLus0M6b+MohiBW+uU8b+u4L8MRvGu3Rk3E0+sku1SbclpEAW/rkwD/kfYw==');
define('NONCE_SALT',       'ZeP7eaAXe0j5a1n04GV0dl4VPRsbi69JQHpqZvfgakQdvUnV6cFi5otXGFkY06lcCfjlWXUd7jCuxDk8R2/eHg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
