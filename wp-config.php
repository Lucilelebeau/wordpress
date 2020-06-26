<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '<CxX2p~b$--[R4>FRH10D)cht<*KvT2OjTnyzcz]7o0`],#&;=).O%wsK%TzAp`)' );
define( 'SECURE_AUTH_KEY',  '*W^{_>BRgSh`NCsv8c`Yae@UU{e`x~:}&}2{qahD1M;m|46$TH`QB8S*dy$/_1VX' );
define( 'LOGGED_IN_KEY',    '8ynlk:O_-AG1@HYl#xP;(oiZ[Jl+>)Ee[t @c[c#9Tc]j_q@O:A1>& wb9g[@<1z' );
define( 'NONCE_KEY',        '9m:$8=j:|-{C(DS)=t<2{a13bSS/MkQ$<B]0P%b^JLm7sAs-kD{,kPLBB 5(:)>]' );
define( 'AUTH_SALT',        'ie{3PEC#lM?b(;V>[ABXD.Mz)(g#NE9~DNl)?f~YG9v}Ka=jj`xY3$<ndl`!v`Dj' );
define( 'SECURE_AUTH_SALT', 'FRlSPHWP2`Q68E8a@D|5^I+.|& SuG@yPOm:S;NT9=tY&h4bxmM6.|f#x]2hy^Cn' );
define( 'LOGGED_IN_SALT',   '$HtnCU2=85^MmN;ohRyMpa=A*|}+Kb%wMgIjFyKupLTNl{xO%2:9Kpl]4i/&-m-8' );
define( 'NONCE_SALT',       'U6>*<Mu.gAem-TF2TKUf8!v91Ga96aC].bapwm|WsRITEIoDK:4Lww6aAu)Tnxjg' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
