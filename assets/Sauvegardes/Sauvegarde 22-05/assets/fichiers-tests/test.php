<?php 
echo "page de test";
include fonction_user_nom.php;
 	   	//include 'fonction_user_nom.php';
$results = toto('007');
//$results = userNom('007');
echo "test 2 : ". $results;
/*$results = userInfos("007", $pCISNom,$pGRALibelle,$pBIP,$pDTENAISSANCE,$pSTATUT);
   	   	echo "test 2 : ". $results."  ".$pCISNom;
   	   	//echo "test SP_Matricule : ".$_SESSION['SP_MATRICULE']; */?>