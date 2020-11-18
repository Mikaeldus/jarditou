window.onload = (() =>{
    document.getElementById('button').addEventListener('click', verifAge);
})

function verifAge(){
        var age = 0;
        var jeune = 0;
        var moyen = 0;
        var ancien = 0;
        
        age = prompt(`Veuillez saisir un age :`);
        if(isNaN(age)){
            alert(`Il faut entrer un nombre \n Recommencez !`);
        }else{
            if(age>100){
                ancien++;
            }else if(age<20){
                jeune++;
            }else{
                moyen++;
            }
        }
        while (age < 100) {
            age = parseInt(prompt(`Quelle est l'age de la personne ?`));
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
        alert(`Il y a ${jeune} de jeune, ${moyen} moyen et ${ancien} ancien.`); 
}