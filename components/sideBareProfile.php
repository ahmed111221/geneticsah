<?php require'views/icons.php';?>
<div class="sidebar">
    <div class="navigationsSidebar">
        <div class="Profil actifNavSidebar"><?=$Profil ?><a href="#" class="nav-link" data-page="page1">Profil</a></div>
        <div class="Message"><?=$Message ?><a href="#" class="nav-link" data-page="page2">Message</a></div>
        <div class="settings"><?=$settings ?><a href="#" class="nav-link" data-page="page3">Settings</a></div>
    </div>
    <div class="logOut navigationsSidebar">
        <div><?=$help ?><a href="">Help</a></div>
        <div><?=$signOut ?><a href="/?SignUpIcon=SignUp&LogOut=cliked">Log Out</a></div>
    </div>
</div>