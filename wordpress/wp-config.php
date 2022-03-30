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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Be$t)P@s$w0rdR00T-u$eR' );

/** Database hostname */
define( 'DB_HOST', 'mysql:3306' );

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
define( 'AUTH_KEY',         'YA`85s=VBLS=9Z`|#TIL.y?hDl4qmD59 a~HB0X.:e~CeX2^^=^L=(- VHNO>Lm$' );
define( 'SECURE_AUTH_KEY',  '{}#woa3NQ([k|92TUkQpu70n;hQ}>dyR!aHFZD;IAzy3:Jhfqhflp($o&2ag7Hpb' );
define( 'LOGGED_IN_KEY',    'Mw~.!8:wC]|9v!O(*Q$?Z}GrLI+d!S^;S2`?L-)s:DPf~.lhejb^vxvr$saHLQ`,' );
define( 'NONCE_KEY',        '>? hJ743mZoyU$i%*daF.69!2>$gnLoKTn|5uD:b*d#3&_yrnmHo&c0#8)Yr6Ng6' );
define( 'AUTH_SALT',        'u,v2+@H!)SH:D6{6<?`vI_1.6Lrxq*vzOqkcyL?I/QQav>;Ll11;zxP>v$UzXxJ,' );
define( 'SECURE_AUTH_SALT', '@8sr_A4)..dY:8w f|/cM wD@VPB|^VGfi^[A3#Q,AFW~h=tgx564eQdSE3n[p*0' );
define( 'LOGGED_IN_SALT',   '5[ewGYzJqpP|0 Nxc$u.64@eicWE2^G1K}cR>#wYm.WjPeC-1W!bQ j)#}yCzPFr' );
define( 'NONCE_SALT',       '=YbUn48Y{KoEiFFf.HJ<rDd:Z6NkGP.|Mk;Lb[~l](!8&Oj>/:hy:{B)E@t@*.|@' );

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
