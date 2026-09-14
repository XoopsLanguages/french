<?php

// _LANGCODE: fr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Migration Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Résultats du scanner');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Exécuter une analyse');
define('_XOOPS_SMARTY4_SCANNER_END', 'Quitter le scanner');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Règle');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Correspondance');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Fichier');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Nombre de correctifs');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Révision manuelle requise');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Peut être corrigé automatiquement : la variable d\'élément foreach sera renommée en ajoutant "_item" (par exemple, "foo" devient "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Non inscriptible');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Options de nouvelle analyse');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Cochez la case « Oui » ci-dessous, puis cliquez sur le bouton Exécuter l\'analyse pour essayer de résoudre automatiquement les problèmes détectés.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Marquer comme terminé');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Répertoire de modèles (facultatif)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Extension de modèle (facultatif)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 introduit un changement significatif : Smarty 4</h3>

<p>Malheureusement, ce changement peut potentiellement perturber certains thèmes plus anciens. Par conséquent, avant de procéder à la mise à niveau, assurez-vous de suivre ces étapes :

<li>Exécutez preflight.php pour vérifier les thèmes ou modèles de modules obsolètes.</li>
<li>Si des problèmes sont identifiés, consultez ce document pour comprendre les modifications nécessaires avant de procéder à la mise à niveau.</li>
<li>Après avoir apporté les modifications requises, exécutez à nouveau preflight.php.</li>
<li>S'il n'y a plus de problèmes, vous pouvez commencer le processus de mise à niveau.</li>
</p>
EOT,
);
