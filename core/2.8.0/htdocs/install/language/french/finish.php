<?php
//
// _LANGCODE: fr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Votre site</h3>
<p>Vous pouvez désormais accéder au <a href='../index.php'>page d'accueil de votre site</a>.</p>
<h3>Soutien</h3>
<p>Visite <a href='https://xoops.org/' rel='external'>Le projet XOOPS</a></p>
<p><strong>ATTENTION :</strong> Votre site contient actuellement les fonctionnalités minimales. 
Veuillez visiter <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
pour en savoir plus sur l'extension de XOOPS pour présenter des pages de texte, des galeries de photos, des forums et bien plus encore, 
avec <em>modules</em> ainsi que de personnaliser l'apparence de votre XOOPS avec <em>thèmes</em>.</p>
";

$content .= "<h3>Configuration de la sécurité</h3>
<p>Le programme d'installation tentera de configurer votre site pour des raisons de sécurité. Veuillez revérifier pour vous assurer :
<div class='confirmMsg'>
Le <em>mainfile.php</em> est en lecture seule.<br>
Supprimer le dossier <em>{$installer_modified}</em> (ou <em>install</em> s'il n'a pas été renommé automatiquement par l'installateur) depuis votre serveur.
</div>
</p>
";
