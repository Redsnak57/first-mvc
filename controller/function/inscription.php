<?php
    include "../model/inscription.php";

/**
 * Récupère les données d'user via model
 *
 * @param PDO $bdd
 * @param array $array
 * @return string
 */ 
    function newUser($bdd, $array){
        $user['nom'] = strip_tags($array['nom']);
        $user['email'] = strip_tags($array['email']);
        $user['mdp'] = password_hash($array['mdp'], PASSWORD_BCRYPT);
        $user['tel'] = $array['tel'];

        $return = setNewUser($bdd, $user);
        return $return;
    }
?>
