<div class="menu-wrap">
	<nav class="menu-responsivo">
		<div class="icon-list">
			
			<a href="/eu"><i class="fa fa-fw fa-user"></i><span>Prazer Paulo</span></a>
			
			<a href="/trabalhos"><i class="fa fa-fw fa-file-image-o"></i><span>Trabalhos</span></a>
			
			<a class='contato'><i class="fa fa-fw fa-envelope"></i><span>Pegue em e-mail</span></a>
			
			<a href="https://www.facebook.com/pauloantoniolfc" target="_blank">
				<i class="fa fa-fw fa-facebook"></i><span>Facebook</span>
			</a>
			
			<a href="https://twitter.com/pauloantoniol" target="_blank">
				<i class="fa fa-fw fa-twitter"></i><span>Twitter</span>
			</a>
			
			<a href="https://www.behance.net/pauloantoniol" target="_blank">
				<i class="fa fa-fw fa-behance"></i><span>Behance</span>
			</a>
			
			<a href="https://github.com/pauloantoniol" target="_blank">
				<i class="fa fa-fw fa-github"></i><span>GitHub</span>
			</a>
		</div>
	</nav>
	<button class="close-button" id="close-button"></button>
	<div class="morph-shape" id="morph-shape" 
		 data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
		
		<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" 
			 viewBox="0 0 100 800" preserveAspectRatio="none">
			
			<path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z"/>
		</svg>
	</div>
</div>

<menu>
	<nav>
		<h4 class='w260 float-left' id='logo'><a href="/home">Paulo Antonio</a></h4>
		
		<h4 class='w10 float-left' id='logo2'><a href="/home">P.A</a></h4>
		
		<ul class='float-right'>
			
			<li><a href="/eu">Prazer Paulo</a></li>
			
			<li><a href="/trabalhos">Trabalhos</a></li>
			
			<li title="Pegue Meu E-mail" ><a class='contato icone'>
				<i class="fa fa-fw fa-envelope"></i>
			</a></li>
			
			<li title="Siga-me no Facebook" ><a href="https://www.facebook.com/pauloantoniolfc" target="_blank" class='icone'>
				<i class="fa fa-fw fa-facebook"></i>
			</a></li>
			
			<li title="Siga-me no Twitter" ><a href="https://twitter.com/pauloantoniol" target="_blank" class='icone'>
				<i class="fa fa-fw fa-twitter"></i>
			</a></li>
			
			<li title="Siga-me no Behance" ><a href="https://www.behance.net/pauloantoniol" target="_blank" class='icone'>
				<i class="fa fa-fw fa-behance"></i>
			</a></li>
			
			<li title="Siga-me no GitHub" ><a href="https://github.com/pauloantoniol" target="_blank" class='icone'>
				<i class="fa fa-fw fa-github"></i>
			</a></li>
		</ul>
	</nav>

	<section class='content'>
		<h4 class='w260 float-right' id='logo3'><a href="home">Paulo Antonio</a></h4>
		<button class="menu-button" id="open-button"></button>
	</section>
</menu>

<script>
		$(document).ready(function() {
			$('nav ul li').tooltipster({
				position: 'bottom',
				onlyOne: true
			});
		});
</script>
