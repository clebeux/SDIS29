<?php

$matricule=$_GET['matricule'];

$sql="SELECT SP_NOM, SP_PRENOM,SP_DTE_NAISSANCE,SP_TEL_FIXE,SP_TEL_PORTABLE,SP_BIP,SP_STATUT FROM pompier WHERE SP_MATRICULE='$matricule';";
$results = tableSQL($sql);
foreach ($results as $ligne) {
    $nom = $ligne[0];
    $prenom = $ligne[1];
    $dateNAISS = $ligne[2];
    $tel_Fixe = $ligne[3];
    $tel_Port = $ligne[4];
    $BIP = $ligne[5];
    $Statut = $ligne[6];
}
$sql="SELECT GRA_LIBELLE FROM grade,pompier where grade.GRA_ID=pompier.GRA_ID and pompier.SP_MATRICULE='$matricule';";
$results = tableSQL($sql);
foreach ($results as $ligne) {
    $GRA_LIBELLE = $ligne[0];
}

?>