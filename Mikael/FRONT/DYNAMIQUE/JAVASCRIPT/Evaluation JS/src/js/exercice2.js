window.onload = (() =>{
    document.getElementById('bntMulti').addEventListener('click', multiplication);
})
   







function multiplication(){
      
    var n = document.getElementById('nombre').value;
    var tab = [];

    if(isNaN(n)){
        alert(`Veuillez rentrer des nombres !!`);
    }else{
        for (i=1 ; i<= 10 ; i++){
        
            var somme = n*i;
            tab[i]=` ${n} * ${i} = ${somme} \n`;  
        } 
        alert(`${tab}`);
    }
    
    
    
    
    
    
    

}