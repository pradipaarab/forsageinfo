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
define( 'DB_NAME', 'forsageinfo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$D@u[>ZTcx@ {vPXP-%!]/t0}1wz_H,e^W=F{Jh,c20LJr@zFsBR2~j<JaP>/-.`' );
define( 'SECURE_AUTH_KEY',  '`X,a_yW~qc`!?`)5Y9>:#1}NTlufb03y<{Pmq9]nU.>osD%WbXHINAfmbXJz~iZw' );
define( 'LOGGED_IN_KEY',    ')Y}<|cLsA%[W?LyV%LvFehdNRaoaYl`5arf-b<[dV@a!wfcqrd>rt3(0q1d1eRt2' );
define( 'NONCE_KEY',        'aPK~`4.v}Ha4e,.7Q_:132$k~LyO}^n?s8LybAeuJ[NLfySG7k &Kk[&dtO773+s' );
define( 'AUTH_SALT',        'or0$-0fp8Cj]^fq8jGJ4W!kG|Gm^%!<)pY5}x:@.{i8frLLzfusASjFC}nA>#B,1' );
define( 'SECURE_AUTH_SALT', '^FimZ9/c:IK~~TYQ^O`a5$|w)~EV[R?H4Rm`e#1&B}MSQ~Jq06YnTt0QS&E+vApU' );
define( 'LOGGED_IN_SALT',   '%Oe5c,X}WQ<~;WUE~Gkw&H&YLnC:G6R8b![G<KJ)F4R9bMmvm#?eyiF|SuhDz<>F' );
define( 'NONCE_SALT',       '=pw<0{F9OFIQNCa:Ff^[*D.M(!-,zHAWc-YVgB&HTxy_=:&Zvb1*wIvmdH/6^a*E' );

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
