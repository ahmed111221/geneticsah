<?php
require'views/icons.php';
?>
<div class="signupbackground">
    <img src="emages/backgroundimgsignup.jpg">
    <div class="signupbackgroundBlur"></div>
    <div class="signupbox">
        <div class="signupboxImg">
            <img src="emages/signupdoctor.jpg">
            <div class="signupboxImgContent">
                <span>Join a vibrant network of health professionals dedicated to excellence</span>
                <p>with perfect care</p>
            </div>
        </div>
        <div class="signupboxContent">
            <a href="/"><div class="croiOfretourn"><?= $croiduretour?></div></a>
                <div class="signupboxContentElement">
                    <h3>Login</h3>
                    <p>Login now and gain access to exclusive content!</p>
                    <form action="" id="loginF" method="">
                        <span>Email address</span>
                        <div class="GmailCli">
                            <input name="email" type="email" placeholder="name@email.com" id="email">
                        </div>
                        <span>Password</span> 
                        <div class="NomCli">   
                            <input name="password" type="password" placeholder="*********" id="password">
                        </div>
                        <p id="messageLoginErreur" style="color: #b60000;font-size: 13px; font-weight: 500;"></p>
                        <input name="Login" type="submit" value="Login" id="Login">
                    </form>
                    <p>By clicking on Login, you agree to our Terms of service and Privacy policy.</p>
                </div>

                <script src="SignUp.js"></script>