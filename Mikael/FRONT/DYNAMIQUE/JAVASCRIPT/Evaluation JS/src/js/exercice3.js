window.onload = (() => {
    document.getElementById('btn1rech').addEventListener('click', rechPrenom);
})

// je creer ma function 
rechPrenom = (() => {
    // je declare mes variables, je remplis mon tableau et à chaque initialisation je vide mon ID pour afficher 
    var prenom = document.getElementById(`prenom`).value;
    var aff = document.getElementById(`afficher`);
    aff.textContent = "";
    var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];

    // tant que "prenom" n'est pas un nombre je commence mon if sinon else 
    if (isNaN(prenom)) {
        // j'initialise ma boucle avec une variable "i" pour effectuer ma recherche, tant que "i" n'est pas egale à la taille du tableau "i" prend +1 
        for (i = 0; i < tab.length; i++) {
            // j'enleve les accents des prenoms grace à une function
            tab[i] = replaceAccent(tab[i]);
            // je met tous les prénoms en MAJ 
            tab[i] = tab[i].toUpperCase();
        }
        // je met la saisie en MAJ 
        prenomMaj = prenom.toUpperCase();
        // j'initialise ma variable pour la recherche dans le tableau 
        var recherche = tab.includes(prenomMaj);


        if (recherche) {
            // je retourne le tableau avec un vide à la fin si le prénom rechercher etais présent 
            tab.splice(tab.indexOf(prenomMaj), [1]);
            tab.push("");

            // si il n'était pas present cela retourne else 
        } else {
            alert(`Ce prenom ne fait pas parti de la liste`);
        }
        // j'affiche mon tableau grace a des balise <p> et une id sur ma page html 
        tab.forEach(function (mule) {
            let p = document.createElement('p');
            p.append(mule);
            aff.append(p);
        })
    }
    else {
        alert(`Vous n'avez pas rentrer des lettres !!`);
    }

})
// Voici ma function pour supprimer les accents 
function replaceAccent(motARemplacer) {
    return motARemplacer.replace(/[àáâãäå]/g, "a").replace(/[éèê]/g, "e").replace(/[î]/g, "i")
}
