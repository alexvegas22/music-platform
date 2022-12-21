<?php 
include("Modele\classes\profile.class.php");

function afficherProfil($profil){
        echo "<div id = 'profile-grid' class='grid-container'>";
        echo "<img class='item1' src='".$profil->getPhoto()."'>";
        echo "<div class='item2'>".$profil->getNom()."</div>";
        echo "<div id='logout' class ='item3'>Log out</div>";
        echo "<a class='item4' href='songPage.php'> My playlists</a>";
        echo "<a class='item5' href='songPage.php'> Liked Songs</a>"; 
        echo "<a href='songPage.php' class'item6'>Liked Playlists</a>";
        echo "<a href='songPage.php' class='item7'>My profile</a> ";
        echo "</div>";

}

function afficherGuest(){
        echo "<div id='guest-grid' class='guest'>
        <div id='login'>Log in</div>
        <div id='signup'>Sign up</div>
        </div>";
}

?>