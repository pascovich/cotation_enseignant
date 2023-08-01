<?php
include('../database/connect.php');
include('../database/function.php');


if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		$statement = $db->prepare("INSERT INTO promotion(designation,id_options) 
			VALUES (:designation,:id_options)");
		$result = $statement->execute(
			array(
				':designation'	=>	$_POST["designation"],
				':id_options'	=>	$_POST["id_options"]
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
			"UPDATE promotion 
			SET designation = :designation,id_options=:id_options
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':designation'	=>	$_POST["designation"],
				':id_options'	=>	$_POST["id_options"],
				':id'			=>	$_POST["id_promotion"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>