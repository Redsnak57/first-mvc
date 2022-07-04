<?php
session_start();
include "../controller/config/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php
    
    // User connecté 
    if(isset($_SESSION["user"])){
        if($_SESSION["user"]["ID_rank"] == 2){
            header("Location:./backoffice/index.php");
        } else {
        echo"
            <nav class=nav>
                <ul class=navbar>
                    <li><a href=index.php?page=accueil>Accueil</a></li>
                    <li><a href=../vue/deconnection.php> Deconnection </a></li>
                </ul>
            </nav>";
        echo "<h2 class=bienvenu>Bienvenu ".$_SESSION['user']['nom']."</h2>";
    }
}
    
    // User pas connecté 
    if(!isset($_SESSION["user"])){
        echo "
        <nav class=nav>
            <ul class=navbar>
                <li><a href=index.php?page=accueil>Accueil</a></li>
                <li><a href=index.php?page=inscription>Inscription</a></li>
                <li><a href=index.php?page=connection>Connection</a></li>
            </ul>
        </nav>
        ";
    }
        
    // Redirection page 
    if(isset($_GET["page"])){
        switch($_GET["page"]){
            case "dashboard":
                include("../vue/dashboard.php");
                break;
            case "user":
                include("../vue/user.php");
                break;
            case "inscription":
                include('../vue/inscription.php');
                break;
            case "connection":
                include("../vue/connection.php");
                break;
            default:
                include("../vue/accueil.php"); // Par défault la page accueil
        }
    } else {
        include("../vue/accueil.php"); // Si lien qui n'existe pas
    }
    ?>
    <!-- fin de la div class page-wrapper -->
    </div>
   
</body>
</html>