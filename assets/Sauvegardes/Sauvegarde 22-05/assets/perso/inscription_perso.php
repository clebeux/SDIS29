<?php 
//require 'assets/connexion/verif_connect.php';
require '../connexion/connectAD.php';
echo "test";
$matricule=$_POST['matricule'];
$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$dateNAISS=$_POST['dateNAISS'];
$statut=$_POST['statut'];
$GRA_LIBELLE=$_POST['GRA_LIBELLE'];
$date=$_POST['date'];
$num_Fix=$_POST['num_Fix'];
$num_Port=$_POST['num_Port'];
$bip=$_POST['bip'];
$CIS_ID=$_POST['numero'];

$sql="INSERT INTO pompier (SP_MATRICULE,SP_NOM, SP_PRENOM,SP_DTE_NAISSANCE,SP_STATUT,SP_TEL_FIXE,SP_TEL_PORTABLE,SP_BIP,CIS_ID) VALUES ($matricule,'$Nom','$Prenom','$dateNAISS','$statut',$num_Fix,$num_Port,$bip,$CIS_ID);";
$results = executeSQL($sql);
//echo $results;

echo "<meta http-equiv='refresh' content='0,url=/liste_perso.php?message=<font color='green'><b>Ajout réalisé</b></font>'>";

?>