<?php
class Chanson {
	private $lien ;
	private $titre = "Titre vide";
	private $auteur = "Auteur inconnu";
	private $image = "https://upload.wikimedia.org/wikipedia/commons/3/3c/No-album-art.png";

	public function __construct($l,$t, $a,$i)	
	{	
		$this->lien = $l;
		$this->titre = $t;
        $this->auteur = $a;
        $this->image = $i;
	}	
	public function getLien(){return $this->lien;}
	public function getTitre(){return $this->titre;}
    public function getAuteur(){return $this->auteur;}
    public function getImage(){return $this->image;}

	public function __toArray()
	{	
		$arr = array($this->lien,$this->titre,$this->auteur,$this->image);
		
		return $arr;
	}
	public function affiche()
	{
		echo $this->__toString();
	}
}
?>

