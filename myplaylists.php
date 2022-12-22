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
    <link rel="stylesheet" href="css\playlist.css">
</head>
<script src="scripts/jquery-3.6.2.js"></script>
<?php 
include_once "Modele/classes/chanson.class.php";
include_once "Modele/classes/chansonDOA.class.php";
include_once "Modele/classes/playlistDOA.class.php";
include_once "Modele/classes/userDOA.class.php";
include_once "Modele/classes/playlist.class.php";
include_once 'Modele\included\song.inc.php';
include_once 'Modele\included\sidebar.php';
include_once 'Modele\included\playlist.inc.php';
include_once 'Modele\config\configDB.interface.php';
include_once 'Modele\included\playlistbar.php';

$req = new playlistRequest(); 

?>
<body onload=load()>
   <div class="main-content">
    <?php   
        
        $request = new userRequest();
        $name = $request->getUser($_SESSION['user']);
        $allplaylists = $req->getPlaylistsByAuteur($name->getNom());
        afficherAllPlaylist($allplaylists);
        
     ?>
   </div>
</body>
</html>

&nbsp;