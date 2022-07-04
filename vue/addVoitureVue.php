<?php
include("../../controller/function/addVoitureFunction.php");

?>

<form action="" method="POST">
        <h1> Enregistrer une voiture </h1>
        <input type="text" name="nom" placeholder="Nom de la voiture" required>
        <input type="text" name="immat" placeholder="Immatriculation" required>
        <input type="text" name="couleur" placeholder="Couleur" required>
        <select name="marque">
            <?php
                $selectMarque = "SELECT * FROM marque";
                $querySelectMarque = $bdd -> query($selectMarque);
                $array = $querySelectMarque -> fetchAll();
                foreach ($array as $index) {
                    echo "<option value=$index[ID]>$index[nom]</option>";
                }
            ?>
            <?php
            if(isset($_POST["nom"],$_POST["immat"],$_POST["couleur"],$_POST["marque"])){
                if(!empty($_POST["nom"]) && !empty($_POST["immat"]) && !empty($_POST["couleur"]) && !empty($_POST["marque"])){
                    $inscriptStatu = newVoiture($bdd, $_POST);
                    echo $inscriptStatu;
                }        
            }         
        ?>
        </select>
        <button type="submit"> Envoyer </button>
    </form>