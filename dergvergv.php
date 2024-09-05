
<?php 
session_start();
require("model/functions.php");

$token = $_COOKIE['token'];
    $table ="client";
    $firstName = extractElement($table,"NomCli","token",$token); 
    $lastName = extractElement($table,"prenomCli","token",$token);
    $description = extractElement($table,"description","token",$token);
    $oldImgName = extractElement("client","file_path","token",$token); 
    $_SESSION["firstName"]= $firstName[0]['NomCli'];
    $_SESSION["lastName"]= $lastName[0]['prenomCli'];
    $_SESSION["description"] = $description[0]['description'];
    $_SESSION["file_path"] = $oldImgName[0]['file_path'];

    $tableM = "MissageClient";
    $myid = extractElement('client','IdCli','token',$token);

    if($_SESSION["file_path"]==''){
        $_SESSION["file_path"]="circle_14025183.png";
    }


    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    
        switch ($page) {
            case 'page1':
                require "components/ProfilePart.php";
                break;
            case 'page2':
                require "components/chat.php";
                break;
            case 'page3':
                require 'components/ProfilSettings.php';
                break;
            default:
                require "components/ProfilePart.php";
                break;
        }
    } else {
        require "components/ProfilePart.php";
    }
?>

