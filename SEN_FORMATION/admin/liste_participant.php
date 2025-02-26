<?php
//appel du fichier de connexion a la bd
require_once('../connexion_db/conn_db.php');
//definition de la requete de selecftion(avec jointure)
$sql_part="select id,nom,prenom,sexe,date_naiss,lieu_naiss,email,mdp_part,region,domaine  from participant natural join formation" ;
//execution de la requete
$query_part=mysqli_query($conn, $sql_part) or die(mysqli_error($conn));
?>


<!DOCTYPE html>
<html>
<head>
    <title>Liste participant</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/style_tableau.css">
</head>
<body>
    <table>
        <caption><h3>Liste des participants</h3></caption>
             <tr class="c3">
                   <th>Editer</th>
                   <th>Supprimer</th>
                   <th>ID</th>
                   <th>Nom</th>
                   <th>Prenom</th>
                   <th>Sexe</th>
                   <th>Date de Naissance</th>
                   <th>Lieu de Niassance</th>
                   <th>Email</th>
                   <th>Mot de Passe</th>
                   <th>Region </th>
                   <th>Formation</th>
             </tr>
<?php   
//exploitatin et affichage dans un tableau html

while($part=mysqli_fetch_array($query_part))
    {
        extract($part);
        echo"<tr>
            <td><a href='fiche_participant.php?id=$id'>Editer</a></td>
            <td><a href='supprim_participant.php?id=$id'>Supprimer</a></td>
            <td>$id</td>
            <td>$nom</td>
            <td>$prenom</td>
            <td>$sexe</td>
            <td>$date_naiss</td>
            <td>$lieu_naiss</td>
            <td>$email</td>
            <td>$mdp_part</td>
            <td>$region</td>
            <td>$domaine</td> 
            </tr>" ;        
    }
    ?>
    </table>

</body>
</html>
