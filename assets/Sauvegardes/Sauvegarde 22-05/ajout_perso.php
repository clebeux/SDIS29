<?php @session_start();
require 'assets/connexion/verif_connect.php';
require 'assets/connexion/connectAD.php';

$matricule=$_POST['matricule'];
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
	<!-- Exemple --> <span class="nom"><?php echo $nom."   ".$prenom;?></span><?php 
    				if(isset($_POST['message'])){
    				    echo $_POST['message']; 
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
			<br/><br/>
			<label> CIS :</label>
			
			</div>

			<div class="champ2">
					<form id="modif-perso" name="modif-perso" method="post" action="assets/perso/inscription_perso.php">
						<input id="matricule" name='matricule' type="number" placeholder="Matricule" value="">
<br/><br/>				<input id="Nom" name="Nom" type="text" placeholder="Nom" value="">
<br/><br/>				<input id="Prenom" name="Prenom" type="text" placeholder="Prénom" value="">
<br/><br/>				<input id="dateNAISS" name="dateNAISS" type="date" value="">
<br/><br/>				<input id="statut" name="statut" type="text" placeholder="Statut" value="">
<br/><br/>				<input id="GRA_LIBELLE" name="GRA_LIBELLE" placeholder="Grade" type="text" value="">
<br/><br/>				<input id="date" name="date" type="date" value="">
<br/><br/>				<input id="bip" name="bip" type="number" placeholder="N° BIP" value="">
<br/><br/>				<input id="num_Fix" name="num_Fix" type="tel" placeholder="Téléphone Fixe" value="">
<br/><br/>				<input id="num_Port" name="num_Port" type="tel" placeholder="Téléphone Portable" value="">
<br/><br/>				<?php require 'liste_CIS.php'; echo "<br/>";?>
					
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