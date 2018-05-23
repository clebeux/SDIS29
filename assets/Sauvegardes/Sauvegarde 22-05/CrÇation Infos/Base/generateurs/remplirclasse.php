<?php

    include 'connectAD.php';
    
    //les classes sont dans le fichier classe.txt
    $caserne = file("caserne.txt");
    
    
    // tant que $i est inferieur au nombre d'éléments du tableau...
    for($i=0; $i < 100; $i++) {
        $sql="INSERT INTO caserne(CIS_ID, CIS_NOM)
              VALUES ( '$i', '$caserne[$i]')";
        echo "Sql : ".$sql."<br />";
        $result = executeSQL($sql);
    }

?>

