<?php 

if(!$_SESSION['CTA']==true) {
    if(!$_SESSION['admin']==true){
        header("Location: index.php");
        exit();
    }
}

?>