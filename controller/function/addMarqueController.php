<?php
include("../../model/addMarqueModel.php");

function newMarque($bdd, $string){
    $marque["nom"] = strip_tags($string["nom"]);
    $marque["nom"] = ucfirst(strtolower($marque["nom"]));

    $retour = setNewMarque($bdd, $marque);
    return $retour;
}
?>