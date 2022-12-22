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
include_once "Modele/classes/playlist.class.php";
include_once 'Modele\included\song.inc.php';



include_once 'Modele\config\configDB.interface.php';

include "Modele/included/sidebar.php";
include "Modele/included/playlistbar.php";


    
    $req = new songRequest();
    $playlist = $req->getSongsbyArtist('Chrome&nbsp;System&nbsp;LTD');

   $test = new Playlist("JazzDrumLoops",'alex',$playlist);
    
    echo $playlist;

?>
    <div class='main-content' onclick=''>Click me</div>
</body>
</html>