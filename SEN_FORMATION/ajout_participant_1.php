<?php 
//appel du fichier de connexion
require_once('connexion_db/conn_db.php');
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
//definition de la requete d'insertion
$sql_insert="insert into participant values(null,'$nom','$prenom','$sexe','$date_naiss','$lieu_naiss','$email','$mdp_part','$region','$id_formation')";
//execution de la requete
$query_insert=mysqli_query($conn,$sql_insert) or die(mysqli_error($conn));
//Message de configuration
if ($query_insert) 
{
	echo "<h2>Merci $nom $prenom votre inscription a été enregistrée!</h2>";
}
 ?>