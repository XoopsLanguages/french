<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: fr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Afficher/masquer l\'aide');
// License
//define('LICENSE_NOT_WRITEABLE', 'Le fichier de licence "%s" n\'est PAS accessible en écriture !');
//define('LICENSE_IS_WRITEABLE', '%s La licence est inscriptible.');
// Configuration check page
define('SERVER_API', 'API du serveur');
define('PHP_EXTENSION', 'poste %s');
define('CHAR_ENCODING', 'Encodage des caractères');
define('XML_PARSING', 'Analyse XML');
define('REQUIREMENTS', 'Prérequis');
define('_PHP_VERSION', 'Version PHP');
define('RECOMMENDED_SETTINGS', 'Paramètres recommandés');
define('RECOMMENDED_EXTENSIONS', 'Extensions recommandées');
define('SETTING_NAME', 'Nom du paramètre');
define('RECOMMENDED', 'Recommandé');
define('CURRENT', 'Actuel');
define('RECOMMENDED_EXTENSIONS_MSG', 'Ces extensions ne sont pas requises pour une utilisation normale, mais peuvent être nécessaires pour explorer
 certaines fonctionnalités spécifiques (comme le support multilingue ou RSS). Il est donc recommandé de les faire installer.');
define('NONE', 'Aucun');
define('SUCCESS', 'Succès');
define('WARNING', 'Avertissement');
define('FAILED', 'Échoué');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Assistant d\'installation XOOPS');
define('LANGUAGE_SELECTION', 'Sélection de la langue');
define('LANGUAGE_SELECTION_TITLE', 'Sélectionnez votre langue');        // L128
define('INTRODUCTION', 'Présentation');
define('INTRODUCTION_TITLE', 'Bienvenue dans l\'Assistant d\'installation XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Vérification de la configuration');
define('CONFIGURATION_CHECK_TITLE', 'Vérification de la configuration de votre serveur');
define('PATHS_SETTINGS', 'Paramètres des chemins');
define('PATHS_SETTINGS_TITLE', 'Paramètres des chemins');
define('DATABASE_CONNECTION', 'Connexion à la base de données');
define('DATABASE_CONNECTION_TITLE', 'Connexion à la base de données');
define('DATABASE_CONFIG', 'Configuration de la base de données');
define('DATABASE_CONFIG_TITLE', 'Configuration de la base de données');
define('CONFIG_SAVE', 'Enregistrer la configuration');
define('CONFIG_SAVE_TITLE', 'Sauvegarde de la configuration de votre système');
define('TABLES_CREATION', 'Création des tables');
define('TABLES_CREATION_TITLE', 'Création des tables de la base de données');
define('INITIAL_SETTINGS', 'Paramètres initiaux');
define('INITIAL_SETTINGS_TITLE', 'Veuillez saisir vos paramètres initiaux');
define('DATA_INSERTION', 'Insertion des données');
define('DATA_INSERTION_TITLE', 'Sauvegarde de vos paramètres dans la base de données');
define('WELCOME', 'Bienvenue');
define('WELCOME_TITLE', 'Bienvenue sur votre site XOOPS');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Chemins physiques XOOPS');
define('XOOPS_URLS', 'Emplacements web');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS documente le chemin physique racine');
define('XOOPS_ROOT_PATH_HELP', 'Chemin physique vers le répertoire des documents XOOPS (servis) SANS barre oblique finale');
define('XOOPS_LIB_PATH_LABEL', 'Répertoire de la bibliothèque XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'Répertoire de fichiers de données XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Emplacement du site Web (URL)'); // L56
define('XOOPS_URL_HELP', 'URL principal qui sera utilisé pour accéder à votre installation XOOPS'); // L58
define('LEGEND_CONNECTION', 'Connexion au serveur');
define('LEGEND_DATABASE', 'Base de données'); // L51
define('DB_HOST_LABEL', 'Nom d\'hôte du serveur');    // L27
define('DB_HOST_HELP', 'Nom d\'hôte du serveur de base de données. Si vous n\'êtes pas sûr, <em>localhost</em> fonctionne dans la plupart des cas'); // L67
define('DB_USER_LABEL', 'Nom d\'utilisateur');    // L28
define('DB_USER_HELP', 'Nom du compte utilisateur qui sera utilisé pour se connecter au serveur de base de données'); // L65
define('DB_PASS_LABEL', 'Mot de passe');    // L52
define('DB_PASS_HELP', 'Mot de passe de votre compte utilisateur de base de données'); // L68
define('DB_NAME_LABEL', 'Nom de la base de données');    // L29
define('DB_NAME_HELP', 'Le nom de la base de données sur l\'hôte. Le programme d\'installation tentera de créer la base de données si elle n\'existe pas'); // L64
define('DB_CHARSET_LABEL', 'Jeu de caractères de la base de données');
define('DB_CHARSET_HELP', 'MySQL inclut la prise en charge des jeux de caractères qui vous permet de stocker des données à l\'aide de divers jeux de caractères et d\'effectuer des comparaisons selon divers classements.');
define('DB_COLLATION_LABEL', 'Interclassement de la base de données');
define('DB_COLLATION_HELP', 'Un classement est un ensemble de règles permettant de comparer les caractères d\'un jeu de caractères.');
define('DB_PREFIX_LABEL', 'Préfixe de table');    // L30
define('DB_PREFIX_HELP', 'Ce préfixe sera ajouté à toutes les nouvelles tables créées pour éviter les conflits de noms dans la base de données. Si vous n\'êtes pas sûr, conservez simplement la valeur par défaut'); // L63
define('DB_PCONNECT_LABEL', 'Utiliser une connexion persistante');    // L54
define('DB_PCONNECT_HELP', "La valeur par défaut est « Non ». Laissez-le vide si vous n'êtes pas sûr"); // L69
define('DB_DATABASE_LABEL', 'Base de données');
define('LEGEND_ADMIN_ACCOUNT', 'Compte administrateur');
define('ADMIN_LOGIN_LABEL', 'Identifiant administrateur'); // L37
define('ADMIN_EMAIL_LABEL', 'Email administrateur'); // L38
define('ADMIN_PASS_LABEL', 'Mot de passe administrateur'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Confirmer le mot de passe'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Précédent'); // L42
define('BUTTON_NEXT', 'Continuer'); // L47
// Messages
define('XOOPS_FOUND', '%s trouvé');
define('CHECKING_PERMISSIONS', 'Vérification des autorisations de fichiers et de répertoires...'); // L82
define('IS_NOT_WRITABLE', '%s n\'est PAS accessible en écriture.'); // L83
define('IS_WRITABLE', '%s est accessible en écriture.'); // L84
define('XOOPS_PATH_FOUND', 'Chemin trouvé.');
//define('READY_CREATE_TABLES', 'Aucune table XOOPS n\'a été détectée.<br>Le programme d\'installation est maintenant prêt à créer les tables système XOOPS.');
define('XOOPS_TABLES_FOUND', 'Les tables système XOOPS existent déjà dans votre base de données.'); // L131
define('XOOPS_TABLES_CREATED', 'Les tables système XOOPS ont été créées.');
//define('READY_INSERT_DATA', 'Le programme d\'installation est maintenant prêt à insérer les données initiales dans votre base de données.');
//define('READY_SAVE_MAINFILE', 'Le programme d\'installation est maintenant prêt à enregistrer les paramètres spécifiés dans <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Paramètres enregistrés');
define('SAVED_MAINFILE_MSG', 'Le programme d\'installation a enregistré les paramètres spécifiés dans <em>mainfile.php</em> et <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS données trouvées dans la base de données.');
define('DATA_INSERTED', 'Les données initiales ont été insérées dans la base de données.');
// %s is database name
define('DATABASE_CREATED', 'Base de données %s créée !'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Impossible de créer la table %s'); // L118
define('TABLE_CREATED', 'Table %s créée.'); // L45
define('ROWS_INSERTED', '%d entrées insérées dans la table %s.'); // L119
define('ROWS_FAILED', 'Échec de l\'insertion des entrées %d dans la table %s.'); // L120
define('TABLE_ALTERED', 'Table %s mise à jour.'); // L133
define('TABLE_NOT_ALTERED', 'Échec de la mise à jour de la table %s.'); // L134
define('TABLE_DROPPED', 'La table %s a été supprimée.'); // L163
define('TABLE_NOT_DROPPED', 'Échec de la suppression de la table %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Impossible d\'accéder au dossier spécifié. Veuillez vérifier qu\'il existe et qu\'il est lisible par le serveur.');
define('ERR_NO_XOOPS_FOUND', 'Aucune installation XOOPS n\'a été trouvée dans le dossier spécifié.');
define('ERR_INVALID_EMAIL', 'Email invalide'); // L73
define('ERR_REQUIRED', 'L\'information est requise.'); // L41
define('ERR_PASSWORD_MATCH', 'Les deux mots de passe ne correspondent pas');
define('ERR_NEED_WRITE_ACCESS', 'Le serveur doit disposer d\'un accès en écriture aux fichiers et dossiers suivants<br>(c\'est-à-dire <em>nom_répertoire chmod 775</em> sur un serveur UNIX/LINUX)<br>S\'ils ne sont pas disponibles ou s\'ils ne sont pas créés correctement, veuillez les créer manuellement et définir les autorisations appropriées.');
define('ERR_NO_DATABASE', 'Impossible de créer la base de données. Contactez l\'administrateur du serveur pour plus de détails.'); // L31
define('ERR_NO_DBCONNECTION', 'Impossible de se connecter au serveur de base de données.'); // L106
define('ERR_WRITING_CONSTANT', 'Échec de l\'écriture de la constante %s.'); // L122
define('ERR_COPY_MAINFILE', 'Impossible de copier le fichier de distribution vers %s');
define('ERR_WRITE_MAINFILE', 'Impossible d\'écrire dans %s. Veuillez vérifier l\'autorisation du fichier et réessayer.');
define('ERR_READ_MAINFILE', 'Impossible d\'ouvrir %s en lecture');
define('ERR_INVALID_DBCHARSET', "Le jeu de caractères '%s' n'est pas pris en charge.");
define('ERR_INVALID_DBCOLLATION', "Le classement '%s' n'est pas pris en charge.");
define('ERR_CHARSET_NOT_SET', 'Le jeu de caractères par défaut n\'est pas défini pour la base de données XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Assistance');
define('LOGIN', 'Authentification');
define('LOGIN_TITLE', 'Authentification');
define('USER_LOGIN', 'Connexion administrateur');
define('USERNAME', 'Nom d\'utilisateur :');
define('PASSWORD', 'Mot de passe :');
define('ICONV_CONVERSION', 'Conversion du jeu de caractères');
define('ZLIB_COMPRESSION', 'Compression Zlib');
define('IMAGE_FUNCTIONS', 'Fonctions image');
define('IMAGE_METAS', 'Métadonnées d\'image (exif)');
define('FILTER_FUNCTIONS', 'Fonctions de filtre');
define('ADMIN_EXIST', 'Le compte administrateur existe déjà.');
define('CONFIG_SITE', 'Configuration du site');
define('CONFIG_SITE_TITLE', 'Configuration du site');
define('MODULES', 'Installation des modules');
define('MODULES_TITLE', 'Installation des modules');
define('THEME', 'Choisir le thème');
define('THEME_TITLE', 'Sélectionnez le thème par défaut');
define('INSTALLED_MODULES', 'Les modules suivants ont été installés.');
define('NO_MODULES_FOUND', 'Aucun module trouvé.');
define('NO_INSTALLED_MODULES', 'Aucun module installé.');
define('THEME_NO_SCREENSHOT', 'Aucune capture d\'écran trouvée');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Force du mot de passe');
define('PASSWORD_DESC', 'Mot de passe non saisi');
define('PASSWORD_GENERATOR', 'Générateur de mot de passe');
define('PASSWORD_GENERATE', 'Générer');
define('PASSWORD_COPY', 'Copier');
define('PASSWORD_VERY_WEAK', 'Très faible');
define('PASSWORD_WEAK', 'Faible');
define('PASSWORD_BETTER', 'Mieux');
define('PASSWORD_MEDIUM', 'Moyen');
define('PASSWORD_STRONG', 'Fort');
define('PASSWORD_STRONGEST', 'Très fort');
//2.5.7
define('WRITTEN_LICENSE', 'A écrit XOOPS %s Clé de licence : <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Réessayer');
define('CHMOD_CHGRP_IGNORE', 'Utiliser quand même');
define('CHMOD_CHGRP_ERROR', 'Le programme d\'installation peut ne pas être en mesure d\'écrire le fichier de configuration %1$s.<p>PHP écrit des fichiers sous l\'utilisateur %2$s et le groupe %3$s.<p>Le répertoire %4$s/ a l\'utilisateur %5$s et le groupe %6$s');
//2.5.9
define('CURL_HTTP', 'Client URL Bibliothèque (cURL)');
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Domaine des cookies pour le site Web');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domaine pour définir les cookies. Peut être vide, l\'hôte complet de URL (www.example.com) ou le domaine enregistré sans sous-domaines (example.com) à partager entre les sous-domaines (www.example.com et blog.example.com.)');
define('INTL_SUPPORT', 'Fonctions d\'internationalisation');
define('XOOPS_SOURCE_CODE', 'XOOPS le GitHub');
define('XOOPS_INSTALLING', 'Installation en cours');
define('XOOPS_ERROR_ENCOUNTERED', 'Erreur');
define('XOOPS_ERROR_SEE_BELOW', 'Voir ci-dessous pour les messages.');
define('MODULES_AVAILABLE', 'Modules disponibles');
define('INSTALL_THIS_MODULE', 'Ajouter %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Impossible de copier le fichier de configuration %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Site');
define('_WEBSITE_SLOGAN', 'Utilisez-le !');
define('_WEBSITE_META_KEYWORDS', 'xoops, framework d\'application web, cms, système de gestion de contenu');
define('_WEBSITE_FOOTER', "Propulsé par XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>Le projet XOOPS</a>");
define('_WEBSITE_COPYRIGHT', 'Droits d\'auteur © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS est un script de portail open source dynamique orienté objet écrit en PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'OUPS');
// 2.7.1
define('MISSING_REQUIRED_EXTENSIONS', 'Required PHP extensions are missing');
define('MISSING_REQUIRED_EXTENSIONS_MSG', 'XOOPS cannot be installed because the following mandatory PHP extension(s) are not available: %s. Enable them in your PHP configuration (php.ini) and restart your web server, then reload this page.');
