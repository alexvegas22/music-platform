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

<div class="sidebar">
    <div class="wave">W/A/V/E</div>
    <div class="wave-section">
        
        <div>Browse Songs</div>
        <div>Browse Playlists</div>
        <input type="text" placeholder="Search..." class="search">
    </div>
    <?php include 'profile.php';?>
    <?php include 'song.php';?>
</div>   
    
</body>
</html>