<!DOCTYPE html>

<head>
    <title>Test Sql</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <div class="main-content">
<?php
include_once "Modele\classes\userDOA.class.php";
include_once "Modele\classes\profile.class.php";
	   
   $req = new userRequest();
   $user = $req->getUser("admin");
   
    echo $user;
	?>
    </div>

</body>
