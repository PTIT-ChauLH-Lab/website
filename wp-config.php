<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'Buuchinh@82334' );

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
define( 'AUTH_KEY',         '9^~k]RDI!:]@;#1x0huy4,4?W6a0PesiS:9Ixp9i<PvQ_ClK/jA<%frJX><w*c?W' );
define( 'SECURE_AUTH_KEY',  '5e#/+tp%B%-pZW46Mc].2f3Hr%_)&6Q}_K^($fvcY2pVjktm+*G!mr[hD, 1uLT,' );
define( 'LOGGED_IN_KEY',    'T*Q(BzzhKRE$&J!FipE[scH]}Q<2af:@@og#(h|FuF0da hg:a2@0b &;r=6D|Sr' );
define( 'NONCE_KEY',        'OeGw-mS5b[*[CtkNN_2xNv[ aHI!uGT`}$iQgu[OLCXXy)XXPHyn)Axf %e,/Lf>' );
define( 'AUTH_SALT',        'd*SS~je)3uJZ6GE*=<iSs$o=RJD9O48^RB/a}!;l&VlzvnkQe7J,;DL8_!z&2Fj4' );
define( 'SECURE_AUTH_SALT', 'm-^&)[vR9F+#~v_Mx#ZFiFG$EN<=-9J%uyl4o5Uiv*E%e+Uj.GD2Qnb3&[>FCzt^' );
define( 'LOGGED_IN_SALT',   '7vP4~o;yeh^M(cB!O|u]N5v%|f{>~>N/67/RZhGlZ~JWT/OO-e>qqFMUD751>f&*' );
define( 'NONCE_SALT',       ' +!#MsD9Zc ELzUR:S/q0bCO:TNi5Nk;D[q&*Z#r/RC7.p%pX[hJXqZ6QvCLw |0' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
