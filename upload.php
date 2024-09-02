<?php
require 'model/functions.php';

$token = $_COOKIE['token'];
$dir = 'img/';
$imgName = $_FILES['fileInput']['name'];
$tmp = $_FILES['fileInput']['tmp_name'];

$oldImgName = extractElement("client","file_path","token",$token);

$targitFile = $dir.$imgName;
$oldTargitFile = $dir.$oldImgName["file_path"];
$erreurTargetFile = $dir."";

$table = "client";
$element = ['file_path'=>"$imgName"];
$arayValueR = ["token" => "$token"];

if($targitFile != $oldTargitFile && $targitFile != $erreurTargetFile)
{
    if (file_exists($oldTargitFile)) {
        unlink($oldTargitFile);
        if(move_uploaded_file($tmp, $targitFile)){
            ajouterValeur($table, $element, $arayValueR);
            $message = "Modification was successful!";
            require 'views/notification.php';
        }else{
            $message = "erreur";
        }
     }else
     {
            if(move_uploaded_file($tmp, $targitFile)){
                ajouterValeur($table, $element, $arayValueR);
                $message = "Modification was successful!";
                require 'views/notification.php';
            }
            else{
                $message = "erreur";
            }
    }
}else
{
    $message = "file deja existe";
}

$firstName = $_POST['FIRSTNAME'];
$LASTNAME = $_POST['LASTNAME'];
$Description = $_POST['Description'];

$element = ['NomCli'=>"$firstName"];
ajouterValeur($table, $element, $arayValueR);

$element = ['prenomCli'=>"$LASTNAME"];
ajouterValeur($table, $element, $arayValueR);

$element = ['description'=>"$Description"];
ajouterValeur($table, $element, $arayValueR);

