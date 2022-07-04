<?php
session_start();
include "../../controller/config/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style_admin.css">
</head>
<body>
    <?php
    
    // User connecté 
    if(isset($_SESSION["user"])){
        if($_SESSION["user"]["ID_rank"] == 2){
            //j'ai ajouter la div de class page-wrapper (Brandon)
            echo" 
            <div class='page-wrapper'>         
                <nav class=nav-admin>
                    <ul>
                        <h2 class=bienvenu>Bienvenu ".$_SESSION['user']['nom']."</h2>
                        <li>
                            <a href=index.php?page=dashboard>
                            <i class='fas fa-home'></i>
                            <span class=nav-item>Dashboard </span>
                        </a><li>
                        <li>
                            <a href=index.php?page=user>
                            <i class='fas fa-user'></i>
                            <span class=nav-item> Clients </span>
                        </a><li>
                        <li>
                            <a href=index.php?page=marque>
                            <i class='fas fa-solid fa-plus'></i>
                            <span class=nav-item> Ajouter une marque </span>
                        </a><li>
                        <li>
                            <a href=index.php?page=voiture>
                            <i class='fas fa-solid fa-plus'></i>
                            <span class=nav-item> Ajouter une voiture </span>
                        </a><li>
                        <li>
                            <a href=../../vue/deconnection.php class=logout>
                            <i class='fas fa-sign-out'></i>
                            <span class=nav-item> Deconnection </span>
                        </a><li>
                    </ul>
                </nav>";
        } 
        
        // Redirection page 
        if(isset($_GET["page"])){
            switch($_GET["page"]){
                case "dashboard":
                    include("../../vue/dashboard.php"); // Page dashboard 
                    break;
                case "user":
                    include("../../vue/user.php"); // Page gestion des utilisateurs 
                    break;
                case "marque":
                    include("../../vue/addMarqueVue.php"); // Page ajoute de marque 
                    break;
                case "voiture":
                    include("../../vue/addVoitureVue.php"); // Page ajoute de voiture 
                    break;
                default:
                    include("../../vue/dashboard.php"); // Par défault la page accueil
            }
        } else {
            include("../../vue/dashboard.php"); // Si lien qui n'existe pas
        }
    }
    ?>
    <!-- fin de la div class page-wrapper -->
    </div>

</body>
</html>