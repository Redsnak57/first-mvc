<?php

function get_check_emailLogin($bdd, $user){
    $select_emailLogin=$bdd->prepare("SELECT * FROM user WHERE email=:email");
    $select_emailLogin->bindValue(":email", $user["email"], PDO::PARAM_STR);
    $select_emailLogin->execute();

    if($select_emailLogin->rowCount() <= 0){
        return "0";
    }
    return "1";
   
}
// pb connection email si non existant. Pb deco page qui redirige pas bon endroit
function getConnection($bdd, $user){
    $select_emailLogin = get_check_emailLogin($bdd, $user);
    if($select_emailLogin == 0){
        return "<span> Aucune adresse email existante.</span>";
    }else {
        $connection = $bdd->prepare("SELECT * FROM user WHERE email=:email");
        $connection->bindValue(":email", $user["email"], PDO::PARAM_STR);
        $connection->execute();

        $userBdd= $connection->fetch(PDO::FETCH_ASSOC);

        if(password_verify($user["mdp"], $userBdd["pass"])){
            $_SESSION["user"] = $userBdd;
            unset($_SESSION["user"]["pass"]);
            header("Location:index.php");
        } else {
            return "<span> Mot de passe inccorect.</span>";
        }    
    }
}


?>