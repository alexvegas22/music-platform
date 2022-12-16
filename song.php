<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\song.css">
    
</head>
<body>
    <div class="song-box">
        <img class="album" src="https://upload.wikimedia.org/wikipedia/commons/3/3c/No-album-art.png" height=150px width=150px>
        <div class="title">Title</div>
        <div class="artist">Artist</div>
        <div class= "row">
        <img onclick="restart()" src="https://img.icons8.com/ios-filled/50/null/skip-to-start--v3.png"/>
        <img id="play" onclick="button()" src="https://img.icons8.com/ios-filled/50/null/play--v2.png">
        <img src="https://img.icons8.com/ios-filled/50/null/end--v1.png"/>
        </div>
    </div>
    <audio id="song">
        <source src="music/Inna pad.wav" type="audio/wav" >
    </audio>


    <script src="scripts/music-player.js"></script> 

</body>
</html>