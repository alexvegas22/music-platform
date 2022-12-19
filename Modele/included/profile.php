<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css\style.css">
        <link rel="stylesheet" href="css\profile.css">
</head>
<?php include("Modele\classes\profile.class.php");
$user = new Profile("Alex", "alexvegas", "root", "images\user.png" );?>
<body>
        <div class="grid-container">
                <img class="item1" src="<?= $user->getPhoto() ?>">
                <div class="item2"><?= $user->getNom() ?></div>
                <div class ="item3">Log out</div>

                <div class="item4">Follows</div>
                <div class="item5">Followers</div>
                <div class="item6">Liked Songs</div>
                <div class="item7">Playlists</div>
        </div>
        <div class="guest">
                <div>Log in</div>
                <div>Sign up</div>
        </div>
</body>
</html>
