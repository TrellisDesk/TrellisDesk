<?php

/*
#======================================================
|    | Trellis Desk Language File
|    | ad_lang_settings.php
#======================================================
*/

$lang = array(

'active' => 'Actif',
'alert_antispam_akismet_check_success' => 'Akismet key verified and system checks passed.',
'alert_antispam_phpcaptcha_check_success' => 'PhpCaptcha system checks passed.',
'alert_antispam_recaptcha_cannot_check' => 'Cannot test reCAPTCHA due to library limitations. Please manually check your reCAPTCHAs.',
'alert_email_test' => 'Envoyer un message de test &agrave; votre Email sortant (ci-dessous).',
'alert_email_test_failed' => 'Message de teste, l\'envoi a &eacute;chou&eacute;.',
'alert_email_test_sent' => 'Message de test envoy&eacute;',
'alert_email_transport_mail' => 'Vous ne pouvez pas tester la connexion en raison de limitations dans le protocole de courrier &eacute;lectronique.',
'alert_email_transport_sendmail_success' => 'Connection a SendMail r&eacute;ussie',
'alert_email_transport_smtp_success' => 'Connection au serveur stmp r&eacute;ussie',
'alert_setting_defaulted' => 'Ce r&eacute;glage a &eacute;t&eacute; mis par d&eacute;faut.',
'alert_setting_reverted' => 'Le r&eacute;glage a &eacute;t&eacute; remis a l\'&eacute;tat initial avec succ&egrave;s.',
'alert_settings_defaulted' => 'Les param&egrave;tres ont &eacute;t&eacute; mis par d&eacute;faut.',
'alert_settings_updated' => 'Les param&egrave;tres ont &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s.',
'alert_ticket_mask_sample' => 'Ticket Mask sample:',
'ascending' => 'Croissant',
'assigned_tickets' => 'Billets assigner aux autres',
'auto' => 'Automatique',
'auto_append_sig' => 'Ajoute signature de billets et des r&eacute;ponses par d&eacute;faut',
'auto_assign' => 'Attribuez-moi de billets &agrave; qui je r&eacute;ponds par d&eacute;faut',
'available_columns' => 'Colonnes disponnible',
'button_edit_settings' => 'Enregistrer les param&egrave;tres',
'click_here' => 'Cliquez ici',
'current_columns' => 'Current Columns',
'default_sort_order' => 'Ordre de tri par d&eacute;faut',
'descending' => 'Descendant',
'dfilters_assigned' => 'Afficher uniquement mes billets assign&eacute;s par d&eacute;faut',
'dst' => 'Heure d\'&eacute;t&eacute;',
'editing_settings' => 'Modification des param&egrave;tres:',
'email_assign' => 'Notification des assignations',
'email_close' => 'Notifications des fermetures',
'email_escalate' => 'Notification des escalades',
'email_hold' => 'Notifications des retenues',
'email_move_away' => 'Move Away Notifications',
'email_move_to' => 'Notifications des d&eacute;placements',
'email_notifications' => 'Notifications par courriel',
'email_preferences' => 'Pr&eacute;f&eacute;rences de courriel',
'email_reopen' => 'Notifications des r&eacute;ouvertures',
'email_reply' => 'R&eacute;ponse notifications',
'email_smtp_encryption_none' => 'Aucun',
'email_smtp_encryption_ssl' => 'SSL',
'email_smtp_encryption_tls' => 'TLS',
'email_ticket' => 'Notifications billets',
'email_transport_mail' => 'Mail',
'email_transport_sendmail' => 'Sendmail',
'email_transport_smtp' => 'SMTP',
'email_type' => 'Format du courriel',
'email_user_approve' => 'Nouvel utilisateur approuv&eacute;',
'error_antispam_akismet_check_failed' => 'Akismet check failed. Your Akismet API key is invalid or Akismet could not reach its server.',
'error_antispam_phpcaptcha_check_fonts' => 'Les polices de caract&egrave;res ne sont pas disponibles.',
'error_antispam_phpcaptcha_check_freetype' => 'Support &agrave; FreeType non disponible',
'error_antispam_phpcaptcha_check_gd' => 'La library GD 2 non disponible',
'error_email_transport_sendmail' => 'Impossible de se connecter &agrave; Sendmail.',
'error_email_transport_smtp' => 'Impossible de se connecter au serveur SMTP.',
'error_email_transport_smtp_ssl' => 'Impossible de se connecter au serveur SMTP. protocole SSL n\'est pas support&eacute;e par le serveur.',
'error_email_transport_smtp_tcp' => 'Impossible de se connecter au serveur SMTP. protocole TCP n\'est pas support&eacute;e par le serveur.',
'error_email_transport_smtp_tls' => 'Impossible de se connecter au serveur SMTP. Le protocole TLS n\'est pas support&eacute;e par le serveur.',
'following_error_returned' => 'L\'erreur suivante a &eacute;t&eacute; renvoy&eacute;e.',
'grp_antispam' => 'Anti-Spam',
'grp_antispam_desc' => 'Configurez votre m&eacute;thode anti-spam avec reCAPTCHA, Akismet, etc.',
'grp_ban' => 'Interdire',
'grp_ban_desc' => 'Ces param&egrave;tres contr&ocirc;lent  les filtres pour bloquer les visiteurs ind&eacute;sirables..',
'grp_email' => 'Courriel',
'grp_email_desc' => 'Param&egrave;tres de messagerie et configuration tels que la m&eacute;thode de diffusion,courriel sortants, etc',
'grp_esnotify' => 'Notifications courriel au personnel',
'grp_esnotify_desc' => 'Activer ou d&eacute;sactiver les notifications par courriel par type, pour le personnel.',
'grp_eunotify' => 'Notifications par courriel',
'grp_eunotify_desc' => 'Activer ou d&eacute;sactiver les notifications par courriel par type, pour les utilisateurs.',
'grp_general' => 'G&eacute;n&eacute;ral',
'grp_general_desc' => 'Param&egrave;tres g&eacute;n&eacute;raux pour Trellis Desk tels que les URL, les chemins et les fonctionnalit&eacute;s globales.',
'grp_kb' => 'Base de connaissances',
'grp_kb_desc' => 'Param&egrave;tres de la base de connaissances tels que permettent le classement d\'articles, autoriser les commentaires, etc',
'grp_log' => 'Historiques',
'grp_log_desc' => 'Contr&ocirc;le les &eacute;v&eacute;nements conserv&eacute;s en historique.',
'grp_look' => 'Pr&eacute;sentation et mode de fonctionnement',
'grp_look_desc' => 'Les param&egrave;tres tels que permettent aux membres de modifier le th&egrave;me / langue.',
'grp_news' => 'Nouvelles',
'grp_news_desc' => 'R&eacute;glages pour le syst&egrave;me de nouvelles telles que le soutien RTE, commentaires, etc',
'grp_security' => 'S&eacute;curit&eacute; et confidentialit&eacute;',
'grp_security_desc' => 'Param&egrave;tres qui contr&ocirc;lent les fonctions de s&eacute;curit&eacute; telles que temporisations de session, IP correspondante, l\'enregistrement, etc',
'grp_ticket' => 'Billets',
'grp_ticket_desc' => 'Param&egrave;tres g&eacute;n&eacute;ral des billets telles que le temps d\'escalade.',
'hey_you_msg' => 'Puisque vous lisez ce paragraphe en ce moment, il est s&ucirc;r de dire que vous &ecirc;tes un utilisateur de  Trellis Desk. Et nous voulons entendre ce que vous, l\'utilisateur, pense &agrave; notre logiciel! S\'il vous pla&icirc;t visitez le <a href=\\\\\\\\\\\\\\\"https://github.com/trellisdeskTrellisDesk/issues\\\\\\\\\\\\\\\" target=\\\\\\\\\\\\\\\"_blank\\\\\\\\\\\\\\\">TrellisDesk issue tracker</a>o&ugrave; vous pouvez rapporter les bugs ou sugg&eacute;rer des fonctionnalit&eacute;s que vous aimeriez voir dans les futures versions de Trellis Desk. Ou, si vous ne vous sentez pas aventureux, &eacute;crivez-nous un message &agrave; l\'adresse <a href=\\\\\\\\\\\\\\\"mailto:info@accord5.com\\\\\\\\\\\\\\\">info@trellisdesk.ca</a>. voulons vraiment entendre ce que vous pensez Trellis Desk!',
'hey_you_title' => 'Hey ... vous! Oui, vous!',
'html' => 'HTML',
'inactive' => 'Inactif',
'language' => 'Langue',
'last_replier' => 'Dernier intervenant',
'last_reply' => 'Derni&egrave;re r&eacute;ponse',
'last_staff_reply' => 'Derni&egrave;re r&eacute;ponse du personnel',
'mask' => 'Mask',
'menu_back' => '<strong>Retour</strong> &agrave; la liste des param&egrave;tres',
'menu_cache' => '<strong>Reconstruire</strong> la m&eacute;moire cache des param&egrave;tres',
'menu_default' => '<strong>R&eacute;tablir</strong> les param&egrave;tres par d&eacute;faut',
'menu_etemplates' => 'Modifier les  <strong>mod&egrave;les de courriel </strong>',
'menu_settings_options' => 'Configuration options',
'my_acp_settings' => 'Mes pr&eacute;f&eacute;rences ACP',
'my_signature' => 'Ma signature',
'plain_text' => 'En texte brut',
'receive_for' => 'Recevoir les notifications pour',
'replies' => 'R&eacute;ponses',
'rich_text_editor' => '&Eacute;diteur de texte enrichi',
'set_antispam_akismet_key' => 'Akismet Key',
'set_antispam_enable' => 'Activer Anti-Spam',
'set_antispam_method' => 'M&eacute;thode',
'set_antispam_method_akismet' => 'Akismet',
'set_antispam_method_phpcaptcha' => 'PhpCaptcha',
'set_antispam_method_recaptcha' => 'reCAPTCHA',
'set_antispam_port' => 'API Port',
'set_antispam_protect_forgot_pass' => 'Protection formulaire de mot de passe oubli&eacute;',
'set_antispam_protect_registration' => 'Protection formulaire d\'inscription',
'set_antispam_protect_tickets' => 'Protection Invit&eacute; formulaire pour les billets',
'set_antispam_recaptcha_key_private' => 'reCAPTCHA Private Key',
'set_antispam_recaptcha_key_public' => 'reCAPTCHA Public Key',
'set_antispam_ssl' => 'Utiliser SSL',
'set_ban_emails' => 'Adresses &eacute;lectroniques bannis',
'set_ban_ips' => 'Adresses IP bannis',
'set_email_enable' => 'Activer les courriels sortants',
'set_email_html' => 'Activer les courriels HTML',
'set_email_out_address' => 'Adresses des courriels sortants',
'set_email_sendmail_command' => 'Sendmail Path / Command',
'set_email_smtp_encryption' => 'SMTP Encryption',
'set_email_smtp_host' => 'SMTP Serveur',
'set_email_smtp_pass' => 'SMTP mot de passe',
'set_email_smtp_port' => 'SMTP Port',
'set_email_smtp_timeout' => 'SMTP Timeout',
'set_email_smtp_user' => 'SMTP Utilisateur',
'set_email_transport' => 'Protocole',
'set_email_transport_desc' => 'aaa :)',
'set_esnotify_assign' => 'Notifications des assignations',
'set_esnotify_close' => 'Notifications des fermetures',
'set_esnotify_enable' => 'Notifications activ&eacute;es',
'set_esnotify_escalate' => 'Notifications des escalades',
'set_esnotify_hold' => 'Notifications des billets mis en garde',
'set_esnotify_move_away' => 'Notifications des abandons',
'set_esnotify_move_to' => 'Notifications des d&eacute;placements',
'set_esnotify_reopen' => 'Notifications des r&eacute;ouvertures',
'set_esnotify_reply' => 'Notifications des r&eacute;ponses',
'set_esnotify_ticket' => 'Notifications des nouveaux billets',
'set_esnotify_user_approve' => 'Approbation de nouvel utilisateur',
'set_eunotify_close' => 'Notification des fermetures',
'set_eunotify_enable' => 'Activ&eacute; les notifications',
'set_eunotify_escalate' => 'Notifications des escalades',
'set_eunotify_guest' => 'Activ&eacute; notifications des invit&eacute;es',
'set_eunotify_hold' => 'Notifications mise en attente',
'set_eunotify_move' => 'Notifications d&eacute;placement',
'set_eunotify_reopen' => 'Notifications r&eacute;ouverture',
'set_eunotify_reply' => 'Notifications des r&eacute;ponses',
'set_eunotify_ticket' => 'Notifications des nouveaux billets',
'set_general_cookie_domain' => 'Cookie domain',
'set_general_cookie_path' => 'Cookie r&eacute;pertoire',
'set_general_cookie_prefix' => 'Cookie Prefix',
'set_general_hd_name' => 'Help Desk Nom',
'set_general_shutdown_enable' => 'Activer processus d\'arr&ecirc;t',
'set_general_shutdown_time' => 'Arr&ecirc;t d&eacute;lai d\'attente',
'set_general_tformat_date' => 'Format de la date',
'set_general_tformat_long' => 'Format de l\'heure long',
'set_general_tformat_short' => 'Format de l\'heure court',
'set_general_tformat_time' => 'Format de l\'heure',
'set_general_time_offset' => 'D&eacute;calage horaire',
'set_general_upload_dir' => 'R&eacute;pertoire de t&eacute;l&eacute;chargement',
'set_general_upload_exts' => 'T&eacute;l&eacute;charger extensions autoris&eacute;es',
'set_kb_comments' => 'Autoriser les commentaires',
'set_kb_enable' => 'Activer la base de connaissances',
'set_kb_rating' => 'Autoriser &eacute;valuation',
'set_kb_rating_threshold' => 'Rating Threshold',
'set_kb_rte' => 'Activer &eacute;diteur de texte enrichi',
'set_kb_sidebar_rating' => 'Afficher les articles les mieux &eacute;valu&eacute;s',
'set_kb_sidebar_rating_count' => 'Articles les mieux &eacute;valu&eacute;s &agrave; afficher',
'set_kb_sidebar_recent' => 'Afficher les articles r&eacute;cents',
'set_kb_sidebar_recent_count' => 'Articles r&eacute;cents &agrave; afficher',
'set_kb_sidebar_views' => 'Afficher les articles les plus consult&eacute;s',
'set_kb_sidebar_views_count' => 'Nombre article les plus vus a afficher',
'set_log_acp' => 'Historique des &eacute;v&eacute;nements ACP',
'set_log_enable' => 'Activer la journalisation',
'set_log_inemail' => 'Historique des &eacute;v&eacute;nements couriel entran',
'set_log_kb' => 'Historique des &eacute;v&eacute;nements base de connaissances',
'set_log_news' => 'Historique des &eacute;v&eacute;nements articles',
'set_log_nonacp' => 'Historique des &eacute;v&eacute;nements Non-ACP',
'set_log_other' => 'Historique des autres &eacute;v&eacute;nements',
'set_log_outemail' => 'Historique des courriels envoy&eacute;s',
'set_log_security' => 'Historique des &eacute;v&eacute;nements de s&eacute;curit&eacute;s',
'set_log_ticket' => 'Historique des &eacute;v&eacute;nements billets',
'set_log_user' => 'Historique des &eacute;v&eacute;nements utilsateur',
'set_look_change_lang' => 'Permettent de changer de langue',
'set_look_change_skin' => 'Permettent de changer de Th&egrave;me',
'set_news_comments' => 'Autoriser les commentaires',
'set_news_dashboard' => 'Afficher les articles sur tableau de bord',
'set_news_dashboard_amount' => 'Nombre a afficher sur le tableau de bord',
'set_news_enable' => 'Permettre',
'set_news_excerpt_trim' => 'Excerpt Character Limit',
'set_news_page' => 'Activer nouvelles pages',
'set_news_page_amount' => 'Nombre a afficher sur la page des nouvelles',
'set_news_rte' => 'Activer &eacute;diteur de texte enrichi',
'set_security_captcha' => 'Activer Captchas',
'set_security_email_expire' => 'Validation du mot de passe, expiration.',
'set_security_force_login' => 'Forc&eacute; les invit&eacute;s &agrave; connecter imm&eacute;diatement',
'set_security_password_expire' => 'Validation du mot de passe, expiration.',
'set_security_registration' => 'Autoriser les nouveaux utilisateurs',
'set_security_session_ip_check' => 'V&eacute;rifiez l\'adresse IP',
'set_security_session_timeout' => 'Expiration de la session',
'set_security_validation_admin' => 'N&eacute;cessite la validation de administrateur',
'set_security_validation_email' => 'N&eacute;cessite une validation courriel',
'set_security_vcheck_share' => 'Partager les statistics avec ACCORD5',
'set_ticket_attachments' => 'Autoriser les pi&egrave;ces jointes',
'set_ticket_escalate' => 'Permettre d\'escalader',
'set_ticket_mask' => 'Mask Format',
'set_ticket_new_tickets' => 'Permettre les nouveaux billets',
'set_ticket_rating' => 'Permet d\'&eacute;valuer les r&eacute;ponses',
'set_ticket_rte' => 'Activer &eacute;diteur de texte enrichi',
'set_ticket_suggest' => 'Activer KB Suggestions',
'set_ticket_track' => 'Demandes non lus',
'settings' => 'Param&egrave;tres',
'settings_list' => 'Liste des param&egrave;tres',
'staff_email_preferences' => 'personnel pr&eacute;f&eacute;rences de courriel',
'submitter' => 'Envoy&eacute;',
'ticket_column_layout' => 'Gestion des billets disposition des colonnes',
'ticket_email' => 'Billet courriel',
'ticket_preferences' => 'Billet pr&eacute;f&eacute;rences',
'tickets_assigned_to_me' => 'Billets qui me sont assign&eacute;es',
'time_zone' => 'Fuseau horaire',
'unassigned_tickets' => 'Billets non assign&eacute;s',
'user_email' => 'Couriel utilsateur',

);

?>