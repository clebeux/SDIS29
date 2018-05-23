<?php

require 'connectAD.php';

function userNom($matricule) {
    
    //On r�cup�re les infos de la table pompier
    $sql = "SELECT * FROM pompier WHERE SP_MATRICULE=$matricule;";
    $results = tableSQL($sql);
    foreach ($results as $ligne) {
        $nom=$ligne[3]; //Nom de famille
        $prenom=$ligne[4];  //Pr�nom
        
    }
    
    return $nom." ".$prenom;
    
}

function userInfos($SP_MATRICULE, &$CIS_Nom, &$GRA_LIBELLE, &$BIP, &$DTE_NAISSANCE, &$STATUT) {
    
    //On r�cup�re les informations de la table grade
    $sql = "select CIS_NOM,SP_STATUT,SP_BIP,SP_DTE_NAISSANCE,GRA_LIBELLE from caserne,grade,pompier where caserne.CIS_ID=pompier.CIS_ID and grade.GRA_ID=pompier.GRA_ID and SP_MATRICULE=$pMatricule;";
    $compte = compteSQL($sql);
    $results = tableSQL($sql);
    foreach ($results as $ligne) {
        $CIS_Nom=$ligne[0];
        $STATUT=$ligne[1];
        $BIP=$ligne[2];
        $DTE_NAISSANCE=$ligne[3];
        $GRA_LIBELLE=$ligne[4];
        
    }
    
    return $compte;
    
}
?>