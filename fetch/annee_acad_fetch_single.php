<?php
include('../database/connect.php');
include('../database/function.php');
if(isset($_POST["id_annee_acad"]))
{
    $id_etudiant=$_POST["id_annee_acad"];
	$output = array();
	$statement = $db->prepare(
		"SELECT * FROM annee
		WHERE id = '".$_POST["id_annee_acad"]."' 
		LIMIT 1"
	);
    
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
        
		$output["id"] = $row["id"];
		$output["designation"] = $row["designation"];
		
	}
	echo json_encode($output);
}
?>