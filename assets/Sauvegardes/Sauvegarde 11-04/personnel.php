<?php @session_start();
require 'assets/connexion/verif_connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>Liste des personnels</title>
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
	<span class="informationliste">
		<div class="infocentre">

<br/>
			<div class="champ">	
			<label> Matricule :</label>
			<br/><br/>
			<label> Nom :</label>
			<br/><br/>
			<label> Pr&eacute;nom :</label>
			<br/><br/>
			<label> Date de naissance :</label>
			<br/><br/>
			<label> Statut :</label>
			<br/><br/>
			<label> Grade :</label>
			<br/><br/>
			<label> Date d'obtention :</label>
			<br/><br/>
			<label> R&eacute;cepteur d'alerte :</label>
			<br/><br/>
			<label> T&eacute;l&eacute;phone fixe :</label>
			<br/><br/>
			<label> T&eacute;l&eacute;phone portable :</label>
			
			</div>

			<div class="champ2"
					<input type="text" value="">
					<input type="text" value="<?php echo $_SESSION['SP_MATRICULE']; ?>">
<br/><br/>			<input type="text" value="<?php echo $_SESSION['nom']; ?>">
<br/><br/>			<input type="text" value="<?php echo $_SESSION['prenom']; ?>">
<br/><br/>			<input type="text" value="<?php echo $_SESSION['date_Naissance']; ?>">
<br/><br/>			<input type="text" value="<?php echo $_SESSION['SP_STATUT']; ?>">
<br/><br/>			<input type="text" value="<?php echo $_SESSION["GRA_LIBELLE"]; ?>">
<br/><br/>			<input type="text" value="">
<br/><br/>			<input type="text" value="<?php echo $_SESSION['BIP']; ?>">
<br/><br/>			<input type="text" value="<?php echo $_SESSION["num_Fixe"]; ?>">
<br/><br/>			<input type="text" value="<?php echo $_SESSION["num_Port"]; ?>">
			</div>
			
		
			<div class="divbuton">
			<button class="buton"> <img src = "/images/ok.jfif"  width="32" height="32"> 	  Valider</button>
			<button class="buton"> <img src = "/images/cross.png"  width="32" height="32"> 	  Annuler</button>
           		</div>
		
		
		<div id="footer"> 
    			<?php include 'assets/affichages/footer.php'; ?>
 		</div>
		</div>

  </body>

</html>