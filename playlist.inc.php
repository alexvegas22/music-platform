<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/nolan/64/audio-wave.png">
    
    <link rel="stylesheet" href="css\playlist.css">
    <link rel="stylesheet" href="css\style.css">
</head>
<?php
include_once "Modele\classes/chanson.class.php";
include_once "Modele\classes/chansonDOA.class.php";
include_once "Modele\classes/playlistDOA.class.php";
include_once "Modele\classes/userDOA.class.php";
include_once "Modele\classes/playlist.class.php";

include_once 'Modele\config\configDB.interface.php';

?>
<body>
    <div class="playlist">
        <img src="images\renderDistance.png" class='albumcover'>
        
        <div class='col'>
            <div >Title</div>
            <div class='auteur'>Auteur</div>
        </div>
        <img src="images\play.png" class='play' onclick='setQueue(<?php $req = new playlistRequest();$playlist =$req->getPlaylistsByAuteur("Alex"); ?>)'>
        
    </div>
</body>