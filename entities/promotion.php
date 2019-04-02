<?PHP
/*----------------------------------------------------------=Class=--------------------------------------------------------------*/
class Promotion{
	private $Referenceproduit;
	private $solde;
	private $valablele;
	private $valableleau;
    private $Boutique;    
/*--------------------------------------------------------=Constructeur=--------------------------------------------------------------*/
	function __construct($Referenceproduit,$solde,$valablele,$valableau,$Boutique){
		$this->Referenceproduit=$Referenceproduit;
		$this->solde=$solde;
		$this->valablele=$valablele;
		$this->valableau=$valableau;
		$this->Boutique=$Boutique;
	}
	
	/*----------------------------------------------------------=Getters=--------------------------------------------------------------*/

	function getReferenceproduit(){
		return $this->Referenceproduit;
	}
	function getsolde(){
		return $this->solde;
	}
	function getvalablele(){
		return $this->valablele;
	}
	function getvalableau(){
		return $this->valableau;
	}

	function getBoutique(){
		return $this->Boutique;
	}
/*----------------------------------------------------------=Setters=--------------------------------------------------------------*/

	function setReferenceproduit($Referenceproduit){
		$this->Referenceproduit=$Referenceproduit;
	}
	function setsolde($solde){
		$this->solde=$solde;
	}
	function setvalablele($valablele){
		$this->valablele=$valablele;
	}
	function setvalableau($valableleau){
		$this->valableleau=$valableleau;
	}
	function setBoutique($Boutique){
		$this->Boutique=$Boutique;
	}
	
	
}

?>