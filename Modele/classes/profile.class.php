<?php

class Profile {
	private $nom = "Utilisateur Anonyme";
    private $username;
	private $password;
    private $photo = "lien vide";

	public function __construct($n, $u, $p, $i="\images\user.png" )	
	{
		$this->nom = $n;
        $this->username = $u;
		$this->password = $p;
        $this->photo = $i;

	}	
	
	public function getNom()
	{
			return $this->nom;
	}
	
	public function setNom($value)
	{
			$this->nom = $value;
	}
	public function getPassword()
	{
			return $this->password;
	}
	
	public function setPassword($value)
	{
			$this->nom = $value;
	}
    public function getUsername()
	{
			return $this->username;
	}
	
    public function getPhoto()
	{
			return $this->photo;
	}
	
	public function setPhoto($value)
	{
			$this->photo = $value;
	}

	
	
	public function __toString()
	{
		return "Profile[".$this->nom.",".$this->username.",".$this->photo."]";
	}
	public function affiche()
	{
		echo $this->__toString();
	}
}
?>