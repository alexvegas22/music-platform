
<?php
include_once 'Modele\config\configDB.interface.php';
include_once 'Modele\classes\chanson.class.php';
	class userRequest{
	    
		public  function getUser($username){

			try {
				$connexion = new PDO('mysql:host=localhost;dbname=wave', config::DB_USER, config::DB_PWD);
				 $resultats = $connexion->query("SELECT * FROM users where username = '".$username."'");
				
				while($user=$resultats->fetch())
				{
					$profil=new Profile($user["nom"],$user["username"],$user["password"],$user["photo"],$user["id"]);
				}
                
				return $profil;
				$resultats->closeCursor();
	
			} catch (PDOException $e) {
				echo "Erreur : ".$e->getMessage()."<br />";
			} finally {
				$connexion=null;
			}

		}

        public function newUser($nom,$username,$password,$photo){
            try {
				$connexion = new PDO('mysql:host=localhost;dbname=wave', config::DB_USER, config::DB_PWD);
				$connexion->query("INSERT INTO `users` (`nom`, `username`, `password`, `photo`, `id`) VALUES ('".$nom."','".$username."', '".$password."', '".$photo."', NULL)");
			} catch (PDOException $e) {
				echo "Erreur : ".$e->getMessage()."<br />";
			} finally {
				$connexion=null;
			}
        }

		public function login($username, $password){
			try {
				$connexion = new PDO('mysql:host=localhost;dbname=wave', config::DB_USER, config::DB_PWD);
				 $resultats = $connexion->query("SELECT username, password FROM users where username = '".$username."'");
				$success = False;
				while($user=$resultats->fetch())
				{
					if($username==$user["username"]&&$password==$user["password"]){
						$success= True;
					}
				}
				return $success;
				$resultats->closeCursor();
	
			} catch (PDOException $e) {
				echo "Erreur : ".$e->getMessage()."<br />";
			} finally {
				$connexion=null;
			}

	}
}
?>

