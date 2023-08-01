<?php
include('../database/connect.php');
include('../database/function.php');
if(isset($_POST["id_users"]))
{
    $id_etudiant=$_POST["id_users"];
	$output = array();
	$statement = $db->prepare(
		"SELECT * FROM users 
		WHERE id = '".$_POST["id_users"]."' 
		LIMIT 1"
	);
    
    // $query2 = $db->query("SELECT * FROM etudiant where id_etudiant=".$id_etudiant);

	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["username"] = $row["username"];
		$output["password"] = $row["pwd"];
		$output["gmail"] = $row["email"];
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