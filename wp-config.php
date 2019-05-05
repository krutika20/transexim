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
define('DB_NAME', 'transexim');

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
define('AUTH_KEY',         'xM;9Jn1Z*w(EH6o>|5AJkoLnJYQ>D}o+aF2,oC7v@uw1s&7yM~cGVgVC7CPMHQ(h');
define('SECURE_AUTH_KEY',  '(T/e.`M>+N0#::!N=WOsS YNN6,)1I}{^~Rul}H.SL:tmxj=Ks%1IMh*aY~CzN% ');
define('LOGGED_IN_KEY',    'IcPWm3S$.Wr}87LrNy@iX}XQf2wxB8h(XB0~,Ni]Hu!q6V1ZP(kGiLZ_SCa]pq{m');
define('NONCE_KEY',        '162<;qBXHfK}TVJ=@NHJQs2gl`]Wd>#8JEj.]A?,0[{B;v?(+{.a4QB+{=bmOQ]5');
define('AUTH_SALT',        '+:o`A:PO2bi,{Y]:C|[~bx0W9#g4A_YleTvVu@$z{^#!%q&]OZP16Fbgo+wqm3b,');
define('SECURE_AUTH_SALT', 'HQik,F>2w| vah4#);kOH=oPMs8`)uI@,!VERDd=]@%oh7:;Zw|p`noy><Od,=}~');
define('LOGGED_IN_SALT',   'cPgC92x];*7Jx87M(kt{JN7mS[eh7Pyx.k>H0H|ka5J:-7N OjQyZbW9~V0vxL&y');
define('NONCE_SALT',       'RXpTaAC^ -*0%>l|:!rp]A3s5bJWzrKDhdi,a#cx`f{pkazhJ;{l2BAY+(BS9 DO');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
