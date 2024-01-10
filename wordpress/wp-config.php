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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '@x:VH>7KK%FQ#{C$ZHEq{zS2KY|<X<frQeE/O6%PwPz.MLRiCarES)*Nw@?&cTjp' );
define( 'SECURE_AUTH_KEY',  ' s=e(?yRGk26xt<-4Zg|}fVC ;B,e,zg1/G Vd3}Q{~j>]l@dB^oTbyRM /oGA{#' );
define( 'LOGGED_IN_KEY',    'L?#jPId0%S`:J6L,UTi5k,=+y;|cTi>{6])+sMg^TLj>8= 7JbS}.BriJwu^aUyd' );
define( 'NONCE_KEY',        'F{Lm S&{A[ lDfI-LqixV`2jj,U!hAba]_xz|~BObs_=Kuu:iCXdu.GRY`_H<@Zm' );
define( 'AUTH_SALT',        'hT,0w3Q7:7O-4*/5T+3sbBZQI`/X&ZSa5[|u)&S>Xoo9fi uXtKWC5wSzg/rDKMT' );
define( 'SECURE_AUTH_SALT', 'MIBDIV.j@2Sdm{AAAtDzC$(88H)Uap77 cTlRnimYVNP#}aTpL_^S&d>L@$s[n`e' );
define( 'LOGGED_IN_SALT',   '|pbHRgTy`i>0R n!C39f>9&e,@GIy{+WqOc2~:$q@lt=,B?])[q)%l2xasznc5zv' );
define( 'NONCE_SALT',       ']&s)Xr4+nL57DYUuq6lS1c=A6$vd4a(+YC^~2hb%r-^3tL0yAP{O>.hu{L.;.<ZN' );
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
