<?php incluce ("header.php"); ?>
    <link rel="stylesheet" href="views/CSS/style.css">
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
                <label><input type="radio" name="cause_rdv" value="devis">Devis</label>
                <label><input type="radio" name="cause_rdv" value="autre">Autres</label>
            </label> <br> <br>
            <label> Date : <br>
                <input type="date" name="date" JJ/MM/AAAA >
            </label> <br><br>
            <label> Jour de la semaine :
                <select name="heure">
                    <option value = "matin">9h à 12h</option>
                    <option value = "debutap">13h à 15h</option>
                    <option value = "finap">15 à 18h</option>
                </select>
            </label> <br>
            <a href="index.php?action=conf_rdv"> Valider , non je dec attend encore !!!!!!</a>
        </p>
    </div>
</div>

</body>
<?php incluce ("footer.php"); ?>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 12/11/2018
 * Time: 13:17
 */
?>