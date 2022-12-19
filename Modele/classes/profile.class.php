<?php

class Profile {
	private $nom = "Utilisateur Anonyme";
    private $username;
    private $photo = "lien vide"
	private $liked_songs = array();
    private $liked_playlists = array();
    private $playlists = array();

	public function __construct($n, $u, $i="\images\user.png" )	
	{
		$this->nom = $n;
        $this->username = $u;
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
    public function getUsername()
	{
			return $this->username;
	}
	
    public function getImage()
	{
			return $this->image;
	}
	
	public function setImage($value)
	{
			$this->image = $value;
	}

	
	public function getLikes()
	{
			return $this->liked_songs;
	}  
	public function getPlaylists()
	{
			return $this->playlists;
	}
    public function getLikedPlaylists()
	{
			return $this->playlists;
	}
	
	public function __toString()
	{
		return "Profile[".$this->nom.",".$this->username.",".$this->image."]";
	}
	public function affiche()
	{
		echo $this->__toString();
	}
}
?>