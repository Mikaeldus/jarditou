window.onload = (() => {

    // On Associe le click des buttons à l'appel des fonctions
    document.getElementById('btnExo1').addEventListener('click',clickExo1 );
    document.getElementById('btnExo2').addEventListener('click',clickExo2 );


})

function clickExo1() {
    var tableauEx1;
    if(createTable()){
        ajouterDonnee();
    }
    
    

    function createTable() {
        var taille = prompt(`Veuillez saisir la taille du tableau : `);
        taille = parseInt(taille);

        if (!isNaN(taille)) {
            tableauEx1 = [taille];
            return true ;
        }
        else {
            alert(`Veuillez recommencer !!`);
            return false ;
        }
    }

    function ajouterDonnee() {

        var data = prompt(`Veuillez saisir vos données, séparer par un ";"`);
        tableauEx1 = data.split(";");
        alert(`${tableauEx1}`);
    }

}

function clickExo2(){
    var taille = getInteger();
    var tableau = initTab(taille);
    tableau = saisieTab(tableau);
    afficheTab(tableau);
    rechercheTab(tableau);
    infoTab(tableau);
    
    //Exo 3
    sortArray(tableau);


}



function getInteger(){
    var taille = parseInt(prompt(`Veuillez saisir la taille du tableau :`));
    return taille;
}

function initTab(taille){
    var tableau = [taille];
    return tableau;
}

function saisieTab(tableau){
     var data = prompt(`Veuillez saisir vos données, séparer par un ";"`);
     tableau = data.split(";");
     return tableau;
}

function afficheTab(tableau){
    alert(`Voici le Tableau ${tableau}`);    
}

function rechercheTab(tableau){
    var index = parseInt(prompt(`Veuillez saisir un index :`));
    alert(`La donnée  à l'index : ${index} est :${tableau[index]}`);
}

function infoTab(tableau){

    // Et si le tableau contient des lettres ?
    var notNumberArray = false;

    tableau.forEach((value) => {
        var valueParsed = parseInt(value);

        if(!valueParsed) {
            notNumberArray = true;
        }
    })

    if(!notNumberArray) {
        var max = Math.max(...tableau);
        var somme = 0;

        tableau.forEach((nombre) => {
            somme += parseInt(nombre);
        })

        var moyenne = somme / tableau.length;
        alert(`La moyenne : ${moyenne}`);
        alert(`Le max : ${max}`);
    }
}

function sortArray(tableau) {
 
    var confirm = window.confirm('Voulez-vous trier le tableau ?');

    if(confirm) {
        alert (`Voici le tableau trié : ${tableau.sort((a, b) => a-b)}`);
    }
    

}
