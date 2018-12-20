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
        <p>
            <label> Cause :
                <label><input type="radio" name="cause_rdv" value="panne">Panne</label>
                <label><input type="radio" name="cause_rdv" value="installation">Installation</label>
            </label> <br> <br>
            <label> Date : <br>
                <input type="date" name="date" JJ/MM/AAAA >
            </label> <br><br>
            <label> Jour de la semaine :
                <select name="heure">
                    <option value = "9">9h à 10h</option>
                    <option value = "10">10h à 11h</option>
                    <option value = "11">11h à 12h</option>
                    <option value = "14">14h à 15h</option>
                    <option value = "15">15 à 16h</option>
                    <option value = "16">16h à 17h</option>
                    <option value = "17">17h à 18h</option>
                </select>
            </label> <br>
            <a href="index.php?action=conf_rdv"> Valider , non je dec attend encore !!!!!!</a>
        </p>
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
 * Time: 13:17
 */
?>