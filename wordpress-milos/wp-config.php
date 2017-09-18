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
define('DB_NAME', 'wordpress-db');

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
define('AUTH_KEY',         'mx~]KQ%4C7>K~r+0b.6:ZxLd(W`||n4u;#;)w(l6(*b:w#&`$6>^#QT[Y}X)bZ9l');
define('SECURE_AUTH_KEY',  '-x6)>>nd=5.C%_axN[aBLZR2 Lw59J0LWCyuZ0e<k.pt@QxCAWyn_Q2Hm8UB0!:x');
define('LOGGED_IN_KEY',    ')Ge3fmxK-fj^g-RYX!Dh$Znc=@fu>mbk%ac`p0,|sXf;X,b6hq)f?(PI_,#KbRq$');
define('NONCE_KEY',        ',Vp}g7R*i-2Eky71yMDGDv# H?:B3&#&`25;`^^SK!mn}4V+#pi5%Z@</.&TyJnx');
define('AUTH_SALT',        '1E2k?iWjti($2]6q(I89&6=xWNj6!Cvdfz`+~bS+<$-|Badbr/DB#b^#4.72Cfm*');
define('SECURE_AUTH_SALT', '*ECs[`o;#_~hcar`ST,P~Br,:C1/.OhVu{0EyK;^EkMTZ-C7 Ie|Y(zdwP+LD,CU');
define('LOGGED_IN_SALT',   '/XYkKeZDMKnT^Cv0Yhu49M8MCFKMX9NTOGS3l>Y:G<5T0Aqi;U2 8 w3$<0.UNL9');
define('NONCE_SALT',       'u.c4W<?CW`p<SROJm2MB2Ao4`Gy[ JTo@lU$|m]A wj(A]ZTefz6?6swJz4Ee&<N');

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
