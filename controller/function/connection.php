<?php
include("../model/connection.php");


/**
 * Nettoie les champs d'input, et récupère les données d'utilisateurs via model
 *
 * @param PDO $bdd
 * @param array $array
 * @return void
 */
function connection($bdd, $array){
    $user["email"] = strip_tags($array["email"]);
    $user["mdp"] = strip_tags($array["mdp"]);

    $return = getConnection($bdd, $user);
    return $return;
}
?>