<?php
/**
test
testtes
sfd
ds
dsfds
dsds
dsdsds
databases

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
define( 'DB_NAME', 'ahpaoh' );

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
define( 'AUTH_KEY',         'DgaycRkUacAGDywPZJA2udRVEmRGYFZNFUEKE2PIs8NlouqAL0ORURM8KJXBJYKm' );
define( 'SECURE_AUTH_KEY',  '66FxOK4MKomh2DGqYu0wiistlKHUlsLLjQz3NpeROQLsz7QBULUjnmyqA9VOdDCz' );
define( 'LOGGED_IN_KEY',    'uetnDk6fehlGRhnM4rBiNDRjHRZYOPci9N6h0VfM0SGrUavnaGHP28X2WFFrjQIx' );
define( 'NONCE_KEY',        'K5VXRkKRvxLIC30ElLQAJtVJoraItpYUiPNtVFvcttw9AbFFGcTq2rBdktVUFagY' );
define( 'AUTH_SALT',        'm39itrGNm2viQdunAybVgVsyVvUP8d6vZbKk4KSWQZ67QCsiw4eg4JPio3Z4zr5k' );
define( 'SECURE_AUTH_SALT', 'WaZyHUMw0QQhjaAtnWXUEupxirTmiOwnh5tGMT4Ac09vGhnMp5VCaGm3e0rqNZt5' );
define( 'LOGGED_IN_SALT',   'OLWsucs0rAJCH7NcdZIemWEd0BS8zeYMij4F5uYizxS4gPbmJJrfuS7WgbtUb4nr' );
define( 'NONCE_SALT',       'LQTzuqFoShNKpGHMqg8EvZEswaeBcgqmx1fdxUtnXZaj8GDiSWUjyaTV3umLEhqI' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
