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
define( 'DB_NAME', 'joesfarm' );

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
define( 'AUTH_KEY',         '};a|EPim{3WmO; yZb0={u~^f)0hg4V8aU--w7VR}tPCTa5w<omWC@H^X3v}S#_9' );
define( 'SECURE_AUTH_KEY',  'P}1];ou+:F.2XEhDd]Fj8$j1Y}1fM!)mCt%6O(1Q&jp!rpY|_!l>c>_f{?+)@Zra' );
define( 'LOGGED_IN_KEY',    'k8hIAPBMsqVRS4%R-AQg:4%?u$Z|d,21u$rP`2>|Ze2TBTW}RzV8>+090<1_u}6M' );
define( 'NONCE_KEY',        '+7 eh+3^Ac?-)Tr3%`Tp=c)Hd AAmS$VZ`FZA39U%XUJ8IwO,8<_g?)^Ck vWQK:' );
define( 'AUTH_SALT',        'cGN%~AB0V+@wKNH6<KW6l6%q3VE=k gpdYdB`*CB8*]:Mnip7vn`B])LQk~!@AVu' );
define( 'SECURE_AUTH_SALT', '>~>}b&skbLrR(7d(u5<H=_,_@5 g9I7`9zbnN&PqaqnVFBlG`|XoAbiDs77_&Dgl' );
define( 'LOGGED_IN_SALT',   '8W}h;W[&!5S8fQCR8~kyYTrQqN]ZpDPY5L3$d<BL[]FA`^wmT6o+WG/;}Hs@AE@0' );
define( 'NONCE_SALT',       '&%M*-~-GnjfQ0U%3?GChC|fA7SVv<P_&XC!qem>3`Hma:nMfLF,Nz_1U]~M2/@]&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jf_';

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
define( 'WP_DEBUG', false ); 

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
