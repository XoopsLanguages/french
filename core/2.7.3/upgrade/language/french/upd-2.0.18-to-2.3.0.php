<?php
// _LANGCODE: fr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Chemins physiques XOOPS');
define('LEGEND_DATABASE', 'Jeu de caractères de la base de données');

define('XOOPS_LIB_PATH_LABEL', 'Répertoire de la bibliothèque XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'Répertoire des fichiers de données XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Jeu de caractères et classement de la base de données');
define('DB_COLLATION_HELP', "Depuis la version 4.12, MySQL prend en charge le jeu de caractères et le classement personnalisés. Cependant, c'est plus complexe que prévu, alors NE faites aucun changement à moins que vous soyez sûr de votre choix.");
define('DB_COLLATION_NOCHANGE', 'Ne pas modifier');

define('XOOPS_PATH_FOUND', 'Chemin trouvé.');
define('ERR_COULD_NOT_ACCESS', 'Impossible d\'accéder au dossier spécifié. Veuillez vérifier qu\'il existe et qu\'il est lisible par le serveur.');
define('CHECKING_PERMISSIONS', 'Vérification des autorisations de fichiers et de répertoires...');
define('ERR_NEED_WRITE_ACCESS', 'Le serveur doit disposer d\'un accès en écriture aux fichiers et dossiers suivants <br> (c\'est-à-dire <em>chmod 777 directory_name</em> sur un serveur UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s n\'est PAS accessible en écriture.');
define('IS_WRITABLE', '%s est accessible en écriture.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Erreur lors de l\'écriture du contenu dans mainfile.php, écrivez le contenu manuellement dans mainfile.php.');
