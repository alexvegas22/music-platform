<?php
include_once "Modele\classes/chanson.class.php";
include_once "Modele\classes/chansonDOA.class.php";
include_once "Modele\classes/playlist.class.php";
include_once "Modele\classes/playlistDOA.class.php";

function afficherPlaylist($playlist){
    $req = new playlistRequest();
    $liste = $req->prepareString($playlist);
    echo "
    <div class='playlist'>
        <img src='".$playlist->getImage()."' class='albumcover'>
        <div class='col'>
            <div >".$playlist->getNom()."</div>
            <div class='auteur'>".$playlist->getAuteur()."</div>
        </div>
        <img src='images\play.png' class='play' onclick='play_playlist(".$liste.")'>
        
    </div>";
}
function afficherAllPlaylist($uneListe){
    foreach($uneListe as $unePlaylist){
        afficherPlaylist($unePlaylist);
    }
}

?>

