<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\song.css">
</head>

<?php require_once('Modele\classes\chanson.class.php');?>

<body onload="checkSong()">
    <div id="no-song" class="no-song">
            <img onclick="checkSong()" id="cd-gif"  src="images/icons8-cd.gif" height=200px width=200px>
            <div>Click on a song or playlist to start listening</div>  
    </div>
    <div id='song-container' class="song-box">
        <img id="image" class="album" src="" height=150px width=150px>
        <div id="title" class="title"></div>
        <div id="artist" class="artist"></div>
        <div class= "row">
            <img onclick="previous()" src="https://img.icons8.com/ios-filled/50/null/skip-to-start--v3.png"/>
            <img id="play" onclick="button()" src="https://img.icons8.com/ios-filled/50/null/play--v2.png">
            <img onclick="skip()"  src="https://img.icons8.com/ios-filled/50/null/end--v1.png"/>
        </div>
    </div>
    
    <audio id="lien">
        <source src="" type="audio/wav" >
    </audio>
    


    <script src="scripts/music-player.js"></script>
    <script src="scripts/jquery-3.6.2.js"></script>
</body>
</html>