<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'chez_rose_marie');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
 * N'y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>pkUf.SXADM|qKq?F+67-Nw+&bF{|4o3QKW^WsrZ$zx~>[:G>+ryY|UNaunz~w|%');
define('SECURE_AUTH_KEY',  'U2E=[L}|}GO.3SU-+#S~jN}9mX O/)z,5[$y@E{.-^@{WqF6qk?5+$b5$onmX-Lf');
define('LOGGED_IN_KEY',    'F9/S]e1vA+-lt@G]d,TCdRr-e+[JV5K),N+b7qe_2T9]APNN}y~Bx IJEUB~S{cA');
define('NONCE_KEY',        ' :+Eo+/q-4[TJONNc@wMp$qn4}vN^Oa>O+,2`eZM5-5#63^,e6FJ2SN>[>|Im,ni');
define('AUTH_SALT',        'kP%~r|ig$ O.[`V,Foz($BN6^ K{dxY[en+?F=WY=Ly0,1++:.zmTUaQ1aq+7XNe');
define('SECURE_AUTH_SALT', '+[Kf!5?I0d4F>fmYB~Tl}xH;{qC WGME8,gTNu+b,CW(-PM6dH[E>v9[ychy:mSX');
define('LOGGED_IN_SALT',   'E?#.JuKr%h[+Au1|d.63EG?y([MVD19Uqb_{8N|3r7G,q7ffNX};#QGT<:<AE6/,');
define('NONCE_SALT',       'upK.GCmjj;fR2.2)I%#]XB*=-(2N[i.eWfs9^+JxsO[Ay#Cz4zac`a&>g8av?YwS');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'crm_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');