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
define('DB_NAME', 'devtoolsSummer17');

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
define('AUTH_KEY',         'Z%?3MDjUULZ !R4T7bJg+C1_pM%W{atqsr)W{s4*m{U%K<Do=kuBT]6sfYJ8h4lq');
define('SECURE_AUTH_KEY',  '#r3)gQIYFe,yGc}x#%n:1GZaSBl4dj<#M O?{bW3YQJW5V=lo}0%AwGO-3h<V?]y');
define('LOGGED_IN_KEY',    '/T}:i(0!# 6T1{(~*FY*FTGF)%q2s%p(7Yn<hf*=E*VTm|>8kRtmop#K&Z;a<Rfe');
define('NONCE_KEY',        'FHL:<lT&H+uUP*kL/vY2sf-RrbW(+KL9*v4>}ahxM2NP(AH$.&t2P Kb+`0%ii~&');
define('AUTH_SALT',        '?6kOC40U4M!w:G|K%7A_06b%&2Dz_>k8q*[#w($X1<DMGE/8=h(M]k]$etdl&H_n');
define('SECURE_AUTH_SALT', 'n^5d!9_5bCF}q_Xag6M!fJ6_IR7_&He.w?KEasz{jS)Q9.b<LHUiS&[6P7C|[67J');
define('LOGGED_IN_SALT',   'MSgYPugy:46>R{ q[(yGQgy~rVwWNlKfb8H&!//Z5HDTKt(1vgHU{QnsHZ{kCzb#');
define('NONCE_SALT',       '-*%_:fIj`M)U&r2h^`<Gt`4$N-kA3u!y6;3(G![D*GPOf8QHnx1Rm<:c.G{L4u3c');

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
