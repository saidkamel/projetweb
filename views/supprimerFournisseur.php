<?PHP
include "../core/fournisseurC.php";
$FournisseurC=new FournisseurC();
if (isset($_POST["referenceF"])){
	$FournisseurC->supprimerFournisseur($_POST["referenceF"]);
	header('Location: ../Fournisseur.php?operation=oksupp');
}

?>

