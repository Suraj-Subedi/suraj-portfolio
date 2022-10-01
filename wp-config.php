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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// define('DB_NAME', 'epiz_32693344_portfolio');

// /** Database username */
// define('DB_USER', 'epiz_32693344');

// /** Database password */
// define('DB_PASSWORD', 'lCHmqtSsJFj');

// /** Database hostname */
// define('DB_HOST', 'sql206.epizy.com');

// /** Database charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8mb4');

// /** The database collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');

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
define('AUTH_KEY',         'xwsL;0V1)>vU)rOiFqz>4I@$nzqe<>pK^(?|WHCC]&EtTH>G uW+6*[w%iy6((Q3');
define('SECURE_AUTH_KEY',  'SRlLjN&*4!QMJ!8:H)?s=|4~=J:]Bmt{g;~4wE X1(=:?;t&5/T;.hPs<QtW0?j~');
define('LOGGED_IN_KEY',    'pvMvTpp%zx.-l11B!$T2O*xaq~:bD<,x*Be8ROuh9XgGa[lXnQdJ`HKnQ=Re;C/1');
define('NONCE_KEY',        'dKc/~XIk1d~4NL 5I~w[CPv#z)Ekz=4_Ok{cwR{8JL-O7%8Hu_`tHG;,K7~t`=DU');
define('AUTH_SALT',        'SLy~=^9]B>OuK/)}6R33RiFi+tQ `&V:D@GN!c~s9M?jo:4dGI_[odzq5kYoDsPx');
define('SECURE_AUTH_SALT', '!8N{j8L@O;mvW+bHRuY,MDZr{n4CWF0)nCAo?x*>k^J>HyIHGk>s>4S)( `3^*|C');
define('LOGGED_IN_SALT',   'AVUVr$sAh%,YBtwQ%/dn>$j!#m-yM(f#(x2YkE!Yu=n:Sy[w] +yKJ%~zM$,jzwf');
define('NONCE_SALT',       'uC4i<AWj&.&r^H5Fqmo,(h(]{RMF701Z @Mmd^-K%Z`5s}^|ACeo3qaxJY~pWQQh');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
