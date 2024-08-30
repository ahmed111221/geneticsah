const signupicon = document.querySelector('.hover-effect');
const ferstName = document.getElementById('ferstName');
const lastName = document.getElementById('lastName');
const email = document.getElementById('email');
const NextButton = document.getElementById('Next');
const NewPassword = document.getElementById('NewPassword');
const ConfirmPassword = document.getElementById('ConfirmPassword');
const messageLoginErreur = document.getElementById('messageLoginErreur');
const boxsignup = document.querySelector('.signupbox');
const signupboxContentElement = document.querySelector('.signupboxContentElement');
let i=0;
boxsignup.classList.add('signupboxAnimate-intro');
setTimeout(function() {
    boxsignup.classList.remove('signupboxAnimate-intro');
}, 1000);

function emailSended(){
    signupboxContentElement.style.display= 'none';
}

function check(){
    if(ferstName.value==""){
        ferstName.style.border="2px solid red";
    }
    else{
        ferstName.style.border=" 1px solid #2f2f2fbd";
        i=i+1;
    }
     if(lastName.value==""){
        lastName.style.border="2px solid red";
    }
    else{
        lastName.style.border=" 1px solid #2f2f2fbd";
        i=i+1;
    }
     if(email.value==""){
        email.style.border="2px solid red";
    }
    else{
        email.style.border=" 1px solid #2f2f2fbd";
        i=i+1;
    }
    if(i==3){
        return true;
    }else{
        i=0;
        boxsignup.classList.add('animate-slide');
        setTimeout(function() {
            boxsignup.classList.remove('animate-slide');
        }, 1000);
        return false;
    }
}


function checkToken(){
    if(ferstName.value==""){
        ferstName.style.border="2px solid red";
    }
    else{
        ferstName.style.border=" 1px solid #2f2f2fbd";
        i=i+1;
    }

    if(i==1){
        return true;
    }else{
        i=0;
        boxsignup.classList.add('animate-slide');
        setTimeout(function() {
            boxsignup.classList.remove('animate-slide');
        }, 1000);
        return false;
    }
}

function checkPassword(){
    if(NewPassword.value=="" || NewPassword.value!=ConfirmPassword.value){
        NewPassword.style.border="2px solid red";
    }
    else{
        NewPassword.style.border=" 1px solid #2f2f2fbd";
        i=i+1;
    }
    if(ConfirmPassword.value=="" || NewPassword.value!=ConfirmPassword.value){
        ConfirmPassword.style.border="2px solid red";
    }
    else{
        ConfirmPassword.style.border=" 1px solid #2f2f2fbd";
        i=i+1;
    }

    if(i==2){
        return true;
    }else{
        i=0;
        boxsignup.classList.add('animate-slide');
        setTimeout(function() {
            boxsignup.classList.remove('animate-slide');
        }, 1000);
        return false;
    }
}
const showError = (err) =>{
    messageLoginErreur.textContent = err;
    boxsignup.classList.add('animate-slide');
    password.style.border="2px solid red";
    email.style.border="2px solid red";
    setTimeout(function() {
        boxsignup.classList.remove('animate-slide');
    }, 1000);
} 

function checkLogin(e){
    e.preventDefault();
    // let password = e.target.password;
    // let email = e.target.email;
    if(email.value==""){
        email.style.border="2px solid red";
    }
    else{
        email.style.border=" 1px solid #2f2f2fbd";
    }
    if(password.value==""){
        password.style.border="2px solid red";
    }
    else{
        email.style.border=" 1px solid #2f2f2fbd";
    }
    if(password.value=="" && email.value==""){
        showError("")
        return;
    }

    let url = "./controller/auth.php"
    let data = new FormData();
    data.append("email" , email.value)
    data.append("password", password.value)

    fetch(url, {
        method: "POST",
        body: data
    }).then(response => {
        return response.json()
    })
    .then(({verified , token}) => {
        if(verified){
            //TODO : store a token
            document.cookie = `token=${token}; expires=${new Date(Date.now() + 1000 * 3600 * 24 *  2).toUTCString()}`
            window.location.href = "./index.php"
        }else {
            showError("invalid credentials")
        }
    })

}


signupicon.style.fill = "rgb(70, 186, 219)";

const form = document.getElementById('loginF')

form.addEventListener("submit" , checkLogin)