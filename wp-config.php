<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'exam');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Mark&é&"');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'JA?`a#d<c=Y3S-^m9Is+;m,SjE;sx7S?y[*L9a}9)2Upsc)I~5< xD$vxR[P<E}v');
define('SECURE_AUTH_KEY',  'c$#eY/2l9`qtRS?$m_f7pd_[kk`*awXFL7kTS+^^ R05#>6mC,%Y2j9]x.Hcb28k');
define('LOGGED_IN_KEY',    'P8;f$(qnbl_f#8PU~CJ;pa;+7G^>8 |h(8QwNxO![Y;Bej3f6>/2X/O#A.<J4Me>');
define('NONCE_KEY',        '_p`?]~[#:ZkLC+TSx$X!F)nkFwMT}9/Tc3 uqvg61Ka^k;P$Pu6W] I1qn?50uYl');
define('AUTH_SALT',        '/&dF;l&>X)MDq&rwu8X$5~*j&4Zt5@GJ8i;.m-mwu-;72^%gUCBs=q-x*N5&9aD ');
define('SECURE_AUTH_SALT', '{t|.<%f4`A%lio~v%CN4Gc kc1#^/ihA{ A_w~MG)}D22i|]N$H&C,P=cZc`KXO`');
define('LOGGED_IN_SALT',   '9(SAxk!vKDTdhK&Gc?Y~9}WWe$+1Z=5veHru8O45pXq~3=SKL-@tDO6<+VSxq#~<');
define('NONCE_SALT',       'v3%=z=m8.QI0w{Lpo#s#2XX!nP.k3;Cy,+MnW~6m_([I7SfVtW2>dt<+KO7/ 6vQ');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'exam';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
