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
define( 'DB_NAME', 'projectintern2' );

/** MySQL database username */
define( 'DB_USER', 'ty.nguyen' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tynguyen' );

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
define( 'AUTH_KEY',         '4%M#8pMAZo9ue0vInzuT55SF=d+>H)Y8Ogs0tecQu^h-&NRQl5[F.#IB6Aj1>elh' );
define( 'SECURE_AUTH_KEY',  'xfvRi-Bv40u5cWIV2o(:U#l6Zz+DglE`T :6bsjs/$dt(Q?qdc>2*,dU~TiD`lA{' );
define( 'LOGGED_IN_KEY',    'l=Rp^8d<V&/$iYy>24+k<dh3q:xZAS*D4a}%E5*8hLO]fJ}NH!$weZ`H)PUx4Om=' );
define( 'NONCE_KEY',        'R9xENihhV ?mqT)Mzl_m)arS2_3[x6I^c|Un,D$2WfQHllGCrk+<Pl;X]Z4j<eNB' );
define( 'AUTH_SALT',        '%C~g3-!]vN_xL/$AC0m~{0Cs1:q%V,v-E9,?G-^D+P:i~Hl1-vZ ?yyE~:5xe5|l' );
define( 'SECURE_AUTH_SALT', 'v~(dDogn2P}4&mf.c3Sj,ZhDwiAE:A<*At7K`$Dy!RsU&VBa]cH)NoiH8<j[m1^P' );
define( 'LOGGED_IN_SALT',   'u4/IH5n:S>5+POYH,YO{}71@Bf6>E_v/1~3LjQsvc-kHF.{f0gni {~GN3I5e4aH' );
define( 'NONCE_SALT',       'l2l|I_%f?uu)yCn]oEr5s/PQ,Z?q0VSEz:T^F!oR!iu^>{e0,a8h$EfH}bkT:FvV' );

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
