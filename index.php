
<?php

$root = ''; 

// Title à remplir
$title = 'Accueil';

// TO DO : description à faire
$desc = 'L\'éthiquette est une application mobile qui permet de scanner les vêtements et d’obtenir une information claire sur l’impact du produit sur l\'environnement !';

include $root.'php/inc/header.inc.php';
?>
<main id="index">
	<section id="hero">
		<div class="conteneur">
			<h1>Habillez vous éthique, devenez acteur pour la planète</h1>
			<div class="vignettes-stores">
				<a href="https://www.apple.com/fr/ios/app-store/" title="Accéder à l'app store"><img src="<?= $root ?>img/telecharger-appstore.svg" alt="bouton app store"></a>
				<a href="https://play.google.com/store" title="Accéder au play store"><img src="<?= $root ?>img/telecharger-playstore.svg" alt="bouton play store"></a>
			</div>
			<h2>Il vous suffit de scanner !</h2>
			<p>L’ethiquette, l’application mobile qui vous permet de décrypter la composition de vos vêtements pour évaluer leur impact sur la planète et ainsi agir pour une mode plus responsable et locale.</p>
			<a href="#presentation" title="Voir la vidéo de présentation de l'application" class="button1 js-scrollto">
                <div><span>Voir la vidéo</span></div>
            </a>
		</div>
	</section>
	<section id="presentation">
		<div class="conteneur">
			<h2>Découvrez notre application</h2>
			<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/cG5M8C8MIw8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</section>
	<section id="detail">
		<div class="conteneur buttonCard">

			<article>
				<div>
					<div>
						<div>
							<h2>Scannez et évaluez vos vêtements</h2>
						</div>
						<div>
							<h4>En un clin d'oeil !</h4>
							<p>Connaissez-vous vraiment l’origine, la composition et les différentes étapes qui on servit à produire vos vêtements ? Grâce à nous, oui ! <br> Avec notre application, vous pouvez simplement scanner les etiquettes pour obtenir dans la seconde la note et le détail de vos vêtements !</p>
						</div>
					</div>
					<div>
					</div>
				</div>
				<div>
					<a href="pages/application.php" class="button2" title="En savoir plus">En savoir plus</a>
				</div>
			</article>

			<article>
				<div>
					<div>
						<div>
							<h2>Comparez des milliers de vêtements et obtennez des recommandations</h2>
						</div>
						<div>
							<h4>Faites le bon choix !</h4>
							<p>Avec l’ethiquette vous ne pourrez plus vous tromper !
								Pour chaque produits scannés mauvais, nous vous recommanderons nos produits préférés, plus éthiques et meilleurs pour la planète.</p>
						</div>
					</div>
					<div>
					</div>
				</div>
				<div>
					<a href="pages/application.php" class="button2" title="En savoir plus">En savoir plus</a>
				</div>
			</article>

			<article>
				<div>
					<div>
						<div>
							<h2>Participez au commerce de proximité dans nos boutiques partenaires locales</h2>
						</div>
						<div>
							<h4>Click&collect</h4>
							<p>Connaissez-vous vraiment l’origine, la composition et les différentes étapes qui on servit à produire vos vêtements ? Grâce à nous, oui ! Avec notre application, vous pouvez simplement scanner les etiquettes pour obtenir dans la seconde la note et le detail de vos vêtements !</p>
						</div>
					</div>
					<div>
					</div>
				</div>
				<div>
					<a href="pages/partenaire.php" class="button2" title="En savoir plus">En savoir plus</a>
				</div>
			</article>

		</div>
	</section>
	<section id="valeur">
		<div class="conteneur">
			<article>
				<img src="img/ethique.svg" alt="éthique" class="bigicon">
				<h3>Ethique</h3>
				<p>Une analyse des vêtements et des marques basé sur les 4 grandes thématiques éthiques : écologie, social, santé et animaux.</p>
			</article>
			<article>
				<img src="img/transparent.svg" alt="transparent" class="bigicon">
				<h3>Transparent</h3>
				<p>Nos données sont libres et accessibles à tou·te·s, elles sont récoltées à partir des données fournies par les marques et par nos utilisateurs.</p>
			</article>
			<article>
				<img src="img/independant.svg" alt="indépendant" class="bigicon">
				<h3>Indépendant</h3>
				<p>L’objectivité de nos analyses et l’absences de tout conflits d’interêts est garanti grâce à un financement éthique qui ne dépend d’aucunes marques.</p>
			</article>
		</div>
	</section>
	<section id="marques">
		<div class="conteneur">
			<h2>Plus de 50 marques contribuent à notre projet</h2>
			<p>Nos actions et la mobilisation de nos clients ont influencé les marques de textiles et de prêt-à-porter à avoir une démarche plus transparente vis à vis des pratiques de fabrications de leurs vêtements.</p>

			<div id="image-slider" class="splide">
				<div class="splide__slider">
					<div class="splide__track">
						<ul class="splide__list">
							<li class="splide__slide">
								<img src="img/logo-ecoalf.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-filbert.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-peopletree.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-pinqponq.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-thinkingmu.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-knowledgecottonapparel.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-veja.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-atelierlegagneur.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-bhallot.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-hopaal.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-maisonizard.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-vega.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-nudiejeans.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-manifest011.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-saola.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-thought.png">
							</li>
							<li class="splide__slide">
								<img src="img/logo-wilo.png">
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="rejoignez-nous">
		<div class="conteneur">
			<article class="infos-commercant">
				<h3>"Plus de 3000 boutiques partenaires"</h3>
				<img src="img/commercant.png" alt="commerçant">
				<h2>Une solution parfaite pour les commerçants textiles et les créateurs</h2>
				<h4>Rejoignez l'aventure</h4>
				<p>Vous êtes un commerçant de vêtement indépendant et vous êtes interessé par notre projet ? Découvrez les nombreux avantages dont vous bénéficierez en faisant partie de notre réseau éthique.</p>
			</article>
			<div>
				<a href="pages/partenaire.php#service" class="button1" title="A propos">
					<div><span>En savoir plus</span></div>
				</a>
				<a href="pages/contact.php" class="button1" title="Contactez-nous">
					<div><span>Contactez-nous</span></div>
				</a>
			</div>

		

		</div>
	</section>
</main>
<script src="<?= $root ?>js/jquery.js"></script>
<script src="<?= $root ?>js/scroll.js"></script>
<script src="<?= $root ?>js/menu.js"></script>
<script src="<?= $root ?>js/splide.min.js"></script>
<script src="<?= $root ?>js/slider.js"></script>

<?php
	include $root.'php/inc/footer.inc.php';
?>
