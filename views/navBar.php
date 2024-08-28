<?php require'views/icons.php';?>
<div class="navBar">
    <div class="elements">
        <div class="logo">
            <?= $logo ?? ""; ?>
        </div>
        <div class="navigations">
            <a class="Services" href="/">Services</a>
            <a class="About Us" href="#">About Us</a>
            <a class="Contact" href="#">Contact</a> 
            <div class="dropdown">
                <button class="dropbtn">More<span class="moreIcon"><?= $more ?></span></button>
                <div class="dropdown-content">
                    <a class="Urgent" href="#">Urgent</a>
                    <a class="Job application" href="#">Job application</a>
                    <a class="Complaint" href="#">Complaint</a>
                </div>
            </div>
            </li>
        </div>
        <div class="icons">
            <div><a href="/?SignUpIcon=SignUp"><?= $login ?></a></div>
            <div><?= $moon ?></div>
            <div><?= $heart ?></div>
        </div>
    </div>
</div>