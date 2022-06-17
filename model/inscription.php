<?php
/**
 * Vérifie que l'email n'existe pas en BDD
 *
 * @param PDO $bdd
 * @param array $user
 * @return string
 */
function get_check_email($bdd, $user){
    $select_email = $bdd->prepare("SELECT * FROM `user` WHERE email =:email");
    $select_email->bindValue(":email", $user["email"], PDO::PARAM_STR);
    $select_email->execute();

    if($select_email->rowCount() > 0){
        return "1";
    } 
    return "0";
}

/**
 * Création d'un compte, si l'email n'existe pas déjà
 *
 * @param PDO $bdd
 * @param array $user
 * @return string
 */
function setNewUser($bdd, $user){
    $check_email = get_check_email($bdd, $user);
    if($check_email == 1) {
        return "<span> Adresse email déjà existante </span>";
    } else {
        $str = "INSERT INTO user (nom, email, telephone, pass, ID_rank) VALUES (:nom, :email, :tel, :pass, 1)";
        $query = $bdd->prepare($str);
        $query->bindValue(':nom', $user['nom'], PDO::PARAM_STR);
        $query->bindValue(':email', $user['email'], PDO::PARAM_STR);
        $query->bindValue(':tel', $user['tel'], PDO::PARAM_STR);
        $query->bindValue(':pass', $user['mdp'], PDO::PARAM_STR);
        
        if($query->execute()){
            return '<span>Enregistrement reussi</span>';
        }else{
            return '<span>Erreur</span>';
        }
    }
}
?>
