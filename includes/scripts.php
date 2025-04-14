<!-- OPEN MENU -->
<script>
	$(document).ready(function() {
		$(".sub").click(function() {
			$("#open").slideToggle();
		});
	});
</script>


<!-- MENU FIXO EFFECT-->
<script>
	$(document).ready(function() {
		$(window).scroll(function() {
			var scrollTop = $(window).scrollTop();
			if (scrollTop > 1) {
				$("#sp-header").addClass("menu-fixed");
			} else {
				$("#sp-header").removeClass("menu-fixed");
			}
		});
	});
</script>

<!-- EFEITO DESLIZANTE ANCORA -->
<script>
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>

<!-- MENU MOBILE FECHAMENTO AUTOMÁTICO -->
<script>
	if (screen.width < 985) {
		document.addEventListener("DOMContentLoaded", () => {
			let links = document.querySelectorAll(".link_menu");

			links.forEach(link => {
				console.log(link);
				link.onclick = () => {
					document.querySelector("button.navbar-togglerr").click();
				}
			});
		})
	}
</script>

    <!-- CAROUSEL - INSTA -->
	<script type="text/javascript">
  	$('#carousel-insta').owlCarousel({
  		loop: false,
  		dots: true,
  		nav: false,
  		margin: 5,
  		autoplay: true,
  		autoplayTimeout: 3000,
  		autoplayHoverPause: false,
  		responsiveClass: true,
  		responsive: {
  			0: {
  				items: 1
  			},
  			600: {
  				items: 2
  			},
  			900: {
  				items: 3
  			},
  			1000: {
  				items: 4
  			}
  		}
  	})
  </script>

<!-- CAROUSEL - PROPOSTAS -->
<script>
	$("#carousel-propostas").owlCarousel({
		loop: false,
		margin: 10,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: false,
				dots: true,
			},
			600: {
				items: 1,
				nav: false,
				dots: true,
			},
			1000: {
				items: 1,
				nav: true,
				dots: false,
			},
		},
	});
</script>

<!-- REVEAL -->
<script>
	window.sr = ScrollReveal({
		reset: true
	});

	if (window.innerWidth >= 1024) {

		// BOAS-VINDAS
		sr.reveal('.vetor h1', {
			duration: 1100,
			origin: 'left',
			distance: '80px'
		}, 80);
		sr.reveal('.setinha', {
			duration: 1300,
			origin: 'bottom',
			distance: '80px'
		}, 80);

		// PROPOSTA
		sr.reveal('#proposta h6', {
			duration: 1300,
			origin: 'right',
			distance: '80px'
		}, 80);
		sr.reveal('#proposta h1', {
			duration: 1400,
			origin: 'bottom',
			distance: '80px'
		}, 80);

		// SOBRE - MVV
		sr.reveal('#sobre p', {
			duration: 1300,
			origin: 'right',
			distance: '80px'
		}, 80);
		sr.reveal('#sobre h2', {
			duration: 1400,
			origin: 'bottom',
			distance: '80px'
		}, 80);

		// ESTRUTURA
		sr.reveal('#estrutura h1', {
			duration: 1300,
			origin: 'right',
			distance: '80px'
		}, 80);
		sr.reveal('#estrutura p', {
			duration: 1100,
			origin: 'bottom',
			distance: '80px'
		}, 80);

		// AQUI TEM
		sr.reveal('#aqui-tem p', {
			duration: 1300,
			origin: 'right',
			distance: '80px'
		}, 80);
		sr.reveal('#aqui-tem h1', {
			duration: 1100,
			origin: 'bottom',
			distance: '80px'
		}, 80);
		sr.reveal('#aqui-tem .card', {
			duration: 1200,
			origin: 'right',
			distance: '80px'
		}, 80);

		// DIREITOS
		sr.reveal('#direitos h1', {
			duration: 1300,
			origin: 'top',
			distance: '80px'
		}, 80);
		sr.reveal('#direitos p', {
			duration: 1100,
			origin: 'right',
			distance: '80px'
		}, 80);

		// CONTATO - RODAPÉ
		sr.reveal('#contato img', {
			duration: 1300,
			origin: 'top',
			distance: '80px'
		}, 80);
		sr.reveal('#contato p', {
			duration: 1100,
			origin: 'right',
			distance: '80px'
		}, 80);

	}
</script>

<!-- FIM CARREGANDO -->
<script>
	$(".body_ajax").fadeOut(2500, function() {
		$(".body_ajax").remove();
	});
</script>