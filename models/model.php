<?php

function dbConnect(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=my_project_2;charset=utf8', 'root', 'root');
        return $db;

    }
    catch (Exception $e){
        die ('Erreur : '.$e->getMessage());
    }
}


function insertPannes($serie, $message){
    $db = dbconnect();
    $req = $db->prepare("INSERT INTO Pannes(date, equipment_id, message, etat, client_id ) VALUES (:DATE, :serie, :message, :mail)");
    $req->bindParam("serie", $serie);
    $req->bindParam("message", $message);

    $req->execute();
    $req->closeCursor();
}


function verifSerie($serie){
    $db = dbConnect();
    $verif = $db->query("SELECT piece_id FROM Equipements WHERE serie = $serie");
    if ($verif== null){
        return false;
    }
    elseif($verif != null){
        $proprio = $_SESSION['id'];
        $verifproprio = $db->query("SELECT utilisateur_id FROM pieces WHERE id = $verif");
        if ($proprio == $verifproprio){
            return true;
        }
        else{
            return false;
        }
    }
}

/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 16/12/2018
 * Time: 12:52
 */