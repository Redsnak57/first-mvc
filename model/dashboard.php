<?php
    $select_modele = $bdd->prepare("SELECT * FROM `modele`");
    $select_modele->execute();
    $numbers_of_modele = $select_modele->rowCount();

   
    $select_users = $bdd->prepare("SELECT * FROM `user`");
    $select_users->execute();
    $numbers_of_users = $select_users->rowCount();
               
?>