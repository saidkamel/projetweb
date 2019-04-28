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
if(verifier(['referenceF','nom' ,'telephone','email','type_produit','note'])){
	
$fournisseur1=new fournisseur($_POST['referenceF'],$_POST['nom'],$_POST['telephone'],$_POST['email'],$_POST['type_produit'],$_POST['note'],0);

$fournisseur1C=new FournisseurC();
$fournisseur1C->ajouterFournisseur($fournisseur1);
	
	/*ini_set('smtp_port', 587);
     $header="MIME-Version: 1.0\r\n";
 $header.='From:"Casasport.tn"<Casasport.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message="Cher Mr/Mme, \n Merci d'etre notre fournisseur";
 
 mail($_POST['email'], "Connection etablie !", $message, $header);*/
	
header('Location: ../Fournisseur.php?operation=ok');	
	
}
else
{
	echo "vérifier les champs";
}
//*/

?>