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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testing2' );

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
define( 'AUTH_KEY',         '}XA`~[Fi1`s$O OW&yv#/a39}C[~Q46u,q{2`1=yg<otA-)LpL9!5#~FHR{:gN*S' );
define( 'SECURE_AUTH_KEY',  '2NbxBl?SDYn7!n<cs]6*E=e5B1/`mHD@*E=y5i<@f@>M&R %R]#CTb(#+;MQztSy' );
define( 'LOGGED_IN_KEY',    'b{u&,a9;DGMsW3I$/y8OisA;+5K~yGPk!_]aU!g2?]q]=)|?EC=OFNc)u+:DT%*>' );
define( 'NONCE_KEY',        ' -fe;4)vjvlhY}*qi&c$~3=FOg@98~[UBBF3e1`(6^cb+mjjT.FARR~|jSyil`oL' );
define( 'AUTH_SALT',        '#D.3fhkygu;*qt0biwHmn.H$lD&zLq{.3Tr3Q*A1@is.apWX(Wxn9qr?O>u64)e(' );
define( 'SECURE_AUTH_SALT', 'FWCwfR`&+qW`%9JjLk73c~eUNZuL;|mkx7CsRvT6KqJG^F}2-&i)c2+s;5Z#WX`H' );
define( 'LOGGED_IN_SALT',   'i0CcqjD43[k8R03~rye&zx?*<7H,3v5%4>+;%AyscuuXb!mm]fs 9d0_3(Lw6^7K' );
define( 'NONCE_SALT',       '1s@xpnD{+8 EdC#0**IjIVi([/_!,]*=Sgb3L9=<GW3!Zn3^wy9F#e]i+*BWy*%w' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
