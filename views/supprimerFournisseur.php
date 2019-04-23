<?PHP
include "../core/fournisseurC.php";
include "../core/commandefC.php";
$FournisseurC=new FournisseurC();
$CommandefC=new CommandefC();
if (isset($_POST["referenceF"])){
	$CommandefC->supprimerCommandefournisseur($_POST["referenceF"]);
	$FournisseurC->supprimerFournisseur($_POST["referenceF"]);
	header('Location: ../Fournisseur.php?operation=oksupp');
}

?>

