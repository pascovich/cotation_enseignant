<?php
include('../database/connect.php');
include('../database/function.php');
if(isset($_POST["id_cours"]))
{
    $id_etudiant=$_POST["id_cours"];
	$output = array();
	$statement = $db->prepare(
		"SELECT * FROM cours
		WHERE id = '".$_POST["id_cours"]."' 
		LIMIT 1"
	);
    
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
        
		$output["id"] = $row["id"];
		$output["designation"] = $row["designation"];
		$output["cigle"] = $row["cigle"];
		
	}
	echo json_encode($output);
}
?>