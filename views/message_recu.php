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
    <H1> Messages reçus</H1>
    <table>
        <thead>
        <tr>
            <th>Expediteur</th>
            <th>Objet</th>
            <th>Message</th>
            <th>Date</th>
            <th>Supprimer</th>
        </tr>
        </thead>


        <tbody>
    messageRecu();


</div>
</div>

</body>
<?php include ("footer.php"); ?>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 10/12/2018
 * Time: 13:36
 */