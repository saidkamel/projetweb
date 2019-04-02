<?PHP
class Commandef
{
	private $referenceC;
	private $titre;
	private $ref_fournisseur;
	private $quantite;
	
	
	function __construct($referenceC,$titre,$ref_fournisseur,$quantite)
	{
		$this->referenceC=$referenceC;
		$this->titre=$titre;
		$this->ref_fournisseur=$ref_fournisseur;
		$this->quantite=$quantite;
		
		
	}
	
	function getReferenceC()
	{
		return $this->referenceC;
	}
	function getTitre()
	{
		return $this->titre;
	}
	function getRef_fournisseur()
	{
		return $this->ref_fournisseur;
	}
	function getQuantite()
	{
		return $this->quantite;
	}
	
	
	function setTitre($titre)
	{
		$this->titre=$titre;
	}
	function setRef_fournisseur($ref_fournisseur)
	{
		$this->ref_fournisseur=$ref_fournisseur;
	}
	function setQuantite($quantite)
	{
		$this->quantite=$quantite;
	}
}
?>