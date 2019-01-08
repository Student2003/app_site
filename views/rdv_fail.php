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
<?php include("header.php"); ?>    <link rel="stylesheet" href="views/CSS/style.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
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
        <h1>Prise de rendez-vous</h1>
        <p> <form method="post" action="index.php?action=demande_rdv">
            <label> Cause :
                <label><input type="radio" name="cause_rdv" value="panne">Panne</label>
                <label><input type="radio" name="cause_rdv" value="installation">Installation</label>
            </label> <br> <br>
            <label>
                Vos disponibilités :
                <input type="text" name="dispo" required>
            </label>

            <a href="index.php?action=conf_rdv"> Envoyer</a>
            Veuiller remplir tous les champs.
        </p>
    </div>
</div>

</body>
<?php include ("footer.php"); ?>
</html>