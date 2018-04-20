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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'darcade41821');

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
define('AUTH_KEY',         ',s?oliu@}Ex[/$sG3l08T61d*2j:x{{%h]e7u`tN4XSKph^$!ypy5aseAso*t&0w');
define('SECURE_AUTH_KEY',  '#Khi}[]2lV_:5tgS}e9^kENt$G}O)~-48N:scZ-HeabPzG2Bn*2O7n|lw2+3/TGN');
define('LOGGED_IN_KEY',    'dJvfm2dUar?^v7Ym4eROl(quHgoCD|@9h%(&}=`._&Ef,=vQi9j1.@QQ4Ur]lv$J');
define('NONCE_KEY',        '},13Qc?/5WMPucmUp#6$XW..52l|89/nxmmX6y<yK&`5$uU-o~vX=0bOqtuX/n>x');
define('AUTH_SALT',        '|o8+R-lJQZJA*@@K=~K(mS<SpR8gbw~0@esU?/ZgqgiBTG6Wcy=D`GxRDZtKK{Tf');
define('SECURE_AUTH_SALT', 'J~Fb.q9GYa*IOzj+;gG9p2J23eT1920`Nu3[ {H3|)X|TWjH_lU2a6r7xnS7%mYr');
define('LOGGED_IN_SALT',   '$I(IeIP<Z]W{|Am40Q4$7H1s%uDZiZe<Zw)Ub7+7%d<.q2rgGTCR2N$sx[z]J9O8');
define('NONCE_SALT',       'g+vLW`HbNV#7TCw,Ss[r{wo6#sP*$|pBJ,*P?c5G-W.V_yxK?m3M6_fckKB.VPOp');

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

define('WP_MEMORY_LIMIT', '380M');

define('WP_HOME', 'http://localhost/wordpress');
define('WP_SITEURL', 'http://localhost/wordpress');
