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
define('DB_NAME', 'furiousTech');

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
define('AUTH_KEY',         'RQp+048d}a5%?4V/Z,PK6#]m0E QR)?@7,4mvBj=qFag9W9;CJ+|Wafy`i0FFkyx');
define('SECURE_AUTH_KEY',  'D1r5MSl,79&l/eWxC;tFsbR|mE|)jfqX2Z4NoBP(g3n<@Ec[E);6G*s{UR.!52|>');
define('LOGGED_IN_KEY',    'wv3KLL9RZ`SU`qE!>]2$G#-(q5ph^n4tZ6$&Ocu!@=0wx-na .Ua%Cv7fa.e;z_M');
define('NONCE_KEY',        'r&.2UH)9Q]h3g8-,o!6oxV[7b_k(v1<BWFsiBv_%{}=uY(t&JdN2kR`J<nLKnJ!a');
define('AUTH_SALT',        'yfDA2{e1;QNnw%_UWx:ao /hRWzg)-`o>Y;1t||E^: lj>e;X`2B*jvtTcxv GDY');
define('SECURE_AUTH_SALT', '#U6#,=8I8LGKYa!|gEsmWwj2!*dLl}43p6,2#c=bykyev9/3#gbV$piM2WNyQnLp');
define('LOGGED_IN_SALT',   '];Qq2q4e/lA$q1_$i Ts/0?_2LDclCGGL7MB1g)0NH,$o._AhVV@y<=S2n;Ll6Fi');
define('NONCE_SALT',       '~<%,:yuORPh7k|T{diK8,<d)J&B2,6.WqJ4=RDoaPQL$R)WPW7&JM+JrOAY(pfT%');

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
