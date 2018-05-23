<?php

    include '/assets/connexion/connectAD.php';
    
    //les classes sont dans le fichier classe.txt
    $nbCIS=int rand ( int $min , int $max );
    // tant que $i est inferieur au nombre d'éléments du tableau...
    for($i=0; $i < 201; $i++) {
        $sql="INSERT INTO login (LOG_LOGIN, SP_MATRICULE, LOG_MDP, LOG_NOM, LOG_PRENOM, LOG_PROFIL)
	VALUES ($nbCIS);";
        echo "Sql : ".$sql."<br />";
        $result = executeSQL($sql);
    }

?>
