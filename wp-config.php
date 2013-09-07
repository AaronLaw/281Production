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
define('DB_NAME', 'wordpress_281production');

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
define('AUTH_KEY',         '[O}LrGf:+E}B1P%DaT9hHHGEn(-QBJgPm}CL6ym<_^CC?I1aH$Hi&N0*$Bf.d1M^');
define('SECURE_AUTH_KEY',  '?m*E`9}693SW_&$2fe<=!A{~}f0#uFzT;;>qeq,_*:!(E=/c_[]nd$$JUNgm]UO)');
define('LOGGED_IN_KEY',    'okmq9il9nbE=4Nqx_nCU#)i~AAf@=L7}KZ<5)w7Pni4mU8Hw/um]PhNWQ*Ig4Miu');
define('NONCE_KEY',        'tI9>7Cq<RsZ@lJ+a<h_J=(QtTv.+Q%9X/!^Y,1Pt71X|XxF|195zsBC=N(nJvk7B');
define('AUTH_SALT',        '3B>sf5;PWUTn6ef+qn$]Z=DfdAdz+HTA`b9D<Gs nM^#Eq7VF7(Go6+[V&$k|D|(');
define('SECURE_AUTH_SALT', 'SO:!wY6%y&wcjM@T?R}Jz~6:{I?=d7m7Z4)n=e=_@[1g6Yn{qImDsFTs7+wB0;4=');
define('LOGGED_IN_SALT',   '8(AE58G6Y3#*@H52N)_1)-s,F)Pn9e/8lI#-!t+?!~}kd}6 $Qc6xP3Z8o}E#^%S');
define('NONCE_SALT',       'NSzpj,P}59/tg8>-]v3~e!knJIjx,~f_Vlf=]hcm6A*}i~}L!+8u0,N,c:5nG#dt');

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
