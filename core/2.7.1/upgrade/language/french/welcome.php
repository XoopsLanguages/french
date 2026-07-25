<?php

// _LANGCODE: fr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Valorisateur</h2>

<p>
<em>Mise à niveau</em> examinera cette installation XOOPS et appliquera tous les correctifs nécessaires pour la rendre compatible 
avec le nouveau code XOOPS. Les correctifs peuvent inclure des modifications de la base de données, en ajoutant des paramètres par défaut pour les nouveaux
éléments de configuration, mises à jour de fichiers et de données, et bien plus encore.
<p>
Après chaque correctif, le programme de mise à niveau signalera l'état et attendra que votre contribution continue. Au
À la fin de la mise à niveau, le contrôle passera à la fonction de mise à jour du module système.

<div class="alert alert-warning">
Une fois la mise à niveau terminée, n'oubliez pas de :
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> supprimer le dossier de mise à niveau</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> mettre à jour tous les modules qui ont changé</li>
</div>

EOT,
);
