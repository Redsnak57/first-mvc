<?php

function getCheckVoiture($bdd, $voiture){
    $conditionVoiture = $bdd->prepare("SELECT immat FROM modele WHERE immat=:immat");
    $conditionVoiture->bindValue(":immat", $voiture["immat"], PDO::PARAM_STR);
    $conditionVoiture->execute();

    if($conditionVoiture->rowCount() > 0){
        return "1";
    }
    return "0";
}

function setNewVoiture($bdd, $voiture){
    $checkVoiture = getCheckVoiture($bdd, $voiture);
    if($checkVoiture == 1){
        return "<span> Immatriculation déjà existante.</span>";
    }else {
        $insertVoiture = "INSERT INTO modele (nom,immat,couleur,ID_marque) VALUES (:nom, :immat, :couleur, :marque)";
        $query = $bdd -> prepare ($insertVoiture);
        $query -> bindValue(":nom", $voiture["nom"], PDO :: PARAM_STR);
        $query -> bindValue(":immat", $voiture["immat"], PDO :: PARAM_STR);
        $query -> bindValue(":couleur", $voiture["couleur"], PDO :: PARAM_STR);
        $query -> bindValue(":marque", $voiture["marque"], PDO :: PARAM_STR);
        $query-> execute();
    }

}
  

?>