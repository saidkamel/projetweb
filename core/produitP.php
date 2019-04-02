<?PHP
include "config.php";
class ProduitP {
function afficherProduit ($Produit){
		echo "Nom Produit: ".$Produit->getNomproduit()."<br>";
		echo "Reference Nom Produit: ".$Produit->getReferenceproduit()."<br>";
		echo "Catégorie: ".$Produit->getCategorie()."<br>";
		echo "Marque: ".$Produit->getMarque()."<br>";
		echo "Prix: ".$Produit->getprix()."<br>";
		echo "Date De Publication: ".$Produit->getDatedepublication()."<br>";
		echo "New: ".$Produit->getNew()."<br>";
		echo "Boutique: ".$Produit->getBoutique()."<br>";
		echo "Photo de produit: ".$Produit->getphotodeproduit()."<br>";
		echo "Description : ".$Produit->getdescription()."<br>";
	}
	
	function ajouterProduit($Produit){
		$sql="insert into produit (	Nomproduit,Referenceproduit,Categorie,Marque,prix,Datedepublication,New,Boutique,photodeproduit,description) values (:Nomproduit, :Referenceproduit,:Categorie,:Marque,:prix,:Datedepublication,:New,:Boutique,:photodeproduit,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
		
        $Nomproduit=$Produit->getNomproduit();
        $Referenceproduit=$Produit->getReferenceproduit();
        $Categorie=$Produit->getCategorie();
        $Marque=$Produit->getMarque();
        $prix=$Produit->getprix();
        $Datedepublication=$Produit->getDatedepublication();
        $New=$Produit->getNew();
        $Boutique=$Produit->getBoutique();
        $photodeproduit=$Produit->getphotodeproduit();
        $description=$Produit->getdescription();
  		$req->bindValue(':Nomproduit',$Nomproduit);
		$req->bindValue(':Referenceproduit',intval($Referenceproduit));
		$req->bindValue(':Categorie',$Categorie);
		$req->bindValue(':Marque',$Marque);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':Datedepublication',$Datedepublication);
		$req->bindValue(':New',intval($New));
		$req->bindValue(':Boutique',$Boutique);
		$req->bindValue(':photodeproduit',$photodeproduit);
		$req->bindValue(':description',$description);
         
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
	
	function afficherFournisseur(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fournisseur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduit($Referenceproduit){
		$sql="DELETE FROM Produit where Referenceproduit= :Referenceproduit";
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
	public static function modifierProduit($Referenceproduit,$argument,$valeur){
		$sql="UPDATE produit SET ".$argument."=:".$argument." WHERE Referenceproduit=:Referenceproduit";
		
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
	function recupererProduit($Referenceproduit){
		$sql="SELECT * from produit where Referenceproduit=$Referenceproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierPrix(){
		$sql="SELECT produit.Referenceproduit ,produit.prix, promotion.solde FROM produit INNER JOIN promotion
ON (produit.Referenceproduit = promotion.Referenceproduit)";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function rechercherProduit($Referenceproduit){
$sql="SELECT * from produit where Referenceproduit=$Referenceproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function trierFournisseur(){
$sql="SELECT * from fournisseur ORDER BY referenceF DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProduit($Referenceproduit){
		$sql="SELECT * from produit where Referenceproduit=$Referenceproduit";
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