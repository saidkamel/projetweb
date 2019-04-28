<?PHP
class Commandef
{
	private $referenceC;
	private $titre;
	private $ref_fournisseur;
	private $quantite;
	private $datec;
	private $etat;
	
	
	function __construct($referenceC,$titre,$ref_fournisseur,$quantite,$datec,$etat)
	{
		$this->referenceC=$referenceC;
		$this->titre=$titre;
		$this->ref_fournisseur=$ref_fournisseur;
		$this->quantite=$quantite;
		$this->datec=$datec;
		$this->etat=$etat;
		
		
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
	function getetat()
	{
		return $this->etat;
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
	function setetat($etat)
	{
		$this->etat=$etat;
	}
}
?>