<?php
include("../../model/addVoitureModel.php");


function newVoiture($bdd, $string){
    $voiture["nom"] = strip_tags($string["nom"]);
    $voiture["immat"] = strip_tags($string["immat"]);
    $voiture["couleur"] = strip_tags($string["couleur"]);
    $voiture["marque"] = strip_tags($string["marque"]);

    $retour = setNewVoiture($bdd, $voiture);
    return $retour;
}
?>