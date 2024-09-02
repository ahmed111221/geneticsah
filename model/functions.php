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

function extractElement($table,$element,$keyName,$keyValue){
    $conexion = getConexion();
    $commande = "SELECT $element FROM $table WHERE $keyName='$keyValue'";  
    $dbelement= $conexion->query($commande);
    return $dbelement->fetch();
}

function ajouterValeur($table, $arayValueAdd, $arayValueR){
    $conexion = getConexion();
    $key = array_keys($arayValueAdd)[0];
    $value = array_values($arayValueAdd)[0];
    $keyR = array_keys($arayValueR)[0];
    $valueR = array_values($arayValueR)[0];

    $commande = "UPDATE $table SET $key = '$value'  WHERE $keyR = '$valueR' ";
    $conexion->query($commande);
}

function deleteColumn($table,$id,$element){
    $conexion = getConexion();
    $commande = "DELETE FROM $table WHERE $id = ?";
    $prepare = $conexion->prepare($commande);
    $prepare->execute([$element]);
}
