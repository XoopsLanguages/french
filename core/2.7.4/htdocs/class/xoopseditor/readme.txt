xoopseditor fournit un collectif d'éditeurs pour XOOPS

guide d'utilisation :

1 vérifiez les fichiers xoops_version.php sous /xoopseditor/ pour vous assurer qu'ils sont plus récents que vos fichiers actuels

2 téléchargez /xoopseditor/ vers /XOOPS/class/ => /XOOPS/class/xoopseditor/ :
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 configurer les préférences le cas échéant
3.1 ./dhtmlext(all editors)/langue/ : créez votre fichier de langue locale basé sur english.php
3.3 ./dhtmlext(all editors)/editor_registry.php : définir les configurations pour l'éditeur : order - ordre d'affichage dans le cas où la sélection de l'éditeur est utilisée, 0 pour désactivé ; nohtml - fonctionne pour la syntaxe non HTML
3.3 ./FCKeditor/module/ : copiez les fichiers dans les dossiers des modules au cas où des autorisations de téléchargement, des options de stockage et d'éditeur spécifiques au module seraient requises
3.3.1 ./FCKeditor/module/fckeditor.config.js : pour les options de l'éditeur, vous n'avez généralement pas besoin de le modifier
3.3.2 ./FCKeditor/module/fckeditor.connector.php : pour spécifier le dossier de navigation dans les fichiers (et de stockage de téléchargement) => XOOPS/uploads/XOOPS_FCK_FOLDER/, le dossier doit être créé manuellement
3.3.3 ./FCKeditor/module/fckeditor.upload.php : spécifiez l'autorisation de téléchargement et le stockage de téléchargement
3.4 XOOPS/uploads/fckeditor/ : pour créer le dossier si FCKeditor est activé, utilisé pour les téléchargements à partir desquels le dossier de téléchargement n'est pas spécifié
3.5 ./tinymce/tinymce/jscripts/ : téléchargez vos fichiers de langue locale depuis http://tinymce.moxiecode.com/language.php

4 Vérifiez les noms de fichiers : pour les systèmes sensibles à la casse des noms de fichiers, assurez-vous que les noms de fichiers sont littéralement corrects, c'est-à-dire que "FCKeditor" n'est pas identique à "fckeditor".

5 consultez /xoopseditor/sampleform.inc.php pour le guide de développement
