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
define( 'DB_NAME', 'srv' );

/** MySQL database username */
define( 'DB_USER', 'srv' );

/** MySQL database password */
define( 'DB_PASSWORD', 'srv@321!' );

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
define( 'AUTH_KEY',         'wsY.YIZSc[l4F2iX%%`R.WzOeKtkv;-r 7S7#4>ubS8*eMQUBVxC?>1m{PAVC9f`' );
define( 'SECURE_AUTH_KEY',  'KzXu0u)q|sLPck0/STub(xt_?MP^E%cPx]}~gqEA=f<U&$E&2aq@=CiXgac{{&MX' );
define( 'LOGGED_IN_KEY',    '?d5i1OY2,;>{H2E{ftJ v;L_x|x}/G66 NBE{YRhk_RJ=2% oIUKyHA6-}`ns+JB' );
define( 'NONCE_KEY',        '&NMB<yA8LP^G?S7QB~iFu:#M{LXv#w9f%qPqQbg?K|yKNHaO@Ho%*O[h}|EDurvI' );
define( 'AUTH_SALT',        'g8O4 *Ma?s%Xt,=qgx3,g.-*?..R%tyYQUy=Sz7}<+ZV_)A<&/CUUj)BJdRXoMbF' );
define( 'SECURE_AUTH_SALT', '+z0g;.c>$Sw<m$wPT~E}th415| /Jw.)?E3yv`.w,|E+9yc3uu1/j Nkpk`&a0GY' );
define( 'LOGGED_IN_SALT',   'tdY2uOd?#YrIpQ3un)uwNQpM%<=od!O79[rDsd,a8!5FjCB]Z9.fR$RcTjNsU4Ml' );
define( 'NONCE_SALT',       'f~2x+w=0wowRrIht[D2O]^&1c<=JdJe8nG|Tht ->|R/KR%Y%FbM,)K5eNug1fI|' );

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
