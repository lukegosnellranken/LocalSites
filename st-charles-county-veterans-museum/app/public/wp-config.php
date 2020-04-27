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
define('AUTH_KEY',         '06uSCsBhaJncTxJ30dk/JHIl0GhS4Bk6ZbgcjAckY0reAEG8/lh/DcD3/tHfRugW5uIIZaiFTIiX5I727Y2+uw==');
define('SECURE_AUTH_KEY',  '5ZnDFQSY8k08xOZRJpUb6Nrf7dw12Gslbr3kJ4T/io6eYN/FaZcBlubMBizRsxDnnSwrY2WXHspzMcIc6/6CfQ==');
define('LOGGED_IN_KEY',    'K3XWsGJCmv8Wgt9WzTYaCWz7vMdNVXw6+cYYVQ95iWlicFi4TaLAnkNi3FXrpnt3qsj5PHJ5B5xgv3ZT9kBeAA==');
define('NONCE_KEY',        'ifuM5oNxd274bdbSB5lFCL7hJv44Mp/5X1W+ifIqvTTqLpVexDoj1bWVi/K7rKK/BYlyfZI8xvTE7l5EO7Cm4w==');
define('AUTH_SALT',        'tOIRcU4DS4tfIwYZLP46oBEf/iBCf4zbxQEoYWa57ahVbXGh8Uo214rZHSLglG40ILX3t9pyDho6/cG8XGig8A==');
define('SECURE_AUTH_SALT', 'NRFhT9bIXYc5Ih7cwJC1hayCqkfJu1LAnhTMi743Z6rb7Ci+zJAqsuReJjjZL+RV5LVXpiv2PAXv1sRwU4x/oQ==');
define('LOGGED_IN_SALT',   'Et9HtjPTuiZF3i6+MZhXxUyDJqwZ0ts73L9ZqIyy/9GWHyVXFF94lp4HLwUCFU8M+lszzhQPr/JcgvmqnUFKpw==');
define('NONCE_SALT',       'vhMgjbbvxc7/NZN9GatD9r9Znk3NFDYgW+3PCtN9KFiMTcF9WovsoJKxCReC/ESMyqcj6wVp+vq1i+t454nLxg==');

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
