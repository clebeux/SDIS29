<?php
try{
   $bdd = new PDO('mysql:host=localhost;dbname=NOM DE LA DATABASE', 'UTILISATEUR', 'MOT DE PASSE', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}
$req = $bdd->query('SELECT course_name FROM NOM DE LA TABLE DANS LA DATABASE');
$data = $req->fetch())
?>
<form action="" method="post">
<select name="course">
<?php
foreach($data['course_name'] as $valeur){
  ?>
  <option value="<?php echo $valeur ?>"><?php echo $valeur; ?></option>
  <?php
}
?>
</select></form>

<?php
			
			$sql = "SELECT * FROM CASERNE";
			$cpt=compteSQL($sql);
			
			if(!isset($_GET["numero"])) $_GET["numero"] = 0;
			
			
			if ($cpt>0) {
				$results = tableSQL($sql);
				echo "<select size=\"1\" name=\"numero\" id=\"numero\">";
				foreach ($results as $row) {
					$selected = "";
					if($_GET["numero"] == $row[0]) $selected = "selected='selected'";
					echo "<option $selected value=$row[0]>$row[1]</option>";
				}
			} else {
				echo "<select size=\"1\" name=\"numero\" id=\"numero\" disabled=\"disabled\" >";
				echo "<option>Aucune information...</option>";
			}
			
			
			echo "</select>";
			
			if (isset($_GET['message']))
				echo $_GET['message'];
				else
					echo "&nbsp;";
					?>