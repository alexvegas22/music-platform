<link rel="stylesheet" href="css\style.css">
<link rel="stylesheet" href="css\musicPlayer.css">
<link rel="stylesheet" href="css\sidebar.css">
<link rel="stylesheet" href="css\profile.css">
<script src="scripts/jquery-3.6.2.js"></script>
<script src="scripts/user-section.js"></script>
<script src="scripts/sidebar-handler.js"></script>

    
<div  class = "background" >
    <div class="sidebar">
        <a href='index.php' class="wave"><img src="images\logo2.png" ></a>
        <div class="wave-section">  
            <a href="songPage.php"> Songs</a> 
            <a href="playlist.php"> Playlists</a> 
            <a href="songPage.php" style='text-decoration:line-through'> Search</a> 
            
        </div>
        <?php
        
        
        include_once 'Modele\included\profile.php';
        include_once 'Modele\classes\userDOA.class.php';
         
        
        
         if (isset($_SESSION['user'])){
            $req = new userRequest();
            
            $profil = $req->getUser($_SESSION['user']);
            afficherProfil($profil);
         } else{
            
            afficherGuest();
         }
         
         
         include 'Modele\included\musicPlayer.php';?>
    </div>   
</div>

