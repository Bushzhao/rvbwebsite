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
define('DB_NAME', 'rvbco038_wpdb88');

/** MySQL database username */
define('DB_USER', 'rvbco038_wpdb88');

/** MySQL database password */
define('DB_PASSWORD', '(P28S95m.y');

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
define('AUTH_KEY',         'r46l7ng1jmlnexbjlknn6vltnz1qkklbsfkqz2tk9jsqnhybrenhcxqjbrgaq2vb');
define('SECURE_AUTH_KEY',  'k7qamga6x4igvv2ysmelpiry0zlc2xtlbosyzyvistiq7p8lrlfjfm0qdyoupjse');
define('LOGGED_IN_KEY',    'e5mfgswsoqnd8i7eu5dcs84w00abc0llbcu2uwcjoj1ml5kfmqf8st17pofxzmcn');
define('NONCE_KEY',        'fqjshrtcb2w8glxgrkibtzmxrnxl0oszlymdmvjpemakn9sa75agltx8xadfpb0o');
define('AUTH_SALT',        'xq74dgwbwk8jum3h945kaq1fawwziojra5amzlnzfqwyyznaa55qgmfosggmhaq1');
define('SECURE_AUTH_SALT', 'uhwxkdaq5x3oetbsqkkzl9hqh92vi5r7x596a0r5ii7kr4b5u5ta6at8wp5ins6m');
define('LOGGED_IN_SALT',   'u3zhjoulapbsbnjzp41wkczjiomsdkdgamiu1n0ovfl0xnxalertscatpruchtp5');
define('NONCE_SALT',       'bk6l9js9kt1lmcj4oswjacmmhsglqhvumks5ri0p5hpbpy1delh2yosevdbg8sym');

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'www.rvbcomputers.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
