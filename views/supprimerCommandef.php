<?PHP
include "../core/CommandefC.php";

$commande1C=new CommandefC();
if (isset($_POST["referenceC"])){
	$commande1C->supprimerCommandef($_POST["referenceC"]);
	
	header('Location: ../Commandef.php?operation=oksupp');
}

?>