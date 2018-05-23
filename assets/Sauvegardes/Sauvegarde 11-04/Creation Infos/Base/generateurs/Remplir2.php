<?php
    include 'connectAD.php';
    
    //les classes sont dans le fichier classe.txt
    
$grade=file("grade.txt");
        // tant que $i est inferieur au nombre d'éléments du tableau...
    for($i=0; $i < 200; $i++) {
        $sql="INSERT INTO grade(GRA_ID, GRA_LIBELLE) VALUES ('$i','$grade[$i]')";
        echo "Sql : ".$sql."<br />";
        $result = executeSQL($sql);
    }

?>