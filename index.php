<?php $class = 'home'; ?>
<?php include 'header.php'; ?>
		
	
	<div class="centerer">
		<div class="logo">
			<a href="#" class="logo__link">
				<svg class="icon icon-basalte-logo" aria-hidden="true" role="img">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-basalte-logo"></use>
				</svg>
			</a>
		</div>
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
			<a href="#" class="home-slider__nav__item" data-section="exposition">Expositions</a>
			<a href="#" class="home-slider__nav__item" data-section="collectif">Collectif</a>
			<a href="#" class="home-slider__nav__item" data-section="contact">Contact</a>
		</div>
	</div>


	<div class="rocks" id="rocks">
		<div class="rock rock-01"><?php echo get_the_post_thumbnail( 0, 'roche-3', array( 'data-location' => 'small-rock', 'alt' => '#' ) ); ?></div>
		<div class="rock rock-02"><?php echo get_the_post_thumbnail( 0, 'roche-2', array( 'data-location' => 'small-rock', 'alt' => '#' ) ); ?></div>
		<div class="rock rock-03"><?php echo get_the_post_thumbnail( 0, 'roche-2', array( 'data-location' => 'small-rock', 'alt' => '#' ) ); ?></div>
		<div class="rock rock-04"><?php echo get_the_post_thumbnail( 0, 'roche-1', array( 'data-location' => 'small-rock', 'alt' => '#' ) ); ?></div>
		<div class="rock rock-05"><?php echo get_the_post_thumbnail( 0, 'roche-1', array( 'data-location' => 'small-rock', 'alt' => '#' ) ); ?></div>
		<div class="rock rock-06"><?php echo get_the_post_thumbnail( 0, 'roche-3', array( 'data-location' => 'small-rock', 'alt' => '#' ) ); ?></div>
	</div>

	<!-- Section Collectif -->
	<section class="base-section base-section--collectif" id="collectif">
		<div class="wrapper wrapper--medium">
			<p>Basalte tire son nom d’un processus géologique, la cristallisation du magma en une roche volcanique. Basalte, c’est l’idée d’une fusion qui se concrétise en un objet singulier – l’exposition. Fondé en 2016, autour d’une même réflexion sur le milieu de l’art contemporain et de son rythme effréné, notre collectif se donne le temps de la recherche et de l’expérimentation. Convaincus que la véritable rencontre entre les œuvres, les artistes et le public se construit dans la durée, nous accompagnons la création actuelle en concevant des expositions et en soutenant la production, la diffusion et l’édition.</p>
			<div class="centerer">
				<?php echo get_the_post_thumbnail( 0, 'basalte-01', array( 'data-location' => 'entry-default', 'alt' => '#' ) ); ?>
			</div>

			<div class="dyptik">
				<?php echo get_the_post_thumbnail( 0, 'basalte-02', array( 'data-location' => 'entry-vertical', 'alt' => '#' ) ); ?>
				<?php echo get_the_post_thumbnail( 0, 'basalte-03', array( 'data-location' => 'entry-vertical', 'alt' => '#' ) ); ?>
			</div>

			<h2 class="base-section__title">Commissaires<br>d’exposition</h2>

			<h3 class="base-section__name">Maëva Gomez</h3>
			<p>Après avoir suivi un cursus universitaire en histoire, Maëva Gomez se spécialise en histoire de l’art contemporain à l’Université de Paris-Sorbonne où elle effectue des recherches sur le glitch art et l’institutionnalisation des pratiques artistiques numériques.  Elle a travaillé avec l’artiste plasticienne Orlan en tant qu’assistante et  réalise actuellement son stage au service de production  du Palais de Tokyo autour de l’exposition Dioramas, commissionnée par Laurent Le Bon, Claire Garnier et Florence Ostende.</p>

				<!-- Close button -->
			<button class="section-access">
				<svg class="icon icon-caret-right" aria-hidden="true" role="img">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-caret-right"></use>
				</svg>
				<svg class="icon icon-dashed-border" aria-hidden="true" role="img">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-dashed-border"></use>
				</svg>
			</button>

		</div>
	</section>

	<!-- Section Exposition -->
	<section class="base-section base-section--exposition" id="exposition" data-theme="white">

		<div class="wrapper wrapper--medium">
			<p>Pour son lancement, Basalte a invité les artistes Anne-Charlotte Finel, Julie Vacher, Renaud Baur et Gabriele Rendina Cattani à animer les pierres duMusée de minéralogie de MINES ParisTech - École des Mines de Paris, qui rassemble une des plus importantes collections européennes de minéraux.</p>

			<h3 class="base-section__name">Gabriele Rendina Cattani</h3>
			<p>Il n'a pas fallu plus d'une visite au Musée de minéralogie de l'école des mines à GRC pour imaginer la manière dont il pourrait investir les lieux. Manière d'affirmer la dimension unique de chaque projet, l'artiste sonore privilégie la création in situ - HELD HER LIED . Habitué aux installations qui perturbent les sens, aussi bien l'ouïe que la vue, GRC a choisi de jouer entre les vitrines sur les lumières et les sons qui émanent des galeries. Le bois craque sous les pieds, les vitres grincent et les pierres ne sont plus muettes. L'artiste travaille a maxima, cherchant à amplifier les sons, les accumulant jusqu'à les rendre méconnaissables. Comme il le revendique il fait du son parasite une respiration étincelante et attribue à l'ordre minéral une fantastique présence.</p>

			<h3 class="base-section__name">Renaud Baur</h3>
			<div class="base-section__metas">PLASTIGLOMERATES, vidéo HD, 5’ Courtesy de l’artiste </div>
			<p>Renaud Baur interroge le concept de “technocène” et propose une lecture prospective des changements à venir, du choc entre technologie et biologie, de leur hybridation inéluctable, à travers ses installations lumineuses quasi hallucinatoires. Pour son intervention au Musée de minéralogie de l’école des mines, l’artiste part du fait que chaque morceau de plastique produit depuis les années 1950 qui n’a pas été incinéré est toujours présent à la surface de la Terre. PLASTIGLOMERATES est une série de vidéos qui explore la contamination de notre biosphère par cette nouvelle couche sédimentaire.</p>

			<div class="centerer">
				<?php echo get_the_post_thumbnail( 0, 'basalte-01', array( 'data-location' => 'entry-vertical-big', 'alt' => '#' ) ); ?>
			</div>

			<h3 class="base-section__name">Anne-Charlotte Finel</h3>
			<div class="base-section__metas">Pierres, 2017, vidéo HD, 3'46'' Courtesy de l'artiste et de la galerie Jousse Entreprise </div>
			<p>Je filme lorsque la lumière s’échappe, se raréfie : à l’aube, au crépuscule, à l’heure bleue ou la nuit. Les vidéos d’Anne-Charlotte Finel semblent toujours plongées dans une forme d’entre-deux, à la lisière de la fiction et du réel, du paysage urbain et du naturel, de la lumière et de l’obscurité. Filmés sous des lumières fugitives, ses sujets et paysages agissent comme des souvenirs, des rêves ou des visions. Les fragments de paysages capturés par de lents et vertigineux mouvements de caméra conduisent quant à eux le film au plus près de sa dissolution, donnant alors la pleine mesure du tour de force opéré par Anne-Charlotte Finel : parvenir à mettre le visiteur face à l’inconséquence des images.</p>

			<div class="centerer">
				<?php echo get_the_post_thumbnail( 0, 'basalte-01', array( 'data-location' => 'entry-default-small', 'alt' => '#' ) ); ?>
			</div>

			<h3 class="base-section__name">Julie Vacher</h3>
			<div class="base-section__metas">Formose Phonique II, 2016. Installation vidéo et sonore. Vidéo 16/9 full hd, son en quadriphonie, 14min. Courtesy de l’artiste</div>
			<p>Dans son film Formose Phonique - filmé au musée de la maison des minéraux de Crozon -, Julie Vacher interroge la mémoire des pierres et pose la questions de l’identité des territoires vécus et racontés de manière subjective au travers des projections, des fantasmes et des souvenirs de chacun. Construit comme un voyage initiatique accompagnée d’une voix-off en mandarin - enregistré lors d’une résidence artistique à Taïwan : celle d’une vieille femme qui guide une jeune fille dans sa recherche d’une pierre, le film nous plonge dans un territoire hybride où la Bretagne côtoie les îles d’Asie. Pris dans un va et vient entre la vidéo et la bande sonore, le paysage se dessine, entre espace réel et espace mental. </p>

			<div class="centerer">
				<?php echo get_the_post_thumbnail( 0, 'basalte-01', array( 'data-location' => 'entry-default-small', 'alt' => '#' ) ); ?>
			</div>

			<!-- Close button -->
			<button class="section-access">
				<svg class="icon icon-caret-right" aria-hidden="true" role="img">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-caret-right"></use>
				</svg>
				<svg class="icon icon-dashed-border" aria-hidden="true" role="img">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-dashed-border"></use>
				</svg>
			</button>

		</div>
	</section>
	
	<!-- Section Contact -->
	<section class="base-section base-section--contact" id="contact" data-theme="white">
		<h3 class="base-section__name">Informations Générales</h3>
		<p>contact@basalte.org</p>

		<h3 class="base-section__name">Presse</h3>
		<p>presse@basalte.org</p>

		<section class="meeting">
			<a href="https://www.facebook.com/art.basalte/" target="_blank">
				<svg class="icon icon-facebook" aria-hidden="true" role="img">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use>
				</svg>
			</a>
			<a href="https://www.instagram.com/basalte.collectif/" target="_blank">
				<svg class="icon icon-instagram" aria-hidden="true" role="img">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-instagram"></use>
				</svg>
			</a>
		</section>
	</section>

			
<?php include 'footer.php'; ?>