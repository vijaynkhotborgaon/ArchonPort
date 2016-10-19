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
define('DB_NAME', 'archonport');

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
define('AUTH_KEY',         '+}4wb/sxT0q!Z>R{Qf0FP!LDcRQ.A^$TxYgimH03_;GbOM@,xy56}V>{$>X4y0cA');
define('SECURE_AUTH_KEY',  '`m<rg&{|S;:-5`ll6ZYS[2?<u0&J|-NKB6hSI(N_/rrZt}y%Ll<i1qT+K1en0J10');
define('LOGGED_IN_KEY',    'XlqNJh~1=Z:6G(Gb&RmD<gx3F[PRbuW(KH#.k9$~&#IA6Q1vRJ4_3WNL[[[7]rB!');
define('NONCE_KEY',        '7v?obaTI*-*RV,5_c=Ml-OlvHzJ:n.w]l,LNUEc8C6!rANT|uKe@xPxE&<m@`nCs');
define('AUTH_SALT',        'pp7QhziX|NX6^KB@lt,h)pvvklNGVk1()vfQ;?u.6.K7;{z;ea)#HT0Jn.<<*2x*');
define('SECURE_AUTH_SALT', 'o4WKJ6%/bwR8P<iCu&6Q>lG|u=-qwD6KZ QH-7|{8CV%TV.R*6 ?T9,#n:)[_GLX');
define('LOGGED_IN_SALT',   'Sn?ciRU~{>C{PyvAut0$|dG)HDf#uC.iS/VT<8PYBe#v0IaRv^Di`MoAXlL:lIN%');
define('NONCE_SALT',       'vK(t-])~$s^IDXRoL(vk:`|3fh^z0L1>[FgQhk]8G!?LXqhtPKg@R*NE$z9#N*.}');

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
