<?php
include('../database/connect.php');
include('../database/function.php');
if(isset($_POST["id_enseignant"]))
{
    $id_etudiant=$_POST["id_enseignant"];
	$output = array();
	$statement = $db->prepare(
		"SELECT * FROM enseignant
		WHERE id = '".$_POST["id_enseignant"]."' 
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
		$output["titre"] = $row["titre"];
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