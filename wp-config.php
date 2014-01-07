<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Z+s/GX-&3DI##2T-mzz|CU}2;+,!,+N|d+jYo]WnZCLY@~g&<*<V[kM4UgQ|6&[h');
define('SECURE_AUTH_KEY',  'AL.1/d +JV-e~Rl?0(5)^|yy5SFU&FpT-#Fb.c6kEWBz;9_%|o(jjfEpm)ruF@A.');
define('LOGGED_IN_KEY',    ' #E)DdhMkU.]ZixFX(Ps^IE!GhLN03u-e-vWStCbS*SxuL?GEz-Ia@d$7g1R+,Rh');
define('NONCE_KEY',        '@JHhvNWpj&,y^4z;4yc8*@ihpUK)vov]INeyau+Z|Nthd*H8}hw W,$S(oVnU,z}');
define('AUTH_SALT',        '85E_z88/N$ndz-i!<`N;A /qWTCq-U;RD%)ypg#}o26^Nq+iesJ:G_w&8?sJuHZH');
define('SECURE_AUTH_SALT', 'x[+p.E_Ju!8vnp!zJ8L%Dnz~^+QM2cs:!Vbc(+#@7|dms!cNGy(@3-_q1Qei+yCx');
define('LOGGED_IN_SALT',   'Mgl>rDIliGo.de3?>kb>iL$hHjWh=^Qa8m}3pEeG||$Qs+=QD@Za`{0^) Z{.yxy');
define('NONCE_SALT',       'uX^] hY|*{+iS,DL;vnHue9OpD;sjU*?>:Km{u,=oHv85D{ `#a=*WzaIB$>Fq{s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
