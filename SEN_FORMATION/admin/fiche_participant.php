<?php  
// appel du fichier de connexion
require_once('../connexion_db/conn_db.php');
//recuperation de l'id par la methode get
$id=$_GET['id'];
//definition de la requete de selection
$sql_fiche="select * from participant where id='$id'";
//execution de la requete
$query_fiche=mysqli_query($conn,$sql_fiche) or die(mysqli_error($conn));
//extraction 
$fiche= mysqli_fetch_array($query_fiche);
extract($fiche);
//Affichage dans le formulaire
/* Voir formulaire*/
//
//definiton de la requete de selection
$sql_reg="select region from participant ";
//execution de la requete
$query_reg=mysqli_query($conn,$sql_reg) or die(mysqli_error($conn));
//definiton de la requete de selection
$sql_form="select * from formation order by domaine";
//execution de la requete
$query_form=mysqli_query($conn,$sql_form) or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html>

<head>
	<title>Fiche du participant</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style_formation.css">
</head>

<body>
	
	<form action="modif_participant.php" method="POST">
		<h2 style="text-align: center;">Fiche du participant</h2>
					<div id="bordure">
						<label for="nom">Nom:</label>
						<input type="text" name="nom"  value="<?= $nom ?>">
					</div>

					<div id="bordure">
						<label for="prenom">Prénom:</label>
						<input type="text" name="prenom" value="<?php echo $prenom ?>">
						
					</div>

					<div id="bordure">

					<label for="sexe">Sexe*:</label>
					<input type="radio" name="sexe" value="M" <?=($sexe=='M')? "checked": ""?> >Mr
					<input type="radio" name="sexe" value="F"  <?php echo ($sexe=='F')? "checked": ""?> >Mme


					</div>
                     <div id="bordure">
                     	<label for="date_naiss">Date de naissance*:</label>
                     	<input type="Date" name="date_naiss" value="<?php echo $date_naiss ?>">
                     </div>
                     <div id="bordure">
                        <label for="lieu_naiss">Lieu de naissance*:</label>
                        <input type="text" name="lieu_naiss"  value="<?php echo $lieu_naiss ?>">
                     </div>
					<div id="bordure">
                      <label for="email">Adresse email*:</label>
                      <input type="email" name="email" value="<?php echo $email?>">
						
					</div>

					<div id="bordure">
					<label for="mdp_part">Donnez un mot de passe*:</label>
					<input type="password" name="mdp_part" value="<?php echo $mdp_part ?>">
					</div>

                    <div id="bordure">
                     	<label for="region">Region*:</label>
                     	 <select name="region" >
                     	
                     	  <option value="<?php echo $region ?>"><?= $region ?></option>
                     	  <option value="Dakar" >Dakar</option>
                     	  <option value="Diourbel">Diourbel</option>
                     	  <option value="Fatick">Fatick</option>
                     	  <option value="Kaffrine">Kaffrine</option>
                     	  <option value="Kaolack">Kaolack</option>
                     	  <option value="Kédougou">Kédougou</option>
                     	  <option value="Kolda">Kolda</option>
                     	  <option value="Louga">Louga</option>
                     	  <option value="Matam">Matam</option>
                     	  <option value="Saint-Louis">Saint-Louis</option>
                     	  <option value="Sédhiou">Sédhiou</option>
                     	  <option value="Tambacounda">Tambacounda</option>
                     	  <option value="Thiès">Thies</option>
                     	  <option value="Ziguinchor">Ziguinchor</option>
                  		 </select>
                     	
                     </div> 

                     <div id="bordure">
                     	<label for="id_formation">Formation</label> 
                        <select name="id_formation">
                        <option>Selectionnez</option>
                        <?php 
                        //exploitation des données
                        while ($form=mysqli_fetch_row($query_form)) 
                        {
                            echo "<option value='$form[0]' ";
                            echo($id_formation==$form['0'])? "selected":"";
							echo ">$form[1]</option>";
                            
                        }

                        ?>
                        </select>
                    </div>
                    <div id="bordure" style="text-align: center;">
					<input type="hidden" name="id" value="<?= $id ?>">
					<input type="submit" name="" value="Modifier" id="bouton" onclick="var confirmer=confirm('Êtes-vous sûr de votre choix ?');return confirmer;" >
					</div>

                     
	
	</form>

</body>

</html>
