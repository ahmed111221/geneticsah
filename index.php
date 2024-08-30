<?php
require_once'controller/controller.php';

if(isset($_GET["SignUpIcon"])){
    getSignUpIcon();
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