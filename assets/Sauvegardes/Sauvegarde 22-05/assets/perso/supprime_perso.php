<?php 

require '../connexion/connectAD.php';

//-------------------------------------------------------------------------------
//            On récupère les variables
//-------------------------------------------------------------------------------

$matricule=$_GET['matricule'];

//-------------------------------------------------------------------------------
//            Suppréssion de la personne
//-------------------------------------------------------------------------------

$sql="DELETE FROM pompier WHERE SP_MATRICULE=$matricule;";
$result=executeSQL($sql);


echo "<meta http-equiv='refresh' content='0,url=../../liste_perso.php?message=<font color=red><b>La suppréssion a été effectuée.</b></font>'>";

