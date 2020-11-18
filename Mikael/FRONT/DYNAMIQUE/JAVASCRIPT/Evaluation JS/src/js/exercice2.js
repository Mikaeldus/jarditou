window.onload = (() =>{
    document.getElementById('button').addEventListener('click', multiplication);
})
   







function multiplication(){
      
    var n = document.getElementById('nombre').value;
    var aff = document.getElementById('afficher');
    
    for (i=1 ; i<= 10 ; i++){
        
        var somme = n*i;
        alert(`${n} * ${i} = ${somme}`);
    } 
    

}