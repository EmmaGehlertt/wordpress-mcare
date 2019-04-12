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
define( 'DB_NAME', 'mcare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'OALb~B}n(_QE|[7Stik[dw>kKrO>vcGuhjJ]aP>.O*dSsP0@#[|}bbPpN ]2!tJO' );
define( 'SECURE_AUTH_KEY',  '~` ]+{ux}RwPmzHkm*Ln,MZ~Hvx>}lEh[91_Q:$f~yUf#Ch<pycj$*odDT]AM,jY' );
define( 'LOGGED_IN_KEY',    'MLsy&DA!M4TOI?LACqq$LS?GH`v%4?x&&H9yUF]DG%^XZ:2XJP^bm9ID3$|y+yA5' );
define( 'NONCE_KEY',        'G7%yJKd*fJ`i@H^|AGzJ&1i&SwLaxVMe>0zOJeU=$KyfUhKn8&bg,`/p`4@G y/n' );
define( 'AUTH_SALT',        ']C7#9<,a@TX9NL&hWJ*%.YZR#2$|c~_i|/,#[<wlI;%]nmhCgnd{7/l@bR/oXP,T' );
define( 'SECURE_AUTH_SALT', '^0O4a_.~m6XGqSWh6.>)<.Os=?ByfYNRy~?7Dq_,3=k(=58M=.UN=SoQkx)o?:lX' );
define( 'LOGGED_IN_SALT',   'm*PkmqIV1${-I+M$,+/PBjRMkMlans8HsXs`CEQ$>Y!-fzNM,x2H>CB~cC-W2?E/' );
define( 'NONCE_SALT',       'Xt%/:j*]]EW`DsEQ-~r)<4{Z&Sxi:bNsm):_)=+hHtJM4,8@4?13(yiKmvhUi%cu' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
