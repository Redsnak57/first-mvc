// Variable 
let myInput = document.getElementById("password");
let letter = document.getElementById("letter");
let capital = document.getElementById("capital");
let number = document.getElementById("number");
let length = document.getElementById("length");

// lorsque l'utilisateur clique sur le mdp, afficher le contenu 
myInput.onfocus = function (){
    document.getElementById("message").style.display = "block"
}

// lorsque l'utilisateur clique en dehors du champ mdp, masquer le contenu 
myInput.onblur = function (){
    document.getElementById("message").style.display = "none"
}

// lorsque l'utilisateur commence a taper quelque chose comme mdp 

myInput.onkeyup = function () {
    //valider lettres minuscule
    var lowerCaseLetters = /[a-z]/g 
    if(myInput.value.match(lowerCaseLetters)){
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }

    //valider lettres majuscule
    var upCaseLetters = /[A-Z]/g 
    if(myInput.value.match(upCaseLetters)){
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    //valider chiffre
    var numbers = /[0-9]/g 
    if(myInput.value.match(numbers)){
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

    //valider longueur
    if(myInput.value.length >= 8){
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
    
}


//variable afficher/cacher mdp 
const mdp = document.getElementById("password");
const toggle = document.querySelector('#oeilMdp'); 

toggle.addEventListener("click", function(){
    if(mdp.type == "password"){
        mdp.type = "text";
    } else {
        mdp.type = "password";
    }
});