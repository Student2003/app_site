<?php incluce ("header.php"); ?>
<link rel="stylesheet" href="views/CSS/style.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />

<body>
<div class = "wrapper">
    <div class="menu">
        <nav>
            <p><a href="index.php?">Les questions fréquentes</a></p>
            <p><a href="index.php?action=signaler_une_panne">Formulaire de panne</a></p>
            <p><a href="index.php?action=messagerie"> Messagerie </a></p>
            <div class ="menumessagerie">
                <nav>
                    <ul><a href="index.php?action=nouveau_message"> Nouveau message  </a></ul>
                    <ul><a href="index.php?action=message_envoye"> Messages envoyés  </a></ul>
                    <ul><a href="index.php?action=message_recu"> Messages reçus</a></ul>

                </nav>
                <p><a href="index.php?action=prise_de_rdv">Prise de rendez-vous</a></p>
            </div>
        </nav>
    </div>
<div class="corps">
    <h1> Messages reçus</h1>


</div>
</div>

</body>
<?php incluce ("footer.php"); ?>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 10/12/2018
 * Time: 13:36
 */