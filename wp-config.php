<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u2640466_wp725' );

/** Database username */
define( 'DB_USER', 'u2640466_wp725' );

/** Database password */
define( 'DB_PASSWORD', '.75[Slep0y' );

/** Database hostname */
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
define( 'AUTH_KEY',         '3dn1i2oqmtcese3m5fzewin7g6ibfunrsiph60x915t1peyrw77ksai1oe3tnaeg' );
define( 'SECURE_AUTH_KEY',  'cxivzjdma4j9qsyhlhja1ef0jmq1p8ghm3f9rdhpthjduyt1nhkzcdqybbdisqyz' );
define( 'LOGGED_IN_KEY',    'hlmhrbqnb6pzn3lsu0zf1bfagskcfnegxxwmzadzhuxekne01vna77bt2arjdpqj' );
define( 'NONCE_KEY',        'm0sacqszinkvsevg7mxqvkhq7jybd12gsfeodyqzpajtfeh08fjfgxuhavdzqolg' );
define( 'AUTH_SALT',        'kcz5tyezgmd9stcqzneyhqytkdf3pukhihwoxao2kfkcv23tufm9ojgu1mtuk7bx' );
define( 'SECURE_AUTH_SALT', 'p0aawfg2ulsxsbrbtg8fluafty7cbe0vgsanjgjfgbea7axe5tqloi5oadt8djx1' );
define( 'LOGGED_IN_SALT',   '1ps4csvtxb8zyowebiyya5uiv6ph1poynk49ngrgi33daou0vqamff2rkt2aifyx' );
define( 'NONCE_SALT',       'trn5hilkty8gabxiqcrkk4e0p3mwqyqtodhshxcwr3gprcf9mkhtg7j8zrmgznkr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpv1_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
