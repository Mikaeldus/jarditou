window.onload = (() => {
    document.getElementById('button').addEventListener('click', verifAge);
})

// je creer ma function 
verifAge = (() => {

    // je declare mes variables 
    var age = 0;
    var jeune = 0;
    var moyen = 0;
    var ancien = 0;
    var resultat = document.getElementById('resultat');

    // si age est inferieur à 100 alors : 
    while (age < 100) {

        // je transforme la chaine en nombre sinon = else
        age = parseInt(prompt(`Veuillez saisir un age : `));

        // Si age = number alors je commence mon if 
        if (age) {
            // si age est inferieur a 20 alors ma variable jeune gagne +1 
            if (age < 20) {
                jeune++;
            }
            // Sinon si age est superieur ou egale a 20 et age inferieur ou egale a 40 alors moyen gagne +1 
            else if (age >= 20 && age <= 40) {
                moyen++;
            }
            // sinon ancien gagne +1 
            else {
                ancien++;
            }
        }
        else {
            alert(`Veuillez saisir des nombres :`);
        }

    }
    // je montre le resultat grace à une id sur mon document 
    resultat.textContent = `Il y a ${jeune} de jeune, ${moyen} moyen et ${ancien} ancien.`;

})