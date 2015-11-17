	<link rel="stylesheet" type="text/css" href="component/sweets/menu/css/circlemenu.css" />
	<div class="container-menu">
		<nav id="menu" class="menu" title='Click e descubra mais!'>
			<span class="morph-shape" data-morph-active="M251,150c0,93.5-29.203,143-101,143S49,243.5,49,150C49,52.5,78.203,7,150,7S251,51.5,251,150z">
				<svg width="100%" height="100%" viewBox="0 0 300 300" preserveAspectRatio="none">
					<path d="M281,150c0,71.797-59.203,131-131,131S19,221.797,19,150S78.203,19,150,19S281,78.203,281,150z"/>
				</svg>
			</span>
			<button class="trigger">hi!</button>
			<ul class="menu__items">
				<li title="Um pouco sobre mim!"><a href="#"><i class="fa fa-fw fa-user"></i></a></li>
				<li title="Meus trabalhos"><a href="trabalhos"><i class="fa fa-fw fa-file-image-o"></i></a></li>
				<li title="Minha história academica"><a href="#"><i class="fa fa-fw fa-graduation-cap"></i></a></li>
				<li title="Entre em contato!"><a href="#"><i class="fa fa-fw fa-envelope"></i></a></li>
				<li class='hide'></li>
				<li title="Siga-me no Behance"><a href="https://www.behance.net/pauloantoniol" target="_blank"><i class="fa fa-fw fa-behance"></i></a></li>
				<li title="Siga-me no GitHub"><a href="https://github.com/pauloantoniol" target="_blank"><i class="fa fa-fw fa-github"></i></a></li>
				<li title="Siga-me no Facebook"><a href="https://www.facebook.com/pauloantoniolfc" target="_blank"><i class="fa fa-fw fa-facebook"></i></a></li>
			</ul>
		</nav>
	</div>
	<script>
		var justAnimate = false;

		$(document).ready(function() {
			$('#menu').tooltipster({
				position: 'bottom',
				touchDevices: false
			});

			$('#menu').tooltipster('show');

			$('#menu').hover(function(){
				$(this).tooltipster('hide');
			});

			if ($(window).width() > 640) {
				$('.menu__items li:eq(0)').tooltipster({
					offsetX: '0',
					offsetY: '250',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});

				$('.menu__items li:eq(1)').tooltipster({
					offsetX: '-93',
					offsetY: '204',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});

				$('.menu__items li:eq(2)').tooltipster({
					offsetX: '-140',
					offsetY: '110',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});

				$('.menu__items li:eq(3)').tooltipster({
					offsetX: '-94',
					offsetY: '17',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});

				$('.menu__items li:eq(5)').tooltipster({
					offsetX: '94',
					offsetY: '17',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});

				$('.menu__items li:eq(6)').tooltipster({
					offsetX: '140',
					offsetY: '110',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});

				$('.menu__items li:eq(7)').tooltipster({
					offsetX: '93',
					offsetY: '204',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});
			}
			else{
				$('.menu__items li:eq(0)').tooltipster({
					offsetX: '-6',
					offsetY: '170',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});

				$('.menu__items li:eq(1)').tooltipster({
					offsetX: '-80',
					offsetY: '132',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});

				$('.menu__items li:eq(2)').tooltipster({
					offsetX: '-118',
					offsetY: '57',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});

				$('.menu__items li:eq(3)').tooltipster({
					offsetX: '-81',
					offsetY: '-23',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});

				$('.menu__items li:eq(5)').tooltipster({
					offsetX: '70',
					offsetY: '-23',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});


				$('.menu__items li:eq(6)').tooltipster({
					offsetX: '106',
					offsetY: '57',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});

				$('.menu__items li:eq(7)').tooltipster({
					offsetX: '70',
					offsetY: '132',
					position: 'bottom',
					touchDevices: false,
					onlyOne: true
				});
			}

			var t;
			var intervalId;
			var v;
			$(window).mousemove(function() {
				if($("#device").val() == 'desktop'){
					var i = 0;
					justAnimate = false;
					clearTimeout(v);
					clearTimeout(t);
					clearInterval(intervalId);
					if($(".menu__items li a").hasClass('brilha')){
						$(".menu__items li:eq("+$(".menu__items li a.brilha").parent().index()+")").tooltipster('hide');
					}
					$(".menu__items li a").removeClass('brilha');
					if($(".menu__items").is(":hover")){
						return;
					}

					if (!justAnimate && $("#menu").hasClass('menu--open')) {
						t = setTimeout(function(){justAnimate = true;}, 3000);
						intervalId = setInterval(function() {
							$(".menu__items li a").removeClass('brilha');
							$(".menu__items li:eq("+i+") a").addClass('brilha');
							$('.menu__items li:eq('+i+')').tooltipster('show');
							i++;
							switch (i) {
								case 8:		i = 0;		break;
								case 4:		i = 5;		break;
							}
						}, 3000);
					}else{
						justAnimate = false;
						if($("#menu").hasClass('menu--open').toString() == 'false'){
							v = setTimeout(function(){$('#menu').tooltipster('show');}, 8000);
						}
					}
				}
			});

			$("#menu button").on("click",function(){
				if($("#device").val() == 'celular'){
					setTimeout( function() {
						if($("#menu").hasClass('menu--open')){
							var i = 0;
							clearInterval(intervalId);
							intervalId = setInterval(function() {
								$(".menu__items li a").removeClass('brilha');
								$(".menu__items li:eq("+i+") a").addClass('brilha');
								$('.menu__items li:eq('+i+')').tooltipster('show');
								i++;
								switch (i) {
									case 8:		i = 0;		break;
									case 4:		i = 5;		break;
								}
							}, 3000);
						}else{
							clearInterval(intervalId);
							if($(".menu__items li a").hasClass('brilha')){
								$(".menu__items li:eq("+$(".menu__items li a.brilha").parent().index()+")").tooltipster('hide');
							}
							$(".menu__items li a").removeClass('brilha');
							v = setTimeout(function(){$('#menu').tooltipster('show');}, 8000);
						}
					},200);
				}
			});

			$("#menu li a").on("click",function(){
				if($("#device").val() == 'celular'){
					clearInterval(intervalId);
					if($(".menu__items li a").hasClass('brilha')){
						$(".menu__items li:eq("+$(".menu__items li a.brilha").parent().index()+")").tooltipster('hide');
					}
					$(".menu__items li a").removeClass('brilha');
					$("#menu button").click();
					setTimeout( function() {
						clearTimeout(v);
						if($("#menu").hasClass('menu--open').toString() == 'false'){
							v = setTimeout(function(){$('#menu').tooltipster('show');}, 8000);
						}
					},200);
				}
			});

			$(document).on('click touchstart', function () {
				if($("#device").val() == 'celular'){
					setTimeout( function() {
						clearTimeout(v);
						if($("#menu").hasClass('menu--open').toString() == 'false'){
							v = setTimeout(function(){$('#menu').tooltipster('show');}, 7800);
						}
					},200);
				}
			});

		});


		(function() {

			function SVGMenu( el, options ) {
				this.el = el;
				this.init();
			}

			SVGMenu.prototype.init = function() {
				this.trigger = this.el.querySelector( 'button.trigger' );
				this.shapeEl = this.el.querySelector( 'span.morph-shape' );

				var s = Snap( this.shapeEl.querySelector( 'svg' ) );
				this.pathEl = s.select( 'path' );
				this.paths = {
					reset : this.pathEl.attr( 'd' ),
					active : this.shapeEl.getAttribute( 'data-morph-active' )
				};

				this.isOpen = false;

				this.initEvents();
			};

			SVGMenu.prototype.initEvents = function() {
				this.trigger.addEventListener( 'click', this.toggle.bind(this) );
			};

			SVGMenu.prototype.toggle = function() {
				var self = this;

				if( this.isOpen ) {
					classie.remove( this.el, 'menu--open' );
					$(".trigger").html('hi!');
				}
				else {
					setTimeout( function() {
						classie.add( self.el, 'menu--open' );
						$(".trigger").html('click');
					}, 175 );
				}

				this.pathEl.stop().animate( { 'path' : this.paths.active }, 150, mina.easein, function() {
					self.pathEl.stop().animate( { 'path' : self.paths.reset }, 800, mina.elastic );
				} );

				this.isOpen = !this.isOpen;
			};

			new SVGMenu( document.getElementById( 'menu' ) );

		})();
	</script>
