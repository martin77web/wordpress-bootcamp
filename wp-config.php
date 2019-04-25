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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'martin');

/** MySQL database password */
define('DB_PASSWORD', 'Shaddow04');

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
define('AUTH_KEY',         'J=JYST}v3)BQlSz&PG&I+VP-]6O:E0$Q=eQ%=lrHRQ2732mrxGy8{R5M*?j$Y~m{');
define('SECURE_AUTH_KEY',  '8VNhK}Yf y>_NI.l2v,2f5%L-|}7v_EUbR0W?=s$Z(d}HL8n%=.jRR*f(q_>@gaD');
define('LOGGED_IN_KEY',    'Te:_WiCWq>`p_QDw[__GO.FI&loMj$1Op].=o$Y9i>~wUvK*+E]gTgy4O?z0VY&>');
define('NONCE_KEY',        'Rz07hX}B{J7gM`1;(p1h% 6s4G4$kZ4gOD|xe(Td$*kM7p$bxUc*b/bZ1g]0iYv+');
define('AUTH_SALT',        's!4#y[:R%b2 6B:Uw1@J>_csZ~+|e0%9gZZ}zYv~d*<]qqA&M.,m{nU4D?FcNDas');
define('SECURE_AUTH_SALT', 'B=.5eyKQH|Nv0=P: Djq?%,MADjAQ)hcx=u!;-UKQHkq;Qh[49!aV4t1Kb;$k$hB');
define('LOGGED_IN_SALT',   '%K?&iys#s$m}AwG,LZI}hyuZMg#,_:8lr[;(JWl4a9&^TM4W4.B,sLKq}$j,V[zo');
define('NONCE_SALT',       '6/u9$J<7k~2?x?:d,qRl>D1A9>C_s~196%9-[#do*!i|i0#I+NS?zm|8^HU_W_pL');

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
