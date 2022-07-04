<?php
include "../controller/function/inscription.php";

// Condition pour s'inscrire 
if(isset($_POST['nom'], $_POST['email'],$_POST['confirmEmail'], $_POST['mdp'], $_POST['confirmMdp'], $_POST['tel'])){
    if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['confirmMdp']) && !empty($_POST['tel'])){
        if ($_POST["mdp"] != $_POST["confirmMdp"]){ 
            echo "<span> Les mots de passe ne correspondent pas. <span>";
        } elseif ($_POST["email"] != ($_POST["confirmEmail"])){
            echo "<span> Les emails ne correspondent pas. <span>";
        }else {
            $inscriptStatu = newUser($bdd, $_POST);
            echo $inscriptStatu;
        }
    } else {
        echo "<span>Merci de remplir tout les champs.<span>";
    }
}
?>

<!-- Formulaire d'inscription -->
<div class="formSetup">
    <form method="POST" action="">
        <input type="text" name="nom" placeholder="Votre nom">
        <input type="email" name="email" placeholder="Votre email">
        <input type="email" name="confirmEmail" placeholder="Confirmer l'email" >
        <input type="password" name="mdp" id="password" placeholder="Mot de passe"><i class="oeil fa-solid fa-eye" id="oeilMdp"></i>
        <input type="password" name="confirmMdp" placeholder="Confirmer le mot de passe">
        <input type="number" name="tel" placeholder="Numéro de téléphone">
        <button type="submit" class="btn"> S'inscire</button>
    </form>
</div>

<div id="message">
    <h3 id="regex">Le mot de passe doit contenir les éléments suivants </h3>
    <p id="letter" class="invalid">Une lettre minuscule</p>
    <p id="capital" class="invalid">Une lettre majuscule</p>
    <p id="number" class="invalid">Un chiffre</p>
    <p id="length" class="invalid"> 8 caractères minimum</p>
</div>

<script src="../public/assets/js/inscription.js"></script>

