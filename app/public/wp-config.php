<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '0a~+)@XE8PL,Ze^Yp(d|:1|hz^fY%wf`*T#5LY*eGcGFn=VPILn)Sub6cYU1X@qa' );
define( 'SECURE_AUTH_KEY',   '{5HU%~o:o`:lJh]KI-k)TENd&mv}nO>N@TCzS&ChS^9Y/Q{AC`R?;.`;.W*#P7T1' );
define( 'LOGGED_IN_KEY',     'c*&:<KQOEK.4V{3g8*~ov{B<Y;.m%xw|9gZu8sXf.7U>L)Ba?~H=[HFB/?a?ZVve' );
define( 'NONCE_KEY',         'Q^pZTfn ^n4lR;eNyjf%wb}l@sG7+5&L~e-[0VE4[-d]6r32H!Ajm+H]DLWWLZ 7' );
define( 'AUTH_SALT',         '$,l)E> [MS69z_KT2KhR;t9:evA*m)ofpMkexY4&-f$`syyM_Z~^+CY}zGh1mEU*' );
define( 'SECURE_AUTH_SALT',  '+ycDEt@<8cD8/1[OHBG&6k&q*;/01qAepw:4lis0Menbz(1~[E}(={oM8&N46/6g' );
define( 'LOGGED_IN_SALT',    'g65X9_-_Y])qwFMsj6>EX,MdA/?+F#Ob&Lmhjs~Knbb!~Qq<_Zy` ~K1G6`grkKO' );
define( 'NONCE_SALT',        'xpeI:JdoU@`=Rg=fPOZP5hy }2fE$w7f&6c1AL1:+qHtPRkD:125:|JHBhw9>[~x' );
define( 'WP_CACHE_KEY_SALT', 'd`SGXll/w~my?>nF5G;ep46(hYPu)r<4GlAA9yh@}xT_YxXbn*,uYzi,fa&!1CNJ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
