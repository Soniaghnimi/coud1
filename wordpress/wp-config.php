<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P%q}K.l$HZ9e~@H4|w{?&=-lBF)|RtYzhkr`r1onVc>/XzgQO[$RqoRV/1$GJNt`' );
define( 'SECURE_AUTH_KEY',  '1>bgRZfP<>}FpT?R;[-`.lLfnC<-?PWgw%lkM4IH3w;;g~6DQ1%i>jxOQ<vMKagw' );
define( 'LOGGED_IN_KEY',    'VIferf^4:%!jgVF7OE2^Od@Dg@q]Kn5cVG^6pr|kpFpVN;N_7%V.7E8V9sm}R.44' );
define( 'NONCE_KEY',        'aM3jY&IJCo=T6jP/ncW:;PW9XpI,9q6EkDGwqn&9XHF3t}2yiJzpL-1^w}U[<pna' );
define( 'AUTH_SALT',        '+S(#(yJ<`}CQDHrZuV)[QsIj0>o*qQL |I`+%x1N|Xf~Wma0Md.%de2yr{|R!`b:' );
define( 'SECURE_AUTH_SALT', 'p6EUm](q1M+56)ztfcb7#+,7<u+_I(Y3PrZN7fgMX9MARKnI_o6w==^LI|nqd=1k' );
define( 'LOGGED_IN_SALT',   'w`ap^6>M1JLe2{7Y~YS_=)FH}IXlo6S&P3T9yBj^x!6o$#jZ@>gt^)v@T.t]BX9?' );
define( 'NONCE_SALT',       '78-rBYar-Uep=jAbn>vOGQ(/X/<)oZ?]*.rf!^nP=26=xQ:h_ozUf%NlTJ@aC4%i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
