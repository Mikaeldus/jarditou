window.onload = (() => {
    document.getElementById('btnCal').addEventListener('click', calcul);
})


// je creer ma function 
calcul = (() => {

    // je declare les deux variables saisie part l'utilisateur 
    var prixunite = parseInt(prompt(`Veuillez saisir le prix unitaire d'un produit :`));
    var qte = parseInt(prompt(`Veuillez saisir la quantité demander :`));

    // Si mes saisie sont des nombres alors je commence mon if sinon else 
    if (prixunite && qte) {

        // je declare mes variables de bases avec les operations et je prepare une id pour afficher dans mon document 
        var total = prixunite * qte;
        var remise5 = total * 0.05;
        var remise10 = total * 0.1;
        var port = 0.02 * total;
        var resultat = 0;
        var resul = document.getElementById('resultat');

        // Si mon "total" est supérieur à 500 alors :
        if (total > 500) {
            // je redefini ma variable "resultat" 
            resultat = total - remise10;
            // j'affiche le resultat 
            resul.textContent = `Quantité:"${qte} / "Prix unité :"${prixunite}€ /"Remise :"${remise10}€/"A payer :"${resultat}€"`;

            // Sinon si mon total est supérieur à 200 et inférieur ou egale à 500 alors : 
        } else if (total > 200 && total <= 500) {
            // j'active ma fonction pour les frais de transport 
            port = defPort(port);
            // je redefini ma variable "resultat" avec le "port" et "remise10" 
            resultat = total - remise10 + port;
            // j'affiche le resultat 
            resul.textContent = `Frais de transport ${port}€ / Quantité :${qte} / Prix unité :${prixunite}€ /Remise : ${remise10}€ /A payer :${resultat}€`;

            // Sinon Si mon total est inferieur ou egale a 200 et superieur ou egale a 100 alors : 
        } else if (total <= 200 && total >= 100) {
            // j'active ma fonction pour les frais de transport 
            port = defPort(port);
            // je redefini ma variable "resultat" avec le "port" et "remise5"
            resultat = total - remise5 + port;
            // j'affiche le resultat 
            resul.textContent = `Frais de transport ${port}€ / Quantité :${qte} / Prix unité :${prixunite} €/ Remise : ${remise5}€ /A payer :${resultat}€`;

            // Sinon si total est inferieur ou egale a 100 alors : 
        } else if (total <= 100) {
            // j'active ma fonction pour les frais de transport 
            port = defPort(port);
            // je redefini ma variable "resultat" avec le "port" et sans la "remise"
            resultat = total + port;
            // j'affiche le resultat 
            resul.textContent = `Frais de transport ${port} € /Quantité :${qte} / Prix unité :${prixunite}€ / A payer :${resultat}€`;
        }

    } else {
        alert(`Veuillez saisir des nombres !!`);
    }

})

// Voici ma function frais de transport 
defPort = ((port) => {
    // Si "port" est inferieur à 6 alors il vaut 6 
    if (port < 6) {
        port = 6;
        // sinon je confirme la valeur de la variable part rapport à l'exo 
    } else {
        port = 0.02 * total;
    }
    // je renvoi la valeur de "port"
    return port;
})
