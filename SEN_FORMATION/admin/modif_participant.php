<?php 
//appel du fichier de connexion
require_once('../connexion_db/conn_db.php');
//recuperation des donnees envoyes par post
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$date_naiss=$_POST['date_naiss'];
$lieu_naiss=$_POST['lieu_naiss'];
$email=$_POST['email'];
$mdp_part=$_POST['mdp_part'];
$region=$_POST['region'];
$id_formation=$_POST['id_formation'];
$id =$_POST['id'];
//definition de la requete de mise a jour                          
$sql_update="UPDATE participant set nom='$nom',prenom='$prenom',sexe='$sexe',date_naiss='$date_naiss',lieu_naiss='$lieu_naiss',email='$email',mdp_part='$mdp_part',region='$region',id_formation='$id_formation' where id='$id'";
//execution de la requete
$query_update=mysqli_query($conn,$sql_update) or die(mysqli_error($conn));
// Redirection
header("Location:liste_participant.php");
exit();
?>