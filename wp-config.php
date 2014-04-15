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
define('DB_NAME', 'codingfurywp');

/** MySQL database username */
define('DB_USER', 'codingfurywp');

/** MySQL database password */
define('DB_PASSWORD', 'icekat12');

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
define('AUTH_KEY',         '?l+#C!u~rK>3Ww%$B;:+C;D/R51XE>?Ok(I/V;e?bF6kR`tM>*wT-CB,!1i&G*SU');
define('SECURE_AUTH_KEY',  ';Ir+~$smg:rS&n]Jk{l&05-jnb)UPF@&g^oM+(iMxNs*Y9/s d&`1I[_!r[1ZU@6');
define('LOGGED_IN_KEY',    'he2z+ii`|C/NT~FiwVHY0x%jy;OP a}]-{Z50^6kN?|C$?@_mjZQ|F%(lyY8_pD-');
define('NONCE_KEY',        'sTWMsrb-|Y*m?hBG!0[at@]xW|MlVYY?|UovRvf@)w]GqcD.iN `n4_Ix%r&Y&M%');
define('AUTH_SALT',        'IE+{v=!iuc-d,3fFcZFN-=2^|@[i(m/|QG{4t*,8|x;?<g7.4gZnvF3l2W!|D?3o');
define('SECURE_AUTH_SALT', 'L-4E_ bN->G1lHAM3ILiK`@Ph?MMV6oT^a^w-qh -a%2$qfNy/0w[v@:e1mH ( 6');
define('LOGGED_IN_SALT',   'R#EJ:Q}C)2_ki0HS}6TGu<dceJr:$j!Jb4G1(jntYJZ7(r#*^|`4dsdB`>]{cxZ@');
define('NONCE_SALT',       '/rno2Jwzu TJ,#%)S=J5F#7/DU*]vRY-bsjBC/||3a^D,[oZ(4 w)XvFw+#=3K}_');

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
