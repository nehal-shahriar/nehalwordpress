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
define( 'DB_NAME', 'nehalwordpress_db' );

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
define( 'AUTH_KEY',         'ef=dmft:lz $-e){By*OR0vb|rF5UIOT7^*YO2*q8y@_$ne3XDMP.BP3<id0!}Gh' );
define( 'SECURE_AUTH_KEY',  'Y=0EsR-Z}AkrPBEn0f}9^ln#B{qZ0Kqg43]nlH0ASe*mle$@Uta~1H:=nzB!47iO' );
define( 'LOGGED_IN_KEY',    'Vd03UcjKj:5QkX~sx63 AgXGfS38f>UzA:#g!frfpXE~4ie(2en@V6C;<~AAnrh3' );
define( 'NONCE_KEY',        '[GPC<f&wz%Y}+?NP8YLlw&aG/D$7Xs(t!OtUy[IR#)sm{b];s9#+YWI%3dI$P41w' );
define( 'AUTH_SALT',        '6h{9B=+^O)2FcG`vETKu-t3YFDKGiR&JvN2f|A|^>dn&Jv.5x1Jaisr(?6a B3],' );
define( 'SECURE_AUTH_SALT', 'HQOegCp|y,%Ae(/sRi%;L1z?O|aqTr!CSZlX$] %BbDA]:3YVfLBGqHd/mSi,CRV' );
define( 'LOGGED_IN_SALT',   'Od][9;1{dxZO$5|H*73<S$wO:A69=U!),/m$~~.<0!^-d^`-iYL5*Q^ `i,bWp7m' );
define( 'NONCE_SALT',       'As&aNq>6 7TbuUfqdNV]a|6r.@*AL<a>xKJP3+6)xC/xg2xx:l1-~>7c9~E*0wRd' );

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
