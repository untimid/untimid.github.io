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
define('DB_NAME', 'vorona');

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
define('AUTH_KEY',         '1Z&aXL[H~husf@,qF!BSFkC11VzW_c20!By00zi5$3O<@?>]PBmSLR,@&b/qI]dU');
define('SECURE_AUTH_KEY',  '>0260t{2[2i2}T1_GIJq.*ClE^niJP*uhcRVs7#$Ao0|vTY;Y<zmVjP#8W?hz/!5');
define('LOGGED_IN_KEY',    'c0T4XVB1]$$dD+Bzd:ZeKSz#&0ILV MPt?p`QfT#a.gDuW`8=)W:?&Q4_H;SI<2 ');
define('NONCE_KEY',        'cYa_VQQ`a6~jN?5Xd~NIW~/Tm92t`m%F8,]xXo5/=c pQg|l_%G$Qmu4@5&Z3~tv');
define('AUTH_SALT',        'S21V}Zm9$KXX-PeAODJ+V;+)yB_<k-=[vJ;XD@) WuTxA60oM@E)O8_5`O;K$)Sh');
define('SECURE_AUTH_SALT', '!d $(zz=8x`<nf}>I%oKT{-21[*W~v/w9?70%$ysNf06gdCQTH.>nRrtf]f28?B,');
define('LOGGED_IN_SALT',   'mPsk6+428`^=cFNp9}uv6$14 ONMU%fXq7d(;Zp=zr]eV^AVrlR!o-?Yo>!jXM--');
define('NONCE_SALT',       'u+~CeN?-doECV#`+Fi6lR{B#[1^l;I&+ZxsCfw:$x;8K)Hi:SVb_;z~Hvy.($72^');

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
