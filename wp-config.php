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
define( 'DB_NAME', 'development_db' );

@include( __DIR__ . '/../../db-config.php' );

if ( ! defined( 'DB_HOST' ) ) {

	// Production.
	define( 'DB_NAME'		, 'production_db' );
	define( 'DB_USER'		, 'production_db_user' );
	define( 'DB_PASSWORD'	, 'production_db_pass' );
	define( 'WP_HOME'		, 'http://www.production_domain.com' );
	define( 'WP_DEBUG'		, false );

} else {
	// Dev/Staging.
	define( 'WP_HOME' , 'http://' . $_SERVER['SERVER_NAME'] . str_replace( $_SERVER['DOCUMENT_ROOT'], '', dirname( __DIR__ ) ) . '/' );

}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define( 'WP_SITEURL'	, WP_HOME . 'cms/' );

/*
	define( 'FORCE_SSL_ADMIN', true );
 */


define( 'WPMU_PLUGIN_DIR', __DIR__ . '/Nerdwerx' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ul*x1wFS[Y-i>WfC5EFPGWGpf =uCZ/5hiER#%Zn{e |1Bi17(/Y8j^Kin$d`#ny' );
define( 'SECURE_AUTH_KEY',  'b?Pa+isnP!H?eDcXV+F6Qf}1D,!.b)(!ngkD7)&9ihV<qHPzEPV~mSj.GQAk;Hr2' );
define( 'LOGGED_IN_KEY',    'TwXfg=[/p,O;|)R(-F{@ x<PnH_3$w{ItF6+YV|@l-pKW3-ZpJhT<JH3zS$,d:3u' );
define( 'NONCE_KEY',        'P`idYYmi{7U-w5p|Qx@vwZ+l+9/ZZ,S@U8Hup1dRX47ex1;ZJaMQkQrr+-NnBkgc' );
define( 'AUTH_SALT',        '82e?iCN1jUJ+!A>eRjO-}DxjpeN llc`B!#tvyMv7v*Sy@uN78b8.#4{4Un;MvQt' );
define( 'SECURE_AUTH_SALT', '!f=mZ)7W@=N5:snA$cipn!Y)hp|lc]HFO&k)|JO+Az2=Bx@-ql;>l[8)Yo.W+&m*' );
define( 'LOGGED_IN_SALT',   '[Bd1dEi+^rf;Gqdwrv@;b!*Ql5RjKihQD|LF%yJsGIp: 47%/uE2q~^gJQOa-pn(' );
define( 'NONCE_SALT',       '*?1+vk7`/hX37U!F)t1yQ~:xF8Ro_an0M]-EnUlX_JU.t(jE)V`!Ui6LOEQG4La6' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
