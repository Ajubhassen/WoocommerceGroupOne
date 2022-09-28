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
define( 'DB_NAME', 'varby' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Xrhgz`fxH0S&W)8s~`>0F>8tGn0U<5L&{@zBi;WT&udmBWBwdZc]BMN8wWW<{65m' );
define( 'SECURE_AUTH_KEY',  '7B%H}rFinz!-rF{aO*tUWgIs%|,YV@Zvd!1[01o!Ll[$$Zi/Kri;O]f$*iLhWnfY' );
define( 'LOGGED_IN_KEY',    'nSd3sTo[$]E!*rMkrffN@ryW6n~N>uYbY+OWpU&t}oUatf-^R(Og^u%VLsvmml=,' );
define( 'NONCE_KEY',        'e}hj~uGij~$[iXYw=V?P#rS5y$#Tn%5J: e7eDt#8t8 q_MH91eX:9YDFV]D=+4]' );
define( 'AUTH_SALT',        'G}.2Jc+9Qd&0ed]{L9#+0y:$jwwi~R^,turwobe-A/;9^HJP&4KLui7HbUrt91<c' );
define( 'SECURE_AUTH_SALT', 'PL_<1O8WAD)l@;ofiqNj7I}0J>ND^(pR+7n#ZX{8tURqUP,<YuKf#jpGI>/:ao%:' );
define( 'LOGGED_IN_SALT',   'B~CT4GG{*),ml(!PQjrMuC3d7c.wsw/=qrHrP]wF,yL~V7)f#.5ZFE~lW9e3$ZwD' );
define( 'NONCE_SALT',       '>NwS8c~H#_%J DkA@|h~AFh(WIJf(J(WOEr1gP.&,Az/&g0p!PG5!fBE rUGJ_EV' );

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
