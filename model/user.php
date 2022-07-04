<?php

function getVehicule($bdd){
    $client = $bdd->query("SELECT *, modele.ID AS ID_modele, marque.ID AS ID_marque, modele.nom AS nom_modele, marque.nom AS nom_marque FROM modele INNER JOIN marque ON modele.ID_marque = marque.ID ORDER BY nom_modele ASC");
    $data = $client->fetchAll();

    return $data;
}


    
?>