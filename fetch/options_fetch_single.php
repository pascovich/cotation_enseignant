<?php
include('../database/connect.php');
include('../database/function.php');
if(isset($_POST["id_options"]))
{
    $id_etudiant=$_POST["id_options"];
	$output = array();
	$statement = $db->prepare(
		"SELECT * FROM options
		WHERE id = '".$_POST["id_options"]."' 
		LIMIT 1"
	);
    
    // $query2 = $db->query("SELECT * FROM etudiant where id_etudiant=".$id_etudiant);

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