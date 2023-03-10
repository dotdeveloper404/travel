<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'travelblogdb' );

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
define( 'AUTH_KEY',         ':3/6?llhyR[&,09lrmUYCw/pw+LusP)<CdNh[8GcOZxx0jkL.14pUe5>FF4[}8Ww' );
define( 'SECURE_AUTH_KEY',  'XTcFc}RN7YSU_k{J3*,[LJX>PAn$&b?-a-}?j~2ALQBkXJeaE+9-G;Z>]U+)o~PI' );
define( 'LOGGED_IN_KEY',    '}a[3&@$<(rMN%P-0?vuFN0QhorEfqmfpP5|<!nk-iuDxCk|@gorJM;M(`d6Y73R6' );
define( 'NONCE_KEY',        '-x<~m_c2R~r y -e,mB6aXn&,H|vt26.U1wW7bo}7O2Lf)1*$O6yiR?f}zf-gEb=' );
define( 'AUTH_SALT',        'h[M(HNLM>3[LU y._mU7?g~Cu=3N}2X,KAx4U~R{RadOd^`OzL} Dc1]LEDOi7Jo' );
define( 'SECURE_AUTH_SALT', '{4D2^BDC|EY*?U1TV%Ura>8+9Otx1zl9K:!IZ0=YSYn -][n@CIzb/vnZ%0,.R,`' );
define( 'LOGGED_IN_SALT',   '>~>~+tPMj7FX-,N2qBQA<?ZVh-:$GhU[4a]oDL}m&;JpC,E*|aa800ZWxnJlRX7[' );
define( 'NONCE_SALT',       '3F<)4@kDE&Y`GE!2U~S>/#U=Ko{@&Fb%`7~^A`8qN>+UAzC~^lA MBo~uvv6cJOq' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
