<?php 
//adrsse du serveur: adresse IP ou le nom de la hote 
$server="localhost";
//nom de l'utilisateur ayant le droit sur la bd, ici c'est l'administrateur
$user="userformation";
//mot de passe de cet utilisateur
$pwd="passer";
//nom de la base de données
$db="formation_db";
//connexion au serveur mysql et a la source des données
$conn= mysqli_connect($server, $user, $pwd, $db);
 ?>