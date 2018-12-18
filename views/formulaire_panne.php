<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="ressources/favicon.png"/>
    <link rel="stylesheet" href="css/cssGeneral.css">
    <link rel="stylesheet" href="views/CSS/header.css">
    <link rel="stylesheet" href="views/CSS/footer.css">
    <link rel="stylesheet" href="css/dashBoard.css">
    <link rel="stylesheet" href="css/notificationV2.css">
    <link rel="stylesheet" href="views/CSS/style.css">
    <meta name="description" content="Le top de la maison Connectée !">
    <title>DomoLink</title>
</head>
<?php include("header.php"); ?>
<link rel="stylesheet" href="views/CSS/style.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />

<body>
<div class = "wrapper">

    <div class="menu">
        <nav>
            <p><a href="index.php?">Les questions fréquentes</a></p>
            <p><a href="index.php?action=signaler_une_panne">Formulaire de panne</a></p>
            <p><a href="index.php?action=messagerie"> Messagerie </a></p>
            <p><a href="index.php?action=prise_de_rdv">Prise de rendez-vous</a></p>

        </nav>
    </div>
    <div class="corps">
        <H1>Formulaire de panne</H1>
        <p> <form method="post" action="index.php?action=ajouter_formulaire">
            <label>
                Numéro de série de l'équipement : <input type="number" name="serie">
            </label> <br>
            <label>
                Cause de la panne : <br>
                <input type="text" name="message" required>

            </label> <br>
            <label>
                Date de la panne : <input type="date" name="date" JJ/MM/AAAA >
            </label> <br>
            <input type="submit" VALUE="Envoyer">

        </p>
        </form>


    </div>
</div>

</body>
<?php include ("footer.php"); ?>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 12/11/2018
 * Time: 13:37
 */
?>