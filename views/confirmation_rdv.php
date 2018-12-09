<link rel="stylesheet" href="views/CSS/style1.css">
<link rel="stylesheet" href="views/CSS/style2.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
<div class = "wrapper">
    <div class ='header'>
        <?php include ("header.php"); ?>
    </div>
    <div class="menu">
        <nav>
            <p><a href="index.php?action=signaler_une_panne">Formulaire de panne</a></p>
            <p><a href="index.php?action=faq">Les questions fréquentes</a></p>
            <p><a href="index.php?action=contact">Contact</a></p>
            <p><a href="index.php"> Home</a> </p>
        </nav>
    </div>
    <div class="corps">
        <h1>Prise de rendez-vous</h1>
        <p>
            <label> Cause :
                <label><input type="radio" name="cause_rdv" value="panne">Panne</label>
                <label><input type="radio" name="cause_rdv" value="installation">Installation</label>
                <label><input type="radio" name="cause_rdv" value="devis">Devis</label>
                <label><input type="radio" name="cause_rdv" value="autre">Autres</label>
            </label> <br>
            Votre demande de rendez-vous a bien été enregistrée, vous recevrez sous peu un e-mail de confirmation.
        </p>
    </div>
</div>
</body>
</html>
<?php

/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 09/12/2018
 * Time: 14:49
 */