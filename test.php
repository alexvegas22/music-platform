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
<?php include 'Modele\included\sidebar.php';
     include 'Modele\included\playlistbar.php';
$test = new Chanson("'music/LMN222DRP.wav'","'LMN222DRP'","'kaleidoplasm'","'https://freemusicarchive.org/image/?file=track_image%2FyU8zK8EaC4aOfw0GgvdrDfyY9oMpiatRA6FfFgTy.jpg&width=290&height=290&type=track'");
?>
<body>
   <p onclick=setSong(<?php echo $test->__toString() ?>) class = 'main-content'> Click me</p>
   <p class = 'main-content' ><?php echo $test->__toString() ?></p>
</body>
</html>
