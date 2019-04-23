<?PHP
class Commandef
{
	private $referenceC;
	private $titre;
	private $ref_fournisseur;
	private $quantite;
	private $datec;
	
	
	function __construct($referenceC,$titre,$ref_fournisseur,$quantite,$datec)
	{
		$this->referenceC=$referenceC;
		$this->titre=$titre;
		$this->ref_fournisseur=$ref_fournisseur;
		$this->quantite=$quantite;
		$this->datec=$datec;
		
		
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
	function getdatec()
	{
		return $this->datec;
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
	function setdatec($datec)
	{
		$this->datec=$datec;
	}
}
?>