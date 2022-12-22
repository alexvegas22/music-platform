<?php 
include_once("Modele\classes\profile.class.php");
include_once("Modele\classes\userDOA.class.php");

function afficherProfil($profil){
        echo "<div id = 'profile-grid' class='grid-container'>";
        echo "<img class='item1' src='".$profil->getPhoto()."'>";
        echo "<div class='item2'>".$profil->getNom()."</div>";
        echo "<div onclick='logout()' id='logout' class ='item3'>Log out</div>";
        echo "<a class='item4' href='songPage.php'> My playlists</a>";
        echo "<a class='item5' href='songPage.php'> Liked Songs</a>"; 
        echo "<a href='songPage.php' class'item6'>Liked Playlists</a>";
        echo "<a href='songPage.php' class='item7' style='text-decoration:line-through'>My profile</a> ";
        echo "</div>";

}

function afficherGuest(){
        echo "<div id='guest-grid' class='guest'>
        <div id='login'>Log in</div>
        <div id='signup'>Sign up</div>
        </div>
        <form action='' method='post'> 
        <div id = 'login-grid' class='login-grid'>
            <label for='uname'>Username</label>
            <input type='text' placeholder='Enter your username' name='uname' required>
        
            <label for='psw'>Password</label>
            <input type='password' placeholder='Enter your password' name='psw' required>
        
            <button type='submit'> Connexion </button>

            <div  id='annuler' class='annuler'>Annuler</div>
          
        </div>
        
      </form>";
            
            if (isset($_POST['uname']) && !empty($_POST['psw'])) {
                $username = $_POST["uname"];
                $password = $_POST["psw"];
		$req = new userRequest();		
               if ($req->login($username, $password)){
                $req = new userRequest();
                
                $_SESSION['user'] = $_POST['uname'];
                afficherProfil($req->getUser($username));
                echo "<script>$( '#guest-grid' ).hide();</script>";
               }else {
                  echo "<script>alert('Wrong credentials')</script>";
               }
        }
            

}

      
      
    
?>