window.onload = (() => {
    document.getElementById('btn1rech').addEventListener('click', rechPrenom);
})

rechPrenom = (() => {
    var prenom = document.getElementById(`prenom`).value;
    var aff = document.getElementById(`afficher`);
    aff.textContent = "";
    var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];


    if (isNaN(prenom)) {

        for (i = 0; i < tab.length; i++) {
            tab[i] = replaceAccent(tab[i]);
            tab[i] = tab[i].toUpperCase();
        }

        prenomMaj = prenom.toUpperCase();
        var recherche = tab.includes(prenomMaj);

        if (recherche) {
            tab.splice(tab.indexOf(prenomMaj), [1]);
            tab.push("");
        } else {
            alert(`Ce prenom ne fait pas parti de la liste`);
        }
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

function replaceAccent(motARemplacer) {
    return motARemplacer
        .replace(/[àáâãäå]/g, "a")
        .replace(/[éèê]/g, "e")
        .replace(/[î]/g, "i")

}
