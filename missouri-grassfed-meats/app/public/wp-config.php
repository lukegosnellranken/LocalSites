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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'gmnwOMWC1JvWt13Z9FibTlV1/ZvXF5VvYDEg/F0UKDeYDAw2Oo2PwACOA406226kE4cymm7QfAmV9j/w2L+DaA==');
define('SECURE_AUTH_KEY',  'W1hGXUX8CdDjsMUjiLcO2nhqFghU3EtLpAxIQmb0BxvqJzUllWq86OU4pXd92fOM6OjOSElqzk030wiYnp+KTQ==');
define('LOGGED_IN_KEY',    'dt9Kly8/pNoxcerqmqb66DVtyoBprO6vWx3ACM9zDczz4bhv0vEARmp1+E7QlwmH/PoK2WAuS4cCEQ6HJwqx2g==');
define('NONCE_KEY',        'IOjbhXYsVlvcacmv55Wd1NhLiSUJA6Ro6DFK7mCnLbbrUeZzPzjqruh9kp66vKtSCYf+NWNrtt8p1hb0Wqn1Bw==');
define('AUTH_SALT',        'c75npICwfplGd+hOlWZ7OP4ReUwIbA3/pV34z/mtRsKCR3uU2t05wjy3BY3NfXQW7NzYVsqwynvyGMJATuJzlQ==');
define('SECURE_AUTH_SALT', 'mPY5nWGJWMppcJyu5BunclOXFAu/r7XJ08B4mVZpupXUYMCTy2iyIPoOioxRgi9f2S+PRU9CRPJL9k7pj/dmig==');
define('LOGGED_IN_SALT',   'w4jWjej8ctmokpblioUgyn3d0PxxrayaA1loCfyMnLFrHh+Van+n/fHb1cU821whaF+sI+hSfBD/kuXRnr8FAg==');
define('NONCE_SALT',       'TbavrDh9jd2PpVH8x3b7ZxWVlxTrery/HAnZ17CxvLgExgyy+KtSfzwa/x2CFL37gnFbfsr42ee99ESVRECEMg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';






define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'missouri-grassfed-meats.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
