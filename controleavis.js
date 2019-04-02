function envoyer(){


nom=document.getElementById("typeahead").value;
email=document.getElementById("typeahead1").value;
 var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

if(nom.length==0)
{

	alert("Veuillez mettre le nom");
}


   if(!regex.test(email.value))
   {
      surligne(email, true);
      return false;
   }
   else
   {
      surligne(email, false);
      alert("Veuillez mettre le email la forme exemple@exemple.com");
      return true;
   }

}


function envoyer1()
{
	verif=document.getElementById("typeahead2").value;
	if (verif.length == 0)
		{alert("Veuillez mettre La reclamation a supprimer");}


}
