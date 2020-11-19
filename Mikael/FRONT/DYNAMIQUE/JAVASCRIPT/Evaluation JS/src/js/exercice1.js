window.onload = (() => {
    document.getElementById('button').addEventListener('click', verifAge);
})


verifAge = (() => {

    var age = 0;
    var jeune = 0;
    var moyen = 0;
    var ancien = 0;
    var resultat = document.getElementById('resultat');


    while (age < 100) {

        age = parseInt(prompt(`Veuillez saisir un age : `));

        if (age) {

            if (age < 20) {
                jeune++;
            }
            else if (age >= 20 && age <= 40) {
                moyen++;
            }
            else {
                ancien++;
            }
        }
        else {
            alert(`Veuillez saisir des nombres :`);
        }

    }
    resultat.textContent = `Il y a ${jeune} de jeune, ${moyen} moyen et ${ancien} ancien.`;

})