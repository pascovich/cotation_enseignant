<?php
include('../database/connect.php');
include('../database/function.php');


if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		$statement = $db->prepare("INSERT INTO cours(designation,cigle) 
			VALUES (:designation,:cigle)");
		$result = $statement->execute(
			array(
				':designation'	=>	$_POST["designation"],
				':cigle'	=>	$_POST["cigle"]
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
			"UPDATE cours 
			SET designation = :designation,cigle=:cigle
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':designation'	=>	$_POST["designation"],
				':cigle'	=>	$_POST["cigle"],
				':id'			=>	$_POST["id_cours"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>