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
	
	if(verifier(['referenceC','titre','ref_fournisseur','quantite','datec'])){
	$d1=$_POST['datec'];
	$today=date("Y-m-d");
	if($d1 <= $today)
	{
		header('Location: ../Commandef.php?operation=erdate');	
	}
	else 	{

$commandef1=new Commandef($_POST['referenceC'],$_POST['titre'],$_POST['ref_fournisseur'],$_POST['quantite'],$_POST['datec'],"non arrivée");
$q1=$_POST['quantite'];
$r1=$_POST['referenceC'];
$commandef1C=new CommandefC();

$commandef1C->ajouterCommandef($commandef1);
	

	$email=recupererEmail($_POST['ref_fournisseur']);
	
	ini_set('smtp_port', 587);
     $header="MIME-Version: 1.0\r\n";
 $header.='From:"BoutiqueCasaSport.tn"<BoutiqueCasaSport.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message='
 <html>
	<body>
		<div align="left">
		cher Mr/Mme, <br/> Commande etablie avec succé <br/> Details: 
		
		</div>
	</body>
</html>
 
 
 ';
 $message.=  ' Référence Commande : '.$r1 ;
 $message.='
 <html>
	<br/>
</html>
 ';
 $message.=  ' Quantité : '.$q1 ;
 $message.='
 <html>
	<br/>
</html>
 ';
 $message.=  ' pour le : '.$d1 ;
 
 
 
 mail($email, "Commande Boutique Casa Sport!", $message, $header);

header('Location: ../Commandef.php?operation=ok');		
	}
}
	
else{
	echo "vérifier les champs";
}
//*/

?>