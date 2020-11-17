window.onload = (() => {

})

// On utilise la function verif pour valider les trues avant l'envoi du formulaire 
function verif(formulaire) {

    // on teste et on recupere les valuer du formulaire 
    var societeIsOk = verifSociete(formulaire.elements['inputSociete'].value)
    var personneIsOk = verifPersonneAContacter(formulaire.elements['inputPersonneAContacter'].value)
    var codePostalIsOk = verifCodePostal(formulaire.elements['inputCodePostal'].value)
    var villeIsOk = verifVille(formulaire.elements['inputVille'].value)
    var emailIsOk = verifEmail(formulaire.elements['inputEmail'].value)


    if (societeIsOk && personneIsOk && codePostalIsOk && villeIsOk && emailIsOk) {
        // Tout est OK, on envoie le formulaire
        console.log("Formulaire OK")
        return true;

    } else {
        // Tout n'est pas OK, on n'envoie pas le formulaire
        console.error("Formulaire Pas OK");
        return false;
    }
}


function verifSociete(societe) {
    // On return directement la fonction sans passée par une variable intermedaire.
    var isOk = verifAuMoins1Char(societe);

    if (isOk) {
        return true;
    } else {
        var missSociete = document.getElementById('missSociete');
        missSociete.textContent = '* Champ requis';
        return false;
    }
}

function verifPersonneAContacter(personne) {

    let isOK = verifAuMoins1Char(personne);
    if (isOK) {
        return true;
    } else {
        var missContact = document.getElementById('missPersonneacontacter');
        missContact.textContent = ' * Champ requis';
        return false;
    }
}

function verifCodePostal(codepostal) {


    var missPostale = document.getElementById('missCodePostale');
    if (inputCodePostal.value.length === 5) {
        return true;
    } else {
        missPostale.textContent = `* Champ requis`;
        return false;
    }

}

function verifVille(ville) {

    var isOK = verifAuMoins1Char(ville);
    if(isOK){
        return true;
    } else {
        var missVille = document.getElementById('missVille');
        missVille.textContent =` * Champ requis`;
        return false;
    }
}


function verifEmail(email) {

    var missMail = document.getElementById('missMail');
    // Regexp email from internet
    var regexp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (email.match(regexp)) {
        return true;
    } else {
        missMail.textContent = `* Champ requis`;
        return false;
    }
}




// Fonction qui sert a verifier que le parametre donné, est au moins un caractère.
function verifAuMoins1Char(motAVerif) {

    if (motAVerif.length > 0) {
        return true;
    } else {
        return false;
    }
}

