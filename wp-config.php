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
define('DB_NAME', 'matamoros_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'fCG4+.M?8a0^LW,.6D@Wt}XKU;:)44(wBePFT4fty8B55qHL.U.i38=Xn1,i1)ty');
define('SECURE_AUTH_KEY',  '[`+o-=%;U1PuC:w5ridD7+:m=^b1jpYngx+JI-7f7B,&sQvfXa}P^|/P/@&e99>;');
define('LOGGED_IN_KEY',    'L)_DS8r2|Ts<oVMX~CA@5z@$o?u[&Vj/QjC}zB81lG*};Wdl{_C:a,Fhkzm1KhUN');
define('NONCE_KEY',        'jzMbm&TIRDeRP(|b6;9^spuc(;MytkThbdF-;W5HdQ ]T0JQBzk^Vx.AAT{UnGPu');
define('AUTH_SALT',        'lJD8(CPkX0/tT2,71Dh9KTr8nRc2Q< m.h&Wy`s4d|q{h w>0VAJehFe+)D9(zP3');
define('SECURE_AUTH_SALT', '%M?Wg*xa~A/0x`i6}$JCwOU<~{YQV2%L:7Xqf]|4 o6K!| >(RX]f:7{A`)+9-*/');
define('LOGGED_IN_SALT',   'md/c9K&c/fMXjqeY8J*S&bj}P)K5Z `VpPAQ*HN@=FBETfdGC6x$v^@OrQau%/bp');
define('NONCE_SALT',       'F!3*Hl.9R561nV?&+_d 0u#eTO-*Rd<$dPNeugDc jn~d?qx.~<]U^Pj>@~dZuS2');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
