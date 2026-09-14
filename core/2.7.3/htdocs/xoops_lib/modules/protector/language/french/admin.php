<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Autorisations');
define('_MD_A_MYMENU_MYPREFERENCES','Préférences');
// index.php
define('_AM_TH_DATETIME', 'Heure');
define('_AM_TH_USER', 'Utilisateur');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Tapez');
define('_AM_TH_DESCRIPTION', 'Descriptif');
define('_AM_TH_BADIPS','Mauvaises IP<br><br><span style="font-weight:normal;">Écrivez à chaque IP une ligne<br>vide signifie que toutes les IP sont autorisées</span>');
define('_AM_TH_GROUP1IPS','IP autorisées pour le groupe = 1<br><br><span style="font-weight:normal;">Écrivez chaque IP une ligne.<br>192.168. signifie 192.168.*<br>blank signifie que toutes les adresses IP sont autorisées</span>');
define('_AM_LABEL_COMPACTLOG', 'Journal compact');
define('_AM_BUTTON_COMPACTLOG', 'Compacter !');
define('_AM_JS_COMPACTLOGCONFIRM', 'Les enregistrements en double (IP,Type) seront supprimés');
define('_AM_LABEL_REMOVEALL', 'Supprimer tous les enregistrements');
define('_AM_BUTTON_REMOVEALL', 'Tout supprimer !');
define('_AM_JS_REMOVEALLCONFIRM', 'Tous les journaux sont absolument supprimés. Est-ce que tu vas vraiment bien ?');
define('_AM_LABEL_REMOVE', 'Supprimez les enregistrements cochés :');
define('_AM_BUTTON_REMOVE', 'Supprimer !');
define('_AM_JS_REMOVECONFIRM', 'Supprimer OK ?');
define('_AM_MSG_IPFILESUPDATED', 'Les fichiers pour les IP ont été mis à jour');
define('_AM_MSG_BADIPSCANTOPEN', 'Le fichier du mauvais IP ne peut pas être ouvert');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Le fichier d\'autorisation du groupe = 1 ne peut pas être ouvert');
define('_AM_MSG_REMOVED', 'Les enregistrements sont supprimés');
define('_AM_MSG_DELFAILED', 'Échec de la suppression des enregistrements');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Rendez le répertoire de configuration accessible en écriture : %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Gestionnaire de préfixes');
define('_AM_MSG_DBUPDATED', 'Base de données mise à jour avec succès !');
define('_AM_CONFIRM_DELETE', 'Toutes les données seront supprimées. D\'ACCORD?');
define('_AM_TXT_HOWTOCHANGEDB',"Si vous souhaitez modifier le préfixe, <br> modifiez %s/data/secure.php manuellement.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Non sécurisé');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Si vous pouvez voir une image -NG- ou si le lien renvoie une page normale, votre XOOPS_TRUST_PATH n\'est pas placé correctement. Le meilleur endroit pour XOOPS_TRUST_PATH est en dehors de DocumentRoot. Si vous ne pouvez pas faire cela, vous devez mettre .htaccess (DENY FROM ALL) juste sous XOOPS_TRUST_PATH comme deuxième meilleur moyen.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Vérifiez que les fichiers PHP dans TRUST_PATH sont définis en lecture seule (il doit s\'agir d\'une erreur 404 403 ou 500)');
define('_AM_ADV_REGISTERGLOBALS',"S'il est activé, ce paramètre invite à diverses attaques par injection. Si vous le pouvez, désactivez « register_globals off » dans php.ini, ou si ce n'est pas possible, créez ou modifiez .htaccess dans votre répertoire XOOPS :");
define('_AM_ADV_ALLOWURLFOPEN',"Si 'ON', ce paramètre permet aux attaquants d'exécuter des scripts arbitraires sur des serveurs distants.<br>Seul l'administrateur peut modifier cette option.<br>Si vous êtes un administrateur, modifiez php.ini ou httpd.conf.<br><b>Exemple de httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Sinon, réclamez-le auprès de vos administrateurs.");
define('_AM_ADV_USETRANSSID',"Si 'ON', votre ID de session sera affiché dans les balises d'ancrage, etc.<br>Pour éviter le détournement de session, ajoutez une ligne dans .htaccess dans XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Ce paramètre invite à \"Injections SQL\".<br>N'oubliez pas d'activer \"Forcer la désinfection *\" dans les préférences de ce module.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Aller au gestionnaire de préfixes');
define('_AM_ADV_MAINUNPATCHED', 'Vous devez modifier votre mainfile.php comme écrit dans README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Votre usine de base de données est prête pour DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Votre usine de base de données n\'est pas prête pour DBLayer Trapping anti-SQL-Injection. Certains correctifs sont requis.');
define('_AM_ADV_SUBTITLECHECK', 'Vérifiez si Protector fonctionne bien');
define('_AM_ADV_CHECKCONTAMI', 'Contamination');
define('_AM_ADV_CHECKISOCOM', 'Commentaires isolés');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'et placez-y la ligne ci-dessous :');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Préfixe');
define('_AM_PROTECTOR_TABLES', 'Tableaux');
define('_AM_PROTECTOR_UPDATED', 'Mis à jour');
define('_AM_PROTECTOR_COPY', 'Copier');
define('_AM_PROTECTOR_ACTIONS', 'Actions');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Interdire les IP sur les enregistrements vérifiés :');
define('_AM_BUTTON_BAN_BY_IP', 'IP Interdiction !');
define('_AM_JS_BANCONFIRM', 'IP Interdictions OK ?');
define('_AM_MSG_BANNEDIP', 'Les IP sont bannies');
define('_AM_ADMINSTATS_TITLE', 'Résumé du journal Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Le mois dernier');
define('_AM_ADMINSTATS_LAST_WEEK', 'La semaine dernière');
define('_AM_ADMINSTATS_LAST_DAY', 'Hier');
define('_AM_ADMINSTATS_LAST_HOUR', 'Dernière heure');
