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
    <link rel="stylesheet" href="css\song.css">
</head>
<script src="scripts/jquery-3.6.2.js"></script>
<?php 
include_once 'Modele\config\configDB.interface.php';
include_once 'Modele\classes\chanson.class.php';
include "Modele/included/sidebar.php";
include "Modele/included/playlistbar.php";

include_once "Modele\classes\chansonDOA.class.php";
include_once 'Modele\included\song.inc.php';

    
    
$req = new songRequest();
$allSongs = $req->getAllSongs();

?>
<body onload=load()>
   <div class="main-content">
    <?php afficherToutesChansons($allSongs); ?>
   </div>
</body>
</html>

&nbsp;
