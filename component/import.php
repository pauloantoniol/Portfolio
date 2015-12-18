<?php
	session_start();
	date_default_timezone_set("America/Sao_Paulo");

	//VERIFICA SE É MOBILE OU DESKTOP
	$mobileOuPc = "";
	if (strpos($_SERVER['HTTP_USER_AGENT'],"iPhone") || strpos($_SERVER['HTTP_USER_AGENT'],"iPad") ||
	strpos($_SERVER['HTTP_USER_AGENT'],"Android") || strpos($_SERVER['HTTP_USER_AGENT'],"webOS") ||
	strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry") || strpos($_SERVER['HTTP_USER_AGENT'],"iPod") ||
	strpos($_SERVER['HTTP_USER_AGENT'],"Symbian") == true){
		$mobileOuPc = "celular";
	}else{
		$mobileOuPc = "desktop";
	}

	global $pagina;
	$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';
	$pagina = file_exists('pages/'.$pagina.'.php') ? $pagina : '404';

	global $pagina;
	$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';
	$pagina = file_exists('pages/'.$pagina.'.php') ? $pagina : '404';

	$url_inteira = $url = "";
	if(!empty($_GET['url'])){
		$url_inteira = substr($_GET['url'], -1) == '/' ? substr($_GET['url'],0,-1) : $_GET['url'];
		$url = explode('/', $url_inteira);
	}

	$menu_home = "hide";
	$menu_others = true;
	$cor = "fundo-verde";

	switch ($pagina) {
		case 'home':
			$nome_pagina = 'Portfolio';
			$menu_others = false;
			$menu_home = "";
			$cor = "fundo-branco";
		break;
		case 'contato':
			$nome_pagina = 'Portfolio - Contato';
		break;
		case 'trabalhos':
			$nome_pagina = 'Portfolio - Trabalhos';
		break;
		case '404':
			$nome_pagina = 'Página não Encontrada - Pennacorp';
		break;
	}
?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- PRINCIPAIS CSS -->
		<link rel="stylesheet" href="/component/sweets/jquery/jquery-ui.css" />
		<link rel="stylesheet" href="/component/index.css" type="text/css" />

		<!-- PRINCIPAIS JS -->
		<script type="text/javascript" src='/component/sweets/jquery/jquery.min.js'></script>
		<script type="text/javascript" src='/component/sweets/jquery/jquery-ui.js'></script>
		<script type="text/javascript" src='/component/functions.js'></script>

		<!-- MENU CSS/JS -->
		<link rel="stylesheet" type="text/css" href="/component/sweets/menu/css/font-awesome.min.css" />
		<script src="/component/sweets/menu/snap.svg-min.js"></script>
		<script src="/component/sweets/menu/classie.js"></script>

		<!-- TOOLTIP CSS/JS -->
		<link rel="stylesheet" type="text/css" href="/component/sweets/tooltip/tooltipster.css" />
		<script type="text/javascript" src="/component/sweets/tooltip/jquery.tooltipster.js"></script>

		<!-- BACKGROUND CSS/JS -->
		<link rel="stylesheet" type="text/css" href="/component/sweets/background/component.css" />
		<script type="text/javascript" src="/component/sweets/background/modernizr.custom.js"></script>

		<!-- MENU-RESPONSIVO CSS/JS -->
		<link rel="stylesheet" type="text/css" href="/component/sweets/menu-responsivo/menu_elastic.css" />
		<script src="/component/sweets/menu-responsivo/classie.js"></script>

		<!-- GALERIA CSS/JS -->
		<link rel="stylesheet" type="text/css" href="/component/sweets/galeria/galeria.css" />
		<link rel="stylesheet" type="text/css" href="/component/sweets/galeria/set1.css" />
		
		<!-- ALERT CSS/JS -->
		<link rel="stylesheet" type="text/css" href="/component/sweets/alert/sweetalert.css" />
		<script type="text/javascript" src="/component/sweets/alert/sweetalert.js"></script>

		<!--[if lt IE 7]>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
		<![endif]-->
		<!--[if lt IE 8]>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
		    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->
		<!--[if IE]>
  			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

<!-- 		<link rel='SHORTCUT icon' href='../imagens/Version.Layout.Icarus.png'/> -->

		<title><?= $nome_pagina ?></title>
