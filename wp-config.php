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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'msa2023' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c:@++6v,g,^-B L$M1$B;9FZlpxEHjkp0AX8AIF&l8/|K@CL89k*{ev>$+*>5(_1' );
define( 'SECURE_AUTH_KEY',  'a!w85a#OMrbM%S7; [d]ON`sAi3.vgJ|3;[!mlF.{A/.G3Q9jcta!Yr7=d||6bx9' );
define( 'LOGGED_IN_KEY',    'Ww{~Kix$^[lPR@`8Sh#9Nc6LLGc?eBDd-=0UF6D:sl%Bi-V`zj[+U`IpIt^wRzv9' );
define( 'NONCE_KEY',        'H5!(^$h^,9]1jdNahpn<A`4>J~^3J&ynyGBk@`XCnqG)SSco8KKHnNZA%bE1A!<C' );
define( 'AUTH_SALT',        '11^e/Vt07M*;O(5Z)i5boUm[I $mCtb@DooDI46mdf<6]*0$Zzy|Gucrs%~upHf3' );
define( 'SECURE_AUTH_SALT', 'gK=o2L+*jR|G[!wa[9}u%|z*cYoY6q9ijM8v_ZV>(RhJTr&(5p)wtDa=wT># cac' );
define( 'LOGGED_IN_SALT',   '0mmqmAlMJ2/5|/#7}e@b<fU-tYxxkQ/0+hd!;RJ;Djh )yw!^yb{5R=yVk&}]54(' );
define( 'NONCE_SALT',       '@jusY$Fw4OaN42F(Q_Y}V<%[AJ+-@P&~,4Q2q[Ohv!W?FORPsisI8/.5D5d-{Vl;' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
