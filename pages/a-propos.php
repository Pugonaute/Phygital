<?php

    $root = '../'; 

	// Title à remplir
	$title = 'A propos';

	// TO DO : description à faire
    $desc = '';

	include $root."/php/inc/header.inc.php";
?>

    <section id="en-tete">
        <div class="conteneur">
            <h1>Un mouvement éthique et solidaire</h1>
            <p>L’objectif de l’éthiquette est d’améliorer l’impact de nos vêtement sur la planète et de revenir à une mode plus ethique et locale.</p>
        </div>
    </section>

    <section id="chiffre">
        <div class="conteneur">
            <h2>L'industrie de la mode en quelques chiffres</h2>
            <div class="row">
                <img src="../img/ethique.svg" alt="icon pollution" class="bigicon">
                <h3>Chaque année, la mode emet <span>+ d’1,2 milliards</span> de tonnes de CO2.</h3>
            </div>
            <div class="column">
                <article>
                    <h3>500 000</h3>
                    <p>tonnes de micro-particules de plastiques sont relâchées chaque année dans l’océan</p>
                </article>
                <article>
                    <h3>7000</h3>
                    <p>composants chimiques sont nécéssaires pour confectionner notre t-shirt</p>
                </article>
                <article>
                    <h3>4 millions</h3>
                    <p>de tonnes d’habits sont jetés chaque année par les consommateurs en Europe</p>
                </article>
            </div>
        </div>
    </section>

    <section id="manifest"> 
        <div class="conteneur">
            <h2>Nos motivations sont fortes</h2>
            <h4>Manifest</h4>
            <p>Lorsqu’on parle de mode, on pense toujours à la fashion-week, aux marques, aux influenceurs, aux modèles de vêtements que l’on dévore des yeux depuis quelques semaines, mais on ignore l’impact de notre confort. En effet, la mode est le second pollueur mondial, derrière le pétrole.
            <br><br>
            <span>Et aujourd’hui ?</span> Les commerces de  prêt-à-porter indépendants, déjà mis à mal par la présence de grands groupes et de marques, sont frappés de plein fouet par la pandémie.
            <br><br>
            <span>
            Une question s’est donc posée à nous : comment donner envie aux gens de consommer de manière plus respectueuse de l’environnement et l’humain tout en aidant les commerces indépendants en péril ?</span>
            <br><br>
            Notre mission est donc d'inspirer et de donner le pouvoir à chacun de lutter contre le réchauffement climatique. Pour ce faire, nous avons élaboré une application qui montre l’impact du vêtement et qui facilite l’accès à des alternatives plus éthiques et locales.
            </p>
        </div>
    </section>

    <section id="equipe">
        <div class="conteneur">
            <div class="presentation-equipe">
                <h2>Rencontrez notre équipe</h2>
                <p>Derrière L’éthiquette se trouve une petite équipe de 5 personnes entreprenneuses et engagées pour améliorer le secteur du prêt-à-porter.</p>
            </div>
            <div class="row1">
                <article>
                    <img src="../img/johannes.png" alt="">
                    <h3>Annaëlle</h3>
                    <p>Web Designer</p>
                </article>
                <article>
                    <img src="../img/johannes.png" alt="">
                    <h3>Emilie</h3>
                    <p>Motion Designer</p>
                </article>
                <article>
                    <img src="../img/johannes.png" alt="">
                    <h3>Johannes</h3>
                    <p>Developpeur Front</p>
                </article>
            </div>
            <div class="row2">
                <article>
                    <img src="../img/johannes.png" alt="">
                    <h3>Alex</h3>
                    <p>Developpeur Back</p>
                </article>
                <article>
                    <img src="../img/johannes.png" alt="">
                    <h3>Jeremy</h3>
                    <p>CEO</p>
                </article>
            </div>
        </div>
    </section>
    <section id="methode">
        <div class="conteneur">
            <h2>Notre méthode</h2>
            <p>Notre objectif principal est de donner à nos utilisateurs une évaluation simple basée sur 4 thématiques : l’écologie, le social, la santé et les animaux.
            Cette évaluation se veut impartiale, transparente et basée sur des études scientifiques.
            <br><br>
            Elle est contrôlée par une equipe d’experts indépendants qui vérifient la pertinence des points essentiels de notre notation tout en prennant en compte l’actualité et les nouvelles mesures / normes de l’ADEME.</p>
            <img src="../img/methode.png" alt="méthode">
        </div>
    </section>
    <?php
        include '../php/inc/footer.inc.php';
    ?>