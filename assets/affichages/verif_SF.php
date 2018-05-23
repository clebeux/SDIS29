<?php 

if(!$_SESSION['SF']==true) {
    if(!$_SESSION['admin']==true){
        header("Location: index.php");
        exit();
    }
}

?>