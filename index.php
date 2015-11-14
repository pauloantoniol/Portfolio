<?php
	session_start();
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

	$home = $historico = $download = $orion = $icarus = $contato = $ecommerce = "";
	$mhome = $mhistorico = $morion = $micarus = $mcontato = $mecommerce = "";

	switch ($pagina) {
		case 'home':
			$home = 'ativo';
			$mhome = 'ativo-mobile';
			$nome_pagina = 'Pennacorp';
		break;
		case 'historico':
			$historico = 'ativo';
			$mhistorico = 'ativo-mobile';
			$nome_pagina = 'Empresa - Pennacorp';
		break;
		case 'download':
			$download = 'ativo';
			$nome_pagina = 'Download - Pennacorp';
		break;
		case 'orion':
			$orion = 'ativo';
			$morion = 'ativo-mobile';
			$nome_pagina = 'Orion - Pennacorp';
		break;
		case 'icarus':
			$icarus = 'ativo';
			$micarus = 'ativo-mobile';
			$nome_pagina = 'Icarus - Pennacorp';
		break;
		case 'contato':
			$contato = 'ativo';
			$mcontato = 'ativo-mobile';
			$nome_pagina = 'Contato - Pennacorp';
		break;
		case 'homologados':
			$historico = 'ativo';
			$mhistorico = 'ativo-mobile';
			$nome_pagina = 'Produtos Homologados - Pennacorp';
		break;
		case 'parceiros':
			$historico = 'ativo';
			$mhistorico = 'ativo-mobile';
			$nome_pagina = 'Parceiros - Pennacorp';
		break;
		case 'ecommerce':
			$ecommerce = 'ativo';
			$mecommerce = 'ativo-mobile';
			$nome_pagina = 'eCommerce - Pennacorp';
		break;
		case '404':
			$nome_pagina = 'Página não Encontrada - Pennacorp';
		break;
	}

	//VERIFICA SE IRÁ DAR FOCO NA PESQUISA OU NÃO
	$FocusNaPesquisa = "";
	if($mobileOuPc != "celular"){
		if($pagina != "orion"){
			$FocusNaPesquisa = "onload='FocusIcarus();'";
		}
	}

	date_default_timezone_set("America/Sao_Paulo"); // area da onde pega a data
	$ano = date("Y"); // pega o ano
	$nascimento = "2002";

	$idade = $ano - $nascimento;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $nome_pagina; ?></title>
	  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src='component/js/jquery.js'></script>
		<script type="text/javascript" src='component/js/jquery.tooltipster.js'></script>

		<script src="//cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.1/iscroll-min.js"></script>
		<script src="//cdn.rawgit.com/ungki/bootstrap.dropdown/3.3.1/dropdown.min.js"></script>
		<script src="http://heartcode-canvasloader.googlecode.com/files/heartcode-canvasloader-min-0.9.1.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<script type="text/javascript" src='component/js/googleAnalytics.js'></script>
		<script type="text/javascript" src="component/js/jquery.drawer.js"></script>
		<script type="text/javascript" src='component/js/shortcut.js'></script>
		<script type="text/javascript" src='component/js/index.js'></script>
		<script src="/component/Alert/sweet-alert.min.js"></script>



		<link id='CssIndex' rel="stylesheet" type="text/css" href="component/css/Index.css" media='all'>
		<link rel="stylesheet" type="text/css" href="component/css/drawer.css" media='all'>
		<link rel="stylesheet" type="text/css" href="component/css/tooltipster.css" media='all'>
		<link rel="stylesheet" href="/component/Alert/sweet-alert.css">
		<link rel="stylesheet" type="text/css" href="/component/css/input_procura.css" />
		<link rel="shortcut icon" type="image/ico" href="component/imagens/icon.ico">

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
	</head>

<?php
	if($pagina == '404'){ //VERIFICA SE A PAGINA EXISTE
		include ('pages/404.php');
	}
	else{ //SE NãO JOGA LAYOUT E CONTEUDO
?>

<body class="clearfix drawer drawer-left drawer-responsive"
	<?php echo $pagina =="icarus" ? "onload='AlturaIcarus();'" : $FocusNaPesquisa ?>>

		<header class='bgazuleR'>
				<h1><a href='home' title='Pennacorp Sistemas Inicio'><span></span></a></h1>

				<address>
					<p>Telefone: 11 4316 6673 | 11 4316-6674 | 11 4992 6673</p>
				</address>

				<nav class='menu-horizontal <?php echo $mobileOuPc ?>'>
					<ul id='menuPc'>
					  <li class="<?php echo $home;?>"><a href="home">Pennacorp</a></li>
					  <li class="<?php echo $icarus; ?>"><a href="icarus">Icarus</a></li>
					  <li class="<?php echo $orion; ?>"><a href="orion">Orion</a></li>
						<li class="<?php echo $ecommerce; ?>"><a href="ecommerce">eCommerce</a></li>
					  <?php
					  	if ($mobileOuPc == "desktop"){echo "<li class='".$download."'><a href='download'>Download</a></li>";}
					  ?>
					  <li class="<?php echo $historico; ?>"><a href="historico">Empresa</a></li>
					  <li class="<?php echo $contato; ?>"><a href="contato">Contato</a></li>
					</ul>
				</nav>

				<menu>
					<div class="drawer-header">
				    	<button type="button" class="drawer-toggle drawer-hamberger">
				    	  <span class="sr-only">toggle navigation</span>
				    	  <span class="drawer-hamberger-icon"></span>
				    	</button>
				  	</div>

				  	<div class="drawer-main drawer-default">
					    <nav class="drawer-nav" role="navigation">

							<div class="drawer-brand"><a class='logopequeno3'></a></div>

						    <ul class="drawer-menu">
								<li class="drawer-menu-item">
									<ul class="drawer-submenu">
										<a href="home"><li class="drawer-submenu-item <?php echo $mhome;?>">Pennacorp</li></a>
										<a href="icarus"><li class="drawer-submenu-item <?php echo $micarus;?>">Icarus</li></a>
										<a href="orion"><li class="drawer-submenu-item <?php echo $morion;?>">Orion</li></a>
										<a href="ecommerce"><li class="drawer-submenu-item <?php echo $mecommerce;?>">eCommerce</li></a>
										<a href="historico"><li class="drawer-submenu-item <?php echo $mhistorico;?>">Empresa</li></a>
										<a href="contato"><li class="drawer-submenu-item <?php echo $mcontato;?>">Contato</li></a>
									</ul>
								</li>
							</ul>

							<div class="drawer-footer"><span></span></div>

	  					</nav>
					</div>
				</menu>

			<?php
				if($pagina != "icarus"){
					echo "
					<section class='contenter'>
						<span class='procurar input--makiko'>
							<input class='input__field input__field--makiko' type='search' id='Search'
								onkeyup='pesquisaOsIcarus(this);'	onfocus='pesquisaOsIcarus(this);'/>
							<label class='input__label input__label--makiko' for='Search'>
								<span class='input__label-content input__label-content--makiko'>Clientes Icarus</span>
							</label>
						</span>
					</section>

					<div class='ResultClientesIcarus' id='ResultClientesIcarus'></div>";
				}

			?>
		</header>

		<main class='main-box'>
			<div class='center-conteudo'>
				<!--CONTEUDO-->
				<div class="content">
					<?php
						include ('pages/'.$pagina.'.php');
					?>
				</div><!--content-->
			</div>
		</main><!--main-box-->

		<footer class='bgazuleR'>
			<div class='center-footer'>
				<h5>&reg; <?php echo $ano;?> - Pennacorp Sistemas - <?php echo $idade;?> anos | Todos os direitos reservados</h5>
			</div>
		</footer>

		<div id="divfundo"  class="fundoescuro" style='z-index:1000;position:fixed;' onclick='LimparResults(false,false)'></div>
		<div class="drawer-overlay"></div>
		<script src="component/js/input_procura.js"></script>
	<?php
		} //FECHA ELSE
	?>
	</body>
</html>
