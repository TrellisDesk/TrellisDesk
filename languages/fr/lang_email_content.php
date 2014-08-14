<?php

/*
#======================================================
|    | Trellis Desk Language File
|    | lang_email_content.php
#======================================================
*/

$lang['header'] = <<<EOF
Bonjour {USER_NAME},
EOF;

$lang['header_html'] = <<<EOF
&lt;p&gt;Bonjour {USER_NAME},&lt;/p&gt;
EOF;

$lang['footer'] = <<<EOF
Cordialement,



L&#039;&eacute;quipe {TD_NAME} .

{TD_URL}
EOF;

$lang['footer_html'] = <<<EOF
&lt;p&gt;Cordialement,&lt;/p&gt;
&lt;p&gt;L&#039;&amp;eacute;quipe {TD_NAME} .&lt;br /&gt;&lt;a href=&quot;{TD_URL}&quot;&gt;{TD_URL}&lt;/a&gt;&lt;/p&gt;
EOF;

$lang['user_new_val_email_sub'] = "Verify Your Email";

$lang['user_new_val_email'] = <<<EOF
Bienvenue &agrave; {TD_NAME}.  Vous avez cr&eacute;&eacute; un nouveau compte utilisateur sur notre syst&egrave;me de Help Desk. Pour activer votre compte, vous devez v&eacute;rifier cette adresse courriel en cliquant sur le lien de v&eacute;rification ci-dessous.



---------------------------



Lien de v&eacute;rification: {LINK}



---------------------------



Une fois que vous avez v&eacute;rifi&eacute; cette adresse e-mail, vous serez capable de vous connecter.
EOF;

$lang['user_new_val_email_html'] = <<<EOF
&lt;p&gt;Bienvenue &amp;agrave; {TD_NAME}. &amp;nbsp;&lt;span class=&quot;hps&quot;&gt;Vous avez cr&amp;eacute;&amp;eacute; un&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;nouveau compte utilisateur&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;sur notre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;syst&amp;egrave;me de Help Desk&lt;/span&gt;. &lt;span class=&quot;hps&quot;&gt;Pour&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;activer votre compte&lt;/span&gt;, &lt;span class=&quot;hps&quot;&gt;vous devez v&amp;eacute;rifier&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;cette adresse&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;courriel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;en cliquant sur le&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;lien de v&amp;eacute;rification&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;ci-dessous.&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Lien de v&amp;eacute;rification: &lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Une fois que vous&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;avez v&amp;eacute;rifi&amp;eacute;&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;cette adresse&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;e-mail&lt;/span&gt;, &lt;span class=&quot;hps&quot;&gt;vous serez&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;capable de vous connecter&lt;/span&gt;.&lt;/p&gt;
EOF;

$lang['user_new_val_admin_sub'] = "New User Account Pending";

$lang['user_new_val_admin'] = <<<EOF
Bienvenue &agrave; {TD_NAME}.. Vous avez cr&eacute;&eacute; un nouveau compte utilisateur sur notre syst&egrave;me de Help Desk. Avant de pouvoir commencer &agrave; utiliser votre compte, un administrateur doit approuver votre compte manuellement. Vous recevrez un courriel lorsque votre compte est approuv&eacute;.
EOF;

$lang['user_new_val_admin_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Bienvenue &amp;agrave;&lt;/span&gt;&amp;nbsp;{TD_NAME}.. &lt;span class=&quot;hps&quot;&gt;Vous avez cr&amp;eacute;&amp;eacute; un&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;nouveau compte utilisateur&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;sur notre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;syst&amp;egrave;me de Help Desk&lt;/span&gt;. &lt;span class=&quot;hps&quot;&gt;Avant de pouvoir&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;commencer &amp;agrave; utiliser votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;compte&lt;/span&gt;, un administrateur &lt;span class=&quot;hps&quot;&gt;doit approuver votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;compte manuellement&lt;/span&gt;. &lt;span class=&quot;hps&quot;&gt;Vous recevrez&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;un courriel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;lorsque votre compte&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;est approuv&amp;eacute;&lt;/span&gt;.&lt;/p&gt;
EOF;

$lang['user_new_val_admin_staff_sub'] = "New Registration: {UNAME}";

$lang['user_new_val_admin_staff'] = <<<EOF
Un nouvel utilisateur s&#039;est enregistr&eacute;, il est en attente d&#039;approbation.

---------------------------

Utilisateur: {UNAME}
Courriel: {UEMAIL}

---------------------------

Vous pouvez g&eacute;rer les utilisateurs en attente d&#039;approbation via ce lien: {LINK}
EOF;

$lang['user_new_val_admin_staff_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Un nouvel utilisateur&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;s&#039;est enregistr&amp;eacute;,&lt;/span&gt;&lt;span class=&quot;hps&quot;&gt;&amp;nbsp;il est&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;en attente d&#039;approbation&lt;/span&gt;.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Utilisateur: {UNAME}&lt;br /&gt;&lt;span class=&quot;hps&quot;&gt;Courriel:&lt;/span&gt;: {UEMAIL}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous pouvez&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;g&amp;eacute;rer les utilisateurs&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;en attente d&#039;approbation&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;via ce lien:&lt;/span&gt; &lt;span class=&quot;hps atn&quot;&gt;{&lt;/span&gt;LINK}&lt;/p&gt;
EOF;

$lang['user_new_val_both_sub'] = "Verify Your Email";

$lang['user_new_val_both'] = <<<EOF
Bienvenue {TD_NAME}. Vous avez cr&eacute;&eacute; un nouveau compte utilisateur sur notre syst&egrave;me de Help Desk. Pour activer votre compte, vous devez v&eacute;rifier cette adresse courriel en cliquant sur le lien de validation ci-dessous. En outre, un administrateur doit &eacute;galement approuver manuellement votre compte.

---------------------------

Lien de v&eacute;rification: {LINK}

---------------------------

Vous recevrez un courriel quand un administrateur approuve votre compte.
EOF;

$lang['user_new_val_both_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Bienvenue&amp;nbsp;&lt;/span&gt;{TD_NAME}. &lt;span class=&quot;hps&quot;&gt;Vous avez cr&amp;eacute;&amp;eacute; un&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;nouveau compte utilisateur&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;sur notre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;syst&amp;egrave;me de Help Desk&lt;/span&gt;. &lt;span class=&quot;hps&quot;&gt;Pour&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;activer votre compte&lt;/span&gt;, &lt;span class=&quot;hps&quot;&gt;vous devez v&amp;eacute;rifier&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;cette adresse&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;courriel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;en cliquant sur le&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;lien de validation&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;ci-dessous.&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;En outre&lt;/span&gt;, un administrateur doit &lt;span class=&quot;hps&quot;&gt;&amp;eacute;galement approuver&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;manuellement votre compte&lt;/span&gt;.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p class=&quot;MsoNormal&quot;&gt;&amp;nbsp;&lt;/p&gt;
&lt;p&gt;&lt;span style=&quot;font-family: Arial, sans-serif; font-size: 10pt; line-height: 107%;&quot;&gt;Lien de v&amp;eacute;rification&lt;/span&gt;: &lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous recevrez&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;un courriel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;quand&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;un&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;administrateur approuve&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;votre compte&lt;/span&gt;.&lt;/p&gt;
EOF;

$lang['user_almost_activated_sub'] = "Awaiting Email Verification";

$lang['user_almost_activated'] = <<<EOF
Votre compte utilisateur a &eacute;t&eacute; approuv&eacute; par un administrateur. Mais avant que vous puissiez commencer &agrave; utiliser votre compte, vous devez d&#039;abord cliquer sur le lien de v&eacute;rification &eacute;lectronique dans le courriel qui a &eacute;t&eacute; pr&eacute;c&eacute;demment envoy&eacute; &agrave; votre adresse courriel.
EOF;

$lang['user_almost_activated_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Votre compte&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;utilisateur&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;a &amp;eacute;t&amp;eacute; approuv&amp;eacute;&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;par un administrateur&lt;/span&gt;. &lt;span class=&quot;hps&quot;&gt;Mais&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;avant que vous puissiez&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;commencer &amp;agrave; utiliser votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;compte, vous devez&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;d&#039;abord cliquer sur&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;le lien de v&amp;eacute;rification&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;&amp;eacute;lectronique&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;dans&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;le courriel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;qui a &amp;eacute;t&amp;eacute;&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;pr&amp;eacute;c&amp;eacute;demment&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;envoy&amp;eacute; &amp;agrave; votre&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;adresse courriel&lt;/span&gt;.&lt;/p&gt;
EOF;

$lang['user_almost_approved_sub'] = "Awaiting Admin Approval";

$lang['user_almost_approved'] = <<<EOF
Votre adresse courriel a &eacute;t&eacute; v&eacute;rifi&eacute;e. Mais avant que vous puissiez commencer &agrave; utiliser votre compte, un administrateur doit approuver votre compte d&#039;utilisateur manuellement. Vous recevrez un courriel lorsque votre compte est approuv&eacute;.
EOF;

$lang['user_almost_approved_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Votre&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;adresse courriel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;a &amp;eacute;t&amp;eacute; v&amp;eacute;rifi&amp;eacute;e.&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;Mais&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;avant que vous puissiez&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;commencer &amp;agrave; utiliser votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;compte&lt;/span&gt;, un administrateur &lt;span class=&quot;hps&quot;&gt;doit approuver votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;compte d&#039;utilisateur&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;manuellement.&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;Vous recevrez&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;un courriel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;lorsque votre compte&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;est approuv&amp;eacute;&lt;/span&gt;.&lt;/p&gt;
EOF;

$lang['user_activated_sub'] = "Email Verified";

$lang['user_activated'] = <<<EOF
Votre adresse courriel a &eacute;t&eacute; v&eacute;rifi&eacute;e et que votre compte d&#039;utilisateur a &eacute;t&eacute; activ&eacute;. Vous pouvez maintenant vous connecter.
EOF;

$lang['user_activated_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Votre&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;adresse courriel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;a &amp;eacute;t&amp;eacute; v&amp;eacute;rifi&amp;eacute;e&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;et que votre compte&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;d&#039;utilisateur&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;a &amp;eacute;t&amp;eacute; activ&amp;eacute;&lt;/span&gt;. &lt;span class=&quot;hps&quot;&gt;Vous pouvez&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;maintenant vous connecter&lt;/span&gt;.&lt;/p&gt;
EOF;

$lang['user_approved_sub'] = "Account Approved";

$lang['user_approved'] = <<<EOF
Votre compte utilisateur a &eacute;t&eacute; approuv&eacute; par un administrateur. Vous pouvez maintenant vous connecter.
EOF;

$lang['user_approved_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Votre compte&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;utilisateur&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;a &amp;eacute;t&amp;eacute; approuv&amp;eacute;&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;par un administrateur&lt;/span&gt;. &lt;span class=&quot;hps&quot;&gt;Vous pouvez&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;maintenant vous connecter.&lt;/span&gt;&lt;/p&gt;
EOF;

$lang['change_email_val_sub'] = "Verify Your Email";

$lang['change_email_val'] = <<<EOF
Vous avez demand&eacute; pour que votre adresse courriel soit modifi&eacute;e par cette adresse. Pour mettre &agrave; jour votre courriel, vous devez v&eacute;rifier cette adresse en cliquant sur le lien de v&eacute;rification ci-dessous.

---------------------------

Lien de v&eacute;rification: {LINK}

---------------------------
EOF;

$lang['change_email_val_html'] = <<<EOF
&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span class=&quot;hps&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Arial&amp;quot;,&amp;quot;sans-serif&amp;quot;; color: #222222; mso-ansi-language: FR;&quot; lang=&quot;FR&quot;&gt;Vous avez demand&amp;eacute;&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-family: &amp;quot;Arial&amp;quot;,&amp;quot;sans-serif&amp;quot;; color: #222222; mso-ansi-language: FR;&quot; lang=&quot;FR&quot;&gt; p&lt;span class=&quot;hps&quot;&gt;our que&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;votre adresse courriel soit modifi&amp;eacute;e par cette adresse&lt;/span&gt;. &lt;span class=&quot;hps&quot;&gt;Pour mettre &amp;agrave; jour&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;votre courriel&lt;/span&gt;, &lt;span class=&quot;hps&quot;&gt;vous devez v&amp;eacute;rifier&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;cette adresse&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;en cliquant sur le&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;lien de v&amp;eacute;rification&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;ci-dessous.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p class=&quot;MsoNormal&quot;&gt;&amp;nbsp;&lt;/p&gt;
&lt;p&gt;&lt;span style=&quot;font-family: Arial, sans-serif; font-size: 10pt; line-height: 107%;&quot;&gt;Lien de v&amp;eacute;rification&lt;/span&gt;: &lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
EOF;

$lang['reset_pass_val_sub'] = "Reset Password";

$lang['reset_pass_val'] = <<<EOF
Vous avez demand&eacute; de r&eacute;initialiser votre mot de passe &agrave; {TD_NAME}. Pour r&eacute;initialiser votre mot de passe, cliquez sur le lien de v&eacute;rification ci-dessous. Si vous n&#039;avez pas demand&eacute; de r&eacute;initialiser votre mot de passe, s&#039;il vous pla&icirc;t ne pas tenir compte de ce courriel.



---------------------------

Lien de v&eacute;rification: {LINK}

---------------------------
EOF;

$lang['reset_pass_val_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous avez demand&amp;eacute;&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;de r&amp;eacute;initialiser votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;mot de passe &amp;agrave;&lt;/span&gt; &lt;span class=&quot;hps atn&quot;&gt;{&lt;/span&gt;TD_NAME}. &lt;span class=&quot;hps&quot;&gt;Pour r&amp;eacute;initialiser votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;mot de passe,&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;cliquez sur le lien&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;de v&amp;eacute;rification&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;ci-dessous.&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;Si&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;vous n&#039;avez pas demand&amp;eacute;&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;de r&amp;eacute;initialiser&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;votre mot de passe&lt;/span&gt;, s&#039;il vous pla&amp;icirc;t &lt;span class=&quot;hps&quot;&gt;ne pas tenir compte&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;de ce&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;courriel&lt;/span&gt;.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p class=&quot;MsoNormal&quot;&gt;&amp;nbsp;&lt;/p&gt;
&lt;p&gt;&lt;span style=&quot;font-family: Arial, sans-serif; font-size: 10pt; line-height: 107%;&quot;&gt;Lien de v&amp;eacute;rification&lt;/span&gt;: &lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
EOF;

$lang['ticket_new_sub'] = "Ticket ID #{TICKET_ID}";

$lang['ticket_new'] = <<<EOF
Vous avez pr&eacute;sent&eacute; un nouveau billet. Notre personnel examinera votre billet prochainement et r&eacute;pondra en cons&eacute;quence.

---------------------------

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

Vous pouvez afficher votre billet via ce lien: {LINK}
EOF;

$lang['ticket_new_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous avez&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;pr&amp;eacute;sent&amp;eacute;&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;un nouveau billet&lt;/span&gt;. &lt;span class=&quot;hps&quot;&gt;Notre personnel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;examinera votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;prochainement&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;et&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;r&amp;eacute;pondra&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;en cons&amp;eacute;quence.&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt;Sujet: {SUBJECT}&lt;br /&gt;D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt;Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous pouvez afficher votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;via ce lien:&lt;/span&gt; &lt;span class=&quot;hps atn&quot;&gt;{&lt;/span&gt;LINK}&lt;/p&gt;
EOF;

$lang['ticket_new_behalf_sub'] = "Ticket ID #{TICKET_ID}";

$lang['ticket_new_behalf'] = <<<EOF
Un nouveau billet est soumise en votre nom. Notre personnel examinera votre billet prochainement et r&eacute;pondra en cons&eacute;quence.

---------------------------

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

{MESSAGE}

---------------------------

Vous pouvez afficher votre billet via ce lien: {LINK}
EOF;

$lang['ticket_new_behalf_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Un nouveau&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;est&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;soumise en&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;votre nom.&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;Notre personnel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;examinera votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;prochainement&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;et&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;r&amp;eacute;pondra&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;en cons&amp;eacute;quence.&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt;Sujet: {SUBJECT}&lt;br /&gt;D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt;Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{MESSAGE_HTML}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous pouvez afficher votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;via ce lien:&lt;/span&gt; &lt;span class=&quot;hps atn&quot;&gt;{&lt;/span&gt;LINK}&lt;/p&gt;
EOF;

$lang['ticket_new_staff_sub'] = "Ticket ID #{TICKET_ID}";

$lang['ticket_new_staff'] = <<<EOF
Un nouveau billet a &eacute;t&eacute; cr&eacute;&eacute;.

---------------------------

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
Utilisateur: {UNAME}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}


---------------------------

{MESSAGE}

---------------------------

Vous pouvez g&eacute;rer ce billet via ce lien: {LINK}
EOF;

$lang['ticket_new_staff_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Un nouveau&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;a &amp;eacute;t&amp;eacute; cr&amp;eacute;&amp;eacute;&lt;/span&gt;.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt;Sujet: {SUBJECT}&lt;br /&gt;Utilisateur: {UNAME}&lt;br /&gt;D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt;Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{MESSAGE_HTML}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous pouvez g&amp;eacute;rer&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;ce&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;via ce lien:&lt;/span&gt; &lt;span class=&quot;hps atn&quot;&gt;{&lt;/span&gt;LINK}&lt;/p&gt;
EOF;

$lang['ticket_new_guest_sub'] = "Ticket ID #{TICKET_ID}";

$lang['ticket_new_guest'] = <<<EOF
Vous avez pr&eacute;sent&eacute; un billet en &eacute;tant visiteur. Notre personnel examinera votre billet prochainement et r&eacute;pondra en cons&eacute;quence..

---------------------------

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

Cl&eacute; du billet: {KEY}

---------------------------

Vous pouvez afficher votre billet via ce lien: {LINK}
EOF;

$lang['ticket_new_guest_html'] = <<<EOF
&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span class=&quot;hps&quot;&gt;&lt;span style=&quot;font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;&quot;&gt;Vous avez&lt;/span&gt;&lt;/span&gt;&lt;span&gt;&lt;span style=&quot;font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;hps&quot;&gt;&lt;span style=&quot;font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;&quot;&gt;pr&amp;eacute;sent&amp;eacute; un billet en &amp;eacute;tant visiteur&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;&quot;&gt;.&lt;span&gt;&amp;nbsp;&lt;/span&gt;&lt;span class=&quot;hps&quot;&gt;Notre personnel&lt;/span&gt;&lt;span&gt;&amp;nbsp;&lt;/span&gt;&lt;span class=&quot;hps&quot;&gt;examinera votre&lt;/span&gt;&lt;span&gt;&amp;nbsp;&lt;/span&gt;&lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt;&lt;span&gt;&amp;nbsp;&lt;/span&gt;&lt;span class=&quot;hps&quot;&gt;prochainement&lt;/span&gt;&lt;span&gt;&amp;nbsp;&lt;/span&gt;&lt;span class=&quot;hps&quot;&gt;et&lt;/span&gt;&lt;span&gt;&amp;nbsp;&lt;/span&gt;&lt;span class=&quot;hps&quot;&gt;r&amp;eacute;pondra&lt;/span&gt;&lt;span&gt;&amp;nbsp;&lt;/span&gt;&lt;span class=&quot;hps&quot;&gt;en cons&amp;eacute;quence.&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;hps&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Arial&amp;quot;,&amp;quot;sans-serif&amp;quot;; color: #222222; mso-ansi-language: FR;&quot; lang=&quot;FR&quot;&gt;.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt;Sujet: {SUBJECT}&lt;br /&gt;D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt;Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;Cl&amp;eacute; du billet: {KEY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous pouvez afficher votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;via ce lien:&lt;/span&gt; &lt;span class=&quot;hps atn&quot;&gt;{&lt;/span&gt;LINK}&lt;/p&gt;
EOF;

$lang['ticket_new_guest_behalf_sub'] = "Ticket ID #{TICKET_ID}";

$lang['ticket_new_guest_behalf'] = <<<EOF
Un nouveau billet a &eacute;t&eacute; soumis en votre nom. Notre personnel examinera votre billet prochainement et r&eacute;pondra en cons&eacute;quence.

---------------------------

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

Cl&eacute; du billet: {KEY}

---------------------------

{MESSAGE}

---------------------------

Vous pouvez afficher votre billet via ce lien: {LINK}
EOF;

$lang['ticket_new_guest_behalf_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Un nouveau billet a &amp;eacute;t&amp;eacute; soumis&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;en&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;votre nom.&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;Notre personnel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;examinera votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;prochainement&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;et&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;r&amp;eacute;pondra&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;en cons&amp;eacute;quence.&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt;Sujet: {SUBJECT}&lt;br /&gt;D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt;Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;Cl&amp;eacute; du billet: {KEY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{MESSAGE_HTML}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous pouvez afficher votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;via ce lien:&lt;/span&gt; &lt;span class=&quot;hps atn&quot;&gt;{&lt;/span&gt;LINK}&lt;/p&gt;
EOF;

$lang['ticket_new_guest_staff_sub'] = "Ticket ID #{TICKET_ID}";

$lang['ticket_new_guest_staff'] = <<<EOF
A new guest ticket has been created.

---------------------------

Ticket ID: {TICKET_ID}
Subject: {SUBJECT}
User: {UNAME}
Department: {DEPARTMENT}
Priority: {PRIORITY}

---------------------------

{MESSAGE}

---------------------------

You can manage this ticket using this link: {LINK}
EOF;

$lang['ticket_new_guest_staff_html'] = <<<EOF
&lt;p&gt;A new guest ticket has been created.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Ticket ID: {TICKET_ID}&lt;br /&gt;Subject: {SUBJECT}&lt;br /&gt;User: {UNAME}&lt;br /&gt;Department: {DEPARTMENT}&lt;br /&gt;Priority: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{MESSAGE}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;You can manage this ticket using this link: &lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
EOF;

$lang['ticket_reply_sub'] = "Ticket ID #{TICKET_ID} Reply";

$lang['ticket_reply'] = <<<EOF
Une r&eacute;ponse a &eacute;t&eacute; faite &agrave; votre billet

---------------------------

{REPLY}

---------------------------

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

Vous pouvez afficher votre billet via ce lien: {LINK}
EOF;

$lang['ticket_reply_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Une r&amp;eacute;ponse&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;a &amp;eacute;t&amp;eacute; faite&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;&amp;agrave; votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{REPLY_HTML}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt;Sujet: {SUBJECT}&lt;br /&gt;D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt;Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous pouvez afficher votre&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;via ce lien:&lt;/span&gt; &lt;span class=&quot;hps atn&quot;&gt;{&lt;/span&gt;LINK}&lt;/p&gt;
EOF;

$lang['ticket_reply_staff_sub'] = "Ticket ID #{TICKET_ID} Reply";

$lang['ticket_reply_staff'] = <<<EOF
Une r&eacute;ponse a &eacute;t&eacute; apport&eacute;e &agrave; un billet.

---------------------------

{REPLY}

---------------------------

R&eacute;ponse de : {ACTION_USER}

Billet ID: {TICKET_ID}
Sujec: {SUBJECT}
Utilisateur: {UNAME}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

Vous pouvez g&eacute;rer ce billet via ce lien: {LINK}
EOF;

$lang['ticket_reply_staff_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Une r&amp;eacute;ponse&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;a&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;&amp;eacute;t&amp;eacute; apport&amp;eacute;e &amp;agrave; un&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt;.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{REPLY_HTML}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;R&amp;eacute;ponse de: {ACTION_USER}&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt;Sujet: {SUBJECT}&lt;br /&gt;Utilisateur: {UNAME}&lt;br /&gt;D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt;Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous pouvez g&amp;eacute;rer&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;ce&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;via ce lien:&lt;/span&gt; &lt;span class=&quot;hps atn&quot;&gt;{&lt;/span&gt;LINK}&lt;/p&gt;
EOF;

$lang['ticket_assign_staff_sub'] = "Ticket ID #{TICKET_ID} Assigned";

$lang['ticket_assign_staff'] = <<<EOF
Vous a &eacute;t&eacute; assign&eacute; &agrave; un billet.

---------------------------

Assign&eacute; par: {ACTION_USER}

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
Utilisateur: {UNAME}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

{MESSAGE}

---------------------------

Vous pouvez g&eacute;rer ce billet via ce lien: {LINK}
EOF;

$lang['ticket_assign_staff_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;a &amp;eacute;t&amp;eacute; assign&amp;eacute; &amp;agrave;&lt;/span&gt;&amp;nbsp;&lt;span class=&quot;hps&quot;&gt;un billet&lt;/span&gt;.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Assign&amp;eacute; par: {ACTION_USER}&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt; Sujet: {SUBJECT}&lt;br /&gt; Utillisateur: {UNAME}&lt;br /&gt; D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt; Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{MESSAGE_HTML}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous pouvez g&amp;eacute;rer&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;ce&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;billet&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;via ce lien:&lt;/span&gt; &lt;span class=&quot;hps atn&quot;&gt;{&lt;/span&gt;LINK}&lt;/p&gt;
EOF;

$lang['ticket_escalate_sub'] = "Ticket ID #{TICKET_ID} Escalated";

$lang['ticket_escalate'] = <<<EOF
Votre billet a &eacute;t&eacute; escalad&eacute;. Nos gestionnaires passeront en revue votre billet dans peu de temps.

---------------------------

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

Vous pouvez afficher votre billet via ce lien: {LINK}
EOF;

$lang['ticket_escalate_html'] = <<<EOF
&lt;p&gt;Votre billet a &amp;eacute;t&amp;eacute; escalad&amp;eacute;. Nos gestionnaires passeront en revue votre billet dans peu de temps.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt;Sujet: {SUBJECT}&lt;br /&gt;D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt;Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Vous pouvez afficher votre billet via ce lien: {LINK}&lt;/p&gt;
EOF;

$lang['ticket_escalate_staff_sub'] = "Ticket ID #{TICKET_ID} Escalated";

$lang['ticket_escalate_staff'] = <<<EOF
Un billet est escalad&eacute;

---------------------------

Escalad&eacute; par: {ACTION_USER}

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
Utilisateur: {UNAME}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

{MESSAGE}

---------------------------

Vous pouvez g&eacute;rer ce billet via ce lien: {LINK}
EOF;

$lang['ticket_escalate_staff_html'] = <<<EOF
&lt;p&gt;Un billet est escalad&amp;eacute;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Escalad&amp;eacute; par: {ACTION_USER}&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt; Sujet: {SUBJECT}&lt;br /&gt; Utilisateur: {UNAME}&lt;br /&gt; D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt; Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{MESSAGE}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Vous pouvez g&amp;eacute;rer ce billet via ce lien:&amp;nbsp;&lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
EOF;

$lang['ticket_hold_sub'] = "Ticket ID #{TICKET_ID} On Hold";

$lang['ticket_hold'] = <<<EOF
Votre billet a &eacute;t&eacute; mis en attente

---------------------------

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

Vous pouvez afficher votre billet via ce lien: {LINK}
EOF;

$lang['ticket_hold_html'] = <<<EOF
&lt;p&gt;Votre billet a &amp;eacute;t&amp;eacute; mis en attente&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt;Sujet: {SUBJECT}&lt;br /&gt;D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt;Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Vous pouvez afficher votre billet via ce lien: &lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
EOF;

$lang['ticket_hold_staff_sub'] = "Ticket ID #{TICKET_ID} On Hold";

$lang['ticket_hold_staff'] = <<<EOF
Un billet a &eacute;t&eacute; mis en attente

---------------------------

Mis en attente par: {ACTION_USER}

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
Utilisateur: {UNAME}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

Vous pouvez g&eacute;rer ce billet via ce lien: {LINK}
EOF;

$lang['ticket_hold_staff_html'] = <<<EOF
&lt;p&gt;Un billet a &amp;eacute;t&amp;eacute; mis en attente&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Mis en attente par: {ACTION_USER}&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt; Sujet: {SUBJECT}&lt;br /&gt; Utilisateur: {UNAME}&lt;br /&gt; D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt; Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Vous pouvez g&amp;eacute;rer ce billet via ce lien:&amp;nbsp;&lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
EOF;

$lang['ticket_move_sub'] = "Ticket ID #{TICKET_ID} Moved";

$lang['ticket_move'] = <<<EOF
Votre billet a &eacute;t&eacute; d&eacute;plac&eacute; dans le d&eacute;partement: {NEW_DEPART}

---------------------------

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
Ancien d&eacute;partement: {OLD_DEPART}
Nouveau d&eacute;partement:: {NEW_DEPART}
Priorit&eacute;: {PRIORITY}

---------------------------

Vous pouvez afficher votre billet via ce lien:  {LINK}
EOF;

$lang['ticket_move_html'] = <<<EOF
&lt;p&gt;Votre billet a &amp;eacute;t&amp;eacute; d&amp;eacute;plac&amp;eacute; dans le d&amp;eacute;partement: {NEW_DEPART}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt; Sujet: {SUBJECT}&lt;br /&gt; Ancien d&amp;eacute;partement: {OLD_DEPART}&lt;br /&gt;Nouveau d&amp;eacute;partement: {NEW_DEPART}&lt;br /&gt; Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Vous pouvez afficher votre billet via ce lien: &amp;nbsp;&lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
EOF;

$lang['ticket_move_to_staff_sub'] = "Ticket ID #{TICKET_ID} Moved";

$lang['ticket_move_to_staff'] = <<<EOF
A ticket has been moved to your department.

---------------------------

Moved By: {ACTION_USER}

Ticket ID: {TICKET_ID}
Subject: {SUBJECT}
User: {UNAME}
Old Department: {OLD_DEPART}
New Department: {NEW_DEPART}
Priority: {PRIORITY}

---------------------------

{MESSAGE}

---------------------------

You can manage this ticket using this link: {LINK}
EOF;

$lang['ticket_move_to_staff_html'] = <<<EOF
&lt;p&gt;A ticket has been moved to your department.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Moved By: {ACTION_USER}&lt;/p&gt;
&lt;p&gt;Ticket ID: {TICKET_ID}&lt;br /&gt; Subject: {SUBJECT}&lt;br /&gt; User: {UNAME}&lt;br /&gt;Old Department: {OLD_DEPART}&lt;br /&gt;New Department: {NEW_DEPART}&lt;br /&gt; Priority: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{MESSAGE_HTML}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;You can manage this ticket using this link: &lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
EOF;

$lang['ticket_move_away_staff_sub'] = "Ticket ID #{TICKET_ID} Moved";

$lang['ticket_move_away_staff'] = <<<EOF
Un billet a &eacute;t&eacute; d&eacute;plac&eacute; votre d&eacute;partement.

---------------------------

D&eacute;plac&eacute; par: {ACTION_USER}

Billet  ID: {TICKET_ID}
Sujet: {SUBJECT}
Utilisateur: {UNAME}
Ancien d&eacute;partement:{OLD_DEPART}
Nouveau d&eacute;partement:{NEW_DEPART}
Priorit&eacute;: {PRIORITY}

---------------------------

{MESSAGE}

---------------------------

Vous pouvez g&eacute;rer ce billet via ce lien:  {LINK}
EOF;

$lang['ticket_move_away_staff_html'] = <<<EOF
&lt;p&gt;Un billet a &amp;eacute;t&amp;eacute; d&amp;eacute;plac&amp;eacute; votre d&amp;eacute;partement.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;D&amp;eacute;plac&amp;eacute; par: {ACTION_USER}&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt; Subject: {SUBJECT}&lt;br /&gt; Utilisateur: {UNAME}&lt;br /&gt;Ancien d&amp;eacute;partement: {OLD_DEPART}&lt;br /&gt;Nouveau d&amp;eacute;partement: {NEW_DEPART}&lt;br /&gt; Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{MESSAGE_HTML}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Vous pouvez g&amp;eacute;rer ce billet via ce lien: &lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
EOF;

$lang['ticket_close_sub'] = "Ticket ID #{TICKET_ID} Closed";

$lang['ticket_close'] = <<<EOF
Votre billet a &eacute;t&eacute; ferm&eacute;.


---------------------------

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

Vous pouvez afficher votre billet via ce lien: {LINK}

S&#039;il y a quelque chose que nous pouvons faire, s&#039;il vous pla&icirc;t soumettre un nouveau billet.
EOF;

$lang['ticket_close_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Votre billet&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;a &amp;eacute;t&amp;eacute; ferm&amp;eacute;.&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt;Sujet: {SUBJECT}&lt;br /&gt;D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt;Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Vous pouvez afficher votre billet via ce lien: {LINK}&lt;/p&gt;
&lt;p&gt;S&#039;il y a quelque chose que nous pouvons faire, s&#039;il vous pla&amp;icirc;t soumettre un nouveau billet.&lt;/p&gt;
EOF;

$lang['ticket_close_staff_sub'] = "Ticket ID #{TICKET_ID} Closed";

$lang['ticket_close_staff'] = <<<EOF
Un billet a &eacute;t&eacute; ferm&eacute;.

---------------------------

Ferm&eacute; par: {ACTION_USER}

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
Utilisateur: {UNAME}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

Vous pouvez g&eacute;rer ce billet via ce lien: {LINK}
EOF;

$lang['ticket_close_staff_html'] = <<<EOF
&lt;p&gt;Un billet a &amp;eacute;t&amp;eacute; ferm&amp;eacute;.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Ferm&amp;eacute; par: {ACTION_USER}&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt; Sujet: {SUBJECT}&lt;br /&gt; Utilisateur: {UNAME}&lt;br /&gt; D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt; Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Vous pouvez g&amp;eacute;rer ce billet via ce lien:: &lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
EOF;

$lang['ticket_reopen_sub'] = "Ticket ID #{TICKET_ID} Reopened";

$lang['ticket_reopen'] = <<<EOF
Votre billet a &eacute;t&eacute; rouvert. Notre personnel examinera votre billet dans peu de temps et r&eacute;pondre en cons&eacute;quence.
---------------------------

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

Vous pouvez afficher votre billet via ce lien: {LINK}
EOF;

$lang['ticket_reopen_html'] = <<<EOF
&lt;p&gt;Votre billet a &amp;eacute;t&amp;eacute; rouvert. Notre personnel examinera votre billet dans peu de temps et r&amp;eacute;pondre en cons&amp;eacute;quence.&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt;Sujet: {SUBJECT}&lt;br /&gt;D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt;Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Vous pouvez afficher votre billet via ce lien: &lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
EOF;

$lang['ticket_reopen_staff_sub'] = "Ticket ID #{TICKET_ID} Reopened";

$lang['ticket_reopen_staff'] = <<<EOF
Un billet a &eacute;t&eacute; rouvert

---------------------------

Rouvert par: {ACTION_USER}

Billet ID: {TICKET_ID}
Sujet: {SUBJECT}
Utilisateur: {UNAME}
D&eacute;partement: {DEPARTMENT}
Priorit&eacute;: {PRIORITY}

---------------------------

{MESSAGE}

---------------------------

Vous pouvez g&eacute;rer ce billet via ce lien: {LINK}
EOF;

$lang['ticket_reopen_staff_html'] = <<<EOF
&lt;p&gt;Un billet a &amp;eacute;t&amp;eacute; rouvert&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Rouvert par: {ACTION_USER}&lt;/p&gt;
&lt;p&gt;Billet ID: {TICKET_ID}&lt;br /&gt; Sujet: {SUBJECT}&lt;br /&gt;Utilisateur: {UNAME}&lt;br /&gt; D&amp;eacute;partement: {DEPARTMENT}&lt;br /&gt; Priorit&amp;eacute;: {PRIORITY}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{MESSAGE_HTML}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;Vous pouvez g&amp;eacute;rer ce billet via ce lien: &lt;a href=&quot;{LINK}&quot;&gt;{LINK}&lt;/a&gt;&lt;/p&gt;
EOF;

$lang['ticket_new_rejected_sub'] = "New Ticket Failed";

$lang['ticket_new_rejected'] = <<<EOF
Nous n&#039;avons pas pu accepter votre courriel et cr&eacute;er un ticket parce que vous n&#039;avez pas la permission de cr&eacute;er des billets dans ce d&eacute;partement. 

Si vous pensez que ce message est une erreur, s&#039;il vous pla&icirc;t contacter un administrateur.
EOF;

$lang['ticket_new_rejected_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Nous n&#039;avons pas pu&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;accepter&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;votre courriel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;et&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;cr&amp;eacute;er un ticket&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;parce que vous&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;n&#039;avez pas la permission&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;de cr&amp;eacute;er&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;des billets&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;dans ce d&amp;eacute;partement&lt;/span&gt;. &lt;br /&gt;&lt;br /&gt;&lt;span class=&quot;hps&quot;&gt;Si&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;vous pensez que ce&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;message est&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;une erreur&lt;/span&gt;, s&#039;il vous pla&amp;icirc;t &lt;span class=&quot;hps&quot;&gt;contacter un administrateur&lt;/span&gt;.&lt;/p&gt;
EOF;

$lang['ticket_reply_rejected_sub'] = "Reply Failed";

$lang['ticket_reply_rejected'] = <<<EOF
Nous n&#039;avons pas pu accepter votre courriel et de cr&eacute;er une r&eacute;ponse parce que vous n&#039;avez pas la permission de r&eacute;pondre &agrave; ce billet 

Si vous pensez que ce message est une erreur, s&#039;il vous pla&icirc;t contacter un administrateur.
EOF;

$lang['ticket_reply_rejected_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Nous n&#039;avons pas pu&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;accepter&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;votre courriel&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;et de cr&amp;eacute;er&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;une r&amp;eacute;ponse&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;parce que vous&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;n&#039;avez pas la permission&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;de r&amp;eacute;pondre &amp;agrave;&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;ce billet&lt;/span&gt;. &lt;br /&gt;&lt;br /&gt;&lt;span class=&quot;hps&quot;&gt;Si&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;vous pensez que ce&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;message est&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;une erreur&lt;/span&gt;, s&#039;il vous pla&amp;icirc;t &lt;span class=&quot;hps&quot;&gt;contacter un administrateur&lt;/span&gt;.&lt;/p&gt;
EOF;

$lang['news_sub'] = "News: {TITLE}";

$lang['news'] = <<<EOF
News Item: {TITLE}

---------------------------

{CONTENT}

---------------------------

Vous avez re&ccedil;u ce courriel parce que vous avez choisi de recevoir les notifications par courriel pour les nouvelles dans votre profil. Si vous souhaitez mettre fin &agrave; ces courriels, se connecter et mettre &agrave; jour vos pr&eacute;f&eacute;rences.
EOF;

$lang['news_html'] = <<<EOF
&lt;p&gt;Nouvelle: {TITLE}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;{CONTENT}&lt;/p&gt;
&lt;p&gt;---------------------------&lt;/p&gt;
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Vous avez re&amp;ccedil;u&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;ce courriel parce que&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;vous avez choisi de&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;recevoir les notifications par&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;courriel pour&lt;/span&gt;&amp;nbsp;les nouvelles&lt;span class=&quot;hps&quot;&gt;&amp;nbsp;dans&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;votre profil&lt;/span&gt;. &lt;span class=&quot;hps&quot;&gt;Si vous souhaitez&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;mettre fin &amp;agrave;&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;ces courriels&lt;/span&gt;, &lt;span class=&quot;hps&quot;&gt;se connecter et&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;mettre &amp;agrave; jour vos&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;pr&amp;eacute;f&amp;eacute;rences&lt;/span&gt;.&lt;/p&gt;
EOF;

$lang['test_sub'] = "Test Email";

$lang['test'] = <<<EOF
Ceci est un message de test &agrave; partir de Trellis Desk. Si vous avez re&ccedil;u ce message, il est probable que vos courriels sortants Trellis Desk fonctionnent.
EOF;

$lang['test_html'] = <<<EOF
&lt;p&gt;&lt;span class=&quot;hps&quot;&gt;Ceci est un message&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;de&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;test &amp;agrave; partir de&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;Trellis&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;Desk.&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;Si vous&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;avez re&amp;ccedil;u ce message&lt;/span&gt;, &lt;span class=&quot;hps&quot;&gt;il est probable que&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;vos courriels&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;sortants&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;Trellis&lt;/span&gt; &lt;span class=&quot;hps&quot;&gt;Desk&lt;/span&gt; &lt;span class=&quot;hps alt-edited&quot;&gt;fonctionnent&lt;/span&gt;.&lt;/p&gt;
EOF;

?>