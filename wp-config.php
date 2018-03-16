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
define('DB_NAME', 'lotusfrp_wordpress');

/** MySQL database username */
define('DB_USER', 'lotusfrp_rahul');

/** MySQL database password */
define('DB_PASSWORD', 'r;hz{7~w#Z(C');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


//define('WP_HOME', 'http://lotusfrpindustries.com');
//define('WP_SITEURL', 'http://lotusfrpindustries.com');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'qj|7yND ?rkuxjg1R. `!(CqV</a3bh8O3Blx2(s[JCDH4r06(h1K]8U>.-CXeY5');
define('SECURE_AUTH_KEY',  'OBPS@QGZT2:j2HMhMENKhM5DvC+v/S{Bo%8dHYMXvbhlx!%!Uc.vh`kdK96%cJ$Z');
define('LOGGED_IN_KEY',    'zY;q:@`h5e]OH32j 5&4J4vsJ^@2@,>XfGEveVz.f][irv3heQt}`Ro5d37wd}m]');
define('NONCE_KEY',        ';q3!PcK`v4xuT_]=vn>*s/7glabWzxn7WOQ7Vq%pPVl,*/[{z!,7@> 4TN?CO614');
define('AUTH_SALT',        'lJCkblQmdDe}2f!@-5t-d0LI<`vLL*H&1F1%qVGqMsL)v{9.@G*G>+x{;@mg6G==');
define('SECURE_AUTH_SALT', 'NIrchc3a-tr%]@MJ9Dixv`BF<r=xW6rXQDj`2._2@TuxXU&[mpFTIQT|dVBlQrO/');
define('LOGGED_IN_SALT',   'zpk-yr#Hr [i6|B5|>iY&mk]gF+NP7>BKLCa27uJzQ|9}.?bmCDD~)%V|HCpAFHO');
define('NONCE_SALT',       '^+RZrW31)s9-mSl>gle{~Q)mtURGU^lPQiwTZUlHY}:aE-fXI{qeE)0j;;W3A#:`');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_project';

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
define('WP_DEBUG', true);

define(‘WP_DEBUG_LOG’, true);
define(‘WP_DEBUG_DISPLAY’, true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
