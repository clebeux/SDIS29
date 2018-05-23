<?php @session_start();
require 'assets/connexion/verif_connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>Formations</title>
	<link rel="icon" type="image/jpg" href="/images/casque.jpg">
	<link href="assets/CSS/styleperso.css" rel="stylesheet" type="text/css" />

  </head>
  <body>
    <div class="container">
		<div class= "header">
		 	<img class="logog" src="images/logo.jpg" alt="Logo" width="95%" height="72px"</div>
		 	<img class="logod" src="images/logosdis29.gif" alt="Logo" width="56px" height="72px">

		</div>
	<div id="nav">
 	   	<?php include 'assets/affichages/menu.php'; ?>
 	</div>
														


    	<div class="top">
	<img src="images/casque.jpg" alt="" width="75" length="75"> 
	

	<!-- Chercher le nom/pr�nom dans la base de donn�es -->
	<!-- Exemple --> <span class="nom"><?php echo $_SESSION['nom']."   ".$_SESSION['prenom'];?></span>
	</div>
<hr/>
	<span class="informationforma">
		
		<div class="infogauche">

<br/>
<br/>
			FDF1 Feu de For&ecirc;t Th&eacute;orie
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
			PB    Permis B
	
		</div>
		
		
		<div class="infodroite">

<br/>
<br/>
		du 01/06/2015 au 03/06/2015
		Le Quartz - Salle Ar Men
		60 Rue du Ch&acirc;teau,
		29210 Brest
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
		Le 20/12/2015
<br/>
<br/>
		C.E.I Brest Poul Ar jeunteun
		29480 Relecq Kerhuon		

		</div>

		<div class=divbuton>
		<a href="/ficheperso.php"><button class="buton"> <img src = "/images/cross.png"  width="32" height="32"> &nbsp;	  Annuler</button></a>
		

		</div>		
	</span>
		

		<div id="footer"> 
    			<?php include 'assets/affichages/footer.php'; ?>
 		</div>
    </div>
	

  </body>
</html>