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

/**
 * Database connection information is automatically provided.
 * There is no need to set or change the following database configuration
 * values:
 *   DB_HOST
 *   DB_NAME
 *   DB_USER
 *   DB_PASSWORD
 *   DB_CHARSET
 *   DB_COLLATE
 */

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '#L868{ZYOq]69Jn+JJN_SKI5lL_oONYe>d[;g+:M{aY$@pi_:SlEShX6RU{q2yA7');
define('SECURE_AUTH_KEY',  '>s_oiv]h8@5y8s!kst4$zhtwkg9V6,u0)f^JO86PV+Ev|t6K4dFD1$fO2neSGRhN');
define('LOGGED_IN_KEY',    'pr?p9RVC98#GP{kcI.A1*E2^RBVP+?lDShG-n+=b3-Sxp]WG?nkS!|G!6PL%0QNt');
define('NONCE_KEY',        '>vXyd7mrA00Hp:YU<AF);@D=23h>@@X3#XnT<g]=z>N?f3P-rN{C%nXMs|Bd@M!l');
define('AUTH_SALT',        'vbdzzZh=Cg#f,e^F#g9{8hm6S^Xoj}=X.tJf;.hez:5pXU*eGKpI#jNc|uNL,qn5');
define('SECURE_AUTH_SALT', 'MIFT}yhS<f)BKE#K+iVP5RupMkVZR-2c)3hbDTa{}C0cI-pn)UUD.rIx2@*yw6w>');
define('LOGGED_IN_SALT',   'dWQe#3DfeOqD!zaOo4QnAl*MyJY7E9+;NF7Gy?$d-sS;qJ]ZV({13#~4x^~XEn4G');
define('NONCE_SALT',       'Q50ROYuYOeAF#YaH_nlvfA,{W]BAdA$hh0!y_]9+8;^1vUENe?[E?0|!%SfE-8^e');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
if ( ! defined( 'WP_DEBUG') ) {
	define('WP_DEBUG', false);
}



define( 'DB_NAME', 'wordpress' );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG', false );
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
