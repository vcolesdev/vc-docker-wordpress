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
define( 'DB_NAME', 'wpdb_default' );

/** Database username */
define( 'DB_USER', 'wpdb_admin' );

/** Database password */
define( 'DB_PASSWORD', 'passpass' );

/** Database hostname */
define( 'DB_HOST', 'database:3306' );

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
define( 'AUTH_KEY',          'GX1.u!`wXLO;+WtWdf;C/D.-d6tv47|yldxO?b2|}I)K.;^us09!8y g2p|5S#K^' );
define( 'SECURE_AUTH_KEY',   'RjX{Ni> vC*>9bvP7>NyP^<?krzSf65=XbAX__i_QQ=xqMd]W}xQ5x78fe|@f%L]' );
define( 'LOGGED_IN_KEY',     'sknHq%4yr}tnL-}gok#Xxn[$9UqaTLjR>FDmpNi&CGRnUrzz`~+6jlu+RYy^g4H-' );
define( 'NONCE_KEY',         '#R=6Vt{|L9,HZtlq^*Tn%oSY4W0</XJ#>Rw{}P0gmM]m)=7k*rtm@8%NNKd==aX:' );
define( 'AUTH_SALT',         'QA_Ks=jUPHk_Iu$Axqt3<wFh R!<<^b:XpYB=6j6DKrE`L{|c[kl=>BkE$t~>#,n' );
define( 'SECURE_AUTH_SALT',  'KFLv~L^%)lvz8>hrCZ@n:o*ln|=bJCC+_v*5o`ro}:8{>Q0Y-3(+Wx^~S<|QnVI^' );
define( 'LOGGED_IN_SALT',    'LN}}]-k(40Vsq|9(E~XWOGX?$JqKP;-[H-lLyXA-ngV@B 95CJ]Y,tIObup:F-90' );
define( 'NONCE_SALT',        '-?%7@I<#X%CwGt,j)(alqKPloSg+q$<9.P8,gE5,R+ZBkp+ZDNN;Z3kYvt>)?g)2' );
define( 'WP_CACHE_KEY_SALT', 'UVvy)i>WdAi#_4Ls)U`i1WmbTZDM=MevbwJtTjp`699H}n(:(h:j6L,L2AC?tDX5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdb_';


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
