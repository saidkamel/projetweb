<?php include "../core/commandefC.php";
include "../core/fournisseurC.php"; 
?>

    <?php 
	$Commande1C=new CommandefC();
 

	$today=date("Y-m-d");
	//$Commande1C->supprimerCommandefexpire($today);

	$listecommandef1=$Commande1C->afficherCommandef();
	
	foreach($listecommandef1 as $row)
{
	
	
	if (($row['datec'] < $today) && ($row['etat'] == 'non arrivée'))
	{
		
		$fournisseurC=new FournisseurC();
		echo $row['ref_fournisseur'];
		$fournisseurC->incRetard($row['ref_fournisseur']);
	}
	
}
	
	
	?>