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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'urcscon3_alicante');

/** MySQL database username */
define('DB_USER', 'urcscon3_alicant');

/** MySQL database password */
define('DB_PASSWORD', 'this is the password');

/** MySQL hostname */
define('DB_HOST', '66.147.242.186');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6e82acf7b466b360e8681bef99358b0e6da80e6b');
define('SECURE_AUTH_KEY',  '2dbdc9db8578fbe8eb3b0821d69bcd3a45dc4b7e');
define('LOGGED_IN_KEY',    '6a6d64c2917f0da95126259b00b168989078c90a');
define('NONCE_KEY',        'c6e52b05e37f1a5ae361f467ba40bd76d1f0f93d');
define('AUTH_SALT',        '502aaf4941e432b923c2d076a0c59d0f57a7c0c8');
define('SECURE_AUTH_SALT', 'a6c77a96ad5f3a572f7d54bf3ea0a649e2a8f107');
define('LOGGED_IN_SALT',   '92eb608d38b566aec7568e3caaea11d40c90aba9');
define('NONCE_SALT',       '1f74fcb7aef581ab83afe623afd1e41d1e731fcc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
