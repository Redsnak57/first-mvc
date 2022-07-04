<?php
include("../../model/user.php");

function vehicule($bdd) {

    $retour = getVehicule($bdd);
    return $retour;
}


?>