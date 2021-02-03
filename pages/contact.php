    <?php

        $root = '../'; 

        // Title à remplir
        $title = 'Contact';

        // TO DO : description à faire
        $desc = '';

        include $root."/php/inc/header.inc.php";
    ?>

    <section id="formulaire">
        <div class="conteneur">
            <h1>Vous souhaitez nous contacter ?</h1>
            <h4>Nous sommes là pour vous !</h4>
            <article>
                <ul>
                    <li>Je suis un commerçant</li>
                    <li>Je suis une marque</li>
                    <li>Je suis un utilisateur</li>
                </ul>
                <ul>
                    <li>Raison de votre prise de contact</li>
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
                    <li>choisir un fichier</li>
                    <li>Insérez un pièce-jointe</li>
                </ul>
            </article>
            
        </div>
    </section>

    <?php   
        include '../php/inc/footer.inc.php';
    ?>