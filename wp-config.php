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
define( 'DB_NAME', 'u673369471_O2NVe' );

/** MySQL database username */
define( 'DB_USER', 'u673369471_JdgZq' );

/** MySQL database password */
define( 'DB_PASSWORD', '3tTbDOeCCR' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '!(Ts%HY|eeFC_.DZK+la?l-4#ijSmRq1bJCl9%Gv(AHvs4dUB-~WkD8Y4tZwA@wE' );
define( 'SECURE_AUTH_KEY',   'y(>.?oaARtK}}^?qjL~mw0|7fx`Lcj0doo~5tI.3#l( p_f> Mhr]Z{^Olmmv66S' );
define( 'LOGGED_IN_KEY',     'z)y,#*$d, &eVEsBqtTdPJJ.@PX]jSw:0pdWrY(4aCL .IKphU|h5F73TWgqdL: ' );
define( 'NONCE_KEY',         'VE z8w9?V?ehZla/k&@K*Yy}MrFr?y-N[X$;a|[m-[=:mp[QJ84OI|vjtt0%PZmU' );
define( 'AUTH_SALT',         'zTA4;q/~U{pang55=C++8$FB!a!l38pz Kpj#JtBoZp>)s=1W@8M[;_ZfUtm,FO4' );
define( 'SECURE_AUTH_SALT',  'P]*0u/E6=3d6cS&4~wJmwc!Lj@@9>ir$z~B^1`A[fH)/ZJHh5shzM.+uu2]h|-rL' );
define( 'LOGGED_IN_SALT',    '#D<-|!gpR5{YJ^xiTlD1!6&%:7k= r86i@Y=NB9<`2[?s_w48q<1sTDts FIKC#}' );
define( 'NONCE_SALT',        '~41D8Y!BoN2Y<32_B#jyC}N,At<w}FB<%KsuTn%LY!Ao_I~Zll)[0n%@dd*h?[9|' );
define( 'WP_CACHE_KEY_SALT', 'fzYr:p&70sg@mt%n/Gfp8^(1a$F2^^hJ!kwVv(Eww0;)3]GaA2jWzfdE)B=gpL0o' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
