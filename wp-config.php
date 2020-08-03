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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'o|p8?$3z+;JkgN.bjmVx)R zZ/FEbl/G82z_!|Texm-f@LM;:jz!<2+3xt(LkWV>' );
define( 'SECURE_AUTH_KEY',  ',E^Wz~$R%03%LVd3[Av?jRY)On4%k$AJ[_Cze=uT)k+M0+d]6D_E[DE4COu{{;KB' );
define( 'LOGGED_IN_KEY',    'hKbdiVTtHkhi_.~N[%&bm5Qu0Ap}zYYvNr[aC%1P30Zm}ubHPlc.@PuB%=s(Yrew' );
define( 'NONCE_KEY',        '6Gk%r=.7DXLwXPrdMb3_tm/T]hlrc~kzY<]J9Q]{FFm+[9Qa$8~6b.i7$RP!H,s/' );
define( 'AUTH_SALT',        'p^76@1Yf+&64>{(o$dFXNjS~$e1e/C6ODgHt0B~&)GHyYg~-=]xDjji8G4~0}Q.|' );
define( 'SECURE_AUTH_SALT', 'o9Ahgk[Z}@ a$}.$y9V}^.|<%*yNF:o43l6]}IE?hFx.Dl9)fV|2IPx1^FW|.p`%' );
define( 'LOGGED_IN_SALT',   'U_W5$PP<k~pj|2Q@@A_Bq1:e!5,2[x<!p7H^R1{/lOZSOElf!0AT~p+i~u?9_.E!' );
define( 'NONCE_SALT',       '_@+H5.,82/kky4uwh5gD,U5%2Wt#M}M46N;.Carse!~xd#B1hE(EW{WfY~@4jR}F' );

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
