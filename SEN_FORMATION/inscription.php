<?php
// appel du fichier de connexion
require_once('connexion_db/conn_db.php');
//definiton de la requete de selection
$sql_formation="select * from formation";
//execution de la requete
$query_formation=mysqli_query($conn,$sql_formation) or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="css/style_formation.css">
	<meta charset="utf-8">
</head>
<body>
	<div id="site">
	<div id="banniere">
            <a href="index.php"><img src="img/ooo.jpg"></a>
		</div>
		<div id="menu">
           <ul>

				<li><a href="index.php"><strong>Accueil</strong></a></li>
            	<li><a href="formation.php"><strong>Formation</strong></a></li>
            	<li><a href="programme.php"><strong>Programme</strong></a></li>
            	<li><a href="inscription.php"><strong>Inscription</strong></a></li>

           </ul>

		</div>
		<div id="banniere2">
			<h1 id="test">SEN FORMATION TIC</h1>
		</div>

		<div id="contenu">
			<br>
			<div class="text">
				<h5>
				Votre demande d'inscription sera validée quand vous aurez complété et soumis le formulaire ci-dessous. ATTENTION, soyez vigilant, les informations que vous soumettez aujourd'hui serviront à l'édition de votre certificat à la fin de votre formation !
				</h5>
			</div>
			<div id="formulaire">
				<form action="ajout_participant.php" method="POST">
                   <div id="bordure">
					    <h2 id="capti">Formulaire d'Inscription</h2>
					</div>
						<div id="bordure">
						<label for="nom">Nom*:</label>
						<input type="text" name="nom" required/>
					</div>

					<div id="bordure">
						<label for="prenom">Prénom*:</label>
						<input type="text" name="prenom" required/>

					</div>

					<div id="bordure">

					<label for="sexe">Sexe*:</label>
					<input type="radio" name="sexe" value="M" required/>Mr
					<input type="radio" name="sexe" value="F" required/>Mme


					</div>
                     <div id="bordure">
                     	<label for="date_naiss">Date de naissance*:</label>
                     	<input type="Date" name="date_naiss" required />
                     </div>
                     <div id="bordure">
                        <label for="lieu_naiss">Lieu de naissance*:</label>
                        <input type="text" name="lieu_naiss"  required />
                     </div>
					<div id="bordure">
                      <label for="email">Adresse email*:</label>
                      <input type="email" name="email" required/>

					</div>

					<div id="bordure">
					<label for="mdp_part">Donnez un mot de passe*:</label>
					<input type="password" name="mdp_part" required />
					</div>

                    <div id="bordure">
                     	<label for="region">Region*:</label>
                     	 <select name="region" required>
                     	  <option>Choisir</option>
                     	  <option value="Dakar">Dakar</option>
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
                        while ($form=mysqli_fetch_row($query_formation))
                        {
                            echo "<option value='$form[0]'>$form[1]</option>";
                        }

                        ?>
                        </select>
                    </div>

                     	<div id="bordure" style="text-align:center;">
                     		<label for="submit"></label>
                     		<input type="submit" name="Valider" value="Valider"  onclick="var confirmer=confirm('Êtes-vous sûr de votre choix ?');return confirmer;">
                     	</div>
                     </div>


				</form>

			</div>




		<div id="footer">
			<p>2018 | Tous droits réservés</p>

		</div>


	</div>

</body>
</html>
