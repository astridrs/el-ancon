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
define('DB_NAME', 'wp_el-ancon');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':M+MOy?h=[5]?y86*}87*)WsOc=hl5*aTJs]#(9TT)ewD3-`BVQqT|GbsP4Xrg.%');
define('SECURE_AUTH_KEY',  '*FUriAZl?t#RwjybF=m#2(ZZ|V$~~cvl,%JmOu|^~4(j{@>@:hX]YQ48{5/lTO<T');
define('LOGGED_IN_KEY',    '8Dnfg9^sr5-6?P_+_Ve-CuZty%dA$)bb2;y|95*n>v8p=dNn-PLo^$,Lp{tY{KU&');
define('NONCE_KEY',        'FAv.,GJZ(HPv+LJ2{NM.qr=g/*x,6trx:_)#T*_xO)YjKuYYt7Q~5fC?YS!x+FXl');
define('AUTH_SALT',        'AF^rXNNb,v9[=[Ls9PZ}U3QO~u?m<e+T+ 7O)!*<DF(`{XP^oV<]3@i>6&b6m~)/');
define('SECURE_AUTH_SALT', 'Vk0:TFN?F~<SO:Lm, RS@<JTIHx?x{J)8!E6}xgWr4vXVR[ W6}*DlY*wGy$S}:&');
define('LOGGED_IN_SALT',   'z9..+1;3CKsI$bNe!@F4Y-s]+yW)LG4Q%3ydj8#>@iqmDqD(d| j]`UFs@;{9aO>');
define('NONCE_SALT',       ')A{`AemEMN^`|vyqT~2P`]RvKM9ha)^+%pA*G#BlsvzKt$CL5nj<|iUa^`*-As^3');

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
