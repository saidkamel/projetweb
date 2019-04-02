<?PHP
include "../entities/fournisseur.php";
include "../core/fournisseurC.php";

if (isset($_POST['modifier']) and !empty($_POST["referenceF"]))
{
	extract($_POST);
	if(!empty($_POST["nom"])){
		FournisseurC::modifierFournisseur($_POST["referenceF"],"nom",$nom);
			header('Location: ../Fournisseur.php?operation=update');
	}
	
	if(isset($_POST["telephone"])){
	if(!empty($_POST["telephone"])){
		FournisseurC::modifierFournisseur($_POST["referenceF"],"telephone",$telephone);
			header('Location: ../Fournisseur.php?operation=update');
	}
	}
	if(isset($_POST["email"])){	
		if(!empty($_POST["email"])){
		FournisseurC::modifierFournisseur($_POST["referenceF"],"email",$email);
			header('Location: ../Fournisseur.php?operation=update');
	}
}
if(isset($_POST["type_produit"])){
		if(!empty($_POST["type_produit"])){
		FournisseurC::modifierFournisseur($_POST["referenceF"],"type_produit",$type_produit);
			header('Location: ../Fournisseur.php?operation=update');
	}
}


}
?>
