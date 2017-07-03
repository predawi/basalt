<?php $class = 'home'; ?>
<?php include 'header.php'; ?>
		
	
	<div class="centerer">
		<img src="assets/img/basalt-logo.svg" width="25" height="45" alt="">
	</div>
	
	<!-- Intro -->
	<div class="home-slider__wrapper">
		<section class="home-slider" id="home-slider">
			<!-- Slider item -->
			<div class="home-slider__item">
				<video width="500" height="500" loop>
					<source src="assets/videos/roche2.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<!-- Slider item -->
			<div class="home-slider__item">
				<video width="500" height="500" loop>
					<source src="assets/videos/roche1.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
			<!-- Slider item -->
			<div class="home-slider__item">
				<video width="500" height="500" loop>
					<source src="assets/videos/roche3.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
		</section>
	</div>
	
	<!-- Slider nav -->
	<div class="home-slider__nav__wrapper">
		<button class="section-access">
			<svg class="icon icon-caret-right" aria-hidden="true" role="img">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-caret-right"></use>
			</svg>
			<svg class="icon icon-dashed-border" aria-hidden="true" role="img">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-dashed-border"></use>
			</svg>
		</button>
		<div class="home-slider__nav" id="home-slider__nav">
			<a href="#" class="home-slider__nav__item">Exposition</a>
			<a href="#" class="home-slider__nav__item">Collectif</a>
			<a href="#" class="home-slider__nav__item">Contact</a>
		</div>
	</div>



	<!-- Section collectif -->
	<section class="base-section">
		<div class="wrapper wrapper--medium">
			<p>Basalte tire son nom d’un processus géologique, la cristallisation du magma en une roche volcanique. Basalte, c’est l’idée d’une fusion qui se concrétise en un objet singulier – l’exposition. Fondé en 2016, autour d’une même réflexion sur le milieu de l’art contemporain et de son rythme effréné, notre collectif se donne le temps de la recherche et de l’expérimentation. Convaincus que la véritable rencontre entre les œuvres, les artistes et le public se construit dans la durée, nous accompagnons la création actuelle en concevant des expositions et en soutenant la production, la diffusion et l’édition.</p>
			<div class="centerer">
				<img src="http://placehold.it/490x420" alt="">
			</div>

			<div class="dyptik">
				<img src="http://placehold.it/290x430" alt="">
				<img src="http://placehold.it/290x430" alt="">
			</div>

			<h3 class="base-section__title">Commissaires<br>d’exposition</h3>

			<h4 class="base-section__name">Maëva Gomez</h4>
			<p>Après avoir suivi un cursus universitaire en histoire, Maëva Gomez se spécialise en histoire de l’art contemporain à l’Université de Paris-Sorbonne où elle effectue des recherches sur le glitch art et l’institutionnalisation des pratiques artistiques numériques.  Elle a travaillé avec l’artiste plasticienne Orlan en tant qu’assistante et  réalise actuellement son stage au service de production  du Palais de Tokyo autour de l’exposition Dioramas, commissionnée par Laurent Le Bon, Claire Garnier et Florence Ostende.</p>
		</div>
	</section>

			
<?php include 'footer.php'; ?>