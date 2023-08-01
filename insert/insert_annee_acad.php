<?php
include('../database/connect.php');
include('../database/function.php');


if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		$statement = $db->prepare("INSERT INTO annee(designation) 
			VALUES (:designation)");
		$result = $statement->execute(
			array(
				':designation'	=>	$_POST["designation"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}else{
            echo 'erreur dans insertion';
        }
	}
	if($_POST["operation"] == "Edit")
	{
		
		$statement = $db->prepare(
			"UPDATE annee
			SET designation = :designation
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':designation'	=>	$_POST["designation"],
				':id'			=>	$_POST["id_annee_acad"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>