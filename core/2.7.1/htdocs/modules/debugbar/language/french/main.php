<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: fr

define('_MD_DEBUGBAR_DEBUG', 'Débogage');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Fichiers inclus');
define('_MD_DEBUGBAR_PHP_VERSION', 'Version PHP');
define('_MD_DEBUGBAR_NONE', 'Aucun');
define('_MD_DEBUGBAR_ERRORS', 'Erreurs');
define('_MD_DEBUGBAR_DEPRECATED', 'Obsolète');
define('_MD_DEBUGBAR_QUERIES', 'Requêtes');
define('_MD_DEBUGBAR_BLOCKS', 'Blocs');
define('_MD_DEBUGBAR_EXTRA', 'Supplémentaire');
define('_MD_DEBUGBAR_TIMERS', 'Minuteries');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s a mis %s secondes à charger.');
define('_MD_DEBUGBAR_TOTAL', 'Total');
define('_MD_DEBUGBAR_NOT_CACHED', 'Non mis en cache');
define('_MD_DEBUGBAR_CACHED', 'Mis en cache (régénère toutes les %s secondes)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(chaîne vide)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'booléen VRAI');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FAUX');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Requêtes de base de données');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Utilisation de la mémoire');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d requêtes');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d doublons)');
define('_MD_DEBUGBAR_BYTES', '%s octets');
define('_MD_DEBUGBAR_DB_VERSION', 'Version %s');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Numéro d\'erreur : %s Message d\'erreur : %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Erreur #%s : %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Exception');
define('_MD_DEBUGBAR_RAY_QUERY', 'Requête #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LENT');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Bloc (%ds mis en cache)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Bloc (non mis en cache)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Sauvegarde');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Contexte du modèle');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(aucune variable de modèle)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d variables)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Le répertoire "modules/debugbar/%s" n\'a pas été créé');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Échec de la création du répertoire "%s" lors de la copie de l\'actif');
