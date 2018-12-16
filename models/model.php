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

function insertPannes($serie, $date, $message){
    $db = dbconnect();
    $req = $db->prepare("INSERT INTO Pannes(date, equipment_id, message, etat, client_id ) VALUES (:date, :serie, :message, :mail)");
    $req->bindParam("date", $date);
    $req->bindParam("serie", $serie);
    $req->bindParam("message", $message);

    $req->execute();
    $req->closeCursor();
}


/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 16/12/2018
 * Time: 12:52
 */