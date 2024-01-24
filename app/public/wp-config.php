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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '~@%;6<-jiLmpec-iO}5 `Rs(ZSXLnHWjD6(fHs@ym:O+*81.XYG%a/n$.2a=#xQr' );
define( 'SECURE_AUTH_KEY',   'Pn+G3nCf~|7*iyA&BsKRECt(L+?-S(~R7A:Jd1|#DCg`u*K;=X(M8;,x:2<@3v ~' );
define( 'LOGGED_IN_KEY',     ';ovv:!u01U!.a+.A]SWq]dGoBV%MEuoP]+$&K^jWk_x`)~@e#.n,2&VG7Fm%[J<F' );
define( 'NONCE_KEY',         'DG96>>`w)/;$a{<D.a?1|y:b/#-{Yxq-Qs64r5ew0!bIjjAtEm-J-{eKD!t:aoSu' );
define( 'AUTH_SALT',         'Pr$kmS$1QSZH6^!DlBLlG- `Q9xQm=wVKNOp~vnR6/^+,]J]ZW87lV/i7LK2UCqx' );
define( 'SECURE_AUTH_SALT',  'cB:4V*D#*3HFcUWy7t7mD8JqqVezY$Kxe0f<Al~d.(]-*5P&EKlY#r7n)CkCABR;' );
define( 'LOGGED_IN_SALT',    'V@y(_qMxqv3]hNis$u;CxCQkAn2_djh!Pi^T;{E)5B*v11{$].9:q9n@XM)h7!?~' );
define( 'NONCE_SALT',        'npy(yarR,]uXHb[xAfL@`uSMH^tSj|R+XdwTR0K{=?y!SG_2_F:]x-Yt?uuzeZ0u' );
define( 'WP_CACHE_KEY_SALT', 'KgE%_^uVUnD,l1)`U@L}P{E;s-|BRN@OlgthUTps|pmw7C74OTX9^]!$&L,khI_^' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
