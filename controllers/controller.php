<?php
require "models/model.php";

function prise_de_rdv(){
    require "views/prise_de_rdv.php";
}
function formulaire_panne(){
    require "views/formulaire_panne.php";
}
function questions_frequentes(){
    require "views/faq.php";
}

function confirmation_rdv(){
    require "views/confirmation_rdv.php";
}

function confirmation_panne(){
    require "views/confirmation_panne.php";
}

function messagerie(){
    require "views/messagerie.php";
}

function message_recu(){
    require "views/message_recu.php";
}

function message_envoye(){
    require "views/message_envoye.php";
}

function nouveau_message(){
    require "views/messagerie";
}

function ajout_formulaire(){
    if ($_POST["serie"] && $_POST["date"] && $_POST["message"]){
        $serie = ($_POST["serie"]);
        $date = htmlspecialchars($_POST["date"]);
        $message = htmlspecialchars($_POST["message"]);

        insertPannes($serie, $date, $message);
        require "views/confirmation_panne";
    }
    else{
        require "views/fail_panne";
    }

}
?>