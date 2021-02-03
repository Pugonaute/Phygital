    <?php

        $root = '../'; 

        // Title à remplir
        $title = 'Contact';

        // TO DO : description à faire
        $desc = '';

        include $root."/php/inc/header.inc.php";
    ?>

<main id="contact">
    <section id="formulaire">
        <div class="conteneur">
            <h1>Vous souhaitez<br>nous contacter ?</h1>
            <h4>Nous sommes là pour vous !</h4>
            <article>
                <ul>
                    <li>Je suis un commerçant</li>
                    <li>Je suis une marque</li>
                    <li>Je suis un utilisateur</li>
                </ul>
                <ul>
                    <li>Raison de votre prise de contact
                        <ul>
                            <li>J'ai besoin d'aide sur l'application</li>
                            <li>Je veux transmettre les données de mes vêtements</li>
                            <li>J'ai un problème avec ma commande</li>
                            <li>Comment récupérer ma commande</li>
                            <li>Je veux devenir partenaire</li>
                            <li>Je veux devenir "Ethique First"</li>
                            <li>Autre</li>
                        </ul>
                    </li>
                    <div></div>
                </ul>
                <ul>
                    <li>Nom</li>
                    <li>Prénom</li>
                </ul>
                <ul>
                    <li>Entreprise</li>
                </ul>
                <ul>
                    <li>Message</li>
                </ul>
                <ul>
                    <li>Choisir un fichier</li>
                    <li>Aucune pièce-jointe</li>
                </ul>
            </article>
            <a href="" class="button1">
                <div><span>Envoyer le message</div></span>
            </a>
            
        </div>
    </section>
</main>

    <?php   
        include '../php/inc/footer.inc.php';
    ?>