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
define( 'DB_NAME', 'Mota-photo' );

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
define( 'AUTH_KEY',         '$PL8xx4h7&=G=YXH~cr*Z(J82@UB]K:+42`9~,L3k_fXXaTGP/@/Yi9CxAoj}T=4' );
define( 'SECURE_AUTH_KEY',  '4/vi]OeMt*g2+iZZib!A}1}epfWrkBL{4ygBqydQ}#a*z>6Qxgd?M&zoa,)y9E`j' );
define( 'LOGGED_IN_KEY',    'QI@;QG7;.<%o,K[ a6l^i78hw5WyQ28yeBlMmV1]x03%Z]$XZl|GZRg;|Y251+=o' );
define( 'NONCE_KEY',        '>n=K5h)LRcD~r(M(^FUJ~MBE9}ne$wGfCV<aIq?7TgGAwo((;k%Z7yLGcd-g#(}K' );
define( 'AUTH_SALT',        'KznM!^+gcFbYi5A+3F[h}FE[:>f=8;ECz:XKhn+;%aMBDTnd#bzhI4;@bZ53VUmV' );
define( 'SECURE_AUTH_SALT', '0*&!zHoc[Tj3WY[5m6U?]zO(d=~a+EO2Zlk$Bd~<S]OI TsKeac@${zVu:Rw,!xl' );
define( 'LOGGED_IN_SALT',   '>8Vi]RwI1g7ia;;0]B:{a({e4+~8.6>bXF(c4X]_%?JT+,YT7**5cMp]GPb? pAm' );
define( 'NONCE_SALT',       'kme|jkJ{mNTb9Pq:$Z*mb1a<S<~^X9Ch!BZ6?vi|p<A^STK!c]?y~c[HSH5)~8fE' );
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
