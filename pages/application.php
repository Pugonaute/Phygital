<?php
    $root = '../';

	// Title à remplir
	$title = 'Découvrir l\'application';

	// TO DO : description à faire
    $desc = '';

	include $root."php/inc/header.inc.php";
?>
<main id="application">
	<section id="hero">
		<div class="conteneur">
			<div>
				<h1>Scannez, comparez, et habillez-vous éthiques en 10 secondes </h1>
				<h4>l'éthique à portée de main</h4>
				<p>Adieu la fast-fashion, à travers notre application mobile, nous souhaitons rendre plus facile l’accès à la mode éthique, aux vêtements de qualités qui durent dans le temps et aux commerces de prêt-à-porter locaux.</p>
				<div class="vignettes-stores">
					<a href="https://www.apple.com/fr/ios/app-store/" title="app store"><img src="../img/telecharger-appstore.svg" alt="bouton app store"></a>
					<a href="https://play.google.com/store" title="play store"><img src="../img/telecharger-playstore.svg" alt="bouton play store"></a>
				</div>
			</div>
			<div>
				<img src="../img/application.png" alt="visuels de l'application">
			</div>
			<div class="fond-coloré"></div>
		</div>

	</section>
	<section id="étapes">
		<div class="conteneur">
			<h2>Agissez éthiquement en quelques étapes</h2>
			<div id="progress-bar">
				<div class="step">
					<h3 class="step-text active">Scanner</h3>
					<div class="bullet active"></div>
				</div>
				<div class="step">
					<h3 class="step-text">Evaluer</h3>
					<div class="bullet"></div>
				</div>
				<div class="step">
					<h3 class="step-text">Comparer</h3>
					<div class="bullet"></div>
				</div>
				<div class="step">
					<h3 class="step-text">Local</h3>
					<div class="bullet "></div>
				</div>
			</div>
			<div id="parts">
				<article class="part slide-part">
					<div class="content">				
						<div class="detail">
							<h5>Scan les vêtements de ta garde robe ou en boutique</h5>
							<p>L’éthiquette utilise l’appareil photo de ton smartphone afin de scanner les étiquettes de composition ainsi que les codes-barres de tes vêtements.
							Dans le cas où ton vêtement n’est pas reconnu, l’application te permet d’ajouter manuellement les détails de composition de tes vêtements afin de pouvoir les scorer.</p>
						</div>
						<div class="capture-app">
							<img src="../img/test-app.png" alt="Capture de la page scan">
						</div>
					</div>	
					<div class="action">
						<button class="button2 prev-1">Précedent</button>
						<button class="button2 next-1">Suivant</button>
					</div>
				</article>
				<article class="part">
					<div class="content">				
						<div class="detail">
							<h5>Evaluer les vêtements afin de comprendre leurs histoires</h5>
							<p>L'éthiquette recueille les informations de tes vêtements ainsi que de ceux que tu peux trouver dans les commerces de prêt-à-porter afin d'évaluer leur empreinte éthique. Ce calcul se base sur des critères d'évaluation dont nos experts vérifient chaque jour la conformité ( ADEME ) ainsi que l'indépendance.</p>
						</div>
						<div class="capture-app">
							<img src="../img/test-app.png" alt="Capture de la page évaluation">
						</div>
					</div>	
					<div class="action">
						<button class="button2 prev-2">Précedent</button>
						<button class="button2 next-2">Suivant</button>
					</div>
				</article>
				<article class="part">
					<div class="content">				
						<div class="detail">
							<h5>Comparez les vêtements afin de mieux choisir et prendre conscience</h5>
							<p>L'éthiquette compare les vêtements scannés par l'utilisateur avec les ceux déjà évalués dans notre base donnée afin de recommander un vêtement identique provenant d'une production local et plus respectueuse de la planète. </p>
						</div>
						<div class="capture-app">
							<img src="../img/test-app.png" alt="Capture de la page recommandation">
						</div>
					</div>
					<div class="action">
						<button class="button2 prev-3">Précedent</button>
						<button class="button2 next-3">Suivant</button>
					</div>
					
				</article>
				<article class="part">
					<div class="content">				
						<div class="detail">
							<h5>Consommez local pour supporter les petits commerçants certifiés éthiques</h5>
							<p>L'éthiquette propose l'achat de vêtements éthique avec une solution de click&collect permettant aux utilisateurs de récupérer leurs vêtements chez les commerçants de prêt-à-porter éthiques et de proximité.</p>
						</div>
						<div class="capture-app">
							<img src="../img/test-app.png" alt="Capture de la page shop">
						</div>
					</div>	
					<div class="action">
						<button class="button2 prev-4">Précedent</button>
						<button class="button2 next-4">Suivant</button>
					</div>
				</article>

			</div>
		</div>
	</section>
	<section id="fonctionnalité">
		<div class="conteneur">
			<h2>Découvrez nos dernières fonctionnalités<br>pour faciliter votre expérience</h2>
			<h4>Pour un meilleur confort</h4>
			<article>
				<div class="capture-app">
					<img src="../img/app-historique.png" alt="">
				</div>
				<div class="content">
					<div class="active" data-src="../img/app-historique.png"  data-alt="Capture de la page historique">
						<img src="../img/historique.svg" alt="icon historique">
						<div>
							<h3>Historique</h3>
							<p>L’éthiquette permet à ses utilisateurs d’accéder à un historique de tous les produits scannés sur lesquelles on peut identifier leurs impacts.</p>
						</div>
					</div>
					<div data-src="../img/app-favoris.png"  data-alt="Capture de la page favoris">
						<img src="../img/favoris.svg" alt="icon favoris">
						<div>
							<h3>Favoris</h3>
							<p>L’éthiquette permet à ses utilisateurs d’ajouter les produits préférés dans la section des favoris afin de ne jamais les oublier.</p>
						</div>
					</div>
					<div data-src="../img/app-actualite.png" data-alt="Capture de la page actualité">
						<img src="../img/actualite.svg" alt="icon actualité">
						<div>
							<h3>Actualité</h3>
							<p>L’éthiquette présente les dernières actualités liées à la mode : dons, trocs, association, écologies, initiatives des marques, pétitions ...</p>
						</div>
					</div>
					<div data-src="../img/app-analyse.png"  data-alt="Capture de la page analyse">
						<img src="../img/analyse.svg" alt="icon analyse">
						<div>
							<h3>Analyse</h3>
							<p>L’éthiquette analyse les produits vestimentaires et présente l’évaluation des produits à l’aide d’une fiche détaillée.</p>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>
	<section id="en-savoir-plus">
		<div class="conteneur">
			<h2>Vous souhaitez en savoir plus sur notre méthode<br>de notation de marque et de vêtement ?</h2>
			<a href="" class="button1">
                <div><span>En savoir plus</div></span>
            </a>
		</div>
	</section>
</main>
<script src="../js/jquery.js"></script>
<script src="../js/step.js"></script>
<script src="../js/feature.js"></script>
<?php
include $root.'php/inc/footer.inc.php';
?>
