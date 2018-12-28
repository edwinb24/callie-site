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
define('DB_NAME', 'callie-site');

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
define('AUTH_KEY',         'Dq%](Mrm-gi,Mk5EYXq[</2i-lj-Xh)*XN]6:&3=;7Jq[;wF-pYU:G.Ku0iO,TR8');
define('SECURE_AUTH_KEY',  'A;].ouq[Jkd~1OB[I,.e^$n$^p_E-i,lK.yM<0d/Oe]6T)Y[#IDsN4b}3Bn`pw?q');
define('LOGGED_IN_KEY',    '#I9!P*uFTj%E6i2zAU@8fiuE[^uti;X}ls]*Gt6IpZ=$KP5~3RZu:x`;v1G#WP5u');
define('NONCE_KEY',        '1dRBPu8GS^1w#LqG4^Rq5DB2s%{=0>>Ojm)jK I}jU@SOHKOvRv{VpRo@U`(/*M3');
define('AUTH_SALT',        '?|PYo<xBPjwOj%{=U0d&y-?Q%S+!`09U:Yf./ZDT(B<JbH(K#r_e}[`;qz>^e~@7');
define('SECURE_AUTH_SALT', '|D?l<nmj`89ZxsC)]EH|r>V|q<7VDtrv_[iT.x&blQ>eb0[pU|>l6}d#,ftlB/yE');
define('LOGGED_IN_SALT',   '_VxM6k=jEFvA:w3_?Dz qcVKkw7LV2F67:Xjr^a{x7V{S{Hu%$q,lFaQGSI!uV)p');
define('NONCE_SALT',       '.jfAU9*MCs vG&-UY4;^Sy$Dsiu.KZd?F]Y@Qjn;X?SS1-H!5sfBHTl/Gig7}kpo');

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
