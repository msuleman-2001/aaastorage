<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u494824178_5rBMU' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$ls+^`?aCvGkDWOfK@=f2MQ:Gb.c$O9Z#$F##h5I%I:feIxWDF(c{|fXR`s{$!ts' );
define( 'SECURE_AUTH_KEY',   'RyGUiA<Dncdsrx;~u,SKxK<P63.|_V!nhZi6v_wKdYn92.V;*.3N}:s8k1;14=]}' );
define( 'LOGGED_IN_KEY',     '[~ySQuP,Z-o.sr9Xpx#mk,!y&)C9>J<cXRx;,bpshpte&Y&ES#{k8e7%<xUh2@e}' );
define( 'NONCE_KEY',         '|Y-;JX:3je:*2^iBq49+ cC3&:}9sk<~8#@1g1S!%,?@GpH{3gTV`5TlP`>t{$0{' );
define( 'AUTH_SALT',         'z4/%2;5K*&~>Y%FVHzE2XoN`-Nn3-C%D#xwpAN)z=zWUAsSTGOK8=_0Q=t$`o9#+' );
define( 'SECURE_AUTH_SALT',  '{7U2uy2z9J~AB},kl)w*jo<HN6uxGEB$`1m8GZ;QLM>1U0+{vws#-#sX;laaw+[Y' );
define( 'LOGGED_IN_SALT',    'nVU~M&?{gwO{-5uEmtFmkUpr-XD;1]oGQ&o 3uGS!.ht#If=Ny:m(Pa0<y1Q[e<$' );
define( 'NONCE_SALT',        'acE|/Qg-+5(4v9DktNgfYdfoi*JY0-<U/vGm-[tDS}z!@P7q,vS~_mmK?#5j81kY' );
define( 'WP_CACHE_KEY_SALT', '8uetQ^ljgqav?P$E]z.Q<{knOn.0C2:90fGAAp]P]$dlOwE^u.-)+BW_8Ml>7}zW' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '55b42cc7f2a01199b713562a2cbaba1f' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
