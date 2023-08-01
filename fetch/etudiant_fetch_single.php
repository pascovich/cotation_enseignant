<?php
include('../database/connect.php');
include('../database/function.php');
if(isset($_POST["id_etudiant"]))
{
    $id_etudiant=$_POST["id_etudiant"];
	$output = array();
	$statement = $db->prepare(
		"SELECT * FROM etudiant
		WHERE id = '".$_POST["id_etudiant"]."' 
		LIMIT 1"
	);
    
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
        
		$output["id"] = $row["id"];
		$output["noms"] = $row["noms"];
		$output["sexe"] = $row["sexe"];
		$output["etat_civil"] = $row["etat_civil"];
		$output["adresse"] = $row["adresse"];
		$output["email"] = $row["email"];
		$output["telephone"] = $row["telephone"];
		if($row["photo"] != '')
		{
			$output['photo'] = '<img src="img/'.$row["photo"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row["photo"].'" />';
		}
		else
		{
			$output['photo'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}
		
	}
	echo json_encode($output);
}
?>