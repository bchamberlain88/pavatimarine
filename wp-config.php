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
define('DB_NAME', 'highwayp_wp545');

/** MySQL database username */
define('DB_USER', 'highwayp_wp545');

/** MySQL database password */
define('DB_PASSWORD', 'P8S8hS-8.e');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'kdawyvk6ikvaommvuyfpkn8lu3lsnfbd4x2osd9fox6lnurupgxiubuubmkddrqn');
define('SECURE_AUTH_KEY',  'xvzvwpgxieouu3qywzzg4uowe9zszfnmohdug6ehraqwbbbxh2sai8ae6esi5pzx');
define('LOGGED_IN_KEY',    'krefe5aqcakkck1uqhdk0ebty0gqxdhjsplizfhkb18dveeyaa8wcidq38iqprwu');
define('NONCE_KEY',        'kxlboywysikrnaiyoeimx8myvhecipqgrnh6yfdcluta80u314z7vjwgg0ztruio');
define('AUTH_SALT',        'ivfwsg2sk6fmxjyape5nd0cpraboxqvvl3148l2ihapturcxav8hepiqg2yjmsev');
define('SECURE_AUTH_SALT', 'rejzp9zbe1u3tnaomfs38ns6okkcmhfpwivl0leihl3ppb2io7zywxntau0jpzoc');
define('LOGGED_IN_SALT',   'fg3d0z4sh5w45wxf1uk7ne2ofptsg8lisk9qzfl2dyeok5ty3duiuvkvykemfsbf');
define('NONCE_SALT',       'xayqbvrbgjnwpn2defkxtphaagfo71mi2nykbzktwwjtzrjhyox5esrqbbuvtayb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpgh_';

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
