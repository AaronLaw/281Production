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
define('DB_NAME', 'weblog');

/** MySQL database username */
define('DB_USER', '281sky');

/** MySQL database password */
define('DB_PASSWORD', '96549281');

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
define('AUTH_KEY',         ':#E&QI)gc[isxb!E` Um4SE<F+/Z#DB?08Q20XsbApFA<J]S#roXhFa8^m%B]zNV');
define('SECURE_AUTH_KEY',  '%H)XQ+nYoC:pi0]4t{1_RYwf>m$H`H]S-{}98}q/gx{Ord#C =~#q)?]l1V(NO|i');
define('LOGGED_IN_KEY',    '8/D((7.EiL[.+~> e&6;im<tg}!PPIC=p:_ACm[(+2bP2JeCgP wpt.UU%@!:nno');
define('NONCE_KEY',        'D1k%rjGop?d[y5/S l,^*SKH5#TIXX],F1`m`xCRIPkhO0>x3 wnd9OX@;yeD=lj');
define('AUTH_SALT',        '2SQV#.D~.Yu^8m73yA|{k9/*@MHu{6_;*=_k)(o|$Kd-hv]zo>d-pt@vhcpeV.uc');
define('SECURE_AUTH_SALT', 'r|.H*K:=(=|6LGJ%!^MBhu?ISxi*`@V7@G>g[ihzv((_-BUG`xCAWyPiSn[[O=L)');
define('LOGGED_IN_SALT',   '#w9hokqIUQc=:Dua64NoKA{Adw*i{mzyf7M?&[m1KN{,CEU(Mw~qOB-L/=DIf I*');
define('NONCE_SALT',       '(/fl:&-*I:x?sD=Bv](OS#?,v1:U?r)f?9($n#ibw;Ol%]-d7z/C6~/gAtlALnyD');

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
define('WPLANG', 'zh_TW');

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
