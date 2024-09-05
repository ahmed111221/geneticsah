<?php require "views/icons.php"; ?>
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
        <div class="chat-contacts-frinds">
            <div class="chat-contacts-frindcontact">
            </div>
        </div>
    </div>
    <form action="" method="post">
        <div class="chat-phon">
            <div class="phon-frend-profile"></div>
            <img src="emages/Rectangle 5891.png">
            <div class="chat-phon-missages">
                <div class="phon-missages"></div>
            </div>
            <button class="send-button"><?= $sendIcon ?></button>
            <input class="message" type="text" name="message" placeholder="Send message...">
        </div>
    </form>
</div>




<script>

$(document).ready(function() {
    
    $.ajax({
        url: 'controller/authMessages.php',
        type: 'post',
        data: { contacts: 'yes' },
        dataType: "json",
        success: function(response) {
            // Assurez-vous que le conteneur est vide avant d'ajouter du contenu
            $(".chat-contacts-frindcontact").empty();

            // Parcourir chaque élément de la réponse
            response.forEach(function(item) {
                let html = '<div class="contact-item-phon">';  // Ajoutez une classe personnalisée pour chaque contact
                if (item.file_path_F) {
                    html += '<img class="frind-image-contact" src="img/'+ item.file_path_F +'">';
                }
                html += '<div class="contact-frind-info">';
                    html += '<input class="Id-f" type="hidden" value="'+ item.IdF +'">';
                    html += '<h4>' + item.firstNameF +" "+ item.lastNameF +'</h4>';
                    html += '<p>' + item.messageF + '</p>';
                html += '</div>'
                html += '</div><br>';

                // Ajouter le HTML généré à l'élément .chat-contacts-MYcontact
                $(".chat-contacts-frindcontact").append(html);
            });

            // Attacher un gestionnaire d'événements de clic pour les divs ajoutées dynamiquement
            $(".chat-contacts-frindcontact").off('click', '.contact-item-phon').on('click', '.contact-item-phon', function() {
                // Sélectionner l'input caché à l'intérieur de la div cliquée
                let id = $(this).find('input.Id-f').val();
                
                // Afficher l'ID dans la console
                console.log(id);
                ectractMessages(id);
                insertTable(id);
                
                // Montrer l'élément .chat-phon
                $(".chat-phon").show();
            });
        },
        error: function() {
            alert('Une erreur est survenue.');
        }
    });
    
});



function ectractMessages(id){
    $(document).ready(function() {
    setInterval(function(){
        $.ajax({
            url: 'controller/authMessages.php',
            type: 'post',
            data: { givPage: 'yes',
                    idF: id
             },
            dataType: "html",
            success: function(response) {
                $(".phon-missages").html(response);
            },
            error: function() {
                alert('Une erreur est survenue.');
            }
        });
    },2000);
    });
}



function insertTable(id){
$(".send-button").on('click',(e)=>{
                    e.preventDefault();
                    let message = $(".message").val();
                    $(".message").val('');
                
$(document).ready(function() {
        $.ajax({
            url: 'controller/authMessages.php',
            type: 'post',
            data: { insertMessage: 'yes',
                    idF: id,
                    message:message
                },
            success: function() {
            },
            error: function() {
                alert('Une erreur est survenue.');
            }
        });
    });

})
}

</script>