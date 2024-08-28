<?php 
    $_SESSION['signup'] = 'turn of';
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
            <?php ob_start(); ?>
                <div class="signupboxContentElement">
                    <h3>Sign up</h3>
                    <p>Sign up now and gain access to exclusive content!</p>
                    <form action="" method="post" onsubmit="return check();">
                        <span>Ferst Name</span> 
                        <div class="NomCli">   
                            <input name="ferstName" type="text" placeholder="Ferst Name" id="ferstName">
                        </div>
                        <span>Last Name</span>
                        <div class="prenomCli">
                            <input name="lastName" type="text" placeholder="Last Name" id="lastName">
                        </div>
                        <span>Email address</span>
                        <div class="GmailCli">
                            <input name="email" type="email" placeholder="name@email.com" id="email">
                        </div>
                        <input name="Next" type="submit" value="Next" id="Next">
                    </form>
                    <p>If you're already signed up, click on <a style="color: rgb(10, 30, 219); text-decoration: none; font-weight: 600;" href="/?LoginLink=Login">Login</a> .</p>
                </div>
            <?php 
                $SignUpPart1 = ob_get_clean();
                ob_start(); ?>
                <div class="signupboxContentElement">
                    <h3>Verification Code Required</h3>
                    <p>A verification code has been sent to your email address. Please enter the code below to verify your account.</p>
                    <form action="" method="post" onsubmit="return checkToken();">
                        <span>Verification Code</span> 
                        <div class="NomCli">   
                            <input name="VerificationCode" type="text" placeholder="0 0 0 0 0 0" id="ferstName">
                        </div>
                        <input name="Next2" type="submit" value="Next" id="Next2">
                    </form>
                    <p>By clicking on Next, you agree to our Terms of service and Privacy policy.</p>
                </div>
            <?php 
                $SignUpPart2 = ob_get_clean();  
                ob_start(); ?>
                <div class="signupboxContentElement">
                    <h3>Verification Successful</h3>
                    <p>Your account has been successfully verified. Please enter and confirm your new password below.</p>
                    <form action="" method="post" onsubmit="return checkPassword();">
                        <span>New Password</span> 
                        <div class="NomCli">   
                            <input name="NewPassword" type="password" placeholder="********" id="NewPassword">
                        </div>
                        <span>Confirm Password</span> 
                        <div class="NomCli">   
                            <input name="ConfirmPassword" type="password" placeholder="********" id="ConfirmPassword">
                        </div>
                        <input name="Submit" type="Submit" value="Submit" id="Submit">
                    </form>
                    <p>By clicking on Submit, you agree to our Terms of service and Privacy policy.</p>
                </div>
            <?php 
                $SignUpPart3 = ob_get_clean();  
                if (isset($_SESSION['statOfEmail']) && $_SESSION['statOfEmail'] == "check your email") {
                    if (isset($_SESSION['statToken']) && $_SESSION['statToken'] == "Not validate") {
                        echo $SignUpPart2;
                    } else {
                        echo $SignUpPart3;
                    }
                } else {
                    echo $SignUpPart1;
                }                
            ?>
        </div>
    </div>
</div>

<script src="SignUp.js"></script>