<?php 
    include "../model/functions.php";
 ?>
<?php
    $table = "client";
    $email = $_POST["email"];
    $password = $_POST["password"];

    $element = ["GmailCli" => "$email","passwordCli" => "$password"];

    
    if(element2Existe($table,$element)){
        $response["verified"] = true;
        $response["token"] = $email;
        echo json_encode($response);
    }else{
        $response["verified"] = false;
        echo json_encode($response);
    }
?>