<?php

include 'connectAD.php';
//-------------------------------------------------------------------------------
//            On récupère les variables
//-------------------------------------------------------------------------------
$login=$_GET['login'];
$mdp=$_GET['mdp'];

//-------------------------------------------------------------------------------
//            Paramètres de connexion
//-------------------------------------------------------------------------------
// on va chercher tous les infos de la table test
 $sql = "SELECT * FROM login WHERE LOG_LOGIN = '$login' and LOG_MDP = '$mdp';";
 
// on compte les données ayant ses éléments
$compte = compteSQL($sql);

if ($compte==0){
   
    //On vérifie si le login est bon pour vérifier si l'erreur provient du mot de passe.
    $sql = "SELECT * FROM login WHERE LOG_LOGIN = '$login';";
    $compte = compteSQL($sql);
    if($compte==1){
        @session_start();
        $_SESSION['login'] = $login;
        echo "<meta http-equiv='refresh' content='0, url=/index.php?message=<font color=red><b>Le mot de passe est &eacute;ronn&eacute;.</b></font>'>";
    }else{
    echo "<meta http-equiv='refresh' content='0, url=/index.php?message=<font color=red><b>Connexion refus&eacute;e.</b></font>'>";
    }
    

}else{
    //Connexion valide.
    //Enregistrement en mode session
    @session_start();
    $_SESSION['login'] = $login;
    $_SESSION['mdp'] = $mdp;
    
    $results = tableSQL($sql);
    foreach ($results as $ligne) {
        $SP_MATRICULE=$ligne[1]; //Matricule
        $profil=$ligne[5]; //Profil
    }
    $_SESSION['SP_MATRICULE']=$SP_MATRICULE;
    $_SESSION['profil']=$profil;
    $_SESSION['isConnected()']=true;
    
    echo "<meta http-equiv='refresh' content='0, url=infos_connect.php' >";
    //ficheperso
}
?>
