<?php

    include 'connectAD.php';
    
    //les classes sont dans le fichier classe.txt
        $nom = file("nom.txt");
	$mdp=file("login.txt")
    // tant que $i est inferieur au nombre d'éléments du tableau...
    for($i=0; $i < 100; $i++) {
        $sql="INSERT INTO login (LOG_LOGIN, SP_MATRICULE, LOG_MDP, LOG_NOM, LOG_PRENOM, LOG_PROFIL)
	VALUES ('$nom','$i', 'login.txt', '', '', '');"
        echo "Sql : ".$sql."<br />";
        $result = executeSQL($sql);
    }

?>
