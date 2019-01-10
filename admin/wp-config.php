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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'vince');

/** MySQL database password */
define('DB_PASSWORD', '$Uperman1');

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
define('AUTH_KEY',         '#!M+tS.RfF|Dq#Smqc mO x<FGsdqfN+$4Z.V<[pbzF)aueQj.zJt61 u-@SF}9p');
define('SECURE_AUTH_KEY',  '}2r=x4fllO!EQlyt3Mj~t/icB!kAWTmRVSK+={U{-0(Siq/Z^)mu40(x7K(?-a(N');
define('LOGGED_IN_KEY',    'k BH{8{ol)s46zyePD+y4;pK=/(p]I+xM7=@;+RfK0yDaTA]^LnnV|=D0FmaXzf>');
define('NONCE_KEY',        '=`@??R>Ch,`ehL6c._m95PPKg!*SC+;)`Oye<(z)#,5D^!(bEO+Q{eEZTd&q#dM[');
define('AUTH_SALT',        '@JKJU$DNb$,??O g`*bBbA/5bgXE.ew+<.nd1M. }w@)6fW&m(}OA(,83Q[fvxD(');
define('SECURE_AUTH_SALT', '4j#EOcuv)0ZoSR:<k^n8N|adzbQ~XrQN?D,(U_zx9:%/>o_VhQj{V)8jgewCFOpj');
define('LOGGED_IN_SALT',   'FAhyq2^|#9c]SY-_#.@6SQ]G..-7#U[]ct)h}2q2JzG7[<_`_[G5F3Qv:[*v(xrw');
define('NONCE_SALT',       '4nd.<MYb&1*^{Wzao,j|R-0u+n0QzQHhby;DC@Eq0(.P4)*iq9!hsDyE0FN5Rz(v');

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
