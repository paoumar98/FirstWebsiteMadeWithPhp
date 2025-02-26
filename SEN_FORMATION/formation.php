<!DOCTYPE html>
<html lang="en">
<head>

	<title>Formation</title>
	<link rel="stylesheet" type="text/css" href="css/style_formation.css">
	<link rel="stylesheet" type ="text/css" href="css/style_slider.css">
	<meta charset="utf-8">
	<meta name='viewport'>
	
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

			<div class="w3-content w3-section" style="max-width:100% " >
  <img class="mySlides" src="img/1.jpeg" style="width:100%">	
  <img class="mySlides" src="img/2.jpeg" style="width:100%">
  <img class="mySlides" src="img/3.jpeg" style="width:100%">
  <img class="mySlides" src="img/4.jpeg" style="width:100%">	
  <img class="mySlides" src="img/5.jpeg" style="width:100%">
  <img class="mySlides" src="img/6.jpeg" style="width:100%">
  <img class="mySlides" src="img/7.jpeg" style="width:100%">	
  <img class="mySlides" src="img/8.jpeg" style="width:100%">
  <img class="mySlides" src="img/9.jpeg" style="width:100%">
  <img class="mySlides" src="img/10.jpeg" style="width:100%">	
  <img class="mySlides" src="img/13.jpeg" style="width:100%">
  <img class="mySlides" src="img/12.jpeg" style="width:100%">
 
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

				
		<h1 class="formation">Trouvez votre formation dans les domaines suivants:</h1>
		<p>Faites évoluer votre carrière ou votre activité à votre rythme grâce à des formations flexibles et personnalisées, conçues pour renforcer votre confiance et vous aider à réussir. </p>
		<nav>
		<ul>
			<p><div class="aligne2">
			<li><a>Administration, commerce et informatique </a>
				<ul class="subm" >
					<li>Intitulé: Comptabilite</li>
					<li>Lieu: CFPT</li>
					<li>Date: 2018-08-23</li>
					<li>Durée: 5 jours </li>
					<li>Montant: 250 000 FCFA XOF</li>
					<li>Animateur(s):Mr Preira, Mr Dieng </li>
					<li><a href="programme.php">Fiche de programme</a></li>
				</ul>
			</li>
			</div>

			<div class="aligne1">
				<li><a>Communications et documentation</a>
				<ul class="subm">
					<li>Intitulé: Procedes infographique</li>
					<li>Lieu: ESP</li>
					<li>Date: 2017-12-12</li>
					<li>Durée: 12 jours</li>
					<li>Montant: 100 000 FCFA XOF</li>
					<li>Animateur(s): Mr Mendy</li>
					<li><a href="programme.php">Fiche de programme</a></li>
				</ul>
			</li>
			</div>
			</p>
			<p>
			<div class="aligne2">
				<li><a>Entretien d'equipement motorise</a>
				<ul class="subm">
					<li>Intitulé: Mecanique Automobile </li>
					<li>Lieu: CFPT</li>
					<li>Date: 2019-10-23</li>
					<li>Durée: 4 jours</li>
					<li>Montant: 100 000 FCFA XOF</li>
					<li>Animateur(s): Mme Sow</li>
					<li><a href="programme.php #entretien">Fiche de programme</a></li>
				</ul>
			</li>
			</div>

			<div class="aligne1">
			<li><a>Bois et materiaux connexes</a>
				<ul class="subm">
					<li>Intitulé: Ebenisterie</li>
					<li>Lieu: Medina</li>
					<li>Date: 2019-01-23</li>
					<li>Durée: 4 jours</li>
					<li>Montant: 25 000 FCFA XOF</li>
					<li>Animateur(s): Mr Seck</li>
					<li><a href="programme.php #bois">Fiche de programme</a></li>
				</ul>
			</li>
			</div>
			</p>

			<p>
			<div class="aligne2">
			<li><a >Alimentation et tourisme</a>
				<ul class="subm">
					<li>Intitulé: Cuisine</li>
					<li>Lieu: Centre Sauvegarde Guediawaye</li>
					<li>Date: 2018-09-20</li>
					<li>Durée: 15 jours</li>
					<li>Montant: 300 000 FCFA XOF</li>
					<li>Animateur(s): Mme Ndiaye</li>
					<li><a href="programme.php .spoiler #alimentation">Fiche de programme</a></li>
				</ul>
			</li>
			</div>

			<div class="aligne1">
			<li><a >Fabrication mecanique</a>
				<ul class="subm">
					<li>Intitulé: Dessin Industriel </li>
					<li>Lieu: Diamniado</li>
					<li>Date: 2018-09-20</li>
					<li>Durée: 3 jours</li>
					<li>Montant: 75 000 FCFA XOF</li>
					<li>Animateur(s): Pr Gueye</li>
					<li><a href="programme.php #fabrication">Fiche de programme</a></li>
				</ul>
			</li>
			</div>
			</p>

			<p>
			<div class="aligne2">	
			<li><a >Metallurgie</a>
				<ul class="subm">
					<li>Intitulé: Soudage-montage</li>
					<li>Lieu: LTMD</li>
					<li>Date: 2017-12-12</li>
					<li>Durée: 6 jours</li>
					<li>Montant: 35 000 FCFA XOF</li>
					<li>Animateur(s): Mr Gaye</li>
					<li><a href="programme.php #metallurgie">Fiche de programme</a></li>
				</ul>
			</li>
			</div>

			<div class="aligne1">
			<li><a >Sante</a>
				<ul class="subm">
					<li>Intitulé: Soins infirmiers</li>
					<li>Lieu: Hopital Fann</li>
					<li>Date: 2018-03-12</li>
					<li>Durée: 15 jours</li>
					<li>Montant: 150 000</li>
					<li>Animateur(s): Dr Wague</li>
					<li><a href="programme.php #sante">Fiche de programme</a></li>
				</ul>
			</li>
			</div>
			</p>

		</ul>
		</nav>
		<br>
		<div id="inscrip">
		<a href="inscription.php" ><h1 id="ancre">INSCRIVEZ VOUS ICI </h1></a>
		</div>
	</div>

		<div id="footer">
			<p>2018 | Tous droits réservés </p>

		</div>


	</div>

</body>
</html>
