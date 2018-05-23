<?php

    include 'connectAD.php';
    
    //les classes sont dans le fichier classe.txt
    
    $nom = file("nom.txt");
    $prenom = file("prenom.txt");
    $login=file("login.txt");
    // tant que $i est inferieur au nombre d'éléments du tableau...
    for($i=0; $i < 200; $i++) {
        $sql="INSERT INTO login(LOG_LOGIN, SP_MATRICULE, LOG_MDP, LOG_NOM, LOG_PRENOM)
              VALUES ('$nom[$i]', '$i', '$login[$i]', '$nom[$i]', '$prenom[$i]')";
        echo "Sql : ".$sql."<br />";
        $result = executeSQL($sql);
    }

?>