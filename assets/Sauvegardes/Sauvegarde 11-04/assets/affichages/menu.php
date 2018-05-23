<ul>
	<li class="nlink"><a href="/index.php">Accueil</a></li>
	<li class="nlink"><a href="http://mysql.jasonlescour.fr">Provisoire accès BD</a></li>
	
	<?php
	@session_start();
   
	if ($_SESSION['isConnected()']==true){
	    echo "<li class='nlink'><a href='/ficheperso.php'>Espace Perso</a></li>";
        echo '<li class="nlink" style="float: right"><a href="assets/connexion/deconnexion.php">DECONNEXION</a></li>';
    }

    else{
        echo '<li class="nlink" style="float: right"><a href="/index.php">CONNEXION</a></li>';
    }

 

	if ($_SESSION['GRA_ID']==01 or $_SESSION['GRA_ID']==02){
        echo '<li class="nlink"><a href="/personnel.php">Personnel</a></li>';
        echo '<li class="nlink"><a href="/formation.php">Formation</a></li>';
             
    }/*ElseIf ($_SESSION["GRA_LIBELLE"]=='CTA'){
        echo '<li class="nlink"><a href="personnel.php">Personnel</a></li>';
        echo '<li class="nlink"><a href="formation.php">Formation</a></li>';
        }
        
    }ElseIf ($_SESSION["GRA_LIBELLE"]=='SF'){
        foreach($menuSF as $menu => $lienMenu){
            echo '<li class="nlink"><a href="'.$lienMenu.'">'.$menu.'</a></li>';
        }
    }
*/
  

    ?>
</ul>