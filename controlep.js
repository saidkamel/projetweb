function envoyer(){

var verif = 0;



prix=document.getElementById("price").value;

if(prix.value<0)
{

	alert("Veuillez mettre un prix > 0");
}

}



function envoyersupp(){

var verif = 0;



nom=document.getElementById("ref").value;

if(nom.length==0)
{

	alert("Veuillez mettre la reference");
}


}