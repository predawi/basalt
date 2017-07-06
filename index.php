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
	
	<div class="sliders-wrapper">

		<!-- Intro -->
		<div class="home-slider__wrapper">
			<section class="home-slider" id="home-slider">
				<!-- Slider item -->
				<div class="home-slider__item">
					<?php echo get_the_post_thumbnail( 0, 'mobile-roche-1', array( 'data-location' => 'mobile-rock', 'alt' => '#', 'class' => 'home-slider__placeholder' ) ); ?>
				</div>
				<!-- Slider item -->
				<div class="home-slider__item">
					<?php echo get_the_post_thumbnail( 0, 'mobile-roche-3', array( 'data-location' => 'mobile-rock', 'alt' => '#', 'class' => 'home-slider__placeholder' ) ); ?>
				</div>
				<!-- Slider item -->
				<div class="home-slider__item">
					<?php echo get_the_post_thumbnail( 0, 'mobile-roche-2', array( 'data-location' => 'mobile-rock', 'alt' => '#', 'class' => 'home-slider__placeholder' ) ); ?>
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

			<h3 class="base-section__name">François Dareau</h3>
			<p>Titulaire d’une licence d’Histoire de l’Art à l’Université Toulouse II, François Dareau poursuit son cursus en Master recherche à l’Université Paris-Sorbonne. Sous la direction d’Arnauld Pierre, il rédige deux travaux de recherches autour de l’artiste écossais William Turnbull (1922-2012). Également membre de l’association de jeunes commissaires Marcel, il termine actuellement un stage au Musée national Picasso-Paris auprès de la conservatrice Virginie Perdrisot, sur les expositions “Boisgeloup, l’atelier Normand de Picasso” au Musée des Beaux-Arts de Rouen et “Picasso 1932” au MnPP.</p>

			<h3 class="base-section__name">Joshua de Paiva</h3>
			<p>Joshua de Paiva est diplômé d’un master de philosophie contemporaine de l’École Normale Supérieure et de l’École des Hautes Études en Sciences Sociales. En 2016, il a effectué son mémoire de recherche en philosophie sur la pratique de Pierre Huyghe (“Le vivant mis-en-scène. Pierre Huyghe ou les enjeux d’une phénoménologie vivante”) et a travaillé au Studio Tomás Saraceno. Il a participé en tant qu’interprète à la Carte Blanche de Tino Sehgal au Palais de Tokyo. En 2017, il a travaillé au musée de la Chasse et de la Nature, comme assistant de direction éditoriale pour le n°10 de la revue Billebaude, Sur la piste animale, et assistant commissaire de l’exposition Animer le paysage / Sur la piste des vivants (dont Bruno Latour et Frédérique Aït-Touati sont les commissaires scientifiques) auprès d’Anne de Malleray. En octobre 2017, il participera au colloque international “La vie à l’oeuvre. Nouvelles écologies, bioart, biodesign”, organisé par PSL et le Labex TransferS. </p>

			<h3 class="base-section__name">Juschka Marie von Rüden</h3>
			<p>Après avoir étudié l’Histoire de l’Art à l’Université Panthéon-Sorbonne, Juschka Marie von Rüden rejoint l’Ecole du Louvre où elle poursuit un Master en Muséologie. Sous la direction de Didier Schulmann et Camille Morando elle étudie, dans le cadre de son mémoire, la sculpture interactive de l’artiste viennois Franz West.  Cette recherche a été publiée en octobre 2017 par la revue Octopus notes (numéro 7). D’origine allemande, elle a réalisé des stages à la Kunsthalle Düsseldorf et au Kunstverein für die Rheinlande und Westfalen, ainsi qu’au Centre Georges Pompidou, sous la direction de Christine Macel. Elle travaille actuellement au Palais de Tokyo en tant qu’assistante curatoriale sur l’exposition « Dioramas », commissionnée par Claire Garnier, Laurent Le Bon et Florence Ostende.</p>

			<h3 class="base-section__name">Léa Djurado</h3>
			<p>Après avoir suivi un double cursus universitaire en lettres modernes et histoire de l’art à Lyon, Léa Djurado se spécialise en histoire de l’art contemporain à l’université de Paris-Sorbonne où elle effectue des recherches sur L’esthétique de la communication de Fred Forest sous la direction de Larisa Dryansky, puis sur le collectif IFP (Information Fiction Publicité, 1984-1994) sous la direction d’Arnauld Pierre et Michel Gauthier, elle publiera prochainement un article à ce sujet dans la revue universitaire Marges n°27 : Ce que fait le concept à l’œuvre. Elle a travaillé aux côté du responsable de la collection du Musée d’art contemporain de Lyon, Hervé Percebois, et elle est actuellement assistante de la conservatrice en chef du Centre national des arts plastiques, Aude Bodet.</p>

			<h3 class="base-section__name">Elena Cardin</h3>
			<p>Après un cursus universitaire en esthétique et philosophie de l’art à l’Université de Padoue, Elena Cardin rejoint le master School for Curatorial Studies Venice où elle se spécialise en histoire de l’art contemporain et en techniques des expositions. En 2015 elle obtient le prix curatorial Lorenzo Bonaldi per l’Arte - Entreprize avec le projet d’exposition Deus sive Natura qu’elle réalise en mai 2017 à la Galerie d’Art Modern et Contemporain de Bergame, avec le soutien de la Fondation Hartung-Bergman. Elle a travaillé à l’organisation de plusieurs expositions à la Fondazione Giorgio Cini de Venise et à la galerie Bugada & Cargnel à Paris. En 2017, elle a travaillé comme assistante commissaire de la directrice artistique de la 57° Exposition Internationale d’art de la Biennale de Venise, Christine Macel.</p>

			<h3 class="base-section__name">Henri Guette</h3>
			<p>Henri Guette a pris au pied de la lettre le mot de Breton selon lequel la littérature est plus triste chemin qui mène à tout. Particulièrement intéressé par le rapport des poètes contemporains à la performance, il s'attache à Charles Pennequin à qui il consacre une étude lors d'un master de recherches en lettres modernes et se réoriente en histoire de l'art pensant à élargir son sujet. Un stage à la BPI où il assistait Jean Max Colard lors de la réalisation de Duras Song, lui révèle que l'exposition peut-être le prolongement d'une expression littéraire et précise ses ambitions. Après un an d'expérimentations au service culturel de l'Université de Lille comme chargé de projet, il intègre Paris Sorbonne et la rédaction de Beaux-Arts Magazine où il participe à la création du service web. Il travaille aujourd’hui pour différents médias toujours à l’affût de nouvelles formes d’expressions.</p>

			<h3 class="base-section__name">Eva Vaslamatzi</h3>
			<p>Eva Vaslamatzi est diplômée en histoire de l’art à l’École des Beaux-Arts d’Athènes et poursuivit ses études de recherche en esthétique à l’Université Paris 1 Panthéon-Sorbonne. Son mémoire, sous la direction de Jacinto Lageira, porte sur la production de la photographie amateur et son appropriation par des artistes qui traitent le sujet de l’inscription historique des événements traumatiques. En 2017, elle a été assistante du projet Prec(ar)ious Collectives organisé par la résidence d’artistes du Palais de Tokyo, Pavillon Neuflize OBC ; une collaboration hybride entre résidents et danseurs contemporains qui a eu lieu à Athènes. Elle a une pratique de commissaire indépendante et elle a organisé des expositions collectives de la jeune création en Grèce et en France.</p>

			<h3 class="base-section__name">Dimitri Levasseur</h3>
			<p>Diplômé d’un Master Recherche en histoire de l’art à l’université Paris-Sorbonne, Dimitri Levasseur a réalisé ses recherches sur l’artiste plasticien et vidéaste Ange Leccia. Il collabore aujourd’hui avec les artistes Ange Leccia et Dominique Gonzalez-Foerster sur différents projets. Il a eu des expériences professionnelles à l’Institut d’Art Contemporain de Villeurbanne, l'artothèque de Saint-Priest, en tant qu’assistant responsable des collections, la galerie Jeanne-Bucher-Jaeger à Paris et au service Recherche et Mondialisation dirigé par Catherine David au Centre Pompidou. Il fait actuellement partie du master pro “L’art contemporain et son exposition” à l’Université Paris-Sorbonne et travaille comme assistant curateur au Palais de Tokyo.</p>

			<h3 class="base-section__name">Leslie Veisse</h3>
			<p>Membre de l’association à but non lucratif Chalet Society, Leslie Veisse s’intéresse à expérimenter des formats d’exposition, qui intègrent multi-disciplinarité et mixité des publics. Dernièrement, elle a collaboré avec l’artiste Marjetica Potrč pour imaginer une oeuvre participative inspirée de l’architecture sociale. Dans le cadre de l’appel à projets urbains innovants Réinventer Paris, Leslie Veisse est associée à l’équipe lauréate du projet Morland, Mixité Capitale qui comprendra un espace culturel faisant office de laboratoire appelé le « Paris Art Lab ». Étudiante au sein du Master “L’art contemporain et son exposition” à l’Université Paris-Sorbonne, son mémoire porte sur la notion de liquidité de l’art contemporain. </p>

			<h3 class="base-section__name">Alexandra Goullier Lhomme</h3>
			<p>Diplômée en 2014 d’un Master Recherches en Arts Plastiques et Sciences de l’Art à l’Université de Paris 1 Panthéon-Sorbonne soutenu par un mémoire sur l’installation-performance, Alexandra Goullier Lhomme a depuis multiplié les expériences professionnelles à New York, Londres et Paris, en tant qu’assistante d’artistes et au sein de lieux artistiques de différents formats : biennale, centre d’art, artist-run space, galerie. Elle a notamment été l’assistante de Matthew Barney et de Lyle Ashton Harris, et a participé en tant qu’assistante curatoriale au programme AFTER HOURS de la biennale de performance PERFORMA en 2013 (New York), à l’exposition Nero su Bianco à l’American Academy of Rome en 2015, et en 2016 à l’exposition Strange Attractor, The Agency Gallery (Londres). Ses différents projets curatoriaux ont été : En Ligne, Éof, Paris, 2012 ; James son Ford Thomas : The Devil and his Blues, Washington Square Gallery, New York, 2014 ; École de Nice ?! « »…, Musée d’art Moderne et d’Art Contemporain de Nice, 2017. Alexandra Goullier Lhomme travaille actuellement au Palais de Tokyo en tant qu’assistante curatoriale aux côtés de Daria de Beauvais sur la prochaine Carte Blanche de Camille Henrot.</p>

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
		
		<ul class="base-section__anchors">
			<li><a href="#">       </a></li>
			<li><a href="#"></a></li>
		</ul>

		<div class="wrapper wrapper--medium" id="lancement">

			<h2 class="base-section__title">Soirée<br>de lancement</h2>

			<p>Pour son lancement, Basalte a invité les artistes Anne-Charlotte Finel, Julie Vacher, Renaud Baur et Gabriele Rendina Cattani à animer les pierres duMusée de minéralogie de MINES ParisTech - École des Mines de Paris, qui rassemble une des plus importantes collections européennes de minéraux.</p>

			<h3 class="base-section__name">Gabriele Rendina Cattani</h3>
			<p>Il n'a pas fallu plus d'une visite au Musée de minéralogie de l'école des mines à GRC pour imaginer la manière dont il pourrait investir les lieux. Manière d'affirmer la dimension unique de chaque projet, l'artiste sonore privilégie la création in situ - HELD HER LIED . Habitué aux installations qui perturbent les sens, aussi bien l'ouïe que la vue, GRC a choisi de jouer entre les vitrines sur les lumières et les sons qui émanent des galeries. Le bois craque sous les pieds, les vitres grincent et les pierres ne sont plus muettes. L'artiste travaille a maxima, cherchant à amplifier les sons, les accumulant jusqu'à les rendre méconnaissables. Comme il le revendique il fait du son parasite une respiration étincelante et attribue à l'ordre minéral une fantastique présence.</p>

			<h3 class="base-section__name">Renaud Baur</h3>
			<div class="base-section__metas">PLASTIGLOMERATES, vidéo HD, 5’ Courtesy de l’artiste </div>
			<p>Renaud Baur interroge le concept de “technocène” et propose une lecture prospective des changements à venir, du choc entre technologie et biologie, de leur hybridation inéluctable, à travers ses installations lumineuses quasi hallucinatoires. Pour son intervention au Musée de minéralogie de l’école des mines, l’artiste part du fait que chaque morceau de plastique produit depuis les années 1950 qui n’a pas été incinéré est toujours présent à la surface de la Terre. PLASTIGLOMERATES est une série de vidéos qui explore la contamination de notre biosphère par cette nouvelle couche sédimentaire.</p>

			<div class="centerer">
				<?php echo get_the_post_thumbnail( 0, 'basalte-04', array( 'data-location' => 'entry-vertical-big', 'alt' => '#' ) ); ?>
			</div>

			<h3 class="base-section__name">Anne-Charlotte Finel</h3>
			<div class="base-section__metas">Pierres, 2017, vidéo HD, 3'46'' Courtesy de l'artiste et de la galerie Jousse Entreprise </div>
			<p>Je filme lorsque la lumière s’échappe, se raréfie : à l’aube, au crépuscule, à l’heure bleue ou la nuit. Les vidéos d’Anne-Charlotte Finel semblent toujours plongées dans une forme d’entre-deux, à la lisière de la fiction et du réel, du paysage urbain et du naturel, de la lumière et de l’obscurité. Filmés sous des lumières fugitives, ses sujets et paysages agissent comme des souvenirs, des rêves ou des visions. Les fragments de paysages capturés par de lents et vertigineux mouvements de caméra conduisent quant à eux le film au plus près de sa dissolution, donnant alors la pleine mesure du tour de force opéré par Anne-Charlotte Finel : parvenir à mettre le visiteur face à l’inconséquence des images.</p>

			<div class="centerer">
				<?php echo get_the_post_thumbnail( 0, 'basalte-05', array( 'data-location' => 'entry-default-small', 'alt' => '#' ) ); ?>
			</div>

			<h3 class="base-section__name">Julie Vacher</h3>
			<div class="base-section__metas">Formose Phonique II, 2016. Installation vidéo et sonore. Vidéo 16/9 full hd, son en quadriphonie, 14min. Courtesy de l’artiste</div>
			<p>Dans son film Formose Phonique - filmé au musée de la maison des minéraux de Crozon -, Julie Vacher interroge la mémoire des pierres et pose la questions de l’identité des territoires vécus et racontés de manière subjective au travers des projections, des fantasmes et des souvenirs de chacun. Construit comme un voyage initiatique accompagnée d’une voix-off en mandarin - enregistré lors d’une résidence artistique à Taïwan : celle d’une vieille femme qui guide une jeune fille dans sa recherche d’une pierre, le film nous plonge dans un territoire hybride où la Bretagne côtoie les îles d’Asie. Pris dans un va et vient entre la vidéo et la bande sonore, le paysage se dessine, entre espace réel et espace mental. </p>

			<div class="centerer">
				<?php echo get_the_post_thumbnail( 0, 'basalte-06', array( 'data-location' => 'entry-default-small', 'alt' => '#' ) ); ?>
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

		<div class="wrapper wrapper--medium" id="ombres">
			
			<h2 class="base-section__title">Nos<br>ombres<br>devant<br>nous</h2>

			<p>Toute énergie résulte d’une relative inquiétude ou ruine de la matière. C’est une forme de désordre qui peut être observée à différentes échelles. La vapeur d’eau – un état de la matière désordonné par excellence, à l’échelle microscopique – produite par la rencontre entre l’eau et le feu dans une locomotive à vapeur, est bien, malgré son état instable, source d’énergie mécanique. C’est l’entropie qui mesure le degré de désordre ou d’incertitude d’un système thermodynamique ou d’un ensemble de données. Lorsqu’elle est nulle, le système est ordonné, certain. C’est ainsi que chez Robert Smithson, le bac à sable vaut comme métaphore de la ruine et d’une entropie universelle croissante : une irréversible augmentation du désordre de la matière, dans un temps non plus linéaire mais circulaire. </p>

			<p>Précisément, l’exposition collective présentée à la Fondation d’entreprise Ricard semble s’élever en ruines. Les pratiques des 9 artistes se contaminent et prolifèrent, sur la base d’un manque d’in-formation : la matière se forme et se déforme, mute et se cristallise, dans des systèmes ouverts, incertains, désordonnés. De leurs œuvres émane un degré élevé d’incertitude, et la forme leur fait défaut, comme si elles ne pouvaient échapper à un puissant principe d’entropie. Elles créent parfois des équilibres, le plus souvent précaires, et répondent au désordre par le désordre.</p>

			<p>Alors que les ruines à l’envers de Passaic décrites par Smithson sont des produits encore exclusivement humains, des monuments mis en ruines avant même d’être construits ; aujourd’hui, nos ruines revêtent un caractère hybride. Elles donnent souvent l’impression d’être co-produites par la nature, comme à Fordlandia, au Brésil, où la végétation prolifère en s’immisçant dans les interstices. Pour maîtriser les coûts de production de ses pneus en caoutchouc, Ford y avait imaginé une ville idéale, fondée sur une logique de production de capital et de recherche du profit. Le climat et la nature ont repris leurs droits là où ils n’avaient pas été pris en considération par le modèle économique du fordisme. Au cœur de la ville fantôme ruinée et désaffectée, le soleil tropical, les insectes et la forêt réaniment aujourd’hui les bâtiments abandonnés et les carcasses de voitures. La ruine, dans ses formes contemporaines, n’est plus une question strictement humaine : les ruines anthropiques, à des échelles variables, sont prises au sein d’écosystèmes étendus. Elles ne sont plus accidentelles et contingentes, mais inévitables. S’élever en ruines, c’est rendre sensible la métaphore d’une vision post-humaniste où nous nous trouvons sommés de reconsidérer notre manière de modifier continuellement nos habitats et, plus loin, nos manières d’habiter. C’est aussi repenser notre rapport au temps, sur la base d’une inversion et de manière non linéaire.</p>

			<p>Dans ce contexte, les jeunes artistes proposent des œuvres dans lesquelles les équilibres instables et toujours incertains, d’intensités variables, créent des abris fragiles et temporaires. La poésie réflective du duo d’artistes Nid Gâté, les formes et contre-formes de MAHALIA KÖHNKE-JEHL, les environnements parasitaires de CÉCILE SERRES, et les architectures éphémères de RADOUAN ZEGHIDOUR sont des refuges. Le romantisme, sous cette forme actualisée, caractérise une certaine conception du monde, enracinée dans une critique de la modernité et une révolte contre l’esprit du techno-capitalisme, contre un certain désenchantement du monde. A l’ère de l’Anthropocène ou du Capitalocène, l’attitude romantique est une forme de contre-culture, un regard porté vers l’idéal d’un passé pré-capitaliste, vers des temps et des lieux disparus ou imaginaires, comme chez LUCIE PLANTY ou NATHANAËLLE HERBELIN. Elle adopte une esthétique de la ruine, qui, décolonisée, résonne avec les enjeux écologiques, éthiques et politiques d’un temps où il est de plus en plus urgent de repenser la place de l’homme dans le monde et de questionner le sens de son histoire.</p>

			<p>Ces artistes proposent des récits, des fictions qui émergent de ruines, de chroniques des siècles passés, d’archives ou encore de fables populaires ou de traditions folkloriques, comme chez MATTHIEU HABERARD : ils nous engagent à réinvestir un passé commun, à tenter, au moins pour un temps, de l’habiter. Relire – lorsque, avec TIMOTHÉE CHALAZONITIS, des traces de texte et des bribes d’information résistent à la disparition et à la perte de sens – et ériger les ruines, c’est les voir sous un autre jour, dans une nouvelle lumière. Le constat désolé de Georges Bataille, “Les hommes sont trop peu soleil”, prend un sens réactualisé et politique. Contre notre tendance à retenir, épargner et protéger, devenir-soleil implique de nous repositionner au sein d’un cosmos élargi. Le soleil représenterait ainsi le modèle d’une autre existence humaine, toute tendue vers une dépense énergétique pure, improductive, généreuse. Remettre les ruines en chantier, ébranler les dichotomies établies mais définitivement obsolètes (et dramatiquement contagieuses) entre “progrès” et “déclin” – en interrogeant, avec VLADIMIR HERMAND, une perception augmentée technologiquement –, c’est encore construire des mondes qui suggèrent un autre futur possible, un échec positif. Dans le présent, dans le pire ; un refuge, une fuite : </p>

			<div class="base-section__def">
				<span>Principe développé en physique mais aussi en théorie de l’information. Il a été appliqué, métaphoriquement, à de nombreuses théories.</span>
				<span>Voir Xavier Boissel, “Esquisse d’une esthétique de l’entropie : une aventure des années 60”,  L’Art même, n° 55, 2e trimestre 2012.</span>
				<span>Concept alternatif à celui d’Anthropocène, dans une hypothèse formulée notamment par Andreas Malm (doctorant en écologie humaine à l’Université de Lund en Suède) ou Donna Haraway.</span>
				<span>Voir Michael Löwy et Robert Sayre, Révolte et mélancolie. Le romantisme à contre-courant de la modernité, 1992. Le romantisme y est défini comme “autocritique de la modernité”. L’attitude romantique s’attaque aux caractéristiques de la société capitaliste moderne : esprit de calcul, mécanisation, désenchantement du monde (Max Weber), rationalité instrumentale, dissolution des relations sociales communautaires, etc. On pourrait déceler, aujourd’hui, un nouveau souffle de cet état d’esprit dans les critiques adressées au capitalisme dans le cadre d’une prise de conscience écologique globale.</span>
				<span>Georges Bataille, Le Coupable, 1944, Gallimard. “On n'imagine plus de réduire la vie à la simplicité du soleil. Chacun de nous toutefois, porte en lui cette simplicité : il l'oublie pour des complications de hasard, dépendant de l'angoisse avare du moi.”</span>
				<span>Citation extraite du poème d’Yves Bonnefoy, “Une pierre”, du recueil Les Planches courbes, éditions du Mercure de France, 2001.
				“Nos ombres devant nous, sur le chemin, / Avaient couleur, par la grâce de l’herbe / Elles eurent rebond, contre des pierres (...)”. Yves Bonnefoy, né en 1923 et mort en 2016, est un poète et critique d’art français qui se réclamait, notamment, de l’héritage de Baudelaire et de toute la tradition romantique.</span>
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