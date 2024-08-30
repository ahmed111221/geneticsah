<?php
require("model/functions.php");
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

function render($link,$data = []){
    if (!is_array($data)) {
        $data = [];
    }
    extract($data);
    if(isset($link)){
        ob_start();
        require $link;
        $view = ob_get_clean();
    }
    require'layout.php';
}

function gethome(){
    render('views/Services.php');
}

function getSignUp() {

    $_SESSION['statOfEmail'] = "not Sheck now email";
    // $_SESSION['statOfEmail'] = "check your email";
    
    submitSignUp();
    render("views/SignUp.php");
}

function sendEmail ($name,$email,$verifyToken){
    $mail = new PHPMailer(true);
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'saadchkok@gmail.com';                     //SMTP username
    $mail->Password   = 'cfkkbjmlhhacnicc';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;    

    $mail->setFrom('saadchkok@gmail.com', "Genetics AH");
    $mail->addAddress($email);               //Name is optional

    $mail->isHTML(true);                 //Set email format to HTML
    $mail->Subject = 'Your Verification Code for Genetics AH';

    $message = "Hi $name,<br>
                Your verification code is: <br>
                <h1>[$verifyToken]</h1><br>
                Please enter this code to complete your verification.<br><br>
                Thank you!<br><br>
                Best regards,<br>
                Genetics AH";

    $mail->Body  = $message;
    $mail->send();
    return true;
}

function chaning($username) {
    $username = trim($username);
    $username = ucfirst(strtolower($username));
    return $username;
}


function submitSignUp(){
    $_SESSION['signUp'] = "Not validate";
    $_SESSION['statToken'] = "Not validate";
    $table = "client";
    if (isset($_POST["Next"])){
        $ferstName = chaning($_POST["ferstName"] );
        $lastName = chaning($_POST["lastName"]);
        $email = $_POST["email"];
        $verifyToken = rand(100000, 999999);
        $_SESSION['email'] = $email;

        $element = ["NomCli" => "$ferstName","prenomCli" => "$lastName","GmailCli" => "$email"];

        
        if(elementExiste($table,"GmailCli",$email)){
            $_SESSION['statOfEmail'] = "Email alredy existe";
            header("location: /?LoginLink=Login");
        }else{
            if(sendEmail ($ferstName,$email,$verifyToken)){
                InsererTable($table,$element);
                $_SESSION['statOfEmail'] = "check your email";
                $_SESSION['verifyToken'] = $verifyToken;
            }
        }
    }elseif(isset($_POST["Next2"])){
        $VerificationCode = $_POST["VerificationCode"] ?? 0;

        if($_SESSION['verifyToken']== $VerificationCode ){
            $_SESSION['statOfEmail'] = "check your email";
            $_SESSION['statToken'] = "validate";
        }
        else{
            ?><script>alert("the Verification Code is false")</script><?php
            deleteColumn($table,"GmailCli",$_SESSION['email']);
            $_SESSION['statToken'] = "Not validate";
        }
    }
    elseif(isset($_POST["Submit"])){
        $Password = $_POST["NewPassword"];
        $token = crierToken($table);
        $element = ["passwordCli" => "$Password","token" => "$token"];
        setcookie("token", "$token", time() + (86400 * 7), "/");
        ajouterValeur($table,$element,$_SESSION['email']);
        $_SESSION['signUp'] = "validate";
        ?>
        <script>if (confirm("Sign Up Successful")) {
                window.location.href = "/"; // Remplacez par l'URL de votre choix
            }
        </script>   
    <?php
    }
}


function crierToken($table){
        $token = password_hash(rand(1000,999999), PASSWORD_DEFAULT);
        $element = ["token" => "$token"];
        if(element2Existe($table,$element)){
            crierToken($table);
        }
        else{
            return $token;
        }
}

function getLogin() {
    render("views/Login.php");
}

function getSignUpIcon() {
    if(isset($_COOKIE['token'])){
        $token = $_COOKIE['token'];
        $table = "client";
        $element = ["token" => "$token"];
        if(element2Existe($table,$element)){
            getProfil($token);
        }
    }
    else{
        getSignUp();
    }
}

function getProfil($token) {
    $_SESSION['signup'] = 'turn of';
    $table ="client";
    $firstName = extractElement($table,"NomCli","token",$token); 
    $lastName = extractElement($table,"prenomCli","token",$token);
    $description = extractElement($table,"description","token",$token);
    $tab = ['firstName'=>$firstName['NomCli'], 'lastName'=>$lastName['prenomCli'], 'description'=>$description['description']];
    render("views/profile.php",$tab);
}

