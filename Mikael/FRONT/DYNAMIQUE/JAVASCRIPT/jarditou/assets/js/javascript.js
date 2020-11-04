
// ---------------------Exercice JS 05 --------------------

var bouton4 = document.getElementById(`Id_btn4`);
bouton4.addEventListener(`click`, clickbtn4);

function clickbtn4() {

    var prenom = prompt(`Veuillez saisir votre prénom : `);
    if (!prenom) {
        recommencer();
    }
    else {
        console.log(`Voici le prénom que vous avez saisi: ${prenom}`);
        var nom = prompt(`Veuillez saisir votre nom : `);
        if (!nom) {
            recommencer();
        }
        else {
            console.log(`Voici le nom que vous avez saisi: ${nom}`);
            var sexe = confirm(`Etes-vous un homme ? `);
            if (sexe) {
                alert(`Bonjour Monsieur ${prenom} ${nom} \nBienvenu sur notre site Web`);
            }
            else {
                alert(`Bonjour Madame ${prenom} ${nom} \nBienvenu sur notre site Web`);
            }
        }
    }
    console.log(`Voici les information que vous avez saisi: ${nom} ${prenom} `);
}

// ---------------------Exercice JS 05 --------------------


// ---------------------Exercice JS 07 PARITE --------------------

var bouton1 = document.getElementById(`Id_btn1`);
bouton1.addEventListener(`click`, clickbtn1);

function clickbtn1() {

    var nb = prompt(`Veuillez saisir un nombre: `);
    if (!nb) {
        recommencer();
    }
    else {
        console.log(`Voici le nombre : ${nb} `);
        if (nb % 2 === 0) {
            alert(`Nombre pair`);
        }
        else {
            alert(`Nombre impair`);
        }
    }
}

// ---------------------Exercice JS 07 PARITE --------------------


// ---------------------Exercice JS 07 AGE --------------------

var bouton2 = document.getElementById(`Id_btn2`);
bouton2.addEventListener(`click`, clickbtn2);

function clickbtn2() {

    var date = prompt(`Veuillez saisir votre date de naissance : `);
    if (!date) {
        recommencer();
    }
    else {
        console.log(`Année de naissance : ${date}`)
        if (date <= 2002) {
            alert(`Vous etes Majeur`);
        }
        else {
            alert(`Vous etes Mineur`)
        }
    }

}

// ---------------------Exercice JS 07 AGE --------------------

// ---------------------Exercice JS 07 CALCULETTE --------------------

var bouton3 = document.getElementById(`Id_btn3`);
bouton3.addEventListener(`click`, clickbtn3);

function clickbtn3() {

    var nb1 = prompt(`Veullez saisir un chiffre : `);

    if (!nb1) {
        recommencer();
    }
    else {
        var nb1parsed = parseInt(nb1);
        console.log(`Voici le premier chiffre : ${nb1}`);
        var op = prompt(`Veuillez saisir un opérateur + - * /  `)

        if (!op) {
            recommencer();
        }
        else {
            if (op === "+" || op === "-" || op === "*" || op === "/") {
                var nb2 = prompt(`Veuillez saisir le deuxième chiffres : `)
                console.log(`Voici le chiffre et l'opérateur : ${nb1} ${op}`);
                if (!nb2) {
                    recommencer();
                }
                else {
                    var nb2parsed = parseInt(nb2);
                    console.log(`Voici les trois éléments demander : ${nb1parsed} ${op} ${nb2parsed}`)
                    operation(nb1parsed, nb2parsed, op);
                }
            }
            else {
                recommencer();
                console.log(`Mauvaise manipulation`);
                ;
            }

        }
    }
}

// ---------------------Exercice JS 07 CALCULETTE --------------------


// ---------------------FUNCTION --------------------

function operation(nb1, nb2, op) {
    switch (op) {
        case "/":
            if (nb2 === 0) {
                alert(`Impossible de diviser par zéro`);
            }
            else {
                var somme = nb1 / nb2;
                alert(`Somme : ${somme}`);
            }
            break;

        case "*":
            var somme = nb1 * nb2;
            alert(`Somme : ${somme}`);
            break;

        case "-":
            var somme = nb1 - nb2;
            alert(`Somme : ${somme}`);
            break;

        case "+":
            var somme = nb1 + nb2;
            alert(`Somme : ${somme}`);
    }
}

function recommencer() {
    alert(`Veuillez recommencer ! `);
}


// ---------------------FUNCTION --------------------