<div class="profilePart">
    <div class="profilePartcontont">
        <div class="profile-container">
            <img src="img/<?= $_SESSION["file_path"];?>" alt="Photo de profil" class="profile-pic" id="profileImage">
        </div>
        <h5>Bienvenue!</h5>
        <h3><?= $_SESSION["firstName"];?> <?=  $_SESSION["lastName"] ?></h3>
        <p><?= $_SESSION["description"];?></p>
        <div class="profilePartcontontInfo">
            <div class="appointment">
                <p>0</p>
                appointment
            </div>
            <div class="NewMessage">
                <p>0</p>
                New Message
            </div>
        </div>
        <div class="showMore">
            <input type="submit" value="Show Appointement">
        </div>
    </div>
</div>