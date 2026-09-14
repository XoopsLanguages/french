<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Deuxième étape');
define('_US_2FA_PROMPT', 'Saisissez le code de votre application d\'authentification');
define('_US_2FA_CODE', 'Code d\'authentification');
define('_US_2FA_PROMPT_EMAIL', 'Nous avons envoyé un code à six chiffres à %s. Saisissez-le ci-dessous.');
define('_US_2FA_CODE_EMAIL', 'Code reçu par e-mail');
define('_US_2FA_SEND', 'Envoyer un nouveau code');
define('_US_2FA_SENT', 'Un nouveau code a été envoyé à %s. Il est valable dix minutes.');
define('_US_2FA_SEND_WAIT', 'Un code a été envoyé il y a moins d\'une minute. Vérifiez votre boîte de réception et vos courriers indésirables avant d\'en demander un autre.');
define('_US_2FA_SEND_FAILED', 'Le code n\'a pas pu être envoyé pour le moment. Réessayez dans un instant, ou utilisez un code de récupération.');
define('_US_2FA_EMAIL_SUBJECT', '%s : votre code de connexion');
define('_US_2FA_EMAIL_BODY', 'Votre code de connexion pour %s est :

%s

Il est valable %d minutes et ne fonctionne qu\'une seule fois. Si vous n\'êtes pas à l\'origine de cette demande, ignorez ce message et envisagez de changer votre mot de passe.');
define('_US_2FA_RECOVERY', 'Utiliser un code de récupération à la place');
define('_US_2FA_RECOVERY_HINT', 'Chaque code de récupération ne fonctionne qu\'une seule fois. Son utilisation vous envoie un e-mail.');
define('_US_2FA_SUBMIT', 'Continuer');
define('_US_2FA_STARTAGAIN', 'Cette connexion a expiré ou a été interrompue. Veuillez recommencer.');
define('_US_2FA_BACKTOLOGIN', 'Retour au formulaire de connexion');
define('_US_2FA_BADCODE', 'Ce code n\'a pas été accepté.');
define('_US_2FA_LOCKED', 'Trop de tentatives. La deuxième étape est verrouillée pendant quinze minutes ; un code de récupération fonctionne toujours.');
define('_US_2FA_UNAVAILABLE', 'La deuxième étape n\'est pas disponible pour le moment. Un code de récupération fonctionne toujours, ou contactez l\'administrateur du site.');
define('_US_2FA_REQUIRED', 'Ce compte a activé l\'authentification à deux facteurs. Veuillez vous connecter via la page de connexion du site.');
define('_US_2FA_HTTP_LOGIN', 'Cette fenêtre ne peut pas terminer une connexion à deux facteurs en HTTP, car votre mot de passe serait envoyé sans chiffrement. Utilisez plutôt la connexion du site, ou demandez à l\'administrateur d\'activer le HTTPS pour le site.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s : deuxième étape verrouillée');
define('_US_2FA_LOCKED_MAIL_BODY', 'Cinq codes de deuxième étape incorrects ont été saisis pour votre compte sur %s depuis %s. La deuxième étape est verrouillée pendant quinze minutes. Si ce n\'était pas vous, changez votre mot de passe.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s : un code de récupération a été utilisé');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Un code de récupération a été utilisé pour se connecter à votre compte sur %s depuis %s. Ce code ne fonctionne plus. Si ce n\'était pas vous, changez votre mot de passe et réinitialisez vos codes de récupération.');
