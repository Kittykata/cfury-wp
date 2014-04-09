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
define('AUTH_KEY',         '8{-|*nF+tOP^.7jnK;1SI-{7SNb)0M`Gs~V4!Ah[d]X}`2ym8+UAHs~NFz)]PD>;');
define('SECURE_AUTH_KEY',  '|Suw54FUeH,HG I|))=/SEDHE%9om{|i0+ 4{+^hmLmjz)r2h-m-T8+7_8%1MF0D');
define('LOGGED_IN_KEY',    't|dqzUWjgZ~/K=}-$-(r9056%)9]-p=tTwB4=D_Gg+AYyY}_&e}MsfH2vD9o^s=;');
define('NONCE_KEY',        'k`3CN*BaC%X(.OJ3Qg;Z8o%0i0VF6>UL&rpHLsHQ;wAWkyDNHHbdtHA=;u_q7)O[');
define('AUTH_SALT',        'Z|uA6=VU|8A[q].[<LL*nJ*-Y|8`MDyB$#mTLKUs-FbMI4}I<q.&Voz/]6pdg`K_');
define('SECURE_AUTH_SALT', '.[}0y]>%+:Y+<}|&;_STDKg0xc}:,AtB|<3WIL5} =f{a<<6G@UqqwnOnsJ#E$:e');
define('LOGGED_IN_SALT',   ';Dx-2D6 e@]sNA4%]FgWcflJh4KF%dk5x;s~NMmR%RK@[SjUqM5z$2qK3-NkQ*.,');
define('NONCE_SALT',       '[/UqX<XJI-5k79x6,k=Lb|W}v*vI|a@iS@b18Tcy;SixP)w~2B~f<U?7*<yS~ry/');

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
