<?php
class Chanson {
	private $titre = "Titre vide";
	private $auteur = "Auteur inconnu";
    private $album = "Album inconnu";
	private $image = "lien vide";

	public function __construct($t, $a, $al,$i)	
	{
		$this->titre = $t;
        $this->auteur = $a;
        $this->album = $n;
        $this->image = $i;
	}	
	
	public function getTitre()
	{
			return $this->titre;
	}

    public function getAuteur()
	{
			return $this->auteur;
	}
	
        
	public function getAlbum()
	{
			return $this->album;
	}

    public function getImage()
	{
			return $this->image;
	}	
	public function __toString()
	{
		return "Chanson[".$this->titre.",".$this->auteur.",".$this->album.",".$this->image."]";
	}
	public function affiche()
	{
		echo $this->__toString();
	}
}
?>