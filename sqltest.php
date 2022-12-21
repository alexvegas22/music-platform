<!DOCTYPE html>

<head>
    <title>Test Sql</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <div class="main-content">
<?php
include_once "Modele\classes\chansonDOA.class.php";
include_once "Modele\included\song.inc.php";
	   
    $req = new songRequest();
    $song=$req->getSongbyName("Jazz1");
    afficherUneChanson($song);
    
	?>
    </div>

    
