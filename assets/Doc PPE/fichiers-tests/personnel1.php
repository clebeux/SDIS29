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
	<!-- Exemple --> <span class="nom"><?php echo ;?></span><?php 
    				if(isset($_GET['message'])){
    				    echo $_GET['message']; 
    				}?>
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

			<div class="champ2">
					<form id="modif-perso" name="modif-perso" method="get" action="modif_perso.php">
						<?php echo $_SESSION['SP_MATRICULE']; ?>
<br/><br/>				<input id="Nom" name="Nom" type="text" value="<?php echo $_SESSION['nom']; ?>">
<br/><br/>				<input id="Prenom" name="Prenom" type="text" value="<?php echo $_SESSION['prenom']; ?>">
<br/><br/>				<input id="dateNAISS" name="dateNAISS" type="date" value="<?php echo $_SESSION['date_Naissance']; ?>">
<br/><br/>				<input id="statut" name="statut" type="text" value="<?php echo $_SESSION['SP_STATUT']; ?>">
<br/><br/>				<input id="GRA_LIBELLE" name="GRA_LIBELLE" type="text" value="<?php echo $_SESSION["GRA_LIBELLE"]; ?>">
<br/><br/>				<input id="date" name="date" type="date" value="">
<br/><br/>				<?php echo $_SESSION['BIP']; ?>
<br/><br/>				<input id="num_Fix" name="num_Fix" type="tel" value="<?php echo $_SESSION["num_Fixe"]; ?>">
<br/><br/>				<input id="num_Port" name="num_Port" type="tel" value="<?php echo $_SESSION["num_Port"]; ?>"> 
					
			</div>
			
		
			<div class="divbuton">
				
			 	<br/><br/>
				<button type="submit" class="buton"> <img src = "/images/ok.jfif"  width="32" height="32">     Valider</button>
				<button type="reset" class="buton"> <img src = "/images/cross.png"  width="32" height="32">    Annuler</button>
				</form>
           	</div>
		
		
		<div id="footer"> 
    			<?php include 'assets/affichages/footer.php'; ?>
 		</div>
		</div>

  </body>

</html>