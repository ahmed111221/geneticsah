<?php
require_once'controller/controller.php';

if(isset($_GET["SignUpIcon"])){
    getSignUp();
}
elseif(isset($_GET["LoginLink"])){
    getLogin();
}
elseif(isset($_GET["auth"])){
    
}
else{
    $_SESSION['statOfEmail'] = 'turn of';
    gethome();
}