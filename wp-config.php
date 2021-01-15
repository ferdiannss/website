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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',wDo<~=0esqfIgqBO-KH/[)#?@AAmkCGsCQdp9&M&Q1}7JH:4E^AqtIWZXcLJ*#2' );
define( 'SECURE_AUTH_KEY',  'uj)JS`bTXB*.}M&1$tuj!/w1!HpCzdd^.&dwUX7xluVQ rj ak$t-z?p^1X2:r,2' );
define( 'LOGGED_IN_KEY',    '!a)/;e%NFz-BZ9>n&zDW-_]d}7AVcP%b02EI^SyAX[gJ]F?Y2-[Zu$c74ePdIr/9' );
define( 'NONCE_KEY',        '+&hkE&Xk^fZ78}$T782bU2 txwj5BMT)=:[jie1RG}/FlC/$Xmhx/S~CKQ *8eKe' );
define( 'AUTH_SALT',        '@IzotcAJcE8RAY;BPp-2HNJhOaxmOs1U=tiy2TKC48s #^XZNjt ]{uzwDMK`uWN' );
define( 'SECURE_AUTH_SALT', '8`.8GzYRWwWl.6KgOhu%0Ceb1v|EaXhgVKK6}f^!4w Fn,;Z o&XcP#r4QkxI.d5' );
define( 'LOGGED_IN_SALT',   'ygy{CAxdrRK;X:r1D6^PDkcX:#`j90~!^Nt5v$DW];:Ua(lJU0 b#@n6CG{<Vg@*' );
define( 'NONCE_SALT',       '&`0C85#X~nY*}eK:9|0<5oX!N%9|>oo36^TFD*:+Jo.ki9B-pIDI~6iQj>?nB4%E' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
