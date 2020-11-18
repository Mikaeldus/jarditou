window.onload = (() => {
    document.getElementById('bntMulti').addEventListener('click', multiplication);
})








function multiplication() {
    var aff = document.getElementById(`afficher`);
    aff.textContent="";
    var n = document.getElementById('nombre').value;
    var tab = [];

    if (!isNaN(n)) {
        for (i = 1; i <= 10; i++) {

            var somme = n * i;
            tab[i] = ` ${n} * ${i} = ${somme} \n`;
        }
    } else {
        alert(`Veuillez rentrer des nombres !!`);
    }
    tab.forEach(function(mult){
        let p = document.createElement('p');
        p.append(mult);
        aff.append(p);
        //aff.append(`<p>${mult}</p>`);
    })
    // aff.textContent = `${tab.join('\n')}`;      
}


