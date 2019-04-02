<?PHP
include "../entities/commandef.php";
include "../core/commandefC.php";
include "../core/fournisseurC.php";
include "../entities/fournisseur.php";

function verifier($tableau){
	foreach ($tableau as $key => $value) {
		if(!isset($_POST[$value])){
			return false;
		}
	}
	return true;
}
if(verifier(['referenceC','titre','ref_fournisseur','quantite'])){

$commandef1=new Commandef($_POST['referenceC'],$_POST['titre'],$_POST['ref_fournisseur'],$_POST['quantite']);

$commandef1C=new CommandefC();
$commandef1C->ajouterCommandef($commandef1);
	
/*$fournisseur2C=new FournisseurC();
	$email=$fournisseur2C->recupererEmail($_POST['ref_fournisseur']);
	
	ini_set('smtp_port', 587);
     $header="MIME-Version: 1.0\r\n";
 $header.='From:"Casasport.tn"<Casasport.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message="Cher Mr/Mme, \n commande etablie";
 
 mail($email, "Commande !", $message, $header);
echo $email['email']; */
header('Location: ../Commandef.php?operation=ok');		

}
	
else{
	echo "vérifier les champs";
}
//*/

?>