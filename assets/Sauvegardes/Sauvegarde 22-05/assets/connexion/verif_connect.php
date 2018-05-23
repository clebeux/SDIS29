<?php
@session_start();
if(!$_SESSION['isConnected()']==true) {
  header("Location: index.php");
  exit();
}

?>