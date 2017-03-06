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
define('DB_NAME', 'carw_wordpress');

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
define('AUTH_KEY',         '.X8kL>TsZg.9wI!k,<bCW5(Nhx0e!P+u?>cmMP t[+>oK+G6g4}*n;dB%S~4])%}');
define('SECURE_AUTH_KEY',  'CD+3:P}qr2qMPGI3j)9wJj$E}#D;&[J4j6AHO|r^yGp?M:D; 6S!,<foSaIYT-qK');
define('LOGGED_IN_KEY',    '.T>cef+S[SxN4c[7LBZ*qc<c0r-qJVOm~j>?qc-JpB3`WCeMPU~3cdz5i~}BOll$');
define('NONCE_KEY',        '8nwfmMSF+vR/Gvo8gm1L:fQY)v[<[izd IQMa*RQRFdhB:Vbga*|h#kc-6X>>+vU');
define('AUTH_SALT',        'KIMEu=V>^4H[y|O-fc_Ru8}:qv*dy~txXswI14w5~|R8I`;cf_w@igv5=-$h6wWj');
define('SECURE_AUTH_SALT', 'JYTCT)/LmgL7(|EyT(b]~UUCSR}<_U4y(W_m>%[!57;EC1f*d-[?Nb?<I+i9Y|mP');
define('LOGGED_IN_SALT',   'UF,kDFy.~KB#+7P=^Mh8!S}iiOqBbG4a30GY)9!Aif{oGpQ6B*}y^!(k)+brS&[6');
define('NONCE_SALT',       '{FCeOzFIJ}yRhIEcl=@mZW>7#m.J2s:XDAv_+rmcjrPqCg2%rzMbb9v);`|I4j6U');

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
