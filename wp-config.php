<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'work_danieleson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'bamsepuck');

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
define('AUTH_KEY',         'QOLbIBxuHV+$E}55X2k3be7fTQFzf9k2F*~m6N,gGtp<Pwcj$+?x]hqw06Y+L;S1');
define('SECURE_AUTH_KEY',  'C2XGd+_-BOx5iSwJv3]v&2JT f7;DD^qr3JZ-Z{4hRF2vnDUR(][+Lw3n=(?z7+>');
define('LOGGED_IN_KEY',    '~_C.ZSY] XCLT}Wx}DoxoVIv}@V5dq|yy:p)P<]<OIW4b|`6XtpO;:-Nv_+*,O7+');
define('NONCE_KEY',        'n+[w876t=VYrFDpB/hz^ 1-Ky,&A?NdH1YAQRj4hSdi}n,;R*+Q15AMV3o1@`Kx+');
define('AUTH_SALT',        '8xE<~y0`i%T9<bzQ[F {8tU|4>Css$sy~4+1`~wSe H>4~a0j45Yz|cPP=cl4RF>');
define('SECURE_AUTH_SALT', 'Nym%dE=l<o(Ya7p#k|D[LMW.nn[v`DIg>1^!(DVzm`aTQ0?-|d1z}-lS7r4^-9[p');
define('LOGGED_IN_SALT',   ']nU4y (6HJE&+Z@svRK)u1_{j?wEQMx/=^N{@a})=LG&J |pS+joPFL Y$OhhKq{');
define('NONCE_SALT',       'TxY9>o4Fi)`c+9xRn USH1xr~uc=/X|Ter&&Box(5pr-wDPTj@yoYPV~-xmc~-yb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

