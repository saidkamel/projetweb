<?PHP
include "../config.php";
class PromotionP {
function afficherPromotion ($Promotion){
		echo "Reference Nom Produit: ".$Promotion->getReferenceproduit()."<br>";
		echo "Solde: ".$Promotion->getsolde()."<br>";
		echo "Valable Du: ".$Promotion->getvalablele()."<br>";
		echo "Valable Au: ".$Promotion->getvalableau()."<br>";
		echo "Boutique: ".$Promotion->getBoutique()."<br>";
	}
	
	function ajouterPromotion($Promotion){
		$sql="insert into promotion (Referenceproduit,solde,valablele,valableau,Boutique) values (:Referenceproduit,:solde,:valablele,:valableau,:Boutique)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par

        $Referenceproduit=$Promotion->getReferenceproduit();
        $solde=$Promotion->getsolde();
        $valablele=$Promotion->getvalablele();
        $valableau=$Promotion->getvalableau();
        $Boutique=$Promotion->getBoutique();
		$req->bindValue(':Referenceproduit',intval($Referenceproduit));
		$req->bindValue(':solde',intval($solde));
		$req->bindValue(':valablele',$valablele);
		$req->bindValue(':valableau',$valableau);
		$req->bindValue(':Boutique',$Boutique);
         
         if( $req->execute()){
         	return 1;
         }else{
         	return 0;
         }
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPromotions(){
		$sql="SElECT * From Promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function nouveauprix($Referenceproduit){
		$sql="SElECT solde From promotion where Referenceproduit= :Referenceproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPromotion($Referenceproduit){
		$sql="DELETE FROM promotion where Referenceproduit= :Referenceproduit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Referenceproduit',$Referenceproduit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
public static function modifierPromotion($Referenceproduit,$argument,$valeur){
		$sql="UPDATE promotion SET ".$argument."=:".$argument." WHERE Referenceproduit=:Referenceproduit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		if(strtolower($argument)=="new"){
			$valeur=intval($valeur);
		}
try{		
        $req=$db->prepare($sql);
         $s=$req->execute([
			":Referenceproduit"=>intval($Referenceproduit),
			":".$argument=>$valeur]);
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPromotion($Referenceproduit){
		$sql="SELECT * from promotion where Referenceproduit=$Referenceproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListePromotion($Referenceproduit){
		$sql="SELECT * from promotion where Referenceproduit=$Referenceproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>