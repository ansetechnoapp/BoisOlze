<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_olzebois' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd~$cj|hhHQqXLIC?7S@u#/dBhY[85QixpB)dNNA%;)>G6c%&k)KJLK-LnG49Jj!p' );
define( 'SECURE_AUTH_KEY',  '47@j|]-z|DPdbk6Bkca79mV:S:|H~XKP~ZubocTfPLO(en4.V/Ls_CF:ju8q9P3F' );
define( 'LOGGED_IN_KEY',    'Z8QsA`bv3e;_K,9,9,?[83&;w9_g<T{[>9TAHyL@KE4!(8uHuVN|v;FHDDg&GP5;' );
define( 'NONCE_KEY',        ',9fL3KkI<4X| J~u ?+}o~yQ8<{k3(D[d8?@,)|Z[l:28(Y}sR)%E&[>s_O0kwc,' );
define( 'AUTH_SALT',        'k+GOd)Z.e.^duQ,$7QdU}GxVtqn0zb~P;4SjO73J]0P0[q}Q{TMa~X4vuzpe$p~_' );
define( 'SECURE_AUTH_SALT', 'op+vX.eFH[O7&9&oJ;f4|@NL(c/Bzv}*|?3:XI,(ZsNywZNoDeo_c,:b6lq)oV/2' );
define( 'LOGGED_IN_SALT',   'Z<0vGoDc=?;uj Uyvp5g5Q3|o&vSIBUTDhp{-Ww{e~-|lvaSjQeg=4%nx<m3KQ>n' );
define( 'NONCE_SALT',       '*)|y2tH*gR5]yb@);d<-IMpm+88yHQPo5NEaFCGPv<{s.N1xza-yUfX$<ScV#@lU' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
