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
define('AUTH_KEY',         'ftA2TZ13g+f9jGcK93CYoWVAJbje2KAkxQO/aVeAsKOkrNH0/yTO09A8Jntr3438F89wsS0FA/rQsW9BlJ1vsQ==');
define('SECURE_AUTH_KEY',  'j/vgC3v7yVOfkDnb6+1zE4KmWKblTQ5clmA5yPsLFBmhxpJfKbHSkd3NXn9DoLqcQ5Aqg4XnEj4oe5/LGcC4rw==');
define('LOGGED_IN_KEY',    'IB1oqYojKMgqoklFrJyuVy2/CcVqYMfaO/LRI+lt0dJ5VEaiRwEHjLnOLXjH0oAszqZLqlRx9GcmF1u03PTeMw==');
define('NONCE_KEY',        '9SJ461cshTSsELx6sCpZFMjA4A2YkC6c5BZw0vRwZUdrGwgfusfzzJzgO/NsCCCMV9moBmLEIp/PhAbswcmM9g==');
define('AUTH_SALT',        'XyQxepZUAEEjjGav4sEefsoQAhzsIuSdXvdTtk13NQ36dFWqL2FABHappQBXAaxBH0Eh96kZhdE1QqyVQdwjng==');
define('SECURE_AUTH_SALT', '0PE2suuibmfSEPJaB3M1TSkOyv4ayQQivb31DOBA/KGkY2sUJ/guHHRUxiGEZzf5srsG5ClKcO7p49K28iCfWw==');
define('LOGGED_IN_SALT',   'zM9tW5gkLUvzLHU5CcvvzPPttAKUmaD9O9bsRlQKphxKkCL2RDQ5uhkUvqb+4PuBjGRG3j+uH3Q8b/Khc6OW8w==');
define('NONCE_SALT',       'x4hWYsIBtOvFMVvMamQ2v7omxarTaPyAOXN1CIQ2kKFj0YZPioaK/r/xKaIPvMnaFKo7qh6kvA2ZIeDHgaz7aw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
