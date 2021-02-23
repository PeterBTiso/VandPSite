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
define( 'DB_NAME', 'victoqweeh_wp102b' );

/** MySQL database username */
define( 'DB_USER', 'victoqweeh_50' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GLNjTEn8DfsvpYKnMUUQ' );

/** MySQL hostname */
define( 'DB_HOST', 'dedi1327.jnb1.host-h.net' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         ';X_TJ!5k->x4zs^dwc)=%[kKWlHNZ~*)kzQD;U,?30G+[][Q9jqz+$Af0-jNP6L%PKxo0;eS8DcQx@)1' );
define( 'SECURE_AUTH_KEY',  'c:qC!4ee}&!s?4N;P<5Qc%fk1wqrdot@2|-c4s**K/vXy-|$*l!_Mud{.n.ws4(t~:2s))3F_]!FL-5+' );
define( 'LOGGED_IN_KEY',    '7r/eQf|`kxYQJA1wG*%%biePcaA[62vLFUZf^UXz=(Yk[b!]LWqy,2!28[f14rTeV_jaP~7(R;!@/^B+' );
define( 'NONCE_KEY',        'FLA*]|7A2N#!{]BR-I3Vg3b{p4@#!?K|Er_,@Z@=AX#zl`vK=cW-sS-8pM.?1><Cw3Vs1OD%ZOriz6qy' );
define( 'AUTH_SALT',        '!OD_FjK%gxN@63`J,o<%8t)Rjm|!w1o!/8cVsR$:@?jk>C>;5/`&zD}Okj`&^U1QP!E%6n=}O!i!eBeX' );
define( 'SECURE_AUTH_SALT', '_d.XuO+!/S1O!};Y3v6B!T@s_Pd.BU^H^b/mp_r19f4gfLtvuaTQm9iDHtmPS.r`EAF)(s~[5^_1L#^f' );
define( 'LOGGED_IN_SALT',   ']@|vcw!$)Cl<9vqnN[D_*BQ&fI=DoHeqv,%d2f,2M8d^$A,^K^Y~U_~sm`8pLLu(JSYrYU8g&A4vZAy+' );
define( 'NONCE_SALT',       '*C):r4:q5^5oJMODVZQLrqKd-Lg+1q`9<u@3u1<|3{sPjt2k2xb)!ic@68F^CSlBv<5-cD%$6=]TO|-y' );

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
