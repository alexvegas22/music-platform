<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/nolan/64/audio-wave.png">
    
    <link rel="stylesheet" href="css\sidebar.css">
    <link rel="stylesheet" href="css\style.css">
</head>
<body onload='load()'>
<?php 


include_once "Modele/classes/chanson.class.php";
include_once "Modele/classes/chansonDOA.class.php";
include_once "Modele/classes/playlistDOA.class.php";
include_once "Modele/classes/userDOA.class.php";
include_once "Modele/classes/playlist.class.php";
include_once 'Modele\included\song.inc.php';



include_once 'Modele\config\configDB.interface.php';





    
    $req = new playlistRequest();
    $playlist = $req->getAllPlaylists();

   
    for($x = 0; $x < count($playlist); $x++) {
        echo implode($playlist[$x]);

      }

     /* $playlist = $req->getPlaylistSongs("RenderDistance");


      echo implode($playlist); */

      
    
     $playlist =$req->getPlaylistsByAuteur("Alex");

     for($x = 0; $x < count($playlist); $x++) {
        echo $playlist[$x];

      }

?>
    <div class='main-content' onclick=''>Click me</div>
</body>
</html>