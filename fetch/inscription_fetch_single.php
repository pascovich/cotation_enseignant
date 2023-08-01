<?php
include('../database/connect.php');
include('../database/function.php');
if(isset($_POST["id_inscription"]))
{
    $id_etudiant=$_POST["id_inscription"];
	$output = array();
	$statement = $db->prepare(
		"SELECT * FROM inscription_view
		WHERE id = '".$_POST["id_inscription"]."' 
		LIMIT 1"
	);
    
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

        
		$output["id"] = $row["id"];
		$output["motif"] = $row["motif"];
		$output["id_annee"] = $row["annee"];
		$output["id_etudiant"] = $row["noms"];
		$output["id_promotion"] = $row["prom"];
		
	}
	echo json_encode($output);
}
?>