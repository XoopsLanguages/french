<?php
//
// _LANGCODE: fr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> est un logiciel open source
    Système de publication Web orienté objet écrit en PHP. C\'est un outil idéal pour
    développer des sites Web communautaires dynamiques de petite à grande taille, des portails intra-entreprise, des portails d\'entreprise, des blogs et bien plus encore.
</p>
<p>
    XOOPS est libéré selon les termes du
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Licence publique générale (GPL)</a>
    version 2 ou supérieure, et son utilisation et sa modification sont gratuites.
    La redistribution est gratuite tant que vous respectez les conditions de distribution du GPL.
</p>
<h3>Exigences</h3>
<ul>
    <li>WWW Serveur (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 ou supérieur, 8.4+ recommandé</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 ou supérieur, 8.4.5+ recommandé </li>
</ul>
<h3>Avant de install</h3>
<ol>
    <li>Configurez correctement le serveur WWW, PHP et le serveur de base de données.</li>
    <li>Préparez une base de données pour votre site XOOPS.</li>
    <li>Préparez le compte utilisateur et accordez à l’utilisateur l’accès à la base de données.</li>
    <li>Rendre ces répertoires et fichiers accessibles en écriture : %s</li>
    <li>Pour des raisons de sécurité, il est fortement conseillé de déplacer les deux répertoires ci-dessous hors de <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">racine du document</a> et changez les noms des dossiers : %s</li>
    <li>Créez (s\'ils ne sont pas déjà présents) et rendez ces répertoires accessibles en écriture : %s</li>
    <li>Activez les cookies et JavaScript de votre navigateur.</li>
</ol>
<h3>Remarques spéciales</h3>
<ol>
    <li>Certaines combinaisons de logiciels système spécifiques peuvent nécessiter des configurations supplémentaires pour fonctionner
    avec XOOPS. Si l\'un de ces sujets s\'applique à votre environnement, veuillez consulter la version complète
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    manuel d\'installation</a> pour plus d\'informations.<br><br>

    <li><strong>SELinux</strong> systèmes activés (tels que <strong>CentOS</strong>  et <strong>RHEL</strong>) peut nécessiter des modifications du contexte de sécurité
    pour les répertoires XOOPS en plus des autorisations normales sur les fichiers pour rendre les répertoires accessibles en écriture.
    Consultez la documentation de votre système et/ou votre administrateur système.
</ol>
';

return $content;

