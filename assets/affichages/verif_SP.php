<?php 

if(!$_SESSION['SP']==true) {
    if(!$_SESSION['admin']==true){
        header("Location: index.php");
        exit();
    }
}

?>