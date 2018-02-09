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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '777');

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
define('AUTH_KEY',         '7}MBD$Hl)5R4_jK>>K06bMHv32YW[UGfw?SrwlgT#-=_ !&:1!m,P%(if?#&,-x+');
define('SECURE_AUTH_KEY',  'oHS0.uL:x18h9x%[;5wu*e}vB~^n&yC^0LXArRVk|/c+:p]OaEJzcP@3XnZ{W%{S');
define('LOGGED_IN_KEY',    '$Ly`3a[Z=x9SH(bc4k{He^GO_/Q,[BJy3FAllbl8&=Jfx abURf}+Rhx$M[GL5}L');
define('NONCE_KEY',        'vsZa__w*1e3si[S@!$+&m|?=&7Abx4:1-Gp|ylou.vNvU4XP2GXV(!oW9-gFbrVE');
define('AUTH_SALT',        'BH8C.($Np/TTIC6m^ w6h}@W,cUo]wS[9DW<. E!3eXvOh?#@zflA$@TqSTwCm-{');
define('SECURE_AUTH_SALT', 'eN)b4A9zKxe52_T}5=@sSbDH?4uj5u33[USJ.`-0S@F~^{o}slEl)[5el!`)v`6@');
define('LOGGED_IN_SALT',   '/-V. JtZ2Iz?YJ7eu.X#0_Y/(x_Df;^mm4eL>aNl<?Nk_vmJZTl#2`O|Q}!|`TQJ');
define('NONCE_SALT',       '!-1C<IaK?fIW27)1_|T?Lh$~4!QFM3F?OS_*RdHv+{,i9M]G;Hj3swKd;+jxcWwS');

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
