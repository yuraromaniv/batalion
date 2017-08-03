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
define('DB_NAME', 'batalion');

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
define('AUTH_KEY',         ':[P]ygg):hYNtA)RTRh(9H)ng.]DcMDbv%k_N7`J?c~UE_<#Mz?]r=5yM<O5+0ZA');
define('SECURE_AUTH_KEY',  ' Xl@d=dKi3{YiZFb~91ZR{1B:O.[.<vj>l$bx^=ht*!zi@B6zKcEUa,ktfM+k57Z');
define('LOGGED_IN_KEY',    '6f^-}v:s)iG5L`4R{7,o1 l_]f6}WjC5#k1zk,6-^PgWD<hnw[}]KMC#lB27&@.f');
define('NONCE_KEY',        '*OQDb%H6+zI.VyP__NSIEJe0i+j9|xV1y(9O[O,|QpiQl+!3!^[J2`=K)jQ?$JFh');
define('AUTH_SALT',        'a@-S[DCe-vu?O9Q{PWrrC:em<N]epsTlY@hM u=go}t$A&qj5?x~bxr%?pEVYM{H');
define('SECURE_AUTH_SALT', 'LKEQ:?,g[S<CGLu%IcNx{e+v[h3z9pc;E<}`qmyO:YX,y5okL}R#ZVY[2;_o:l`Z');
define('LOGGED_IN_SALT',   ',S+Ze>09gf=l1(yWun6i|.u!7~+,7Nuwyn{t:HWGn$wS&Br.!/LZo HaZtpmyhva');
define('NONCE_SALT',       'l@B3$/rwL+){?;R[4Au1W,^,l=-9FV!ZIoO+>iU/zL LE;-<n8ofCzcZH+i@;K)?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bt_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
