<?php

// function getConexion() {
//     return new PDO('mysql:host=localhost;dbname=clinicproject', 'root', '');
// }
function getConexion() {
    $dbhost = "bwymxlqfjtqaxga5qljs-mysql.services.clever-cloud.com";
    $dbname = "bwymxlqfjtqaxga5qljs";
    $dbuser = "udmin2tjzh5en8as";
    $dbpassword ="isOxrZs6EKPKbhyiRwv2";

    return new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser ,$dbpassword);
}

function InsererTable($table,$element){
    $conexion =  getConexion();
    $keys = array_keys($element);
    $values = array_values($element);
            $commande = "INSERT INTO $table(".join(",",$keys).") values(".join(",",array_fill_keys($keys,"?")).")";
            $prepare = $conexion->prepare($commande);
            $prepare->execute($values);
}

function elementExiste($table,$champs,$elementDeTeste){
    $conexion = getConexion();
    $commande = "SELECT COUNT(*) FROM $table WHERE $champs = ?";
    $prepare = $conexion->prepare($commande);
    $prepare->execute([$elementDeTeste]);
    $dbemail= $prepare->fetchColumn();
    if($dbemail > 0){
         return true;
    }
    else{
        return false;
    }
}

function element2Existe($table,$element){
    $conexion = getConexion();
    $keys = array_keys($element);
    $values = array_values($element);
    $commande = 'SELECT COUNT(*) FROM ' . $table . ' WHERE ' . join(' AND ', array_map(function($key) {
        return $key . ' = ?';
    }, $keys)) . ';';    
    $prepare = $conexion->prepare($commande);
    $prepare->execute($values);
    $dbemail= $prepare->fetchColumn();
    if($dbemail > 0){
         return true;
    }
    else{
        return false;
    }
}

function ajouterValeur($table, $element, $GmailCli){
    $conexion = getConexion();
    $keys = array_keys($element);
    $values = array_values($element);
    // Construire la commande SQL pour l'instruction UPDATE
    $setClause = [];
    foreach ($keys as $key) {
        $setClause[] = "$key = ?";
    }
    $commande = "UPDATE $table SET ".join(", ", $setClause)." WHERE GmailCli = ?";
    // Préparer et exécuter la commande SQL
    $prepare = $conexion->prepare($commande);
    $prepare->execute(array_merge($values, [$GmailCli]));
}

function deleteColumn($table,$id,$element){
    $conexion = getConexion();
    $commande = "DELETE FROM $table WHERE $id = ?";
    $prepare = $conexion->prepare($commande);
    $prepare->execute([$element]);
}
