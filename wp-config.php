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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Cmj0!!e*Wnd(-Ru{wmzRPPvcD1N)/2vBWuTR0$(Xr(X,F,7zQg}yL}0V0$RvB>pr');
define('SECURE_AUTH_KEY',  'Su,%l!V]~d27kbY.avPQ]b#Cff9kMtttzesiuI[cRF_R[r16<OLFhE#xk>SULD(+');
define('LOGGED_IN_KEY',    'F]NNFJ;M/lE)HK=1h]o]/P7:f[@{P66|@h4|eJaV).~-}whZD,Zz]GgM*d[9.G.,');
define('NONCE_KEY',        '~0.FjoE5~~U}e&vdnt]U_x|rn*{Gu{;?b*DWH}}f7_3whq$Jih`kWRd[3rdjSwUS');
define('AUTH_SALT',        ',VHuYdC-!CFWHX~!Z2kS!)ROny}oU&3gOi=4C*aD$X7oNDj5bzc=Q)(XT+=U3n1V');
define('SECURE_AUTH_SALT', 't&D}l%FYKdBo}N,.2t#N&ri)%m9F>GZs[cMy:6i>PsmP;N&~dS}xxr%lnMfhhs7z');
define('LOGGED_IN_SALT',   ' )akDlm!8K`}TX*@U&;QvmEE4MAr)x^x%6Q5+kL!AR,8XY7^.&@E0`4EIhV[ wj>');
define('NONCE_SALT',       '{>/guUCQarRi&W|>b!W[>!8fI*cH0EzZC$<w.1+mAWp8e#b>dwd_0#U:0b&T?D<b');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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