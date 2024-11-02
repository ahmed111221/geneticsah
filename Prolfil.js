const signupicon = document.querySelector('.hover-effect');
const Profil = document.querySelector('.Profil');
const ProfilIcon = document.querySelectorAll('.ProfilIcon');
const Message = document.querySelector('.Message');
const MessageIcon = document.querySelector('.MessageIcon');
const settings = document.querySelector('.settings');
const settingsIcon = document.querySelector('.settingsIcon');

signupicon.style.fill = "rgb(70, 186, 219)";

Profil.addEventListener("click",(e)=>{
    const activeItem = document.querySelector('.actifNavSidebar');
    const actifIcon = document.querySelectorAll('.actifIcon');
    addActive(e,Profil, "",activeItem,actifIcon);
    ProfilIcon.forEach(icon => {
        icon.classList.add('actifIcon');
    });
})

Message.addEventListener("click",(e)=>{
    const activeItem = document.querySelector('.actifNavSidebar');
    const actifIcon = document.querySelectorAll('.actifIcon');
    addActive(e,Message,MessageIcon,activeItem,actifIcon);
})

settings.addEventListener("click",(e)=>{
    const activeItem = document.querySelector('.actifNavSidebar');
    const actifIcon = document.querySelectorAll('.actifIcon');
    addActive(e,settings,settingsIcon,activeItem,actifIcon);
})

function addActive(e,element,elementIcon,activeItem,actifIcon){
    e.preventDefault();
    activeItem.classList.remove('actifNavSidebar');
    element.classList.add('actifNavSidebar');
    actifIcon.forEach(icon => {
        icon.classList.remove('actifIcon');
    });
    if(elementIcon != ""){
        elementIcon.classList.add('actifIcon');
    }
}

$(document).ready(function() {
    $('.nav-link').on('click', function(e) {
        e.preventDefault();
        var page = $(this).data('page');
            
        $.ajax({
            url: 'dergvergv.php',
            type: 'GET',
            data: { page: page },
            success: function(response) {
                $('#content').html(response);
            },
            error: function() {
                alert('Une erreur est survenue.');
            }
        });
    });
    
    $('.nav-link[data-page="page1"]').trigger('click');
});




