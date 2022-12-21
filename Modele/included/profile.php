<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css\style.css">
        <link rel="stylesheet" href="css\profile.css">
        
    <script src="scripts/jquery-3.6.2.js"></script>
    <script src="scripts/user-section.js"></script>
</head>
<?php include("Modele\classes\profile.class.php");
$user = new Profile("Alex", "alexvegas", "root", "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/SNice.svg/1200px-SNice.svg.png" );?>
<body>
        <div id = "profile-grid" class="grid-container">
                <img class="item1" src="<?= $user->getPhoto() ?>">
                <div class="item2"><?= $user->getNom() ?></div>
                <div id="logout" class ="item3">Log out</div>

                <div class="item4">My playlists</div>
                <div class="item5">Liked Songs</div>
                <div class="item6">Liked Playlists</div>
                <div class="item7">My profile</div>
        </div>
        <div id="guest-grid" class="guest">
                <div id='login'>Log in</div>
                <div>Sign up</div>
        </div>
</body>

</html>
