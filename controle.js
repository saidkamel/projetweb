function envoyer(){

var verif = 0;

if (document.getElementById('select01').value != "Sélectionnez" && document.getElementById('optionsCheckbox').checked){
alert("Vous ne pouvez pas répondre en même temps aux boutons radio et au champ periode");
}
else{
verif ++;
}

nom=document.getElementById("typeahead").value;

if(nom.length==0)
{

	alert("Veuillez mettre le nom de l evenement");
}

if(document.getElementById('select01').value == "Sélectionnez")
{
	alert("Vous avez oublie de mettre une date");
}

if(document.getElementById('selected').value == "")
{
	alert("Vous devez choisir une boutique");
}

}