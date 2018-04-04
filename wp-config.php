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
define('DB_NAME', 'demo_wordpress');

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
define('AUTH_KEY',         ':v:*`%72duXBYEaGNdVyWCVh vl9N J^V-[12Q,Kh`a0P~0XS9$7muH;4q58D&6.');
define('SECURE_AUTH_KEY',  '(bh|iNn]Z4jAR7M>N]F&a9|YsVC&> z!&aWvJp$mvH*4QD?+ZDQgkwYl%~/qQl5/');
define('LOGGED_IN_KEY',    '2QquY%Wp_0#?Tk:Rn(x^bAikMJZuVTO=ACQ2=GcripD<Ks[!u7LEziQ jIy.Wzsc');
define('NONCE_KEY',        '^r`E6yd0!AhV$kNd;XQ9n ;|;>Ls#mt<DtEwh1L^>#L Wa=T(z6DpkRt??}ul.M`');
define('AUTH_SALT',        'uVK-aB72BQ{n?+9lN2.^P5NZ /wEclA>J}jv1uv-`Z}+hy[A)5@[1<uU|eO.E/p(');
define('SECURE_AUTH_SALT', 'Rj;z7{2Df 3tHZEDA4iou#bWye,PiFJ&a|vOBVC@eD)R:J}|NP=lTivn/:-~`W]K');
define('LOGGED_IN_SALT',   '8[6obEM_Rm p/Bo5Hcv)%Kg1bxi6Ov&7zq$t|mLnp%L<d&G{O4u2C7:WsJn`pmt}');
define('NONCE_SALT',       '6jhp`Q#u3~/f*y;6A4Q;T$?~<xg;8p-]3 vjHfE%|r:ggSr3~ x=afVX2;U<-`xC');

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
