<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wp_virtual');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ' rEFUH4<|[$[KLF5mi}wo:}|R}-IA!~NLBqOx&n!;bGdE$|sU)@HgW#MK#!04*q+');
define('SECURE_AUTH_KEY',  '^H-}TId.WT-LqtW71WEv|u .V$x_xq,Tm)1D,.2nD7uhP{n~|[xPJ[Z+4+|?x!89');
define('LOGGED_IN_KEY',    '$:b6k$d!^@8I=r($-1u+LL^?[u8;gso+M7LmiOfYMl%I(BPLQGG%WZuB/lg{-kA5');
define('NONCE_KEY',        'w4|~2L-h>US?t$^C`q%) p `s_BOrBI=]|{UKF7YGW.JgE1!_QOE]Y-iN7L[rv8 ');
define('AUTH_SALT',        '3&v}S*q-O<rzDwt^CG+qIxta3rEB^5{*< __%jkEm,TGU?xpO| %4lfBvu3N0k-1');
define('SECURE_AUTH_SALT', '$|sTo;L0N~^$+.eR.6MZwaG@($9eZJH?leZE.`+N,x+{D+%8%Su9x)G1WN|4U<W.');
define('LOGGED_IN_SALT',   'JG|_IL,Z=FGZwhYmKc|n+eOM8PmNFx!*y*fS>,@InH|+;- yEhNFqrerFt9gV]me');
define('NONCE_SALT',       '}.KwvG{+pEhb+jQqJ])%H/9j{O2#/` ;GUt.OA/n4w[ m%}APx/@taw+dx_,+h8`');

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
