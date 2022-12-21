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
<div class = "background">
    <div class="sidebar">
        <div class="wave"><img src="images\logo2.png" ></div>
        <div class="wave-section">  
            <a href="songPage.php"> Songs</a> 
            <a href="songPage.php"> Playlists</a> 
            <a href="songPage.php"> Search</a> 
            
        </div>
        <?php include 'Modele\included\profile.php';?>
        <?php include 'Modele\included\musicPlayer.php';?>
    </div>   
</div>
</body>
</html>