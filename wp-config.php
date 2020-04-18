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

define( 'DB_NAME', 'project2' );


/** MySQL database username */

define( 'DB_USER', 'root' );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


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

define( 'AUTH_KEY',         '@a_nkz?5z|GX-S?Co}GKl:J7(O3pWZ?ehiwPWMz@$mw{HE/uLN;6(nw_?k<Ss!37' );

define( 'SECURE_AUTH_KEY',  'yM?v&p`rUMinY;@]y_9U.CDQ))TD1!ld(GyUvvgLj!i2F;vWL6y;[Dr_oKkS;M^.' );

define( 'LOGGED_IN_KEY',    'UUOn`qP82|q$!J<*m(bH/wK?o4=qLX:@cjk{C]{&!I`aSJAA-xq5xt|8?18!cvXE' );

define( 'NONCE_KEY',        '8hadH@(Ayf7MYp&6{qMM)YZ]+3ug[2M2xI3V r~+yv/C P[S;Cfe0c[! hHFr4n^' );

define( 'AUTH_SALT',        'E/Y787=-TN&Elray,QG?v_Qg%)[KO-($wD#dg-@}ruanx1F1`otg#l,Vwe(-3Oi%' );

define( 'SECURE_AUTH_SALT', 'v>;#mfM&0cR++*nS{]*zJu[_f=(%N#Zj;|F?Ehnof)<V.3NNY.NUi4KG_Zz%xzKW' );

define( 'LOGGED_IN_SALT',   'kCxsP[J>a:nf&n2V0X#)uqjso[yVse.R.-Ob#K({=x3i^FaQQe?};Ou%5Qg_|FI>' );

define( 'NONCE_SALT',       'p>h|2.+dX4zY]z~J|by7h<x}+eu{U&hX5R4zmUO+q~Gdoa{q#]|a)RVXZ8BH:106' );


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

