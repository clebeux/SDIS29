<?php 

require 'assets/connexion/connectAD.php';
//-------------------------------------------------------------------------------
//            On récupère les variables
//-------------------------------------------------------------------------------

$matricule=$_POST['matricule'];
$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$dateNAISS=$_POST['dateNAISS'];
$statut=$_POST['statut'];
$GRA_LIBELLE=$_POST['GRA_LIBELLE'];
$date=$_POST['date'];
$num_Fix=$_POST['num_Fix'];
$num_Port=$_POST['num_Port'];

//-------------------------------------------------------------------------------
//            On enregistre dans des variables de sessions
//-------------------------------------------------------------------------------
/*
@session_start();
$_SESSION['nom']=$Nom;
$_SESSION['prenom']=$Prenom;
$_SESSION['date_Naissance']=$dateNAISS;
$_SESSION['SP_STATUT']=$statut;
$_SESSION["GRA_LIBELLE"]=$GRA_LIBELLE;
$_SESSION["num_Fixe"]=$num_Fix;
$_SESSION["num_Port"]=$num_Port;
*/

//-------------------------------------------------------------------------------
//            On modifie les information
//-------------------------------------------------------------------------------
$sql="UPDATE pompier SET SP_NOM='$Nom', SP_PRENOM='$Prenom',SP_DTE_NAISSANCE='$dateNAISS', SP_TEL_FIXE='$num_Fix',SP_TEL_PORTABLE='$num_Port',SP_STATUT='$statut' where SP_MATRICULE=$matricule;";
$result=executeSQL($sql);
$sql="UPDATE grade,pompier SET GRA_LIBELLE='$GRA_LIBELLE' WHERE grade.GRA_ID=pompier.GRA_ID;";
$result=executeSQL($sql);
echo "<meta http-equiv='refresh' content='0,url=personnel.php?matricule=$matricule&message=<font color=green><b>Les changements ont bien &eacute;t&eacute; pris en compte.</b></font>'>";





?>