window.onload = (() => {

    // On Associe le click des buttons à l'appel des fonctions
    document.getElementById('button1').addEventListener('click', clickExo1);
    document.getElementById('button2').addEventListener('click', clickExo2);
    document.getElementById('button3').addEventListener('click', generer);
})


// ----------- Ecercice 1 ---------
clickExo1 = (() =>{

    var text = document.getElementById('text').value;
    if(isNaN(text)){
        alert(`Vous avez saisie ${text}`);
    }
    else{
        alert(`Veuillez saisir un champ valide !`);
    }
     
})
// ---------------Exo 1 -----------------
// -----------------Exo 2 -----------------
var chiffre = 0;
var i = 1;



var vide = document.getElementById('aleatoire');





generer = (() =>{
    aleatoire.textContent = '';
    i = 1;
    chiffre = parseInt(Math.random() * 20);
    console.log(chiffre);
    return chiffre;
})

clickExo2 = (() =>{

        var nombre = document.getElementById (`usernombre`).value;
        console.log(nombre);
        if (isNaN(nombre)) {
            aleatoire.textContent = `Veuillez saisir un nombre entre 1 et 20 merci`;
        }else{
   
        if(parseInt(nombre) == chiffre ){
            aleatoire.textContent = `Félicitation, vous avez trouver le bon nombre ${chiffre} en ${i} coup(s) :)`;
            console.log(`Félicitation, vous avez trouver le bon nombre ${chiffre} en ${i} coup(s) :`);
        }else if (parseInt(nombre) < chiffre){
            aleatoire.textContent = `Plus grand`;
            console.log(`Plus grand`);
        }else{
            aleatoire.textContent = `Plus petit`;
            console.log(`Plus petit`);
            i++;
        }
    }
})


// ----------------------Exo 2 ----------------------