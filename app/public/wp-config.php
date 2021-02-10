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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9zCXTXM2jLvj2+HZkigy/4xY5dbQTw9pV0jb0Ggs/G/gH3yAftounJV9yOv2huQHy3l/5XcxVU1gF3G/mDDBOQ==');
define('SECURE_AUTH_KEY',  'mz8EZxy+dzp8sce0BV7wa27hQbvvMEgSxsh1nrhY4j1TVA1XGudNv+eH/Vp5sqwSW/grfuR9Ld4E5aTat3cSEQ==');
define('LOGGED_IN_KEY',    'opDzgRp8zPx0G1tSICsZkJ9STlxaPt4IdGlb7c87aL9vLMOKheJKMegdOpaj0gKkNL2bA/qUbJ5V2gNZ9wB6mw==');
define('NONCE_KEY',        'dYASAugzi1jBmOdK4hdd5oe5mbE+pFKGg0QUytbOb68vZb9fQPLN1YdJPsEexAXmOsItoomzRNzM/DymlHLEVw==');
define('AUTH_SALT',        'tqrZrygzyi9YF2cCTyEewSbsndA3dyAcjt9GKrzvlMG/HkQ0fuOXM5dY39s7j0faMfs0kNtN+mb8MjCYRf8XWQ==');
define('SECURE_AUTH_SALT', 'JPzZUlgRrxBGbbZYwMqcwxXsyElogQN0oyOKXjWKZfaFGS4sSWW+FP8Jj2UqJBDo31DcrICD87r7S8m0keLHSA==');
define('LOGGED_IN_SALT',   'Ss0J7+ZZsb6ebZoqY2jnxgMpfWbo5gpDIMI9+/I1gE/D6/zjPwIKD4HmYrW9Yl6MIVfgreSlncBj0/RK0jibQA==');
define('NONCE_SALT',       'jBSP8qVJlkwDCQBXYkApV49sSQ6GqUoHxrU2PyD0wd+TvophepaLZXvw9rymaNu7Ewd+m7q4ZZp81tVESlENlw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
