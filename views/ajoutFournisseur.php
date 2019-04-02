<?PHP
include "../entities/fournisseur.php";
include "../core/fournisseurC.php";

function verifier($tableau){
	foreach ($tableau as $key => $value) {
		if(!isset($_POST[$value])){
			return false;
		}
	}
	return true;
}
if(verifier(['referenceF','nom' ,'telephone','email','type_produit'])){
$fournisseur1=new fournisseur($_POST['referenceF'],$_POST['nom'],$_POST['telephone'],$_POST['email'],$_POST['type_produit']);

$fournisseur1C=new FournisseurC();
$fournisseur1C->ajouterFournisseur($fournisseur1);
	
header('Location: ../Fournisseur.php?operation=ok');	
	
}
else
{
	echo "vérifier les champs";
}
//*/

?>