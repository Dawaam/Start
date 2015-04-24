<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'dawam');

/** MySQL database password */
define('DB_PASSWORD', 'backtrack5');

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
define('AUTH_KEY',         'eGy#P%f@Tlpnz0`GuyfEEFzUkl]6<dJf_!;8*GdD8t6Dn7;#F#eo^wbrk-z&Z2E2');
define('SECURE_AUTH_KEY',  'z~Eo({,4hzLE<~8N54>a!TCRo7(; #./1v+IQ6zr]<^`?Kt+JMr~~.#:zz@%+[_A');
define('LOGGED_IN_KEY',    'p>_ xQ33;h5]bY$dw*zoi~Ocy-5uc4F|G`a#d>K{*2AZ ]&:R@i x#R-p)As|0iM');
define('NONCE_KEY',        'Z+nSLLU9xOS7ceBkW<r5G,>OL&<~3:aNQ/(Nx^w4MjP|Mx<+Jv0bdsz[hAPqs*;b');
define('AUTH_SALT',        '!HI_le+nL{t [aR%{Z-+f]xC {JU8~esSWVEql@qTq7OL|c6#}-aRQcjv_NFRtwj');
define('SECURE_AUTH_SALT', 'FZC9e[%J,YMi`r>5qSzbj=kzG7IQTnJ!287h=`Ze5_mNXZY{O|n}R ehVC-+,Z+E');
define('LOGGED_IN_SALT',   'X}lpej7|g`fdAtBCcbDtr)[6v,{LF4LY|_+By`0Ta0Wbo}R`TKvql~sHs+EwS#6s');
define('NONCE_SALT',       '3trRDjD.ytp{c]|`EqIbsU0ddj!d>aa3|+HiznL&O,!j.3bdhw-D]zS$UVtU`GrB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
