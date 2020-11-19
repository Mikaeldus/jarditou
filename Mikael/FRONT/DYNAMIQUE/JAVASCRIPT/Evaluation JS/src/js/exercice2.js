window.onload = (() => {
    document.getElementById('bntMulti').addEventListener('click', multiplication);
})

// je creer ma function 
function multiplication() {
    // je declare ma variable id, je la vide à chaque lancement de la function, je recupere la value de la saisie et j'initialise mon tableau 
    var aff = document.getElementById(`afficher`);
    aff.textContent = "";
    var n = document.getElementById('nombre').value;
    var tab = [];

    // Si "n" n'est pas un nombre alors = else  
    if (!isNaN(n)) {
        // j'initialise ma boucle avec ma variable "i", tant que "i" est inferieur ou egale a 10, "i" prend +1  
        for (i = 1; i <= 10; i++) {

            // je creer ma variable somme 
            var somme = n * i;
            // je rentre dans mon tableau toutes les boucles grace à "i" 
            tab[i] = ` ${n} * ${i} = ${somme} \n`;
        }
    } else {
        alert(`Veuillez rentrer des nombres !!`);
    }
    // je creer une function qui me permet de rajouter des balise <p> dans ma page html que je rempli avec mon tab 
    tab.forEach(function (mult) {
        let p = document.createElement('p');
        p.append(mult);
        aff.append(p);

    })

}


