function addlines()
{
    var tableau = document.getElementById("para1");

    var ligne = tableau.insertRow(-1);//on a ajouté une ligne

    var colonne1 = ligne.insertCell(0);//on a une ajouté une cellule
    colonne1.innerHTML += document.getElementById("quantite").value;//on y met le contenu de titre

    var colonne2 = ligne.insertCell(1);//on ajoute la seconde cellule
    colonne2.innerHTML += document.getElementById("unity").value;

    
    var colonne3 = ligne.insertCell(2);
    colonne3.innerHTML += document.getElementById("ingred").value;//on ajoute le jour du mois

    
} 
