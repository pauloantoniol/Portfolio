<div class='content-wrap container'>
	<div class='conteudo content'>
		<h1>Galeria de Trabalhos</h1>
		<!-- Top Navigation -->
		<section class="grid3d vertical" id="grid3d">
			<div class="grid-wrap">
				<div class="grid">
					<figure class="effect-sarah" >
						<a href="/trabalhos/finn" >
							<img src="component/image/1.jpg" alt="img01"/>
							<figcaption>
								<h2>FINN <span>O humano</span></h2>
							</figcaption>
						</a>
					</figure>
					<a onclick="mudalink('final');">
						<figure class="effect-sarah" >
							<img src="component/image/4.jpg" alt="img04"/>
							<figcaption>
								<h2>TRABALHO <span>FINAL</span></h2>
							</figcaption>
						</figure>
					</a>
					<a onclick="mudalink('pintura');">
						<figure class="effect-sarah" >
							<img src="component/image/6.jpg" alt="img06"/>
							<figcaption>
								<h2>PINTURA <span>DIGITAL</span></h2>
							</figcaption>
						</figure>
					</a>
					<a onclick="mudalink('4estacoes');">
						<figure class="effect-sarah" >
							<img src="component/image/9.jpg" alt="img09"/>
							<figcaption>
								<h2>QUATRO <span>ESTA��ES</span></h2>
							</figcaption>
						</figure>
					</a>
				</div>
			</div><!-- /grid-wrap -->
			<div class="galeria">
				<div>
					<div class="dummy-img"><img src="component/image/1.jpg" alt="img01"/></div>
					<p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
				</div>
				<div>
					<div class="dummy-img"><img src="component/image/4.jpg" alt="img04"/></div>
					<p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<div class="dummy-img"><img src="component/image/3.jpg" alt="img03"/></div>
					<p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
				</div>
				<div>
					<div class="dummy-img"><img src="component/image/6.jpg" alt="img06"/></div>
					<p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<div class="dummy-img"><img src="component/image/7.jpg" alt="img07"/></div>
					<p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
				</div>
				<div>
					<div class="dummy-img"><img src="component/image/9.jpg" alt="img09"/></div>
					<p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<div class="dummy-img"><img src="component/image/2.jpg" alt="img02"/></div>
					<p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<div class="dummy-img"><img src="component/image/5.jpg" alt="img05"/></div>
					<p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<div class="dummy-img"><img src="component/image/8.jpg" alt="img08"/></div>
					<p class="dummy-text">The only people for me are the mad ones, the ones who are mad to live, mad to talk, mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
				</div>
				<span class="loading"></span>
				<span class="close-galeria"><i class='fa fa-fw fa-close'></i></span>
			</div>
		</section>
	</div>
</div>
<input type='hidden' value='<?= $url ?>' />
<script src="component/sweets/galeria/modernizr2.custom.js"></script>
<script src="component/sweets/galeria/grid3d.js"></script>
<script src="component/sweets/galeria/helper.js"></script>
<script>
	new grid3D( document.getElementById( 'grid3d' ) );

	if ($(window).width() > 640) {
		$('figure figcaption').css( "color","#777");
	}else{
		$('figure figcaption').css( "color","#fff");
	}


	[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
		el.addEventListener( 'click', function(ev) {
			ev.preventDefault();
		} );
	} );
</script>
