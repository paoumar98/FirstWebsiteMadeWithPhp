<?php
//appel du fichier de connexion a la bd
require_once('../connexion_db/conn_db.php');
//definition de la requete de selecftion(avec jointure)
$sql_part_form="select id,nom,prenom,sexe,date_naiss,lieu_naiss,email,mdp_part,region,domaine  from participant natural join formation" ;
//execution de la requete
$query_part_form=mysqli_query($conn, $sql_part_form) or die(mysqli_error($conn));
?>


<!DOCTYPE html>
<html>
<head>
    <title>Liste participant</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/style_tableau.css">
</head>
<body>

  <?php
  while ( $forma=mysqli_fetch_array($query_part_form)) 
  {
    extract($forma);
     
      echo " <table>
      <caption><h3>Liste $domaine </h3></caption>

        </table>";
  }

  ?>
    
</body>
</html>
