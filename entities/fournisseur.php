<?PHP
class Fournisseur
{
	private $referenceF;
	private $nom;
	private $telephone;
	private $email;
	private $type_produit;
	private $note;
	private $retard;
	
	function __construct($referenceF,$nom,$telephone,$mail,$type_produit,$note,$retard)
	{
		$this->referenceF=$referenceF;
		$this->nom=$nom;
		$this->telephone=$telephone;
		$this->email=$mail;
		$this->type_produit=$type_produit;
		$this->note=$note;
		$this->retard=$retard;
		
	}
	
	function getReferenceF()
	{
		return $this->referenceF;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getTelephone()
	{
		return $this->telephone;
	}
	function getEmail()
	{
		return $this->email;
	}
	function getType_produit()
	{
		return $this->type_produit;
	}
	function getNote()
	{
		return $this->note;
	}
	function getRetard()
	{
		return $this->retard;
	}
	
	function setNom($nom)
	{
		$this->nom=$nom;
	}
	function setTelephone($telephone)
	{
		$this->telephone=$telephone;
	}
	function setEmail($email)
	{
		$this->email=$email;
	}
	function setType_produit($type_produit)
	{
		$this->type_produit=$type_produit;
	}
	function setNote($note)
	{
		$this->note=$note;
	}
	function setRetard($retard)
	{
		$this->retard=$retard;
	}
}
?>