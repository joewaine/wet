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
define('DB_NAME', 'wet');

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
define('AUTH_KEY',         '$|ugrR[)m8(9v,1D|I3sJhF51eJzHtu4Tb_HPT`N?%`DVysqH<IoO#]1r8,>$yWr');
define('SECURE_AUTH_KEY',  '_=D#?CDY`8x)x3*(EW-hj%J)L^RwkDLRR ^jsxNI!RsQ:&cz2WOFm5X}=q#D[ .:');
define('LOGGED_IN_KEY',    'pCpDcnLyxV$(T@ =!1]In)-S>?q h*f8Q^PyfHix2>n?Zl?aAxZ=j^s*x$ONj{JA');
define('NONCE_KEY',        'zcho[yDm2l.) t3~DJHwW0>@(:B>nlj7!A6#Zajz38O?B(x]xQ{tKENuMmX:|ot-');
define('AUTH_SALT',        'b?<_Q/Amyd/s7AKaFz*1@V&jxzV.2sH^IKrX1jA#hauV#gSl=mBeDmJ3h0(N1HvE');
define('SECURE_AUTH_SALT', 'GxmxKJq4{Y73a`#;|st;LlC;>/-R0cNRI4(hg~F,!VM[oo6le=s+5G8a[ZOP&OTb');
define('LOGGED_IN_SALT',   'DmgY{ )eTcQG1?T?WrV$P$L@ZO7ic{T<u}?MVe@?&jiQIc*1w@C*8):5(ncf=vZS');
define('NONCE_SALT',       'L^XNk6MNus.-VPJLayk{OviSfKS4w~CO_+^+ykGr]aOdJkJ`M)]]^](YK/`l5N-|');

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
