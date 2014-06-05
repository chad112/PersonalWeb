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
define('DB_NAME', 'chadscha_portfolio');

/** MySQL database username */
define('DB_USER', 'chadscha_cschaub');

/** MySQL database password */
define('DB_PASSWORD', 'Snuggles112;');

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
define('AUTH_KEY',         '?-A[eOhLc0hP&NM&C%f%zD.|RZBO.k8Bu`;iN7aP{*eFO^-}-%^l<ODi?>SN>d2q');
define('SECURE_AUTH_KEY',  'K:-QKo7Lvl]kG++OFZ9]wY$kTEHI-4MH~0jaaeebc-6/V59RZ.Ct?H82Cff/r+kQ');
define('LOGGED_IN_KEY',    '(!gzh|-+U9Um23s3#Fi8o?,|f>3W_$)ZnI6o-mzc|hm1UI6N^<94$}g**&e<A*WT');
define('NONCE_KEY',        'yhxxdZF<:glh$:6+UhFZZ/lle:szR<Z]UCsY-[lJNT$|-5|J1eL]Y#~b<^H=Q^RU');
define('AUTH_SALT',        '@p~?d)g)DK9/l*R_zTPUb;KiQbp8iOG.@>8P[kBiUyF$Uq.F+||0e{d5iQSmN{wU');
define('SECURE_AUTH_SALT', 'ujO?t x?sVw ~Lu<+DaXWB&b?r,^vr+~$t]/YHp]inODF<[&cs@ejpP0Ir]]|1>^');
define('LOGGED_IN_SALT',   'vH:ddx6 mGh)l1;*jo><Fu4?|t?iEh.DqRwIOW|NY|Z4Ik=|! 5Hhq52((j U+gE');
define('NONCE_SALT',       '.-fs%h{7{u=+r$/RU%w|xaB:C;*xX-TJJSJRi|)%gClzU[7%kl|V5rbfpC,~-#jr');

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
