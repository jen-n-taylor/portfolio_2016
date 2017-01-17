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
define('DB_NAME', 'jentaylo_jentaylorcodes');

/** MySQL database username */
define('DB_USER', 'jentaylo_2017');

/** MySQL database password */
define('DB_PASSWORD', 'Ih8wordpress!');

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
 define('AUTH_KEY', 'uV#J`cz$s4)R 058i@P!I-a]S Fr7#-JW5S8+)+RNx-6Yl6odlV$tJPV16v3c %K');
 define('SECURE_AUTH_KEY',  'MB6a`_ dwD:TT:1~-kj|y,L B{g=*k$N{%bVr-~pkF+AHGG1%~9-[Z3rneR ]<6C');
 define('LOGGED_IN_KEY',    'bnmuMI1m)/$/e+{957-BLh@-~XSP7g3pJFim>%v~]c,`.SgH9;BAw1#y2/1T.o5$');
 define('NONCE_KEY',        '0jb#EZ/qn&SfE~tAL!#eP|!l:*.uzQH}&7HQ8iBmD?w|@kT+?{)#U[9Q&H5|Y<;Z');
 define('AUTH_SALT', '~}/L%c+cNQ*F1n%+g/(tSXR;N  myZig-w,XiJ*@e)QNoD-CKj{*;|3~?;Akim11');
 define('SECURE_AUTH_SALT', '|E,Xm/Ym D,(K_NxWV[|fMJQz|Uh#Zg=!TSbI`6]I 6}#:+j3p-ATlUC|C4{IZ)G');
 define('LOGGED_IN_SALT', 'I tizT2v2-W-S<WcYN,!LwmAc$8&F+U`91;{1HjZXqvauPp=l8Tt7BF*&m@.xzpQ');
 define('NONCE_SALT',       '&LZ;P!^JpP!h+qP%#A6lU*Y4d_+#L8T!+3TA[d0pm)Ry7UvG=7Z|)!xS!;Mr9e_i');

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
define('WP_ALLOW_REPAIR', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
