<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: fr

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Rapports d\'erreurs et analyse des performances avec PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Afficher DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Activer le débogage Smarty');
define('_MI_DEBUGBAR_FILESDEBUG', 'Activer l\'onglet des fichiers inclus');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Afficher tous les fichiers PHP chargés pendant la requête');
define('_MI_DEBUGBAR_SLOWQUERY', 'Seuil de requête lente (secondes)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Les requêtes plus lentes que cela sont mises en évidence en rouge (ex. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Journalisation des requêtes');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Toutes les requêtes ou seulement les lentes et les erreurs');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Toutes les requêtes');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Lentes et erreurs seulement');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Activer l\'intégration Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Envoyer les données de débogage à l\'application Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Accueil');
define('_MI_DEBUGBAR_MENU_ABOUT', 'À propos');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Retour à l\'administration de ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Aperçu');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Avertissement');
\define('_MI_DEBUGBAR_LICENSE', 'Licence');
\define('_MI_DEBUGBAR_SUPPORT', 'Assistance');
