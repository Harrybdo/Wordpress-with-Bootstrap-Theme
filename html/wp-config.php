<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bootstrapBasicDB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'iEeEbln^C$O]GXu+,ExI)ET6IWBZR;$j|Oz%XC]@j)09r_T/$>?.dBj<-YH|dFLf');
define('SECURE_AUTH_KEY',  '|%1)HHbx~e_)W5t!aP c4VoB@gc$-?@{^L+benz:><ehTS|(IX9i$uI_ecs|b>EQ');
define('LOGGED_IN_KEY',    '8LDCd!w9[mH-LLPg <,?1r7TYO,ELN)k~y/3-= sX|h{T%.Wag9=Ib&k1BT&XGFN');
define('NONCE_KEY',        'NNV)Tg+`svj8wHIleW=3P5E(RlgHY0W:x#d}_7K:Z>9I`3CEk`[LX|*- W`8Aesh');
define('AUTH_SALT',        '97zoC]In85jqa3d@.1P(NSmOB/N>cAz>z+|Y_CG*2FQE^3bff+([=&[xb.5iPBG1');
define('SECURE_AUTH_SALT', ':k{-@? *62_4!N:y2w5TWkz+U%=b{pAdZe?$l(BhyY~=Ukp``<~ge (v:Le5<G,$');
define('LOGGED_IN_SALT',   'v;$r=hr^D|>xV?F<hp|sV?j}1[K,,o|7a-,GIC;+KI[eMC}A-{Kdz5%7Hn``;B{Y');
define('NONCE_SALT',       '0@H#GxHAi1xDMRu|-(4A-zFc3d,KIzi4WhZ`E/)+=K~V,<CxIm?M$(e||-J| qxy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
