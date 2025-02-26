<?php 
//appel du fichier de connexion a la bd
require_once('../connexion_db/conn_db.php');
//recuperation de l'id par la methode get
$id=$_GET['id'];
//definition de la requete
$sql_supprim="delete from participant where id='$id'";
//execution de la requte
$query_supprim=mysqli_query($conn,$sql_supprim) or die(mysqli_error($conn));
//redirection
header("location: liste_participant.php");
 exit();
 ?>