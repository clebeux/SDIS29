<?php 
@session_start();
?><!DOCTYPE html>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Personnel</title>
	<link rel="icon" type="image/jpg" href="/images/casque.jpg">
	<link href="styleperso.css" rel="stylesheet" type="text/css" />

  </head>
  <body>
   	   	<?php 
   	   	require 'fonctions_user_infos.php';
 	   	//include 'fonction_user_nom.php';
   	   	$test=userNom($_SESSION['SP_MATRICULE']);
   	   	//$results = userInfos($_SESSION['SP_MATRICULE']);
   	   	//echo "test 2 : ". $results;
   	   	//echo "test SP_Matricule : ".$_SESSION['SP_MATRICULE'];  
   	   	?>
    <div class="container">
		<div class= "header">
		 	<img class="logog" src="images/logo.jpg" alt="Logo" width="95%" height="72px"</div>
		 	<img class="logod" src="images/logosdis29.gif" alt="Logo" width="56px" height="72px">

		</div>
	<div id="nav">
 	   	<?php include 'menu.php'; 
 	   	      //require "fonction_user_nom.php";
 	   	//include 'fonction_user_nom.php';
 	   	      //userInfos($_SESSION['SP_MATRICULE'], $pCISNom,$pGRALibelle,$pBIP,$pDTENAISSANCE,$pSTATUT);
 	   	 ?>
 	</div>
														


    	<div class="top">
	<img src="images/casque.jpg" alt="" width="75" length="75"> 
	

	<!-- Chercher le nom/pr�nom dans la base de donn�es -->
	<!-- Exemple --> <span class="nom"><?php echo $nom; ?> </span>
	</div>
<hr/>
	<span class="information">
		<div class="info">
		
		<!-- G�n�ration PHP via la table SQL Matricule/Caserne/Age -->

		
		&nbsp;&nbsp;&nbsp;Matricule : 
		 <div class= "matricule">
		  Matricule : <?php echo $_SESSION['SP_MATRICULE'];?><br/>
		  Caserne : <?php echo $CIS_Nom; ?> <br/>
		  Age <br/>
        
		</div>
	<br/>
	<br/>
	<br/>
		&nbsp;&nbsp;&nbsp;Statut et Grade : <?php //echo $STATUT." --> ".$GRA_LIBELLE; ?>
		<br/>
		&nbsp;&nbsp;&nbsp;Date de naissance : <?php //echo $DTE_NAISSANCE; ?>
		
		<!-- Génération PHP via la table SQL Statut/Grade/Date-->
		<?php 
    				if(isset($_GET['message'])){
    				    echo $_GET['message']; 
    				}
    				?>
	
	<br/>
	<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;Volontaire &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Caporal Chef &nbsp;&nbsp;&nbsp;&nbsp; Date 
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
		<!-- Génération PHP via la table SQL BIP-->

		&nbsp;R&eacute;cepteur d'alerte : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php //echo $BIP; ?> <br/>
	<br/>
	

		<!-- Génération PHP via la table SQL Formation-->
		<div class="centre">
			<button class="boutonbip"><img class="centrer" width='32' height=32' src="/images/sac.jpg"> Formation </img> </button>
		</div>


           

		</div>
		
		<div class="separator"></div>
		<div class="fonction">
		
		<!-- Afficher le nom des fonctions du pompier, SELECT -->
			

			<div class="centre">Fonctions occup&eacute;es</div>
				&nbsp;&nbsp;&nbsp;CA INC ILE
			<br/>
			<br/>
				&nbsp;&nbsp;&nbsp;CA VLMR
			<br/>
			<br/>
				&nbsp;&nbsp;&nbsp;CA VRSR
			<br/>
			<br/>
				&nbsp;&nbsp;&nbsp;CA VSAV ILE
			<br/>
			<br/>
				&nbsp;&nbsp;&nbsp;CA VTU
			<br/>
			<br/>
				&nbsp;&nbsp;&nbsp;CE INC ILE
			<br/>
			<br/>
				&nbsp;&nbsp;&nbsp;EQU INC ILE
			<br/>
			<br/>
				&nbsp;&nbsp;&nbsp;EQU VLMR
			<br/>
			<br/>
				&nbsp;&nbsp;&nbsp;EQU VRSR
			<br/>
			<br/>
				&nbsp;&nbsp;&nbsp;EQU VSAV



		</div>
	</span>
		

		<div class="footer">
			<br/>
			<p>&copy;2018 - MAJ's 6teme. All rights reserved.  </p>
		</div>
    </div>
	

  </body>
</html><?php


?>