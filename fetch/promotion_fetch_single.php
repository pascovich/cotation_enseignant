<?php
include('../database/connect.php');
include('../database/function.php');
if(isset($_POST["id_promotion"]))
{
    $id_etudiant=$_POST["id_promotion"];
	$output = array();
	$statement = $db->prepare(
		"SELECT * FROM promotion
		WHERE id = '".$_POST["id_promotion"]."' 
		LIMIT 1"
	);
    
    // $query2 = $db->query("SELECT * FROM etudiant where id_etudiant=".$id_etudiant);

	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
        
		$output["id"] = $row["id"];
		$output["designation"] = $row["designation"];
		$output["id_options"] = $row["id_options"];
		
	}
	echo json_encode($output);
}
?>