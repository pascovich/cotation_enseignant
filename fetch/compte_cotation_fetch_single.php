<?php
include('../database/connect.php');
include('../database/function.php');
if(isset($_POST["id_cotation"]))
{
    $id_etudiant=$_POST["id_cotation"];
	$output = array();
	$statement = $db->prepare(
		"SELECT * FROM compte_cotation_view
		WHERE id = '".$_POST["id_cotation"]."' 
		LIMIT 1"
	);
    
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

        
		$output["id"] = $row["id"];
		
	}
	echo json_encode($output);
}
?>