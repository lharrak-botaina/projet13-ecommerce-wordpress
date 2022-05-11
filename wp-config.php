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
define( 'DB_NAME', 'site-vitrine' );

/** Database username */
define( 'DB_USER', 'superuser' );

/** Database password */
define( 'DB_PASSWORD', 'p@ssword1' );

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
define( 'AUTH_KEY',         'd3:~b6L4aSqr.FbBxfDwce<:=8&sO=Lw@c>aGwc48=_3=^@fC$cdcwAj_OjGi?$V' );
define( 'SECURE_AUTH_KEY',  'hxe*A#<V`(sw:iInjeBDim0J5mnl~468t}yDLR2WwPLwALmt}1%e7Ro,a:4,Jq+/' );
define( 'LOGGED_IN_KEY',    'e,[CsoR^f5SCe.LcGeB6ilR/oDB]dwn8?+`e0S{7i8` *$AEA7es$W:(d}:lYC-:' );
define( 'NONCE_KEY',        'g[l([a8en@ksD>5YBuO[eySvSNUtR(tpljMKA%{Z,s1_18.,4t_Gyt4#=aZ6GZ])' );
define( 'AUTH_SALT',        'yM~zMdWizeYJ##wd[r%V`gygFc}c4$? 81/v=<8Bue<(m+!E.*cj@Xyu/#F&LwC`' );
define( 'SECURE_AUTH_SALT', '@Y>L0qxf/0IAe^?i~1Jxp6i2u;Vp@{!(8ZCT;dv,>:V+a`XjtA7R|CQalTCM )AR' );
define( 'LOGGED_IN_SALT',   'h]0W?q:U:/D_waLw@s|0/Tox7uDktuFAbAzVNQOr=wy:;MkaZO#,$&^k?TIGi4Yd' );
define( 'NONCE_SALT',       '8m8cWy9>HX_$k,wf&,2sVv&U<vphgPPjohJW}rb)l Y5(;KFhTbQ:[h&=~6cf@c+' );

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
