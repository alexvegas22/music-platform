<?php
include_once 'Modele\config\configDB.interface.php';
include_once 'Modele\classes\chanson.class.php';
	class songRequest{
	    
		public  function getAllSongs(){

			try {
				$connexion = new PDO('mysql:host=localhost;dbname=wave', config::DB_USER, config::DB_PWD);
				 $resultats = $connexion->query("SELECT * FROM musique ");
				
				while($chanson=$resultats->fetch())
				{
					$list[]=new Chanson($chanson["lien"],$chanson["title"],$chanson["artist"],$chanson["image"]);
				}
				return $list;
				$resultats->closeCursor();
	
			} catch (PDOException $e) {
				echo "Erreur : ".$e->getMessage()."<br />";
			} finally {
				$connexion=null;
			}

		}
		public function getSongbyName($name){

			try {
				$connexion = new PDO('mysql:host=localhost;dbname=wave', config::DB_USER, config::DB_PWD);
				 $resultats = $connexion->query("SELECT * FROM musique where title = '".$name."'");
				$sortie;
				while($chanson=$resultats->fetch())
				{
					$sortie = new Chanson($chanson["lien"],$chanson["title"],$chanson["artist"],$chanson["image"]);
				}
				return $sortie;
				$resultats->closeCursor();
	
			} catch (PDOException $e) {
				echo "Erreur : ".$e->getMessage()."<br />";
			} finally {
				$connexion=null;
			}

		}

			public function getSongsbyArtist($name){

			try {
				$connexion = new PDO('mysql:host=localhost;dbname=wave', config::DB_USER, config::DB_PWD);
				$resultats = $connexion->query("SELECT * FROM musique where artist = '".$name."'");
				$sortie = null;
					while($chanson=$resultats->fetch())
				{
					$chanson = new Chanson($chanson["lien"],$chanson["title"],$chanson["artist"],$chanson["image"]);
					$sortie .= $chanson->__toString();
				}
				if($sortie==null){
					return "No results";
				}else{
					
					return "[".$sortie."]";
				}
				
				
				
				$resultats->closeCursor();
	
			} catch (PDOException $e) {
				echo "Erreur : ".$e->getMessage()."<br />";
			} finally {
				$connexion=null;
			}

		}
		}


		
	
?>