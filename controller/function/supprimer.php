<?php  
    include "../../model/supprimer.php";
?>

<?php
if(isset($_GET["supCar"])){
        $sup = $_GET["supCar"];
        $sup = strip_tags($sup);
        
        $reqDelete ="DELETE FROM modele WHERE ID=:ID";
        $query = $bdd -> prepare($reqDelete);
        $query -> bindValue(":ID", $sup, PDO::PARAM_STR);

        if($query -> execute()){
            header("Location:../vue/dashboard.php");
        } else {
            echo "Une erreur c'est produite.";
        }
    }
?>