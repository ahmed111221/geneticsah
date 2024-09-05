<?php 
include "../model/functions.php";

$token = $_COOKIE["token"];

if(isset($_POST['givPage']) && $_POST['givPage'] == 'yes'){
    $table = "MissageClient";
    $idS = extractElement('client','IdCli','token',$token);
    if ($idS) {
        $idr = $_POST['idF'];
        $Mytable = extractAll($table, $idS[0]['IdCli'], $idr);
        foreach($Mytable as $row){
            $message = htmlspecialchars($row['message']); // Sécuriser le message
            $time = htmlspecialchars($row['Time']);
            if($row['idCls'] == $idS[0]['IdCli']){
                echo "<div class='mymissage'>$message<div class='hours'>$time</div></div>";
            } else {
                echo "<div class='mymissage MyFrMissage'>$message<div class='hours'>$time</div></div>";
            }
        }
    } else {
        echo "Erreur : Client non trouvé.";
    }
}


if(isset($_POST['contacts'])){
    $id = extractElement('client','IdCli','token',$token);
    $Mytable = extractAllWhere("frend",$id[0]['IdCli']);

    $IdAllFrindes = []; // Initialise le tableau
    foreach ($Mytable as $row){
        if($row["myid"] == $id[0]['IdCli']){
            $IdAllFrindes[] = $row["frindid"];
        } else {
            $IdAllFrindes[] = $row["myid"];
        }
    }
    
    $IdAllFrindes = array_unique($IdAllFrindes);

    $response = []; // Initialise le tableau de réponse
    foreach($IdAllFrindes as $element){
        $lastMs = extractElement("MissageClient", "message", "idCls", $element);
        $Mytable = extractAll("MissageClient", $element, $id[0]['IdCli']);
        $Mytable = end($Mytable);

        // Assurez-vous que les fonctions extractElement retournent bien les valeurs
        $firstNameF = extractElement("client", "NomCli", "IdCli", $element);
        $lastNameF = extractElement("client", "prenomCli", "IdCli", $element);
        $filePathF = extractElement("client", "file_path", "IdCli", $element);

        $response[] = array(
            'IdF' => $element ?? '',
            'firstNameF' => $firstNameF[0]['NomCli'] ?? '', // Accède à la première valeur du tableau retourné
            'lastNameF' => $lastNameF[0]['prenomCli'] ?? '', // Accède à la première valeur du tableau retourné
            'messageF' => $Mytable["message"] ?? "",
            'file_path_F' => $filePathF[0]['file_path'] ?? '' // Accède à la première valeur du tableau retourné
        );
    }

    // Remplacer print_r par json_encode pour envoyer les données JSON
    echo json_encode($response);
}


 if(isset($_POST['insertMessage'])){
    $idR = $_POST['idF'];
    $idS = extractElement('client','IdCli','token',$token);
    $missage = $_POST['message'];
    if($missage!=""){
        $element = [
            "idCls" => $idS[0]['IdCli'],
            "idClr" => $idR,
            "message" => $missage,
            "Time" => date('Y-m-d H:i:s') // Convertir l'horodatage Unix en format de date/heure
        ];  
        InsererTable("MissageClient",$element);
    }
 }

?>
