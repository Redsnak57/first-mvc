<?php
include ("../controller/function/dashboard.php");

?>

<!-- Si lien dans l'url hors connection accès au dashboard.
Besoin de créer une fonction pour le dash ?
Si plusieurs fichier css tout dans l'index, ou un pars page ?-->
<div class="container-box">            
    <div class="box">
        <h3><?= $numbers_of_modele; ?></h3>
        <i class="fa-solid fa-car"></i><br>
        <a href="voiture.php">Voir les clients</a>
    </div>

    <div class="box">
        <h3><?= $numbers_of_users; ?></h3>
        <i class="fa-solid fa-user"></i><br>
        <a href="users_account.php">Voir les utilisateur</a>
    </div>

    <div class="box">
        <h3><?= $numbers_of_users; ?></h3>
        <i class="fa-solid fa-user"></i><br>
        <a href="users_account.php">Voir les utilisateur</a>
    </div>
</div>