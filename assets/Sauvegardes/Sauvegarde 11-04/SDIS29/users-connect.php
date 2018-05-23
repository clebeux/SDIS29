<?php

$login=$_SESSION['login'];
$mdp=$_SESSION['mdp'];

$sql="SELECT SP_STATUT FROM login,pompier WHERE login.SP_MATRICULE=pompier.SP_MATRICULE and LOG_LOGIN='$login'and LOG_MDP='$mdp';";

$result = executeSQL_GE($sql);

echo $result;

if ($sql=true) { echo"test";
    /**switch ($users){
        
        case "pompier" :
            echo pompier.php;
            break;
            
        case "directeur" :
            echo "pompier.php";
            break;
            
            
        case "service" :
            echo "service.php";
            break;
            
    }*/
    
}
else{
    echo"L'utilisateur entré n'existe pas ou est introuvable";
}


?>