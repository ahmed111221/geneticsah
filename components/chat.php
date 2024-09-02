<div class="chat-contacts-page">
    <div class="chat-contacts">
        <div class="chat-contacts-MYcontact">
            <div class="profile-container">
                <img src="img/<?= $_SESSION["file_path"];?>" alt="Photo de profil" class="profile-pic" id="profileImage">
            </div>
            <div class="profile-container-info">
                <h5>Bienvenue!</h5>
                <h3><?= $_SESSION["firstName"];?> <?=  $_SESSION["lastName"] ?></h3>
            </div>
        </div>
        <div class="chat-contacts-frinds"></div>
    </div>
    <form action="" method="post">
        <div class="chat-phon">
            <input type="text" name="message" placeholder="Send message...">
        </div>
    </form>
</div>