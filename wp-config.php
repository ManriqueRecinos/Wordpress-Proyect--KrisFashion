<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kris_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+CLhEr mNb)4n186i=8@:&K8]|!oU)-6}w~0xh%zm$ 7x)DSZ%4sQk% zL97QOsV' );
define( 'SECURE_AUTH_KEY',  'K&,8TqS>+ZVm7k`/EF{nQ]dHb6vIO6@Xx[56i7^%_3lD@@jGm<P-?slDi/N!?7jz' );
define( 'LOGGED_IN_KEY',    '1hpKEC4jqodzMo!^,cPl);:+J6BoNtbE_5_L0/]xNbf.FnG_Io/zl(a7/e>e;Ivm' );
define( 'NONCE_KEY',        '39t_DNS5t+bv^>TLq,6f.n+,! EX&Yx][sm/Z2hJoA?;+3>6b).QI36;eL-CVm=i' );
define( 'AUTH_SALT',        'TH5,FtF2aZM^I-:))3/Yb#?tsezy6tuX3ZFA~2zt+PlOfF*XEnBAz`I2mLh^=m^y' );
define( 'SECURE_AUTH_SALT', 'd-;H*$eMBWUHpFM`(?r;0s<GHox8M~#F@KRVV{M6+F$[_M-D|sc+MzK@]XnrjK*2' );
define( 'LOGGED_IN_SALT',   '%kmb>CDR]?>1vE{{Z{K>*~0KXJ#nW^;o+H+ kmIf|kw qTJ{bEJ2IT4lh,/}L7gx' );
define( 'NONCE_SALT',       'n[O;HPUd2uv;)+#l${q2^6 >W@gco64GY<^DZpU(B((~:THvB]Zo[&tCM-RE]sbe' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
