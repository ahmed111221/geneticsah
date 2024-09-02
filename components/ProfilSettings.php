<form action="" class="myForm" method="post" enctype="multipart/form-data">
    <div class="profileSetingsPage">
        <div class="profileSetingsPageChildProfil profilePartcontont">
        <div class="profile-container">
            <img src="img/<?= $_SESSION["file_path"];?>" alt="Photo de profil" class="profile-pic" id="profileImage">
            <input type="file" name="fileInput" id="fileInput" accept=".jpg, .jpeg, .png">
            <div class="mydiv"></div>
        </div>
            <h5>Bienvenue!</h5>
            <h3><?= $_SESSION["firstName"];?> <?=  $_SESSION["lastName"] ?></h3>
            <p><?= $_SESSION["description"];?></p>
        </div>
        <div class="profileSetingsPageEdit">
                <div class="BASIC-INFO">
                    <h2>BASIC INFO</h2>
                    <div>
                        <input class="CANCEL" type="submit" name="CANCEL" value="CANCEL">
                        <input class="Save" type="submit" name="Save" value="Save">
                    </div>
                </div>
                <div class="Name-Lastname-Edit">
                    <div>
                        <p>FIRST NAME</p>
                        <input type="text" name="FIRSTNAME" value="<?= $_SESSION["firstName"];?>">
                    </div>
                    <div>
                        <p>LAST NAME</p>
                        <input type="text" name="LASTNAME" value="<?=  $_SESSION["lastName"] ?>">
                    </div>
                </div>
                <div class="Description-Edit">
                    <h2>ABOUT ME</h2>
                    <div>
                        <textarea name="Description" rows="4" cols="50" ><?= $_SESSION["description"];?></textarea>
                    </div>
                </div>
        </div>
    </div>
</form>

<?php
function notification($missage){
    ?>
                <div id="successNotification">
                    <?= $missage  ?? "" ?>
                    <button onclick="hideNotification()">x</button>
                </div>
            <?php
} ?>  


<script>
       function getimg() {
            const img = document.getElementById("profileImage");
            const fileInput = document.getElementById("fileInput");
            const file = fileInput.files[0];
            
            if (file) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    // Set the image source to the file data
                    img.src = event.target.result;

                    // Log the Data URL to the console
                    console.log("Image Data URL:", event.target.result);
                };

                // Start reading the file as a data URL
                reader.readAsDataURL(file);
            } else {
                // If no file is selected, reset the image to a default image
                console.log("No file selected");
            }
        }

        // Add an event listener to call getimg when the file input changes
        document.getElementById("fileInput").addEventListener("change", getimg);


        $(document).ready(function() {
            $('.Save').on("click", function(e) {
                e.preventDefault();
                $('.myForm').submit(function(e) {
                    e.preventDefault();

                    var page = new FormData(this);

                    $.ajax({
                        url: 'upload.php',
                        type: 'post',
                        data: page,
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            $('body').append(response);
                        },
                        error: function() {
                            alert('Une erreur est survenue.');
                        }
                    });
                });
                $('.myForm').trigger('submit');
            });
        });



        function hideNotification() {
            const notification = document.getElementById("successNotification");
            notification.style.display = 'none';
        }
        setTimeout(hideNotification, 2000);
</script>

