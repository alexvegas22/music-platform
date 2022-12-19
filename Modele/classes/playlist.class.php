<?php

class Playlist {
	private $nom = "Liste Vide";
	private $auteur = "Auteur inconnu";
	private $Liste = array();

	public function __construct($n="Liste Vide")	
	{
		$this->nom = $n;
	}	
	
	public function getNom()
	{
			return $this->nom;
	}
	
	public function setNom($value)
	{
			$this->nom = $value;
	}

    public function getAuteur()
	{
			return $this->auteur;
	}
	
	public function setAuteur($value)
	{
			$this->auteur = $value;
	}
        
	public function getliste()
	{
			return $this->Liste;
	}
	
	public function ajouterChanson($value)
	{
			$this->array_push($value);
	}

    public function enleverChanson($value)
	{
			$this->array_pop($value);
	}

	
	public function __toString()
	{
		return "Playlist[".$this->nom.",".$this->auteur."]";
	}
	public function affiche()
	{
		echo $this->__toString();
	}
}
?>