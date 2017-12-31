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
define('DB_NAME', 'practicaswp');

/** MySQL database username */
define('DB_USER', 'adminpracticas');

/** MySQL database password */
define('DB_PASSWORD', 'oficinadesarrollo');

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
define('AUTH_KEY',         'Sq.u*kEq,n<nC~#sf8%]*~WPxR^yj@0OPpB5:ZHA,e:p^lb?rAJHHmHuCb0 YLDc');
define('SECURE_AUTH_KEY',  'Zi!z28Bpw.VJC8seUoOu*6jk,F;Tuwk~>Ln1`(+)`hjQb;FdQ/0JabUdq~!|bkK/');
define('LOGGED_IN_KEY',    'N.}! lyv.%HUn#T)aMQPe0nk_oen8Vzrrc~.{r|PIx67d>o&;[N=YFRf+oRn6grs');
define('NONCE_KEY',        'R~1z!]Z-{R kBRQo80|W?4Kn`Zg5?|KbOr4s#Y)~Vf89!*3_VYCT]-s-R~$y!m>?');
define('AUTH_SALT',        'xw*22-R(zqTJ89kqssxx/_2>YH.0g@Cm7zEU5uqkqo9-n2h6`32>!J77 2,KqyuZ');
define('SECURE_AUTH_SALT', 'PE0K=I_/UXD;R BqJ1>OQ6=w2-Xr+Bc8Bg@2qh~oBAm32vSY3n>ikoX=oLe+J{t^');
define('LOGGED_IN_SALT',   '^V/M6_OALgIGWa3P@2*qz}P:#x==`8KIQ*%oZP]4,bGC#A!;o>%>?4nS3%s?KANt');
define('NONCE_SALT',       'Lcd/F4+LDOg]Vy_-.E(Uws_Eh8U|lBgTZpW 2Yedk(dd.DvP-GY)&s;}goML/Gt7');

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
