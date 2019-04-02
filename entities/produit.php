<?PHP
/*----------------------------------------------------------=Class=--------------------------------------------------------------*/
class Produit{
	private $Nomproduit;
	private $Referenceproduit;
	private $Categorie;
	private $Marque;
	private $prix;
	private $Datedepublication;
    private $New;
    private $Boutique;
    private $photodeproduit;
    private $description;
    
/*--------------------------------------------------------=Constructeur=--------------------------------------------------------------*/
	function __construct($Nomproduit,$Referenceproduit,$Categorie,$Marque,$prix,$Datedepublication,$New,$Boutique,$photodeproduit,$description){
		$this->Nomproduit=$Nomproduit;
		$this->Referenceproduit=$Referenceproduit;
		$this->Categorie=$Categorie;
		$this->Marque=$Marque;
		$this->prix=$prix;
		$this->Datedepublication=$Datedepublication;
		$this->New=$New;
		$this->Boutique=$Boutique;
		$this->photodeproduit=$photodeproduit;
		$this->description=$description;
	}
	
	/*----------------------------------------------------------=Getters=--------------------------------------------------------------*/
	function getNomproduit(){
		return $this->Nomproduit;
	}
	function getReferenceproduit(){
		return $this->Referenceproduit;
	}
	function getCategorie(){
		return $this->Categorie;
	}
	function getMarque(){
		return $this->Marque;
	}
	function getprix(){
		return $this->prix;
	}
	function getDatedepublication(){
		return $this->Datedepublication;
	}
	function getNew(){
		return $this->New;
	}

	function getBoutique(){
		return $this->Boutique;
	}

	function getphotodeproduit(){
		return $this->photodeproduit;
	}

	function getdescription(){
		return $this->description;
	}
/*----------------------------------------------------------=Setters=--------------------------------------------------------------*/

	function setNomproduit($Nomproduit){
		$this->Nomproduit=$Nomproduit;
	}
	function setReferenceproduit($Referenceproduit){
		$this->Referenceproduit=$Referenceproduit;
	}
	function setCategorie($Categorie){
		$this->Categorie=$Categorie;
	}
	function setMarque($Marque){
		$this->Marque=$Marque;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setDatedepublication($Datedepublication){
		$this->Datedepublication=$Datedepublication;
	}
	function setNew($New){
		$this->New=$New;
	}
	function setBoutique($Boutique){
		$this->Boutique=$Boutique;
	}
	function setphotodeproduit($photodeproduit){
		$this->photodeproduit=$photodeproduit;
	}
	function setdescription($description){
		$this->description=$description;
	}
	
}

?>