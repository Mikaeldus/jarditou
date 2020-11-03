var bouton4= document.getElementById("Id_btn4");
bouton4.addEventListener("click",clickbtn4);

function clickbtn4(){

    var prenom = prompt("Veuillez saisir votre prénom");
    if(prenom===null){
        alert("Vous avez cliqué sur Annuler");
    }
    else{
        console.log("Voici le prénom que vous avez saisi: "+prenom);
        var nom = prompt("Veuillez saisir votre nom");
        if(nom===null){
            alert("Vous avez cliquer sur annuler");
        }
        else{
            console.log("Voici le nom que vous avez saisi: "+nom);
            var sexe = confirm("Etes-vous un homme ?");
            if (sexe === true){
                // alert("Bonjour Monsieur "+" "+prenom+""+" "+nom+"\nBienvenu sur notre site Web");
                alert(`Bonjour Monsieur ${prenom} ${nom} \nBienvenu sur notre site Web`);
            }
            else{
                alert("Bonjour Madame "+" "+prenom+""+" "+nom+"\nBienvenu sur notre site Web");
            }
        }
    }
    console.log("Voici les information que vous avez saisi: "+nom+"\n "+prenom);
}


var bouton1= document.getElementById("Id_btn1");
bouton1.addEventListener("click",clickbtn1);

function clickbtn1(){

   var nb = prompt("Veuillez saisir un nombre:");
   if (nb===null){
       alert("Vous avez cliquez sur annuler");
   }
   else{
       console.log("Voici le nombre :"+nb);
       if (nb%2 === 0){
           alert("Nombre pair");
       }
       else{
           alert("Nombre impair");
       }   
    }
}

var bouton2= document.getElementById("Id_btn2");
bouton2.addEventListener("click",clickbtn2);
   
   function clickbtn2(){
   
       var date = prompt("Veuillez saisir votre date de naissance :");
       if ( date===null){
           alert("Vous avez cliquez sur Annuler")
       }
       else{
            console.log("année de naissance :"+date)
            if (date <= 2002){
            alert("Vous etes Majeur");
            }
            else{
            alert("Vous etes Mineur")
           }
    }
   
}

var bouton3= document.getElementById("Id_btn3");
bouton3.addEventListener("click",clickbtn3);

function clickbtn3(){

    var nb1 = prompt("Veullez saisir un chiffre :");
     
    if (!nb1){
        alert("Vous avez cliquez sur Annuler");
    }
    else{
        var nb1parsed = parseInt(nb1);
        console.log("Voici le premier chiffre :"+nb1);
        var op = prompt("Veuillez saisir un opérateur + - * / : ")

        if ( op===null){
            alert("Vous avez cliquez sur Annuler");
        }
        else{
            if (op==="+" || op==="-" || op==="*" || op==="/"){
                console.log("Voici le chiffre et l'opérateur :"+nb1+op);
                var nb2 = prompt("Veuillez saisir le deuxième chiffres :")
                if (nb2===null){
                alert("Vous avez cliquez sur Annuler"); 
                }
                else{
                var nb2parsed = parseInt(nb2);  
                console.log("Voici les trois éléments demander:"+nb1parsed+op+nb2parsed)
                // var somme = (nb1parsed op nb2parsed);
                // alert("Voici le résultat : "+somme)
                operation(nb1parsed,nb2parsed,op);
                }
            }
            else{
                console.log("mauvais carractere");
            }
            
        }
    }
}

function operation(nb1,nb2,op){
    switch(op){
        case "/":
            if(nb2 === 0){
                alert("impossible de diviser par zéro");
            }
            else{
            var somme = nb1/nb2;
            alert("somme : " +somme);
        }
    }
}
    