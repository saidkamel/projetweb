<?php
include_once "config.php";
class FournisseurC 
{
	
	function afficherFournisseurs ($fournisseur){
		echo "Reference: ".$fournisseur->getReferenceF()."<br>";
		echo "Nom: ".$fournisseur->getNom()."<br>";
		echo "Email: ".$fournisseur->getEmail()."<br>";
		echo "Telephone: ".$fournisseur->getTelephone()."<br>";
		echo "type de produit: ".$fournisseur->getType_produit()."<br>";
		
	}
	function ajouterFournisseur($fournisseur)
	{
		$sql="insert into fournisseur (referenceF,nom,telephone,email,type_produit,note,retard) values (:referenceF, :nom,:telephone,:email,:type_produit,:note,:retard)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $referenceF=$fournisseur->getReferenceF();
        $nom=$fournisseur->getNom();
        $telephone=$fournisseur->getTelephone();
        $email=$fournisseur->getEmail();
        $type_produit=$fournisseur->getType_produit();
		$note=$fournisseur->getNote();
		$retard=$fournisseur->getRetard();
		$req->bindValue(':referenceF',$referenceF);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':email',$email);
		$req->bindValue(':type_produit',$type_produit);
		$req->bindValue(':note',$note);
		$req->bindValue(':retard',$retard);
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
	function trierFournisseur(){
$sql="SELECT * from fournisseur ORDER BY referenceF ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function trierFournisseurparnote(){
$sql="SELECT * from fournisseur ORDER BY note DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function supprimerFournisseur($referenceF){
		$sql="DELETE FROM fournisseur where referenceF= '$referenceF'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':referenceF',$referenceF);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function resetRetard($referenceF){
		$sql="update fournisseur set retard = 0 where referenceF= '$referenceF'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':referenceF',$referenceF);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function incRetard($referenceF){
		$sql="update fournisseur set retard = retard+1 where referenceF= '$referenceF'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':referenceF',$referenceF);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	public static function modifierFournisseur($referenceF,$argument,$valeur){
		$sql="UPDATE fournisseur SET ".$argument."=:".$argument." WHERE referenceF=:referenceF";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		if(strtolower($argument)=="new"){
			$valeur=intval($valeur);
		}
try{		
        $req=$db->prepare($sql);
         $s=$req->execute([
			":referenceF"=>intval($referenceF),
			":".$argument=>$valeur]);
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function rechercherFournisseur($referenceF){
$sql="SELECT * from fournisseur where referenceF='$referenceF'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherFournisseurRetard(){
$sql="SELECT nom,retard from fournisseur where retard=3";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherFournisseur2($recherche){
$sql="SELECT * from fournisseur where  referenceF like '%$recherche%' or nom like '%$recherche%' or telephone like '%$recherche%'or email like '%$recherche%'or type_produit like '%$recherche%'";
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
function recupererEmail($referenceF){
		$sql="SELECT * FROM fournisseur where referenceF='$referenceF'";

		$db = config::getConnexion();
	/*	$req=$db->prepare($sql);
		$req->bindValue(':referenceF',$referenceF);*/
		try{
		$liste=$db->query($sql);
		$user = $liste->fetch();
		return $user['email'];
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

?>