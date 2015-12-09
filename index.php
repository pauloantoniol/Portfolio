<?php
	ob_start();
	require('component/import.php');
?>

	</head>

<?php
	$pagina == '404' ? die( include ('pages/404.php') ) : "";
?>

	<body class="clearfix <?= $cor ?>" >
		<header class='<?= $menu_home ?>'>
			<span>Portfolio</span>
			<h1>Paulo Antonio</h1>
		</header>

		<?php
			if($menu_others == true){
				require('pages/menu-responsivo.php');
			}
			else{
				require('pages/fundo-interativo.php');
			}
		?>

		<div class="main">
			<?php  include ('pages/'.$pagina.'.php'); ?>
		</div>
		<?php
			if($menu_others == true){
		?>
			<script type="text/javascript" src="/component/sweets/menu-responsivo/main3.js"></script>
		<?php
			}
		?>

		<footer>

		</footer>

		<input type='hidden' id='device' value='<?= $mobileOuPc ?>'/>
	</body>
</html>
