<?php
 
$array = [];
$array[] = ['key' => 'approve_provider_mail', 'subject' => '{{emailValue($vars, \'provider_name\')}}, seu cadastro foi Aprovado!', 'sample' => '{"provider_name": "Batista"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{emailValue($vars, \'provider_name\')}}, seu cadastro foi Aprovado!</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'provider_name\')}}, voc&ecirc; foi aprovado em nosso sistema! Bem vindo ao {{Settings::findByKey(\'website_title\')}}.</a></span></td></tr></tbody></table></td></tr>
</tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr><td>
<h1 style="text-align: center; font-size: 15.5px;">Ol&aacute; {{ emailValue($vars, \'provider_name\') }}!</h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">A&nbsp; {{Settings::findByKey(\'website_title\')}}&nbsp;lhe parabeniza pela recente inclus&atilde;o ao nosso quadro de motoristas, contribuindo com o aumento da produtividade e lucratividade nos seus neg&oacute;cios. Estamos animados com a sua chegada.</div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">&nbsp;</div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">Aproveitamos a oportunidade para renovar votos de elevada estima e considera&ccedil;&atilde;o.</div>
</td></tr></tbody></table></td></tr> <!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --><!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'decline_provider_mail', 'subject' => '{{trans(\'email.decline_provider_mail\')}}', 'sample' => '{"provider_name": "Batista"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'email.decline_provider_mail\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td>
<td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'date\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr>
<td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'provider_name\')}},</a></span></td></tr></tbody></table></td></tr>
</tbody></table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td>
<table width="100%" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
<tbody><tr><td width="100%">
<p>Algo aconteceu e n&atilde;o pudemos aceitar o seu cadastro em nossa equipe de motoristas {{Settings::findByKey(\'website_title\')}}. Certifique-se de ter preenchido esses requisitos b&aacute;sicos:</p>
<ul>
<li>Ve&iacute;culos a partir do ano 2010</li>
<li>Ve&iacute;culos que possuem 4 portas</li>
<li>Ve&iacute;culos legalizados</li>
<li>Ve&iacute;culos esteticamente em bom estado de conserva&ccedil;&atilde;o</li>
<li>Documentos do motorista corretos</li>
</ul>
<p>Qualquer d&uacute;vida estamos &agrave; disposi&ccedil;&atilde;o.</p>
<p style="text-align: center;"><a href="mailto:{{Settings::getAdminEmail()}}">Equipe {{Settings::findByKey(\'website_title\')}}</a></p>
</td></tr></tbody></table>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"></div>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'new_request', 'subject' => '{{trans(\'email.new_request\')}}', 'sample' => '{"trip_id": "1002"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'email.new_request\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'date\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">Solicita&ccedil;&atilde;o agendadada</a></span></td></tr></tbody></table></td></tr>
</tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr><td>
<h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">Sua viagem foi agendada com sucesso!<br />O c&oacute;digo da sua solicita&ccedil;&atilde;o&nbsp;&eacute;&nbsp;{{ emailValue($vars, \'trip_id\') }}.</div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"><a href="{{emailValue($vars, \'follow_url\')}}" title="Acompanhe">Acompanhe.</a></div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">Para mais informa&ccedil;&otilde;es, entre em contato&nbsp;<br /><a href="mailto:{{Settings::getAdminEmail()}}" title="Equipe {{Settings::findByKey(\'website_title\')}}">{{Settings::findByKey(\'website_title\')}}</a></div>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'provider_new_register', 'subject' => '{{trans(\'email.provider_new_register\')}}', 'sample' => '{"name": "Batista"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class="">
<p><span class="preheader">{{trans(\'email.provider_new_register\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody>
<tr>
<td>&nbsp;</td>
<td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody>
<tr>
<td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'date\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td>
</tr>
<tr>
<td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody>
<tr>
<td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">Bem vindo a {{Settings::findByKey(\'website_title\')}}, {{ emailValue($vars, \'name\') }}</a><a style="color: #545454; outline: none; text-decoration: none;"></a></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<div style="padding: 10px; font-size: 22px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #00addf; text-align: center;"><span style="color: #000000; font-size: 21px;"><strong>Voc&ecirc; se cadastrou na&nbsp;{{Settings::findByKey(\'website_title\')}}<br /></strong></span></div>
<div style="padding: 10px; font-size: 22px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #00addf; text-align: center;"><span style="color: #000000; font-size: 21px;">Para come&ccedil;ar a dirigir na {{Settings::findByKey(\'website_title\')}}, precisamos que voc&ecirc; fa&ccedil;a alguns procedimentos.&nbsp;</span></div>
<div style="padding: 10px; text-align: left;"><span style="font-size: 21px;"><strong>1&ordm; passo</strong><br /></span></div>
<div style="padding: 10px; text-align: left;"><span style="font-size: 21px;">V&aacute; at&eacute; o<span>&nbsp;</span><a href="{{route(\'ProviderTrips\')}}" target="_blank" rel="noopener noreferrer">painel do motorista</a>, entre com o seu email e senha cadastrados.</span></div>
<div style="padding: 10px; text-align: left;"><span style="font-size: 21px;"><strong>2&ordm; passo</strong></span></div>
<div style="padding: 10px; text-align: left;"><span style="font-size: 21px;">Ao logar no sistema, voc&ecirc; deve clicar na aba DOCUMENTOS, para fazer o upload dos documentos necess&aacute;rios no sistema, em cada um dos campos.&nbsp;</span></div>
<div style="padding: 10px; text-align: left;"><span style="font-size: 21px;"><strong>3&ordm; passo</strong><br /></span></div>
<div style="padding: 10px; text-align: left;"><span style="font-size: 21px;">Ap&oacute;s carregar os documentos, faremos a an&aacute;lise do seu cadastro. Voc&ecirc; receber&aacute; um email informativo da nossa an&aacute;lise.&nbsp;</span></div>
<div style="padding: 10px; text-align: center;"><span style="font-size: 21px;"><strong>Lhe damos boas vindas e aguardamos ansiosos pelos seus dados.&nbsp;</strong></span></div>
<div style="padding: 10px; text-align: center;"><a href="mailto:{{Settings::getAdminEmail()}}">Equipe {{Settings::findByKey(\'website_title\')}}</a></div>
</td>
</tr>
<!-- END MAIN CONTENT AREA --></tbody>
</table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
<div class="footer">
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="content-block powered-by">
<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
</td>
</tr>
</tbody>
</table>
</div>
<!-- END FOOTER --></div>
</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</body>
		</html>'];

$array[] = ['key' => 'request_unanswered', 'subject' => '{{trans(\'email.request_unanswered\')}}', 'sample' => '{}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'email.request_unanswered\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td>
<td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'date\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr>
<td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><span>Desculpe-nos o transtorno!</span></span></td></tr></tbody></table></td></tr>
</tbody></table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td>
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="padding: 20px;">
<tbody><tr><td width="100%">
<p>Pedimos desculpas pelo transtorno, estamos temporariamente indispon&iacute;veis, trabalhando para melhor atend&ecirc;-lo.&nbsp;</p>
<p>Em breve retornaremos, contamos com a sua compreens&atilde;o.</p>
<p style="text-align: center;"><a href="mailto:{{Settings::getAdminEmail()}}">Equipe {{Settings::findByKey(\'website_title\')}}</a></p>
</td></tr></tbody></table>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"></div>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'user_new_register', 'subject' => '{{trans(\'email.user_new_register\')}}', 'sample' => '{"name": "Olegário"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'email.user_new_register\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'date\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><span>Bem vindo a {{Settings::findByKey(\'website_title\')}}, {{ emailValue($vars, \'name\') }}</span></span></td></tr></tbody></table></td></tr>
</tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr><td>
<h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">
<p><strong>Agradecemos seu cadastro na {{Settings::findByKey(\'website_title\')}}! Estamos muito felizes com seu cadastro! Temos um servi&ccedil;o de qualidade e prezamos principalmente por sua seguran&ccedil;a.</strong>&nbsp;</p>
<p style="text-align: left;">A nossa equipe est&aacute; a disposi&ccedil;&atilde;o para lhe ajudar no que for preciso.&nbsp;</p>
<p style="text-align: center;"><a href="mailto:{{Settings::getAdminEmail()}}">Equipe {{Settings::findByKey(\'website_title\')}}</a></p>
</div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">&nbsp;</div>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'user_request_accept_by_driver', 'subject' => '{{trans(\'email.user_request_accept_by_driver\')}}', 'sample' => '{"client_name": "Olegário", "provider_name": "Batista", "provider_contact": "(12) 98723-1234", "provider_licence": "ABC 1235", "provider_car_model": "Celta"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'email.user_request_accept_by_driver\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'date\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><span>Sua solicita&ccedil;&atilde;o foi atendida, prepare-se para embarcar</span></span></td></tr></tbody></table></td></tr>
</tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td> <h1 style="text-align: center; font-size: 15.5px;"></h1>
<table width="660" style="padding: 20px;">
<tbody><tr><td width="100%">
<p>Ol&aacute;&nbsp;{{ emailValue($vars, \'client_name\') }},</p>
<p>Sua corrida foi aceita, prepare-se para o embarque. Abaixo, seguem os dados da sua solicita&ccedil;&atilde;o:</p>
</td></tr><tr> <td width="100%"> <table width="100%"> <tbody><tr><td width="20%">
<p style="padding: 5px 10px; font-size: 12px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454;">Prestador:</p>
</td> <td width="50%">
<p style="padding: 5px 10px; font-size: 12px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454;">{{ emailValue($vars, \'provider_name\') }}</p>
</td></tr><tr> <td width="20%">
<p style="padding: 5px 10px; font-size: 12px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454;">Telefone:</p>
</td> <td width="50%">
<p style="padding: 5px 10px; font-size: 12px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454;">{{ emailValue($vars, \'provider_contact\') }}</p>
</td></tr><tr> <td width="20%">
<p style="padding: 5px 10px; font-size: 12px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454;">Modelo do Carro</p>
</td> <td width="50%">
<p style="padding: 5px 10px; font-size: 12px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454;">{{ emailValue($vars, \'provider_car_model\') }}</p>
</td></tr><tr> <td width="20%">
<p style="padding: 5px 10px; font-size: 12px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454;">Placa</p>
</td> <td width="50%">
<p style="padding: 5px 10px; font-size: 12px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454;">{{ emailValue($vars, \'provider_licence\') }}</p>
</td></tr></tbody></table></td></tr> </tbody></table> </td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'layout', 'subject' => 'email.layout', 'sample' => '{}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'email.layout\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td>
<td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr>
<td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;"></td></tr></tbody></table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td></td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'reset_password', 'subject' => '{{trans(\'email.reset_password\')}}', 'sample' => '{"change_link": "http://localhost:8000"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'email.reset_password\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td>
<td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{ trans(\'email.new_password\') }}</a></span></td></tr></tbody></table></td></tr>
</tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr><td>
<h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"> {{ trans(\'email.reset_password_request\')}} <br /><br /> Clique no link abaixo para escolher sua nova senha <br /> <a href="{{ emailValue($vars, \'change_link\') }}">{{ emailValue($vars, \'change_link\') }} </a><br /><br /> {{ trans(\'email.team\') }} {{env(\'APP_NAME\')}} </div>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'invoice', 'subject' => '{{trans(\'email.invoice\')}}', 'sample' => '{"time": "2", "total": "1232", "distance": "4", "end_time": "18:00", "min_cost": "3,00", "dist_cost": "6,50", "ref_bonus": "0,00", "time_cost": "1,00", "type_name": "Caminhão", "base_price": "4,50", "start_time": "12:00", "end_address": "Av. Brasil", "promo_bonus": "0,00", "provider_name": "Batista da Silva", "start_address": "Rua dos Bobos, 0", "provider_picture": "http://localhost:8000", "￼￼￼map_url": "http://localhost:8000"}',
'content' => '<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div style="margin: 0px auto; width: 90%; padding: 15px; background-color: #ffffff; color: #545454;"><!-- logo -->
<div><a style="text-decoration: none;" href="{{ Settings::getProviderUrl() }}"><img src="{{emailValue($vars, \'logo\')}}" width="200" height="100" /></a><br /><!-- data -->
<div style="float: right; padding: 15px 0px 0px 0px;">{{date(\'d M Y\')}}</div>
<!-- clear floats-->
<div style="clear: both;">&nbsp;</div>
</div>
<div style="background-color: #ffffff;">
<div style="background-color: #f3f3f3; border-bottom: 2px solid #c3c3c3; color: #000000;">
<p style="float: left; margin: 0px; font-size: 2em; font-weight: bold; padding: 10px 0.6em;">{{ currency_format(emailValue($vars, \'total\')) }}</p>
<p style="color: #999999; float: right; margin: 0px; font-size: 16px; font-weight: normal; padding: 18px 0.6em 0px 0px;">{{trans(\'email.Thanks_for_choosing\')}} <!--?= Config::get(\'app.website_title\') ?-->,{{ emailValue($vars, \'provider_name\') }}</p>
<div style="clear: both;">&nbsp;</div>
</div>
<div style="padding: 1.5em; color: #000000;">
<div style="background-color: #f3f3f3; border: 2px solid #c3c3c3; border-radius: 5px; width: 45%; float: left;"><img style="border-bottom: 2px solid #c3c3c3; width: 100%; margin-bottom: 3%;" src="{{ emailValue($vars, \'map_url\') }}" alt="map location" />
<div style="padding: 0px 0px 0px 20px; z-index: 1000;"><img style="width: 18px; padding: 0px; margin: 10px 0px 0px 0px;" src="http://d1a3f4spazzrp4.cloudfront.net/receipt-new/marker-start@2x.png" alt="point icon green" /> <span style="font-size: 20px; font-weight: bold; position: absolute; margin: 5px 0px 0px 5px;">{{ emailValue($vars, \'start_time\') }}</span>
<p style="padding: 0px 0px 0px 25px; margin: 0px; font-size: 14px; color: #999999;">{{ emailValue($vars, \'start_address\') }}</p>
</div>
<div style="padding: 0px 0px 0px 20px; z-index: 1000; border-bottom: 2px solid #c3c3c3; padding-bottom: 15px;"><img style="width: 18px; padding: 0px; margin: 10px 0px 0px 0px;" src="http://d1a3f4spazzrp4.cloudfront.net/receipt-new/marker-finish@2x.png" alt="point icon green" /> <span style="font-size: 20px; font-weight: bold; position: absolute; margin: 6px 0px 0px 5px;">{{ emailValue($vars, \'end_time\') }}</span>
<p style="padding: 0px 0px 0px 25px; margin: 0px; font-size: 14px; color: #999999;">{{ emailValue($vars, \'end_address\') }}</p>
</div>
<div style="margin: 15px 0px; padding: 0px; text-align: center; font-size: 14px;">
<div style="float: left; width: 33.32%;">
<p style="color: #999999; margin: 0px; padding: 0px; text-transform: uppercase; font-size: 10px;">{{trans(\'email.car\')}}</p>
<p style="margin: 0px; padding: 0px;">{{ emailValue($vars, \'type_name\') }}</p>
</div>
<div style="float: left; width: 33.32%;">
<p style="color: #999999; margin: 0px; padding: 0px; text-transform: uppercase; font-size: 10px;">&nbsp;</p>
<p style="margin: 0px; padding: 0px;">{{emailValue($vars, \'distance\')}}</p>
</div>
<div style="float: left; width: 33.32%;">
<p style="color: #999999; margin: 0px; padding: 0px; text-transform: uppercase; font-size: 10px;">{{trans(\'email.trip_time\')}}</p>
<p style="margin: 0px; padding: 0px;">{{ emailValue($vars, \'time\')}}</p>
</div>
<div style="clear: both;">&nbsp;</div>
</div>
</div>
<div style="width: 50%; float: right;">
<div>
<div style="width: 30%; float: left; border-bottom: 1px solid #c3c3c3; padding-top: 8px;">&nbsp;</div>
<div style="width: 40%; float: left; text-transform: uppercase; text-align: center; font-size: 12px;">{{trans(\'email.fare_breakdown\')}}</div>
<div style="width: 30%; float: left; border-bottom: 1px solid #c3c3c3; padding-top: 8px;">&nbsp;</div>
<h1 style="clear: both;">&nbsp;</h1>
</div>
<div style="color: #999999; font-size: 14px;">
<div>
<p style="margin: 0px; padding: 0px; float: left;">{{trans(\'email.Base_Fare\')}}</p>
<p style="margin: 0px; padding: 0px; float: right; color: #000000;">{{ emailValue($vars, \'base_price\') }}</p>
<h1 style="clear: both;">&nbsp;</h1>
</div>
<div>
<p style="margin: 0px; padding: 0px; float: left;">{{trans(\'email.Distance_Price\')}}</p>
<p style="margin: 0px; padding: 0px; float: right; color: #000000;">{{ emailValue($vars, \'dist_cost\') }}</p>
<h1 style="clear: both;">&nbsp;</h1>
</div>
<div>
<p style="margin: 0px; padding: 0px; float: left;">{{trans(\'email.Time_Price\')}}</p>
<p style="margin: 0px; padding: 0px; float: right; color: #000000;">{{ emailValue($vars, \'time_cost\') }}</p>
<h1 style="clear: both;">&nbsp;</h1>
</div>
@if(emailValue($vars, \'ref_bonus\') > 0)
<div>
<p style="margin: 0px; padding: 0px; float: left;">{{trans(\'email.Referral_Bonus\')}}</p>
<p style="margin: 0px; padding: 0px; float: right; color: #000000;">{{ emailValue($vars, \'ref_bonus\') }}</p>
<h1 style="clear: both;">&nbsp;</h1>
</div>
@endif @if(emailValue($vars, \'promo_bonus\') > 0)
<div>
<p style="margin: 0px; padding: 0px; float: left;">{{trans(\'email.Promotional_Bonus\')}}</p>
<p style="margin: 0px; padding: 0px; float: right; color: #000000;">{{ emailValue($vars, \'promo_bonus\') }}</p>
<h1 style="clear: both;">&nbsp;</h1>
</div>
@endif @if(emailValue($vars, \'min_cost\') > 0)
<div>
<p style="margin: 0px; padding: 0px; float: left;">{{trans(\'email.min_cost\')}}</p>
<p style="margin: 0px; padding: 0px; float: right; color: #000000;">{{emailValue($vars, \'min_cost\') }}</p>
<h1 style="clear: both;">&nbsp;</h1>
</div>
@endif
<div style="clear: both;">&nbsp;</div>
<div>
<p style="border-bottom: 1px solid #c3c3c3;">&nbsp;</p>
</div>
<div style="color: #000000; font-weight: bold;">
<p style="margin: 0px; padding: 0px; float: left;">Total:</p>
<p style="margin: 0px; padding: 0px; float: right;">{{ emailValue($vars, \'total\') }}</p>
</div>
<div>
<p style="border-bottom: 1px solid #c3c3c3;">&nbsp;</p>
</div>
</div>
</div>
</div>
<div style="padding-top: 3px;">
<p style="border-bottom: 1px solid #c3c3c3;">&nbsp;</p>
</div>
<div style="clear: both;">&nbsp;</div>
<div style="margin: 0px 0px 0px 1.5em; color: #000000;">
<div style="margin: 15px 0px; width: 90%; border-radius: 150px;"><img style="width: 50px; height: 50px; border-radius: 150px; border: 2px solid #999999; float: left;" src="{{ emailValue($vars, \'provider_picture\') }}" alt="user image" width="50" height="50" />
<p style="float: left; margin: 5px 0 0 5px; padding: 0px;">{{trans(\'email.You_rode_with\')}} {{ emailValue($vars, \'provider_name\') }}<br />Transporte</p>
<h1 style="clear: both;">&nbsp;</h1>
</div>
</div>
<div style="padding: 15px 0px 0px 0px; color: #545454; background-color: #ffffff;">
<div style="margin: 15px 25px 15px 0; width: 48%; float: left; border-right: 1px solid rgba(255,255,255,.2);"><img style="float: left;" src="https://lh6.googleusercontent.com/3Hn74JQ-hjKXIFGivc6jL5hKf7WVydnBHYNPhaYdJJI=s512-no" alt="user image" width="45" height="45" />
<p style="float: right; margin: 5px 0 0 5px; padding: 0px; width: 81%;"><span style="color: #000000; font-size: 12px; font-weight: bold;"><!--?= Config::get(\'app.website_title\') ?--> {{trans(\'email.Support\')}}</span><br /><span style="font-size: 12px;"><a style="color: #000000;" href="{{ web_url() }}">{{trans(\'email.Contact_us\')}}</a> {{trans(\'email.with_questions\')}}.<br />Esqueceu de algo? <a style="color: #ffffff;" href="{{ web_url() }}">{{trans(\'email.Track_it_down\')}}.</a></span></p>
<h1 style="clear: both;">&nbsp;</h1>
</div>
<div style="margin: 15px 0px; width: 47%; border-radius: 150px; float: left;"><img style="float: left;" src="https://lh3.googleusercontent.com/-Kz8To9O9BD4/VQK6ZB9YEmI/AAAAAAAABuA/SsmgdIT9UHs/s512-no/gift-icon-0926005203.png" alt="user image" width="45" height="45" />
<p style="float: right; margin: 5px 0 0 5px; padding: 0px; width: 81%; font-size: 12px; position: relative; margin-top: 5px;"><br /><a style="font-size: 13px; border: 0px; text-decoration: none;" href="#"><img src="https://lh6.googleusercontent.com/-N24iGXCS1B0/VQK6ZxCvrfI/AAAAAAAABuU/HoVX671-mOs/s100-no/social-facebook.png" height="25px" /> </a> <a style="font-size: 13px; border: 0px; text-decoration: none;" href="#"> <img src="https://lh4.googleusercontent.com/-y8piQto1dWw/VQK6aItATiI/AAAAAAAABuY/4pVa-sGn3qk/s100-no/social-twitter.png" height="25px" /> </a> <a style="font-size: 13px; border: 0px; text-decoration: none;" href="#"> <img src="https://lh4.googleusercontent.com/-C1g1EvHxUzs/VQK6ZKokMLI/AAAAAAAABuQ/aqfjBHrW6pU/s100-no/ios7-email.png" height="25px" />&nbsp;</a></p>
<h1 style="clear: both;">&nbsp;</h1>
</div>
<h1 style="clear: both;">&nbsp;</h1>
<p style="text-align: center; font-size: 12px; margin-top: 30px;">Para mais informa&ccedil;&otilde;es, entre em contato <a href="mailto:{{Settings::getAdminEmail()}}">{{Settings::getAdminEmail()}}</a></p>
</div>
</div>
</div>
</body>
</html>'];

$array[] = ['key' => 'change_status_provider_mail', 'subject' => 'Alteração de Status', 'sample' => '{"msg_body": "Corpo da mensagem. Espera-se que seja algo importante, ou não...", "msg_title": "Título da mensagem", "provider_name": "Batista"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">Alteração de Status</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container"> <div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{ emailValue($vars, \'msg_title\') }}</a></span></td></tr></tbody></table></td></tr>
</tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr><td>
<h1 style="text-align: center; font-size: 15.5px;">Ol&aacute; {{ emailValue($vars, \'provider_name\') }}!</h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">{{ emailValue($vars, \'msg_body\') }}<br /><br />Para maiores informa&ccedil;&otilde;es entre em contato.<br /><br />Equipe&nbsp;{{Settings::findByKey(\'website_title\')}}</div>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'contact_mail_user', 'subject' => 'Contato com usuário', 'sample' => '{"name": "Batista", "email": "batista_o_motorista@codificar.com.br", "phone": "(12) 98723-1234", "comments": "Nada mais a comentar"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">Contato com usuário</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{ emailValue($vars, \'name\') }} enviou um email</a></span></td></tr></tbody></table></td></tr>
</tbody></table>
<table width="100%" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
<tbody><tr><td width="100%">
<p style="font-weight: 100; text-align: center;"><strong>Nome:</strong><span style="font-weight: 100;"><span>&nbsp;</span>{{ emailValue($vars, \'name\') }}</span></p>
</td></tr><tr> <td width="100%">
<p style="font-weight: 100; text-align: center;"><strong>Email:</strong><span style="font-weight: 100;"><span>&nbsp;</span>{{ emailValue($vars, \'email\') }}</span></p>
</td></tr><tr> <td width="100%">
<p style="font-weight: 100; text-align: center;"><strong>Telefone:</strong>&nbsp;{{ emailValue($vars, \'phone\') }}</p>
</td></tr><tr> <td width="100%">
<p style="font-weight: 100; text-align: center;"><strong>Coment&aacute;rios:</strong><br />{{ emailValue($vars, \'comments\') }}</p>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'user_in_analysis', 'subject' => 'Cadastro em análise', 'sample' => '{"name": "Olegário"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">Cadastro em análise</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">Bem vindo a {{Settings::findByKey(\'website_title\')}}, {{ emailValue($vars, \'name\') }}</a></span></td></tr></tbody></table></td></tr>
</tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr><td>
<h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"><strong>Agradecemos seu cadastro na {{Settings::findByKey(\'website_title\')}}!</strong><br /><br /><strong>Estamos muito felizes com seu cadastro!&nbsp;Aguarde a aprova&ccedil;&atilde;o do seu cadastro por nossa equipe em instantes.</strong></div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: left;"><br />A nossa equipe est&aacute; a disposi&ccedil;&atilde;o para lhe ajudar no que for preciso.&nbsp;</div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"><br />Equipe&nbsp;{{Settings::findByKey(\'website_title\')}}</div>
</td></tr></tbody></table></td></tr> <!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'the_user_is_activated', 'subject' => 'Cliente ativado', 'sample' => '{"name": "Olegário"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">Cliente ativado</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container"> <div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">Bem vindo a {{Settings::findByKey(\'website_title\')}}, {{ emailValue($vars, \'name\') }}</a></span></td></tr></tbody></table></td></tr>
</tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr><td>
<h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"><strong>&nbsp;Seja bem vinda&nbsp;na {{Settings::findByKey(\'website_title\')}}! E gostar&iacute;amos de afirmar que seu cadastro foi ativado com sucesso.&nbsp;</strong><br /><br />A nossa equipe est&aacute; a disposi&ccedil;&atilde;o para lhe ajudar no que for preciso.&nbsp;<br /><br />{{Settings::findByKey(\'website_title\')}}</div>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'the_user_is_inactive', 'subject' => 'Usuário Desativado', 'sample' => '{"name": "Olegário"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">Usuário Desativado</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">Conta desativada</a></span></td></tr></tbody></table></td></tr>
</tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr><td>
<h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"><strong>Ol&aacute; {{ emailValue($vars, \'name\') }}, sua conta foi desativada na {{Settings::findByKey(\'website_title\')}}.&nbsp;</strong><br /><br />A nossa equipe est&aacute; a disposi&ccedil;&atilde;o para lhe ajudar no que for preciso.&nbsp;<br /><br />Equipe&nbsp;{{Settings::findByKey(\'website_title\')}}</div>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'emergency_contact_invite', 'subject' => '{{trans(\'ledgerContacts.emergency_contact_invite_subject\')}}', 'sample' => '{"url": "http://localhost:8000", "ledger_name": "Prudêncio", "contact_name": "Emergêncio"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'email.layout\')}}</span></p> <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody> <tr> <td>&nbsp;</td> <td class="container"> <div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody> <tr> <td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td> </tr> <tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody> <tr>
<td style="background-color: #ffffff;"><span>Ol&aacute; {{emailValue($vars, \'contact_name\')}}, voc&ecirc; foi convidado por {{emailValue($vars, \'ledger_name\')}} para ser o seu contato de seguran&ccedil;a. Basta clicar no bot&atilde;o aceitar!</span></td>
</tr> </tbody> </table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody> <tr> <td>
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody> <tr> <td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody> <tr>
<td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><a href="{{emailValue($vars, \'url\')}}" target="_blank" rel="noopener noreferrer">ACEITAR</a></td>
</tr> </tbody> </table> </td> </tr> <tr></tr> </tbody> </table> </td> </tr> </tbody> </table>
</td> </tr> <!-- END MAIN CONTENT AREA --></tbody>
</table> <!-- END CENTERED WHITE CONTAINER -->'];

$array[] = ['key' => 'request_accept_freight', 'subject' => '{{trans(\'requests.accept_freight_mail\')}}', 'sample' => '{"link_chat": "http://localhost:8000", "user_name": "Olegário", "provider_name": "Batista"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'institution.notification\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody> <tr> <td>&nbsp;</td> <td class="container"> <div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA --> <tbody> <tr> <td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td> </tr> <tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody> <tr> <td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center"> <tbody> <tr> <td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;">
<span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">Seu frete foi aceito,{{emailValue($vars, \'user_name\')}}.</a></span></td>
</tr> </tbody> </table> </td> </tr> </tbody> </table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody> <tr> <td>
<h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">Seu frete foi aceito pelo Motorista {{emailValue($vars, \'provider_name\')}} e caso ele tenha uma contra-proposta, voc&ecirc; pode negociar via chat.</div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"><a href="{{emailValue($vars, \'link_chat\')}}">Clique aqui para acessar a conversa.</a></div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"></div>
</td> </tr> </tbody> </table> </td> </tr> <!-- END MAIN CONTENT AREA --></tbody> </table> <!-- END CENTERED WHITE CONTAINER -->'];

$array[] = ['key' => 'new_message_provider', 'subject' => '{{trans(\'requests.new_message\')}}', 'sample' => '{"message": "Eu achei o valor muito alto!", "user_name": "Olegário", "provider_name": "Batista"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'requests.new_message\')}}</span></p>
<table class="body" border="0" cellspacing="0" cellpadding="0">
<tbody><tr><td>&nbsp;</td>
<td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" /></p>
</td></tr><tr><td class="wrapper">
<table id="email-penrose-conteneur" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr>
<td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr>
<td class="resp-full-td" style="padding: 20px; text-align: center;" valign="top"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'provider_name\')}}, {{trans(\'requests.message_from\', [\'name\' => emailValue($vars, \'user_name\')])}}</a></span></td>
</tr></tbody></table></td></tr></tbody></table>
<table border="0" cellspacing="0" cellpadding="0">
<tbody><tr><td>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">{{emailValue($vars, \'message\')}}</div>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --><!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'user_invoice', 'subject' => '{{trans(\'email.invoice\')}}', 'sample' => '{"user_name": "Olegário", "user_total": "1600", "end_address": "Av. Brasil", "promo_bonus": "60", "provider_name": "Batista", "start_address": "Rua dos Bobos, 0", "request_points": "3", "ride_total_price": "1616", "request_start_time": "12:00", "request_create_date": "31/03/2020", "request_finish_time": "18:00"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'email.invoice\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container"> <div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA --> <tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<div style="font-size: 18px; color: #000000; text-align: center;"><strong>{{ trans(\'email.Hello\') . \' \' . emailValue($vars, \'user_name\') . trans(\'email.Thanks_for_ride\') . \' \' . emailValue($vars, \'provider_name\') }}</strong></div>
<div style="font-size: 12px; text-align: center;">{{ trans(\'email.Request_rid\') . \' \' . date(\'d/m/Y H:i\', strtotime(emailValue($vars, \'request_create_date\'))) }}</div>
</td></tr></tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td><table> <tbody><tr><td><img src="{{ emailValue($vars, \'map_url\') }}" width="249px" heigth="249px" alt="Mapa" /></td>
<td><table width="100%"><tbody><tr width="100%">
<td width="10%" valign="top"><img src="http://d1a3f4spazzrp4.cloudfront.net/receipt-new/marker-start@2x.png" alt="" /></td>
<td width="90%" style="font-size: 14px; color: #000;"><strong>{{ trans(\'email.Start_at\') . \' \' . date(\'H:i\', strtotime(emailValue($vars, \'request_start_time\'))) }}</strong> <br /> {{ emailValue($vars, \'start_address\') }}</td>
</tr> <tr width="100%">
<td width="10%" valign="top"><img src="http://d1a3f4spazzrp4.cloudfront.net/receipt-new/marker-finish@2x.png" alt="" /></td>
<td width="90%" style="font-size: 14px; color: #000;"><strong>{{ trans(\'email.Finish_at\') . \' \' . date(\'H:i\', strtotime(emailValue($vars, \'request_finish_time\'))) }}</strong> <br /> {{ emailValue($vars, \'end_address\') }}</td></tr></tbody></table></td></tr>
</tbody></table>
<h1 style="font-size: 15.5px; text-align: left;">{{trans(\'email.Points\')}}: {{emailValue($vars, \'request_points\')}}</h1>
<h1 style="font-size: 15.5px; text-align: left;">{{trans(\'email.Subtotal\')}}: {{currency_format(emailValue($vars, \'user_total\'))}}</h1>
<h1 style="font-size: 15.5px; text-align: left;">{{trans(\'email.Promotional_Bonus\')}}: {{currency_format(emailValue($vars, \'promo_bonus\'))}}</h1>
<h1 style="font-size: 15.5px; text-align: left;">{{Trans(\'email.Price_total\')}}: {{currency_format(emailValue($vars, \'ride_total_price\'))}}</h1>
<p></p><p></p> </td></tr></tbody></table></td></tr> <!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'provider_invoice', 'subject' => '{{trans(\'email.invoice\')}}', 'sample' => '{"map_url": "http://localhost:8000", "user_name": "Olegário", "end_address": "Av. Brasil", "driver_total": "520,00", "provider_name": "Batista", "start_address": "Rua dos Bobos, 0", "request_start_time": "12:00", "request_create_date": "16/09/2020", "request_finish_time": "18:00", "request_points_amount": "6"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class="">
<p><span class="preheader">{{trans(\'email.provider_invoice\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody>
<tr>
<td>&nbsp;</td>
<td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody>
<tr>
<td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td>
</tr>
<tr>
<td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody>
<tr>
<td style="background-color: #ffffff;">
<div style="font-size: 18px; color: #000000; text-align: center;"><strong>{{ trans(\'email.Hello\') . \' \' . emailValue($vars, \'provider_name\') . trans(\'email.Thanks_provider\') . \' \' . emailValue($vars, \'user_name\') }}</strong></div>
<div style="font-size: 12px; text-align: center;">{{ trans(\'email.Request_rid\') . \' \' . emailValue($vars, \'request_create_date\') }}</div>
</td>
</tr>
</tbody>
</table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<table style="width: 500px;">
<tbody>
<tr>
<td style="width: 158.5px;"><img src="{{ emailValue($vars, \'map_url\') }}" width="249px" heigth="249px" alt="Mapa" /></td>
<td style="width: 330.5px;">
<table width="100%">
<tbody>
<tr width="100%">
<td width="10%" valign="top"><img src="http://d1a3f4spazzrp4.cloudfront.net/receipt-new/marker-start@2x.png" alt="" /></td>
<td width="90%" style="font-size: 14px; color: #000;"><span style="font-weight: bold;">{{ trans(\'email.Start_at\') . \' \' . emailValue($vars, \'request_start_time\') }}</span> <br />{{ emailValue($vars, \'start_address\') }}</td>
</tr>
<tr width="100%">
<td width="10%" valign="top"><img src="http://d1a3f4spazzrp4.cloudfront.net/receipt-new/marker-finish@2x.png" alt="" /></td>
<td width="90%" style="font-size: 14px; color: #000;"><span style="font-weight: bold;">{{ trans(\'email.Finish_at\') . \' \' . emailValue($vars, \'request_finish_time\') }}</span> <br />{{ emailValue($vars, \'end_address\') }}</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<h1 style="font-size: 15.5px; text-align: left;">{{trans(\'email.Points\')}}: {{emailValue($vars, \'request_points_amount\')}}</h1>
<h1 style="font-size: 15.5px; text-align: left;"></h1>
<h1 style="font-size: 15.5px; text-align: left;">{{Trans(\'email.Received_value\')}}: {{emailValue($vars, \'driver_total\')}}</h1>
<p></p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<!-- END MAIN CONTENT AREA --></tbody>
</table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
<div class="footer">
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="content-block powered-by">
<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
</td>
</tr>
</tbody>
</table>
</div>
<!-- END FOOTER --></div>
</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</body>
		</html>'];

$array[] = ['key' => 'approve_billing_mail', 'subject' => '{{trans(\'institution.billing_enabled\')}}', 'sample' => '{"provider_name": "Batista"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'institution.billing_enabled\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container"> <div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA --> <tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr><td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'provider_name\')}}, voc&ecirc; foi aprovado em nosso sistema! Bem vindo ao {{Settings::findByKey(\'website_title\')}}.</a></span></td></tr></tbody></table></td></tr>
</tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr><td>
<h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">A&nbsp; {{Settings::findByKey(\'website_title\')}}&nbsp;lhe parabeniza pela recente inclus&atilde;o ao nosso quadro de motoristas, contribuindo com o aumento da produtividade e lucratividade nos seus neg&oacute;cios. Estamos animados com a sua chegada.</div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">&nbsp;</div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">Aproveitamos a oportunidade para renovar votos de elevada estima e considera&ccedil;&atilde;o.</div>
</td></tr></tbody></table></td></tr> <!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'institution_invoice', 'subject' => '{{trans(\'invoice.invoice\')}}', 'sample' => '{"invoice_name": "Olegário"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'institution.invoice\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td> <td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'invoice_name\')}}, sua conta de faturamento foi aprovada em nosso sistema!</a></span></td></tr></tbody></table></td></tr>
</tbody></table> <table role="presentation" border="0" cellpadding="0" cellspacing="0"> <tbody><tr><td>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">O&nbsp; {{Settings::findByKey(\'website_title\')}} lhe parabeniza pela recente aprova&ccedil;&atilde;o ao nosso m&eacute;todo de pagamento em faturamento, proporcionando praticidade e flexibilidade em suas solicita&ccedil;&otilde;es de servi&ccedil;os. Estamos animados com a sua escolha.</div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">&nbsp;</div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">Aproveitamos a oportunidade para renovar votos de elevada estima e considera&ccedil;&atilde;o.</div>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'institution_block', 'subject' => '{{trans(\'institution.block\')}}', 'sample' => '{"link": "http://localhost:8000", "institution_name": "Entregas Rápidas Ponto Com"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class="">
<p><span class="preheader">{{trans(\'institution.block\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody>
<tr>
<td>&nbsp;</td>
<td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody>
<tr>
<td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td>
</tr>
<tr>
<td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody>
<tr>
<td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'institution_name\')}},</a></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">Sua conta foi bloqueada devido falta de pagamento&nbsp;de fatura(s) em aberto.<br /><br />Acesse sua fatura e realize o pagamento neste <a href="{{emailValue($vars, \'link\')}}">link</a>.</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<!-- END MAIN CONTENT AREA --></tbody>
</table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
<div class="footer">
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="content-block powered-by">
<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
</td>
</tr>
</tbody>
</table>
</div>
<!-- END FOOTER --></div>
</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</body>
		</html>'];

$array[] = ['key' => 'institution_notification', 'subject' => '{{trans(\'institution.notification\')}}', 'sample' => '{"link": "http://localhost:8000", "institution_name": "Entregas Rápidas Ponto Com"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class="">
<p><span class="preheader">{{trans(\'institution.notification\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody>
<tr>
<td>&nbsp;</td>
<td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody>
<tr>
<td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td>
</tr>
<tr>
<td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody>
<tr>
<td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'institution_name\')}}</a></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">A&nbsp;data de vencimento da sua fatura est&aacute; pr&oacute;xima. Evite o bloqueio da sua conta.<br /><br />Acesse sua fatura e realize o pagamento neste <a href="{{emailValue($vars, \'link\')}}">link</a>.</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<!-- END MAIN CONTENT AREA --></tbody>
</table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
<div class="footer">
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="content-block powered-by">
<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
</td>
</tr>
</tbody>
</table>
</div>
<!-- END FOOTER --></div>
</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</body>
		</html>'];

$array[] = ['key' => 'institution_invoice_generate', 'subject' => '{{trans(\'invoice.institution_invoice_generate\')}}', 'sample' => '{"link": "http://localhost:8000", "due_date": "15/06/2020", "invoice_name": "Olegário"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class="">
<p><span class="preheader">{{trans(\'invoice.institution_invoice_generate\')}}</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody>
<tr>
<td>&nbsp;</td>
<td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody>
<tr>
<td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td>
</tr>
<tr>
<td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody>
<tr>
<td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'invoice_name\')}},</a></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">Sua fatura foi gerada com sucesso com vencimento para {{emailValue($vars, \'due_date\')}}.<br /><br />Acesse-a e realize o pagamento neste <a href="{{emailValue($vars, \'link\')}}">link</a>.</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<!-- END MAIN CONTENT AREA --></tbody>
</table>
<!-- END CENTERED WHITE CONTAINER --> <!-- START FOOTER -->
<div class="footer">
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="content-block powered-by">
<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
</td>
</tr>
</tbody>
</table>
</div>
<!-- END FOOTER --></div>
</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</body>
		</html>'];

$array[] = ['key' => 'resend_invoice', 'subject' => 'Envio da fatura', 'sample' => '{"link": "http://localhost:8000", "name": "Olegário"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">Envio da fatura</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody><tr><td>&nbsp;</td>
<td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody><tr><td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td></tr><tr>
<td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody><tr><td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody><tr><td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'name\')}}</a></span></td></tr></tbody></table></td></tr>
</tbody></table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody><tr><td>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">A&nbsp;&nbsp;fatura deste m&ecirc;s pode ser consultada por meio deste <a href="{{emailValue($vars, \'link\')}}">link</a>.</div>
</td></tr></tbody></table></td></tr>
<!-- END MAIN CONTENT AREA --></tbody></table>
<!-- END CENTERED WHITE CONTAINER --><!-- START FOOTER -->
			<div class="footer">
			<table role="presentation" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr><td class="content-block powered-by">
			<p>{{trans(\'email.copyright\')}} {{Settings::findByKey(\'website_title\')}}.</p>
			</td></tr></tbody></table>
			</div>
			<!-- END FOOTER --></div>
			</td>
			<td>&nbsp;</td></tr></tbody></table>
			</body>
		</html>'];

$array[] = ['key' => 'new_bid_provider', 'subject' => '{{trans(\'requests.new_bid\')}}', 'sample' => '{"bid": "560", "user_name": "Olegário", "provider_name": "Batista"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'requests.new_message\')}}</span></p>
<table class="body" border="0" cellspacing="0" cellpadding="0"> <tbody> <tr>
<td>&nbsp;</td> <td class="container"> <div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table class="main"><!-- START MAIN CONTENT AREA -->
<tbody> <tr> <td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" /></p>
</td> </tr> <tr> <td class="wrapper">
<table id="email-penrose-conteneur" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody> <tr> <td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody> <tr> <td class="resp-full-td" style="padding: 20px; text-align: center;" valign="top"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'provider_name\')}}, {{trans(\'requests.bid_from\', [\'name\' => emailValue($vars, \'user_name\')])}}</a></span></td>
</tr> </tbody> </table> </td> </tr> </tbody> </table> <table border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">{{emailValue($vars, \'bid\')}}</div>
</td> </tr> </tbody> </table> </td> </tr>
<!-- END MAIN CONTENT AREA --></tbody> </table>
<!-- END CENTERED WHITE CONTAINER -->'];

$array[] = ['key' => 'vehicle_approved', 'subject' => '{{trans(\'email.vehicle_approved\')}}', 'sample' => '{"name": "Batista", "board": "ABC-1234"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">Veículo aprovado</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody> <tr> <td>&nbsp;</td> <td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody> <tr> <td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td> </tr> <tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody> <tr>
<td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody> <tr>
<td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'name\')}}</a></span></td>
</tr> </tbody> </table> </td> </tr> </tbody> </table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody> <tr> <td>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">Seu ve&iacute;culo de placa {{emailValue($vars, \'board\')}} foi aprovado.</div>
</td> </tr> </tbody> </table> </td> </tr>
<!-- END MAIN CONTENT AREA --></tbody> </table> <!-- END CENTERED WHITE CONTAINER -->'];

$array[] = ['key' => 'vehicle_rejected', 'subject' => '{{trans(\'email.vehicle_rejected\')}}', 'sample' => '{"name": "Batista", "board": "ABC-1234"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">Veículo rejeitado</span></p>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody> <tr> <td>&nbsp;</td> <td class="container">
<div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA -->
<tbody> <tr> <td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td> </tr> <tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody> <tr>
<td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center">
<tbody> <tr>
<td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">{{emailValue($vars, \'name\')}}</a></span></td>
</tr> </tbody> </table> </td> </tr> </tbody> </table>
<table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody> <tr> <td>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">Seu ve&iacute;culo de placa {{emailValue($vars, \'board\')}} foi rejeitado.</div>
</td> </tr> </tbody> </table> </td> </tr>
<!-- END MAIN CONTENT AREA --></tbody> </table> <!-- END CENTERED WHITE CONTAINER -->'];

$array[] = ['key' => 'request_confirm_freight', 'subject' => '{{trans(\'requests.confirm_freight_mail\')}}', 'sample' => '{"provider_name": "Batista"}',
'content' => '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Simple Transactional Email</title><style>
			img {
				border: none;
				-ms-interpolation-mode: bicubic;
				max-width: 100%;
			}
			body {
				background-color: #f6f6f6;
				font-family: sans-serif;
				-webkit-font-smoothing: antialiased;
				font-size: 14px;
				line-height: 1.4;
				margin: 0;
				padding: 0;
				-ms-text-size-adjust: 100%;
				-webkit-text-size-adjust: 100%;
			}
			table {
				border-collapse: separate;
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
				width: 100%;
			}
			table td {
				font-family: sans-serif;
				font-size: 14px;
				vertical-align: top;
			}
			.body {
				background-color: #f6f6f6;
				width: 100%;
			}
			.container {
				display: block;
				margin: 0 auto !important;
				/* makes it centered */
				max-width: 580px;
				padding: 10px;
				width: 580px;
			}
			.content {
				box-sizing: border-box;
				display: block;
				margin: 0 auto;
				max-width: 580px;
				padding: 10px;
			}
			.main {
				background: #ffffff;
				border-radius: 3px;
				width: 100%;
			}
			.wrapper {
				box-sizing: border-box;
				padding: 20px;
			}
			.content-block {
				padding-bottom: 10px;
				padding-top: 10px;
			}
			.footer {
				clear: both;
				margin-top: 10px;
				text-align: center;
				width: 100%;
			}
			.footer td, .footer p, .footer span, .footer a {
				color: #999999;
				font-size: 12px;
				text-align: center;
			}
			h1, h2, h3, h4 {
				color: #000000;
				font-family: sans-serif;
				font-weight: 400;
				line-height: 1.4;
				margin: 0;
				margin-bottom: 30px;
			}
			h1 {
				font-size: 35px;
				font-weight: 300;
				text-align: center;
				text-transform: capitalize;
			}
			p, ul, ol {
				font-family: sans-serif;
				font-size: 14px;
				font-weight: normal;
				margin: 0;
				margin-bottom: 15px;
			}
			p li, ul li, ol li {
				list-style-position: inside;
				margin-left: 5px;
			}
			a {
				color: #3498db;
				text-decoration: underline;
			}
			.btn {
				box-sizing: border-box;
				width: 100%;
			}
			.btn>tbody>tr>td {
				padding-bottom: 15px;
			}
			.btn table {
				width: auto;
			}
			.btn table td {
				background-color: #ffffff;
				border-radius: 5px;
				text-align: center;
			}
			.btn a {
				background-color: #ffffff;
				border: solid 1px #3498db;
				border-radius: 5px;
				box-sizing: border-box;
				color: #3498db;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				padding: 12px 25px;
				text-decoration: none;
				text-transform: capitalize;
			}
			.btn-primary table td {
				background-color: #3498db;
			}
			.btn-primary a {
				background-color: #3498db;
				border-color: #3498db;
				color: #ffffff;
			}
			.last {
				margin-bottom: 0;
			}
			.first {
				margin-top: 0;
			}
			.align-center {
				text-align: center;
			}
			.align-right {
				text-align: right;
			}
			.align-left {
				text-align: left;
			}
			.clear {
				clear: both;
			}
			.mt0 {
				margin-top: 0;
			}
			.mb0 {
				margin-bottom: 0;
			}
			.preheader {
				color: transparent;
				display: none;
				height: 0;
				max-height: 0;
				max-width: 0;
				opacity: 0;
				overflow: hidden;
				mso-hide: all;
				visibility: hidden;
				width: 0;
			}
			.powered-by a {
				text-decoration: none;
			}
			hr {
				border: 0;
				border-bottom: 1px solid #f6f6f6;
				margin: 20px 0;
			}
			@media only screen and (max-width: 620px) {
				table[class=body] h1 {
					font-size: 28px !important;
					margin-bottom: 10px !important;
				}
				table[class=body] p,
				table[class=body] ul,
				table[class=body] ol,
				table[class=body] td,
				table[class=body] span,
				table[class=body] a {
					font-size: 16px !important;
				}
				table[class=body] .wrapper,
				table[class=body] .article {
					padding: 10px !important;
				}
				table[class=body] .content {
					padding: 0 !important;
				}
				table[class=body] .container {
					padding: 0 !important;
					width: 100% !important;
				}
				table[class=body] .main {
					border-left-width: 0 !important;
					border-radius: 0 !important;
					border-right-width: 0 !important;
				}
				table[class=body] .btn table {
					width: 100% !important;
				}
				table[class=body] .btn a {
					width: 100% !important;
				}
				table[class=body] .img-responsive {
					height: auto !important;
					max-width: 100% !important;
					width: auto !important;
				}
			}
			@media all {
				.ExternalClass {
					width: 100%;
				}
				.ExternalClass,
				.ExternalClass p,
				.ExternalClass span,
				.ExternalClass font,
				.ExternalClass td,
				.ExternalClass div {
					line-height: 100%;
				}
				.apple-link a {
					color: inherit !important;
					font-family: inherit !important;
					font-size: inherit !important;
					font-weight: inherit !important;
					line-height: inherit !important;
					text-decoration: none !important;
				}
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
					font-size: inherit;
					font-family: inherit;
					font-weight: inherit;
					line-height: inherit;
				}
				.btn-primary table td:hover {
					background-color: #34495e !important;
				}
				.btn-primary a:hover {
					background-color: #34495e !important;
					border-color: #34495e !important;
				}
				.right {
					float: right;
				}
			}
		</style></head>
		<body class=""><p><span class="preheader">{{trans(\'institution.notification\')}}</span></p> <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
<tbody> <tr> <td>&nbsp;</td> <td class="container"> <div class="content"><!-- START CENTERED WHITE CONTAINER -->
<table role="presentation" class="main"><!-- START MAIN CONTENT AREA --> <tbody> <tr> <td class="wrapper">
<p><span class="right">{{emailValue($vars, \'date\')}}</span><img src="{{emailValue($vars, \'logo\')}}" alt="Logo" width="200" height="79" caption="false" /></p>
</td> </tr> <tr> <td class="wrapper">
<table id="email-penrose-conteneur" border="0" width="660" cellspacing="0" cellpadding="0" align="center" style="border-right: 1px solid #e2e8ea; border-bottom: 1px solid #e2e8ea; border-left: 1px solid #e2e8ea; background-color: #ffffff;">
<tbody> <tr> <td style="background-color: #ffffff;">
<table class="resp-full-table" border="0" width="660" cellspacing="0" cellpadding="0" align="center"> <tbody> <tr>
<td class="resp-full-td" valign="top" style="padding: 20px; text-align: center;"><span style="font-size: 25px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #000000;"><a style="color: #545454; outline: none; text-decoration: none;">Frete confirmado, {{emailValue($vars, \'provider_name\')}}.</a></span></td>
</tr> </tbody> </table> </td> </tr> </tbody> </table> <table role="presentation" border="0" cellpadding="0" cellspacing="0">
<tbody> <tr> <td> <h1 style="text-align: center; font-size: 15.5px;"></h1>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;">Voc&ecirc; confirmou o frete de {{emailValue($vars, \'user_name\')}}.</div>
<ul> <ul>
<li style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: left;">Origem: {{emailValue($vars, \'src_address\')}}</li>
<li style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: left;"><span>Destino: {{emailValue($vars, \'dest_address\')}}</span></li>
</ul> </ul>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"><a href="{{emailValue($vars, \'link_chat\')}}">Clique aqui para acessar a conversa.</a></div>
<div style="padding: 10px; font-size: 15.5px; font-family: \'Helvetica Neue\', helvetica, arial, sans-serif; font-weight: 100; color: #545454; text-align: center;"></div>
</td> </tr> </tbody> </table> </td> </tr> <!-- END MAIN CONTENT AREA --></tbody> </table>
<!-- END CENTERED WHITE CONTAINER -->'];

return $array;