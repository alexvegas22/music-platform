<?php
include_once 'Modele\config\configDB.interface.php';
include_once 'Modele\classes\chanson.class.php';
include_once 'Modele\classes\userDOA.class.php';
	class playlistRequest{
	    
		public  function getAllPlaylists(){

			try {
				$connexion = new PDO('mysql:host=localhost;dbname=wave', config::DB_USER, config::DB_PWD);
				 $resultats = $connexion->query("SELECT * FROM playlist ");
				$list=null;
				while($playlist=$resultats->fetch())
				{
					$list[]=[$playlist["nom"],$playlist["user_id"],$playlist["id"]];
				}
				return $list;
				$resultats->closeCursor();
	
			} catch (PDOException $e) {
				echo "Erreur : ".$e->getMessage()."<br />";
			} finally {
				$connexion=null;
			}

		}
		public function getPlaylistbyName($name){

			try {
				$connexion = new PDO('mysql:host=localhost;dbname=wave', config::DB_USER, config::DB_PWD);
				 $resultats = $connexion->query("SELECT * FROM musique where title = '".$name."'");
				$sortie;
				while($playlist=$resultats->fetch())
				{
					$sortie[] = new Playlist($playlist["lien"],$playlist["title"]);
				}
				return $sortie;
				$resultats->closeCursor();
	
			} catch (PDOException $e) {
				echo "Erreur : ".$e->getMessage()."<br />";
			} finally {
				$connexion=null;
			}
		}

		public function getPlaylistId($name){

			try {
				$connexion = new PDO('mysql:host=localhost;dbname=wave', config::DB_USER, config::DB_PWD);
				 $resultats = $connexion->query("SELECT id FROM playlist where nom = '".$name."'");
				$sortie;
				while($playlist=$resultats->fetch())
				{
					$sortie = $playlist['id'];
				}
				return $sortie;
				$resultats->closeCursor();
	
			} catch (PDOException $e) {
				echo "Erreur : ".$e->getMessage()."<br />";
			} finally {
				$connexion=null;
			}

		}

            public function getPlaylistSongs($name){


                try {    
                    $connexion = new PDO('mysql:host=localhost;dbname=wave', config::DB_USER, config::DB_PWD);


                    $res = $connexion->query("SELECT musique.* FROM musique join playlistsong on playlistsong.song_id=musique.id join playlist on playlistsong.playlist_id=playlist.id where playlist.nom = '".$name."'");
                    
                        while($chanson=$res->fetch())
                    {
                        $array[] = new Chanson($chanson["lien"],$chanson["title"],$chanson["artist"],$chanson["image"]);   
                    }
                    $resultats = $connexion->query("SELECT playlist.nom as playlistname, users.nom as username FROM playlist join users on users.id=playlist.user_id where playlist.nom = '".$name."'");
                    $sortie = null;
                        while($playlist=$resultats->fetch())
                    {
                        $sortie[] = new playlist($playlist["playlistname"],$playlist["username"],$array);  
                    }
                    if($sortie==null){
                        return "No results";
                    }else{
                        
                        return $sortie;
                    }
                    
                    
                    
                    $resultats->closeCursor();
        
                } catch (PDOException $e) {
                    echo "Erreur : ".$e->getMessage()."<br />";
                } finally {
                    $connexion=null;
                }


            }


			public function getPlaylistsByAuteur($name){

			try {
                $request = new userRequest();
                $userid = $request->getUserId($name);

				$connexion = new PDO('mysql:host=localhost;dbname=wave', config::DB_USER, config::DB_PWD);
				$resultats = $connexion->query("SELECT playlist.nom as playlistname, users.nom as username FROM playlist join users on users.id=playlist.user_id where user_id = '".$userid."'");
				$sortie = null;
                $req = new playlistRequest();
					while($playlist=$resultats->fetch())
				{

                    $array = $req->getPlaylistSongs($playlist['playlistname']);
                    
					$sortie[] = new Playlist($playlist["playlistname"],$playlist["username"],$array);
					
				}
				if($sortie==null){
					return "No results";
				}else{
					
					return $sortie;
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