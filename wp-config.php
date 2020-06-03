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
define( 'DB_NAME', 'mfzconsult' );

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
define( 'AUTH_KEY',         '~xfpQH:q.(7<&QZO}#>Q>eis,W~{Q[KBylkF^_3@18>ObIL=fy&&YN;r:mX@fhz/' );
define( 'SECURE_AUTH_KEY',  '`Y7YGi[|v=J:v8[q^X00z=R==|5~-`c>h0[a~NR?`BxpHa(L&<@k9ldke#k3@0)*' );
define( 'LOGGED_IN_KEY',    '2TGqMQH=J;7f-E-=,Ff4E-)BTYX0nDx)9>l[kK2(ZJS~ax7i.hoG[{k/b% 4:8}N' );
define( 'NONCE_KEY',        'slk,t66QL9(2DWi*8:=%}=d,}9%OGp^Zsp+ZsCc|5b]WH$3)+<NwWz05VVq#cg]i' );
define( 'AUTH_SALT',        '}`oS&sl6NT?`rh9TZX_ACM^8V-,(uiW$.2jlq`BiHPT_s,C71,sE=(O1/8w6(6eq' );
define( 'SECURE_AUTH_SALT', 'NFI16WJ&nOg8s,9n6ks?R)?{tr3XYV:~T[9uAc.BL>Ur0UaMhQb5<-[),A,VLz$,' );
define( 'LOGGED_IN_SALT',   ']6/?K0iJRh<XqD?;juh>eFiT/:(F9vAy=t_|;}vm(lgzfHyt=>1&-SSIVk^ pC[2' );
define( 'NONCE_SALT',       '%|oQYBM6!QH+/g6DB~{pq|E!GB2-]KGltTV^u3?.-T;Wrc|@nZ#G@{ms`lsP=fdg' );

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
