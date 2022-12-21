<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/nolan/64/audio-wave.png">
    
    <link rel="stylesheet" href="css\sidebar.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\profile.css">
</head>
<body>
<div class = "background">
    <div class="sidebar">
        <div class="wave"><img src="images\logo2.png" ></div>
        <div class="wave-section">  
            <a href="songPage.php"> Songs</a> 
            <a href="songPage.php"> Playlists</a> 
            <a href="songPage.php"> Search</a> 
            
        </div>
        <?php
        
        $_SESSION["username"]="admin";
        include 'Modele\included\profile.php';
        include 'Modele\classes\userDOA.class.php';
         
        // $profil = new Profile("Alex", "alexvegas", "root", "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/SNice.svg/1200px-SNice.svg.png" );

         if (isset($_SESSION['user'])){
            $req = new userRequest();
            $profil = $req->getUser($_SESSION['user']);
            afficherProfil($profil);
         }else{
            afficherGuest();
         }
         
         
         include 'Modele\included\musicPlayer.php';?>
    </div>   
</div>
</body>
</html>