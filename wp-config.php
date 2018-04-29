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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TZ~keIG5HtR-3pbce^hfYh*|TI:qTh,z- t/N=nz$S*e4t+Nf{>D=Dy6W?S@vz|I');
define('SECURE_AUTH_KEY',  'joKDAh{bH9+:mhn`UnqV.YPq=V6_;TrNIjK<NmJ3:(hc3f+ TpD_7Hy5N1Bt{;5X');
define('LOGGED_IN_KEY',    'Bp9tk8gWP-D{S7_HA]T+5sC6>(*<b6&m*5]48_ZK0YI)a~+RN+n2@U?hK#4aUD)+');
define('NONCE_KEY',        '<#O7Au/<8Y>37C1ONJUlj;86ZbDF$@S6&kTg5+Mv2r|;ry _UV*TQ|bqRz|<3J]j');
define('AUTH_SALT',        '/ZCa{|=xzkOy(q^aG?+S$eYO*? O2Ku+_ZiJr|E@DLBy>BbgqQAD_4u2O,5n[(*o');
define('SECURE_AUTH_SALT', 'X.1&b-D8=~[!-bN?enbZ)I$ u+KQrS{jz_LHkW3kVKhu{,+r2)Enmc, GVAb~&>+');
define('LOGGED_IN_SALT',   'HB-|`tCG.Pu9=a;<:i3x|]5x%?|w%)%Mxm&[P+$|#$CYNRJhAFaae8;cH]NdZdD5');
define('NONCE_SALT',       'B58KZ{B@_WF`3JYBR GD!q/#,)/1<!!-+#sl,u9;(=psaS&vPJeQ=h#|^T9{|Ixo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
