<?php
	$root = '../'; 

	// Title à remplir
	$title = 'Le blog';

	// TO DO : description à faire
	$desc = '';

	include $root."/php/inc/header.inc.php";
?>

<main id="blog">
	<section class="en-tete">
		<div class="conteneur">
			<h1>Lisez et découvrez l’actualité autour de la mode éthique</h1>
		</div>
	</section>

	<section id="articles">
		<div class="conteneur">
			<article id="article1">
				<div class="image"></div>
				<div class="detail">
					<h2>Consigne: le nouveau pari des marques de mode éthique</h2>
					<h4>20 NOVEMBRE 2020</h4>
					<a href="<?= $root;?>pages/articles/consigne-ethique.php" class="button2">Lire l'article</a>
				</div>
			</article>
			<article id="article2">
				<div class="image"></div>
				<div class="detail">
					<h2>Le Prince Charles se lance dans la mode éthique</h2>
					<h4>12 Novembre 2020</h4>
					<a href="" class="button2">Lire l'article</a>
				</div>
			</article>
			<article id="article3">
				<div class="image"></div>
				<div class="detail">
					<h2>Consigne: le nouveau pari des marques de mode éthique</h2>
					<h4>20 NOVEMBRE 2020</h4>
					<a href="" class="button2">Lire l'article</a>
				</div>
			</article>
			<article id="article4">
				<div class="image"></div>
				<div class="detail">
					<h2>Consigne: le nouveau pari des marques de mode éthique</h2>
					<h4>20 NOVEMBRE 2020</h4>
					<a href="" class="button2">Lire l'article</a>
				</div>
			</article>
			<a href="" class="button1">
				<div><span>Voir plus</span></div>
			</a>
		</div>
	</section>
</main>
<script src="<?= $root ?>js/jquery.js"></script>
<script src="<?= $root ?>js/menu.js"></script>

<?php   
	include '../php/inc/footer.inc.php';
?>