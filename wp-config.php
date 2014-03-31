<?php

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

$__hasconfigured = false;
$__configuration_files = array(
	'localhost' => "wp-config-localhost.php",
	'qa' => "wp-config-qa.php",
);
foreach ($__configuration_files as $enviroment => $file) {
	if( file_exists( ABSPATH . $file ) && !$__hasconfigured) {
		require_once( ABSPATH . $file );

		$__hasconfigured = true;

		define('WP_ENV', $enviroment);
	}
}

if( !$__hasconfigured ) {
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
define('DB_NAME', 'qdica');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
}
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>]:DBREYBC$0,B)OI=o+8+}f]y_{]Q)c734Cn86}:I%7?;RQ(#W+FI%^b86p`fRP');
define('SECURE_AUTH_KEY',  'Dfg~-R!X{,gFAh%CM3wY 4#$=t+]i|_IlCi,gtz$g,V)E$AVS){sjWLwnHo(QD8I');
define('LOGGED_IN_KEY',    'e-DcXIp&!,+mW/SH-RRtO9FJNbc/%z6o89e$k>-IZ2Q4nJ!>N=3q_zvj?)>k@@.)');
define('NONCE_KEY',        '4hsc2_i*D)?e`PMlg N]l)Afdf?Xi,x?>?^@,c$2OGx7Pi[&N+Vvjh1X5S*C`]Z;');
define('AUTH_SALT',        'Yl}z{dla>/?xfZV]O><$]#%BA97jV}6Vs17@tmT>6GCN.F`ILP+uYS>zJv7iq-`l');
define('SECURE_AUTH_SALT', 'Evk~R1XzhpbCQw8%w^iLt3=n!2-IP76weuYj6f+]|O$B1TgZ6ClT5:|iWJ;Tq]fD');
define('LOGGED_IN_SALT',   '(+%sR3d,?-P[!;@~Do$:pSYanB@MT^iC[b_FVI&^S15!6M|+!IJt) o1hwa Z:[S');
define('NONCE_SALT',       '-ps;useOQX-E4!wN/W]2{GG+r9++<j_%HnD@`/BJ$)Bnx=UZ-Bx+sM*#..TzxXP3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qd_wp_';

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
