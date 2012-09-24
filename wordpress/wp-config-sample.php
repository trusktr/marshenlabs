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
define('DB_NAME', 'marshenlabs_wp');

/** MySQL database username */
define('DB_USER', 'marshenlabs');

/** MySQL database password */
define('DB_PASSWORD', 'AKjfhf47RFgF76dD');

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
define('AUTH_KEY',         'CVqrO#slc*ci7-e^8!!1MS,yXiX-<?R[<d~Vo<[o&^9!Ukf>WEBr<w6x.ws]3GrG');
define('SECURE_AUTH_KEY',  '_ItMc|UFgiHpf#1|0w|3~v/0U0b-,CBZtW}rbeY_l>(RMN/Lm&`FC_^*tUXiptrB');
define('LOGGED_IN_KEY',    'YlG/}g:gRx2)zHQByWP0uaWU#T)]K!gU..b^gecT~!9A8m}AY;w}jjF}bcEW!p-`');
define('NONCE_KEY',        '6EZh~c2<X5{^pQ@)3-n1T$xIJa$S]8i(HHB7(Wf(cvi&Pz9-mOqg5Cg7;17PxQT|');
define('AUTH_SALT',        'f68o8N{|uERd7#|{@|7agUh wZNUT!Fno`*I4>.yLPZ]l0hFb5Ec2+k^IE{D0_fK');
define('SECURE_AUTH_SALT', 'Y>[/m[BQ<:Q!vK>v_r3&qZ-8jG,UCNWnVW:TGDHDPRSHh=~dJ81v+x|S?::f#SFj');
define('LOGGED_IN_SALT',   'uU@Uh&8C|+I<nX^>NOcawvwYk!O]$g.o34zq,u9(J9}f#u({^ni#{+2zF+b1;X!}');
define('NONCE_SALT',       'ytK9_lZ %F(S?/r~_ZDT+T^TQ@_nri,xO ,o&btclOzp.p5/{B)YO=-Js<`a_kq;');

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
