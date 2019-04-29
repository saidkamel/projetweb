<?php
include_once "config.php";
//include "fournisseurC.php";
class CommandefC 
{
	
	function afficherCommandefs ($commandef){
		echo "referenceC: ".$commandef->getReferenceC()."<br>";
		echo "titre: ".$commandef->getTitre()."<br>";
		echo "ref_fournisseur: ".$commandef->getRef_fournisseur()."<br>";
		echo "quantite: ".$commandef->getQuantite()."<br>";
	
		
	}
	
	function ajouterCommandef($commandef)
	{
		$sql="insert into commandef (referenceC,titre,ref_fournisseur,quantite,datec,etat) values (:referenceC, :titre,:ref_fournisseur,:quantite,:datec,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $referenceC=$commandef->getReferenceC();
        $titre=$commandef->getTitre();
        $ref_fournisseur=$commandef->getRef_fournisseur();
        $quantite=$commandef->getQuantite();
		$datec=$commandef->getdatec();
		$etat=$commandef->getetat();
		$req->bindValue(':referenceC',$referenceC);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':ref_fournisseur',$ref_fournisseur);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':datec',$datec);
		$req->bindValue(':etat',$etat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
		function afficherCommandef(){
	
		$sql="SElECT * From commandef";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCommandef($referenceC){
		$sql="DELETE FROM commandef where referenceC= '$referenceC'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':referenceC',$referenceC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerCommandefexpire($datec){
		$sql="DELETE FROM commandef where datec < '$datec'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':datec',$datec);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function incDatec($referenceC){
		$sql="update commandef set datec = datec+1 where referenceC= '$referenceC'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':referenceC',$referenceC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerCommandefournisseur($referenceF){
		$sql="DELETE FROM commandef where ref_fournisseur= '$referenceF'";
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
	function trierCommandef(){
$sql="SELECT * from commandef ORDER BY referenceC ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public static function modifierCommandef($referenceC,$argument,$valeur){
		$sql="UPDATE commandef SET ".$argument."=:".$argument." WHERE referenceC=:referenceC";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		if(strtolower($argument)=="new"){
			$valeur=intval($valeur);
		}
try{		
        $req=$db->prepare($sql);
         $s=$req->execute([
			":referenceC"=>intval($referenceC),
			":".$argument=>$valeur]);
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function rechercherCommandef($referenceC){
		
$sql="SELECT * from commandef where referenceC='$referenceC'";
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