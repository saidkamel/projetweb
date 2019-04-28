$(function(){
     $("#butajoutc").click(function()
     { valid=true;
	 
		
		if($("#referenceC").val() == ""){
             $("#referenceC").next(".error-message").fadeIn().text("Veuillez entrer une reference");
             valid= false;
         }
         else if($("#referenceC").val() < 0 ) 
         {
        $("#referenceC").next(".error-message").fadeIn().text("champ positive ");
             valid= false;
         }
         else{
          $("#referenceC").next(".error-message").fadeOut();
         }
		 
		 if($("#titre").val() == ""){
             $("#titre").next(".error-message").fadeIn().text("Veuillez entrer le titre");
             valid= false;
         }
         
         else{
          $("#titre").next(".error-message").fadeOut();
         }
		 if($("#quantite").val() == ""){
             $("#quantite").next(".error-message").fadeIn().text("Veuillez entrer la quantite");
             valid= false;
         }
         else if($("#quantite").val() < 0 ) 
         {
        $("#quantite").next(".error-message").fadeIn().text("champ positive ");
             valid= false;
         }
         else{
          $("#quantite").next(".error-message").fadeOut();
         }
		
	
	
	
return valid;
     });
	 
	 });