
<select size="1" id="liste" name="liste" >

<?php
	include 'connectAD.php';
	
	// on va chercher tous les infos de la table test
	$sql = "SELECT * FROM pompier"; 
	
	// on recupere le resultat sous forme d'un tableau
	$result = tableSQL($sql);		
	
	//pour chaque ligne du tableau $resultats
	foreach ($result as $ligne) {
		//on extrait chaque valeur de la ligne courante
		$SP_MATRICULE = $ligne[0];
		$SP_NOM = $ligne[2];
		$SP_PRENOM = $ligne[3];
		//on affiche la ligne courante
		echo "<option value=".$SP_MATRICULE." >".$SP_NOM."  ".$SP_PRENOM."</option>";	
	}
?>

</select>