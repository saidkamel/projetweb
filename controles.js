function envoyer(){

var verif = 0;



nom=document.getElementById("typeahead").value;

if(nom.length==0)
{

	alert("Veuillez mettre la reference");
}


if(document.getElementById('selected').value == "")
{
	alert("Vous devez choisir une boutique");
}


function envoyersupp(){

var verif = 0;



nom=document.getElementById("typeahead").value;

if(nom.length==0)
{

	alert("Veuillez mettre la reference");
}


}