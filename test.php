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
<body>
<?php 
include "Modele/included/sidebar.php";
include "Modele/included/playlistbar.php";
include_once "Modele/classes/chanson.class.php";
include_once 'Modele\included\song.inc.php';

    
    
$test = new Chanson("music/jazz2.wav","Jazz2","Unknown","images/breakcore.jpg");

?>
<div class='main-content' onclick=setSong(<?=$test->__toString()?>> <?=$test->__toString()?></div>
</body>
</html>
