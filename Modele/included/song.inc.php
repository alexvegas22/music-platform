<?php
include_once "Modele/classes/chanson.class.php";

function afficherUneChanson($uneChanson){
    echo "<div onclick=setSong(".$uneChanson->__toString().") class='song-square'>";
    echo "<img src=".$uneChanson->getImage().">";
    echo "<div>".$uneChanson->getTitre()."</div>";
    echo "<div>".$uneChanson->getAuteur()."</div>";
    echo "</div>";
}
function afficherToutesChansons($uneListe){
    foreach($uneListe as $uneChanson){
        afficherUneChanson($uneChanson);
    }
}
?>


