<?php @session_start();
require 'assets/connexion/verif_connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>SDIS 29</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="assets/CSS/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/logosdis29.gif" type="image/png" />
</head>
<body>
<div id="container">

  	<img class="logog" src="images/logo.jpg" alt="Logo" width="91%"  height="72px"/>
  	<img class="logod" src="images/logosdis29.gif" alt="Logo"  width="60px"  height="72px" />
         

  
  <div id="banner"><img src="images/main-image.jpg" alt="Main Image" /></div>
  <div id="nav">
     <div id="nav">
    		<?php include 'assets/affichages/menu.php'; ?>
 	</div>
 </div>
  <div id="content">
    <div id="left"> 
    
				<label for="Name">Login  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</label>    
				<input type="text" id="Name" size="10">
			<br/>
			<br/>
				<label for="Prenom">Mot  de  passe &nbsp;&nbsp; :</label> 
				<input type="text" id="Prenom" size="10" class="text"> 
   </div>
    <div style="clear:both"></div>
 </div>
  <div id="footer"> 
    			<?php include 'assets/affichages/footer.php'; ?>
</div>
</div>
</body>
</html>
