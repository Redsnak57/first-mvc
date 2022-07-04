<?php
include("../../controller/function/user.php");
include("../../controller/function/supprimer.php");

echo "<table>
<th> Marque </th>
<th> Nom</th>
<th> Immatricule </th>
<th> Couleur </th>";

$affichageVehicule = vehicule($bdd);

foreach ($affichageVehicule as $index) {
echo "<tr>
    <td>$index[nom_marque]</td>
    <td>$index[nom_modele]</td>
    <td>$index[immat]</td>
    <td>$index[couleur]</td>
    <td><button><a href=../include/modifier.php?modifCar=$index[ID_modele] class=modifVoiture> Modifier</button>
    <td><button><a href=index.php?page=user.php&supCar=$index[ID_modele] class=suppVoiture>Supprimer</button>
</tr>

";

}


?>
</table>
