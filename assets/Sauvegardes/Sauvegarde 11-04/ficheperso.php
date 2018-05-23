<?php @session_start();
require 'assets/connexion/verif_connect.php';
?>
<!DOCTYPE html>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Personnel</title>
	<link rel="icon" type="image/jpg" href="/images/casque.jpg">
	<link href="assets/CSS/styleperso.css" rel="stylesheet" type="text/css" />

  </head>
  <body>
<?php
header('Content-type: text/html; charset=UTF-8');
?>
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
	<!-- Exemple --> <span class="nom"><?php echo $_SESSION['nom']."   ".$_SESSION['prenom']; ?></span>
	</div>
<hr/>
	<span class="information">
		<div class="info">
		
		<!-- G�n�ration PHP via la table SQL Matricule/Caserne/Age -->

		
		&nbsp;&nbsp;&nbsp;Matricule : 
		 <div class= "matricule">
		  <?php echo $_SESSION['SP_MATRICULE'];?><br/>
		  <?php echo $_SESSION['CIS_NOM']; ?> <br/>
		  Age <?php 
                    //require 'connectAD.php';
                    //$sql="select YEAR(GETDATE()) - YEAR($_SESSION['date_Naissance']) AS age from pompier where SP_MATRICULE='$_SESSION['SP_MATRICULE'];";
               ?>
         <br/>
        
		</div>
	<br/>
	<br/>
	<br/>
		&nbsp;&nbsp;&nbsp;Statut et Grade : <?php echo $_SESSION['SP_STATUT']." --> ".$_SESSION["GRA_LIBELLE"];?>
		<br/>
		&nbsp;&nbsp;&nbsp;Date de naissance : <?php echo $_SESSION['date_Naissance']; ?>
		
		<!-- Génération PHP via la table SQL Statut/Grade/Date-->
		<?php 
    				if(isset($_GET['message'])){
    				    echo $_GET['message']; 
    				}
    				?>
	
	<br/>
	<br/>
		&nbsp;&nbsp;&nbsp;Volontaire &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Caporal Chef &nbsp;&nbsp;&nbsp;&nbsp; Date 
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
		<!-- Génération PHP via la table SQL BIP-->

		&nbsp;&nbsp;&nbsp;R&eacute;cepteur d'alerte : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_SESSION['BIP']; ?> <br/>
	<br/>
	

		<!-- Génération PHP via la table SQL Formation-->
		<div class="centre">
			<a href="formation.php"><button class="boutonbip"><img class="centrer" width='32' height=32' src="/images/sac.jpg">Formation</img></button></a>
		</div>

		</div>
		
		<div class="separator"></div>
		<div class="fonction">
		
		<!-- Afficher le nom des fonctions du pompier, SELECT -->
			

			<div class="centre">Fonctions occup&eacute;es</div>
				<ul><?php
				    require 'assets/connexion/connectAD.php';
				    $SP_MATRICULE=$_SESSION['SP_MATRICULE'];
				        
				        $sql = "select FCT_LIBELLE from fonction, exercer, pompier where fonction.FCT_ID=exercer.FCT_ID and exercer.SP_MATRICULE=pompier.SP_MATRICULE and pompier.SP_MATRICULE='$SP_MATRICULE';";
                        $nbFonction = compteSQL($sql);
                        $results = tableSQL($sql);
                        $i=0;
                        //echo $nbFonction;
                        echo "<br />";
                        while($i < $nbFonction){
                            foreach ($results as $ligne) {
                                //$FCT_ID=$ligne[0];
                                $FCT_LIBELLE=$ligne[0];
                                echo "<li>$FCT_LIBELLE</li>";
                                echo "<br />";
                                $i++;
                            }
                            
                        }

                    ?></ul>
		</div>
	</span>
		

		<div id="footer"> 
    			<?php include 'assets/affichages/footer.php'; ?>
 		</div>
    </div>
	

  </body>
</html><?php


?>