<?PHP
include "../entities/Commandef.php";
include "../core/CommandefC.php";

if (isset($_POST['modifier']) and !empty($_POST["referenceC"])){
	extract($_POST);
	if(!empty($_POST["titre"])){
		CommandefC::modifierCommandef($_POST["referenceC"],"titre",$titre);
			header('Location: ../Commandef.php?operation=update');
	}
	
	if(isset($_POST["ref_fournisseur"])){
	if(!empty($_POST["ref_fournisseur"])){
		CommandefC::modifierCommandef($_POST["referenceC"],"ref_fournisseur",$ref_fournisseur);
			header('Location: ../Commandef.php?operation=update');
	}
	}
if(isset($_POST["quantite"])){
	if(!empty($_POST["quantite"])){
		CommandefC::modifierCommandef($_POST["referenceC"],"quantite",$quantite);
			header('Location: ../Commandef.php?operation=update');
	}
	}
}
?>