window.onload = (() => {

})

function verif(formulaire) {
    
    // on teste et on recupere les valuer du formulaire 
    var nomIsOk = verifNom(formulaire.elements['inputNom'].value)
    var prenomIsOk = verifPrenom(formulaire.elements['inputPrenom'].value)
    var codePostalIsOk = verifCodePostal(formulaire.elements['inputCodePostal'].value)
    var emailIsOk = verifEmail(formulaire.elements['inputEmail'].value)
    
    if (nomIsOk && prenomIsOk && codePostalIsOk && emailIsOk) {
        // Tout est OK, on envoie le formulaire
        console.log("Formulaire OK")
        return true;

    } else {
        // Tout n'est pas OK, on n'envoie pas le formulaire
        console.error("Formulaire Pas OK");
        return false;
    }
}




function verifNom(nom) {
    var isOK = verifAuMoins1Char(nom);
    if (isOK) {
        return true;
    } else {
        var missNom = document.getElementById(`missNom`);
        missNom.textContent = `* Champ requis`;
        return false;
    }
}


function verifPrenom(prenom) {
    var isOK = verifAuMoins1Char(prenom);
    if (isOK) {
        return true;
    } else {
        var missPrenom = document.getElementById(`missPrenom`);
        missPrenom.textContent = `* Champ requis`;
        return false;
    }
}

function verifCodePostal(codePostal) {

    var missPostale = document.getElementById('missCodePostale');
    if (inputCodePostal.value.length === 5) {
        return true;
    } else {
        missPostale.textContent = `* Champ requis`;
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