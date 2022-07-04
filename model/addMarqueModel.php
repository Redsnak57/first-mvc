<?php

function getCheckMarque($bdd, $marque){
    $conditionMarque = $bdd->prepare("SELECT nom FROM marque WHERE nom=:nom");
    $conditionMarque->bindValue(":nom", $marque["nom"], PDO::PARAM_STR);
    $conditionMarque->execute();

    if($conditionMarque->rowCount() > 0){
        return "1";
    }
    return "0";
}

function setNewMarque($bdd, $marque) {
    $checkMarque = getCheckMarque($bdd, $marque);
    if($checkMarque == 1){
        return "<span> Nom de marque déjà existante. </span>";
    } else {
        $insertMarque = "INSERT INTO marque (nom) VALUE (:nom)";
        $query = $bdd -> prepare ($insertMarque);
        $query -> bindValue(":nom", $marque["nom"], PDO :: PARAM_STR);
            if($query-> execute()){
                echo "Vous avez ajouté la marque.";
            } else {
                echo "Une erreur c'est produite.";
            }
        }
    }


?>