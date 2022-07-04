<?php
include("../../controller/function/addMarqueController.php");
?> 


<form action="" method="POST" class="addMarque">
        <h1> Enregistrer une marque </h1>
        <input type="text" name="nom" placeholder="Nom de la marque" required>
        <?php
            if(isset($_POST["nom"])){
                if(!empty($_POST["nom"])){
                    $inscriptStatu = newMarque($bdd, $_POST);
                    echo $inscriptStatu;
                }        
            }         
        ?>
        <button type="submit"> Envoyer </button>
    </form>