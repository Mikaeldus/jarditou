var bouton1= document.getElementById("Id_btn1");
bouton1.addEventListener("click",clickbtn1);

function clickbtn1(){

    alert("Vous avez cliqué sur :\n Alert()");
}

var bouton2= document.getElementById("Id_btn2");
bouton2.addEventListener("click",clickbtn2);

function clickbtn2(){

    var prenom = prompt("Veuillez saisir votre prénom");
    if(prenom==null){
    alert("Vous avez cliqué sur Annuler");
    return;
    }

    var age= parseInt(prompt("Veuillez saisir votre age"));
    if(isNaN(age)){
    alert("Vous n'avez pas saisi un age correct !\nVeuillez recommencer.");
    return;
    }  

    alert("Voici ce que vous avez saisi :\n\nVotre prénom : "+prenom+"\nVotre age : " +age);
}

var bouton3= document.getElementById("Id_btn3");
bouton3.addEventListener("click",clickbtn3);

function clickbtn3(){

    var reponse = confirm("Veuillez cliquer sur OK ou bien Annuler");
    if (reponse == true) {
        alert("Vous avez cliqué sur OK");
    } 
    else {
        alert("Vous avez cliqué sur Annuler");
    }

}

var bouton4= document.getElementById("Id_btn4");
bouton4.addEventListener("click",clickbtn4);

function clickbtn4(){

    var prenom = prompt("Veuillez saisir votre prénom");
    if(prenom===null){
        alert("Vous avez cliqué sur Annuler");
    }
    else{
        console.log("Voici le prénom que vous avez saisi: "+prenom);
        var nom = prompt("Veuillez saisir votre nom");
        if(nom===null){
            alert("Vous avez cliquer sur annuler");
        }
        else{
            console.log("Voici le nom que vous avez saisi: "+nom);
            var Sexe = confirm("Etes-vous un homme ?");
            if (Sexe === true){
                alert("Bonjour Monsieur "+" "+prenom+""+" "+nom+"\nBienvenu sur notre site Web");
            }
            else{
                alert("Bonjour Madame "+" "+prenom+""+" "+nom+"\nBienvenu sur notre site Web");
            }
        }
    }
    console.log("Voici les information que vous avez saisi: "+nom+"\n "+prenom);
}
