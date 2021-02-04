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
			</div>
			<div class="vignettes-stores">
				<a href="https://www.apple.com/fr/ios/app-store/" title="app store"><img src="../img/telecharger-appstore.svg" alt="bouton app store"></a>
				<a href="https://play.google.com/store" title="play store"><img src="../img/telecharger-playstore.svg" alt="bouton play store"></a>
			</div>
		</div>
	</section>
</main>
<?php
include $root.'php/inc/footer.inc.php';
?>
