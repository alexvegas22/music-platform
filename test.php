<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/nolan/64/audio-wave.png">
    
    <link rel="stylesheet" href="css\sidebar.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\playlist.css">
    <script src='scripts\music-player.js'></script>
</head>
<body onload='load()'>

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




?>
<div class='main-content'><?php
    
    $req = new playlistRequest();
     $playlist =$req->getPlaylistByName("RenderDistance"); 
      
     $allplaylists = $req->getAllPlaylists();

    afficherAllPlaylist($allplaylists);
    
?>

    <div class='main-content'  onclick="play_playlist(<?php echo $req->prepareString($playlist) ?>)">Click me</div>
    </div>
</body>
</html>
