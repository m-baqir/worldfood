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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zm{C3sibx<I?{GY%! zjf$vV^4>!)b~%v^5=9A!3=RnXt~72atSeelD~clxKUJ+w' );
define( 'SECURE_AUTH_KEY',  'vsozuvQHm0ZuW&c-wmO5!isn[V2,SK*C.!~YuCewR<RuE(2qw.jpS*_a;k?#c<,F' );
define( 'LOGGED_IN_KEY',    'h7udM-r%8%`fpi6avpTDp*ts1U?@o(>d1^N-N*X_3,0SR.mepE)^+]t`>*OH8ai>' );
define( 'NONCE_KEY',        'vECnpcY(,8I0mWF)3YJIb97+XDrM}Or0bj!nM+5A-w4 CtyXp:L^=_P^Vrk!i:ZA' );
define( 'AUTH_SALT',        '4lpx<a%g 7e%[^1~vP-a3EI][.g9OC&YsXh^H8dusTDmTi#Dy&L}aV3f7)<1`x1!' );
define( 'SECURE_AUTH_SALT', 'mQ:/n0+!T822__a=7L.n^;tNx+<KI}3S}5BWE.Ce.]@,{d%CxYB]B_a3!XK3sRAI' );
define( 'LOGGED_IN_SALT',   'NnGuguqQ?`dltYYqD)#e!e<+}jvTRct8Fu~AD}jiq$_`.-&>+o6(PFQNG6vxfK[z' );
define( 'NONCE_SALT',       '[M]U&5y!(>,RL=nk=I -$7KIL4:xk!9AA1=kFzq? pGDrXj,D7h#ra6r/u5E1q~J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
