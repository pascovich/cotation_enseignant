<?php
include('../database/connect.php');
include('../database/function.php');
if(isset($_POST["id_attribution_cours"]))
{
    $id_etudiant=$_POST["id_attribution_cours"];
	$output = array();
	$statement = $db->prepare(
		"SELECT * FROM affectation_view
		WHERE id = '".$_POST["id_attribution_cours"]."' 
		LIMIT 1"
	);
    
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

        
		$output["id"] = $row["id"];
		$output["date_passassion_cours"] = $row["date_passassion_cours"];
		$output["motif"] = $row["motif"];
		$output["id_annee"] = $row["annee"];
		$output["id_cours"] = $row["cours"];
		$output["id_enseignant"] = $row["enseignant"];
		$output["id_promotion"] = $row["prom"];
		
	}
	echo json_encode($output);
}
?>