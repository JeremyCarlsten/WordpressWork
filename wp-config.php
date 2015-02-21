<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_parmele');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b>g-ktK8qQ%.O~g}hP4LVjDvZHIR`Jvfi9ZaHBLy.Hqx4kqa&HOvmO[-?wH5-#7R');
define('SECURE_AUTH_KEY',  'S,#zmY/niWcS.=>xz]7xjr{/-x63-$w8&Te]-fnKa%;bYd;bu!z/1r.i#tcdP5<4');
define('LOGGED_IN_KEY',    '^dPBiwPV32Y%EhuD5yctd+`WFfE-iW@7ni:QPL)Lya;[mC]j8&3e?th#X]+:l*kQ');
define('NONCE_KEY',        '_::R2{21er11lblJZX}|m4>6l/wr+y7Jr5iysqK/ez2x@)nt|Hdax,)E/V[*K#=U');
define('AUTH_SALT',        '#juLCp3dJ& YOs(AS&iuxa#;SSJiflbcO^|up*V4MBaq1|-(Mw(m7,OU`kqO3  y');
define('SECURE_AUTH_SALT', '8n~+wnF3i~7H-&P2{KRLLvuF&!Rcn`6s.kICG|UhLZZy@bjhVWj#AIVa s$}~`!:');
define('LOGGED_IN_SALT',   'Lu/bI/`GSD@ra[9T}i9,9D a1j@*DgSlC*7f$W@DK,2y;roZL}n-2WbP=#[jgjo,');
define('NONCE_SALT',       'U^o/N-R5aWnzPii;!=sf3nQXNwVzJh#f{IS0wbN);~My9guT0G?z4.ot&Zsg@zwt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
