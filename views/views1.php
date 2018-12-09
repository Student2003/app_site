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
            <?php
            function getDaysInWeek ($weekNumber, $year) {
            //Count from '0104' because January 4th is always in week 1 // (according to ISO 8601).
            $time = strtotime($year . '0104 +' . ($weekNumber - 1). ' weeks'); // Get the time of the first day of the week
            $mondayTime = strtotime('-' . (date('w', $time) - 1) . ' days', $time); // Get the times of days 0 -> 6
            $dayTimes = array (); for ($i = 0; $i < 7; ++$i) {
                $dayTimes[] = strtotime('+' . $i . ' days', $mondayTime);
            } // Return timestamps for mon-sun.
            return $dayTimes;
            } // TESTS :
            $dayTimes = getDaysInWeek(1, 2018);
            foreach ($dayTimes as $dayTime) {
                echo (strftime('%a %Y/%m/%d', $dayTime) . "<br/>");
            }?>
            <button>Valider</button>
        </p>
    </div>
</div>
</body>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 12/11/2018
 * Time: 13:17
 */
?>