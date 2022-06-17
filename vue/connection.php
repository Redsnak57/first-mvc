<?php
include("../controller/function/connection.php");

if(isset($_POST["email"],$_POST["mdp"])){
    if(!empty($_POST["email"]) && !empty($_POST["mdp"])) {
        $connectionStatu = connection($bdd, $_POST);
        echo $connectionStatu;
    } else {
        echo "<span>Merci de remplir tout les champs.</span>";
    }
}

?>
<div class="formSetup">
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Votre email">
        <input type="password" name="mdp" placeholder="Votre mot de passe">
        <button type="submit" class="btn"> Se connecter</button>
    </form>
</div>

