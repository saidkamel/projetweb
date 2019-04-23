$(function(){
     $("#butajout").click(function()
     { valid=true;
	 
		
		 if($("#nom").val() == ""){
             $("#nom").next(".error-message").fadeIn().text("Veuillez entrer le nom");
             valid= false;
         }
         
         else{
          $("#nom").next(".error-message").fadeOut();
         }
		 if($("#mail").val() == ""){
             $("#mail").next(".error-message").fadeIn().text("Veuillez entrer votre adresse mail");
             valid= false;
         }
         
         else{
          $("#mail").next(".error-message").fadeOut();
         }
		 
	 if($("#type_prod").val() == "selectionnez"){
             $("#type_prod").next(".error-message").fadeIn().text("Veuillez sélectinnez le type");
             valid= false;
         }
         
         else{
          $("#type_prod").next(".error-message").fadeOut();
         }
	 if($("#note").val() == ""){
             $("#note").next(".error-message").fadeIn().text("Veuillez entrer votre note");
             valid= false;
         }
         else if(($("#note").val() < 0 ) || ($("#note").val() > 6 ))
         {
        $("#note").next(".error-message").fadeIn().text("champ entre 1-6 ");
             valid= false;
         }
         else{
          $("#note").next(".error-message").fadeOut();
         }
	 if($("#referenceF").val() == ""){
             $("#referenceF").next(".error-message").fadeIn().text("Veuillez entrer votre reference");
             valid= false;
         }
         else if($("#referenceF").val() < 0 ) 
         {
        $("#referenceF").next(".error-message").fadeIn().text("champ positive ");
             valid= false;
         }
         else{
          $("#referenceF").next(".error-message").fadeOut();
         }
	if($("#telephone").val() == ""){
             $("#telephone").next(".error-message").fadeIn().text("Veuillez entrer votre num de telephone");
             valid= false;
         }
        else if($("#telephone").val().length!=8) 
         {
        $("#telephone").next(".error-message").fadeIn().text("champ de 8 chiffre ");
             valid= false;
         }
         else{
          $("#telephone").next(".error-message").fadeOut();
         }
	
	
	
return valid;
     });
	 
	 $("#butmodif").click(function()
     { valid=true;
	 
	  if(($("#note").val() < 0 ) || ($("#note").val() > 6 ))
         {
        $("#note").next(".error-message").fadeIn().text("champ entre 1-6 ");
             valid= false;
         }
         else{
          $("#note").next(".error-message").fadeOut();
         }
	
	
	
	
return valid;
     });
	 });
		