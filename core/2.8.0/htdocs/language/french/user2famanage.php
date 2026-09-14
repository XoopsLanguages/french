<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'Authentification à deux facteurs');
define('_US_2FAM_PASSWORD', 'Votre mot de passe actuel');
define('_US_2FAM_ENABLE', 'Configurer une application d\'authentification');
define('_US_2FAM_CONFIRM', 'Confirmer l\'application d\'authentification');
define('_US_2FAM_CHOOSE', 'Choisissez comment vous souhaitez recevoir votre deuxième étape : une application d\'authentification, ou un code par e-mail.');
define('_US_2FAM_ENABLE_EMAIL', 'Utiliser les codes par e-mail');
define('_US_2FAM_EMAIL_HELP', 'Codes par e-mail : un code à six chiffres est envoyé à %s à chaque connexion. Moins sûr qu\'une application d\'authentification, car toute personne pouvant lire votre e-mail peut franchir cette étape.');
define('_US_2FAM_EMAIL_STEP', 'Nous avons envoyé un code à six chiffres à %s. Saisissez-le ci-dessous pour confirmer. Il est valable dix minutes.');
define('_US_2FAM_CONFIRM_EMAIL', 'Confirmer les codes par e-mail');
define('_US_2FAM_CODE_HELP_EMAIL', 'Le code à six chiffres reçu dans l\'e-mail que nous venons de vous envoyer.');
define('_US_2FAM_ENABLED_EMAIL', 'Les codes par e-mail sont activés. Pour apporter une modification, saisissez votre mot de passe actuel et le code reçu par e-mail, ou un code de récupération. Utilisez le bouton ci-dessous pour demander un code.');
define('_US_2FAM_SEND', 'M\'envoyer un code');
define('_US_2FAM_MANUAL', 'Clé de configuration manuelle');
define('_US_2FAM_SCAN', 'Code QR pour votre application d\'authentification');
define('_US_2FAM_STEP_APP', 'Vous avez besoin d\'une application d\'authentification : n\'importe quelle application ou gestionnaire de mots de passe générant des codes à usage unique basés sur le temps (TOTP) fonctionnera, sur votre téléphone ou votre ordinateur. Si vous n\'en avez pas encore, installez-en une de votre choix (par exemple Google Authenticator, Microsoft Authenticator, Aegis ou FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Dans l\'application, ajoutez un compte : scannez ce code QR, ou choisissez la saisie manuelle et tapez la clé de configuration indiquée en dessous.');
define('_US_2FAM_STEP_CODE', 'L\'application affiche désormais un code à six chiffres qui change toutes les 30 secondes. Saisissez le code affiché à l\'instant dans le champ ci-dessous et confirmez.');
define('_US_2FAM_CODE_HELP', 'Le code à six chiffres actuellement affiché par votre application d\'authentification.');
define('_US_2FAM_HTTP', 'Cette connexion utilise le HTTP simple. Votre mot de passe, votre session, votre clé de configuration d\'authentification et vos codes de récupération peuvent être interceptés. Utilisez le HTTPS dès que possible.');
define('_US_2FAM_CODES', 'Enregistrez ces codes de récupération maintenant');
define('_US_2FAM_CODES_HELP', 'Chaque code ne fonctionne qu\'une seule fois. Ces codes ne seront plus affichés. Conservez-les en lieu sûr, séparément de ce compte.');
define('_US_2FAM_DISABLE', 'Désactiver l\'authentification à deux facteurs');
define('_US_2FAM_REGENERATE', 'Remplacer les codes de récupération');
define('_US_2FAM_ENABLED', 'Une application d\'authentification est activée. Saisissez votre mot de passe actuel et un code d\'authentification ou de récupération pour apporter une modification.');
define('_US_2FAM_DISABLED', 'L\'authentification à deux facteurs est désactivée.');
define('_US_2FAM_PAUSED', 'Le site a suspendu les vérifications à deux facteurs. Votre facteur est conservé, et l\'option « se souvenir de moi » reste indisponible pour les comptes activés.');
define('_US_2FAM_UNAVAILABLE', 'La configuration ou la gestion de l\'authentification à deux facteurs n\'est pas disponible. Veuillez contacter l\'administrateur du site.');
define('_US_2FAM_STARTAGAIN', 'La configuration a expiré ou le compte a changé. Saisissez votre mot de passe pour recommencer la configuration.');
define('_US_2FAM_BADPASSWORD', 'Votre mot de passe actuel n\'a pas été accepté.');
define('_US_2FAM_RESET', 'Réinitialiser l\'authentification à deux facteurs de cet utilisateur');
define('_US_2FAM_STATUS_NONE', 'Non activée');
define('_US_2FAM_STATUS_TOTP', 'Application d\'authentification activée');
define('_US_2FAM_STATUS_EMAIL', 'Codes par e-mail activés');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Statut indisponible');
define('_US_2FAM_RESET_HELP', 'Cette action désactive le deuxième facteur de l\'utilisateur, quelle que soit la méthode utilisée, et révoque ses codes de récupération et cookies « se souvenir de moi ». Les sessions déjà connectées restent actives. Saisissez votre propre mot de passe administrateur pour confirmer.');
define('_US_2FAM_RESET_DONE', 'L\'authentification à deux facteurs de l\'utilisateur a été réinitialisée.');
define('_US_2FAM_BACK', 'Retour au compte');
define('_US_2FAM_DONE', 'L\'authentification à deux facteurs est activée.');
define('_US_2FAM_REPLACED', 'Les codes de récupération précédents ont été révoqués.');
define('_US_2FAM_NOTICE_SUBJECT', '%s : authentification à deux facteurs modifiée');
define('_US_2FAM_NOTICE_BODY', 'L\'authentification à deux facteurs ou les codes de récupération ont été modifiés pour votre compte sur %s depuis %s. Si ce n\'était pas vous, contactez l\'administrateur du site.');
define('_US_2FAM_RESET_SUBJECT', '%s : un administrateur a réinitialisé votre authentification à deux facteurs');
define('_US_2FAM_RESET_BODY', 'Un administrateur a désactivé votre deuxième facteur et révoqué ses codes de récupération sur %s depuis %s. Les sessions déjà connectées restent actives. Connectez-vous et reconfigurez l\'authentification à deux facteurs. Contactez l\'administrateur du site si cela est inattendu.');
