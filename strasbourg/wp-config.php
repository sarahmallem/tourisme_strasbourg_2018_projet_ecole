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
define('DB_NAME', 'db756874657');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo756874657');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Sileence18!');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db756874657.db.1and1.com');

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
define('AUTH_KEY',         'kZ(sJYY2F)8SytxP1SCOz^ 5HR6wEif#eB}}[Cfs!g9&[EEXe},R0MYxoz,iLK*Y');
define('SECURE_AUTH_KEY',  '~J><GlMQf,}5+VKYzKuI.s%=:YL$s7e&Z/59S4U^dkw>M#?YC} iSB1@z(L^v<`!');
define('LOGGED_IN_KEY',    'sfOqk#Xt~Fg`[Wg>H3DP]X5u:yE`7,FsI_#`^76ge]m=FCIWin1`RBMVXCW{&ejx');
define('NONCE_KEY',        '6F<55,,DTW5Lg*@dbg0%gk<?q!==vqKsly=Y>2ogN|y!x3qw$51,CPW3c$0H?]Gq');
define('AUTH_SALT',        'J9|O;BN1MyZn6Dn!.[Rd8x2:z*wEHJl^^MNF8|MA5[}lZI`#Yz^)ORrZ%A^]yt>8');
define('SECURE_AUTH_SALT', 'Jb e=OMS%NBHU/>Su6^C-Mnw2jsec[7t65NIR8of=WvK1bc&?QG.mK]=a/:Dr*6v');
define('LOGGED_IN_SALT',   'Whdx$%WWI2k5 cT~7B+-_p3p5MmMmzG~te$xPa w*[aV=mLc46_~%aRoaBW!-b=J');
define('NONCE_SALT',       '9!s^%n#iIb_!&}<U#)z9c+H@/ElKBugs#$O`93rr1;uW*Oc/Y8df=_bje*2r!N0Z');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'dsfgep_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
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