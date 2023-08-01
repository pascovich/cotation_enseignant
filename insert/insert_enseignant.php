<?php
include('../database/connect.php');
include('../database/function.php');


if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["photo"]["name"] != '')
		{
			$image = upload_image();
		}
		
		$statement = $db->prepare("INSERT INTO enseignant(noms,sexe,etat_civil,adresse,titre,email,telephone,photo) 
			VALUES (:noms,:sexe,:etat_civil,:adresse,:titre,:email,:telephone,:photo)");
		$result = $statement->execute(
			array(
				':noms'	=>	$_POST["noms"],
				':sexe'	=>	$_POST["sexe"],
				':etat_civil'	=>	$_POST["etat_civil"],
				':adresse'	=>	$_POST["adresse"],
				':titre'	=>	$_POST["titre"],
				':email'	=>	$_POST["email"],
				':telephone'	=>	$_POST["telephone"],
				':photo'	=>	$image,
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
		$image = '';
		if($_FILES["photo"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}

		$statement = $db->prepare("UPDATE  enseignant SET noms=:noms,sexe=:sexe,etat_civil=:etat_civil,adresse=:adresse,titre=:titre,email=:email,telephone=:telephone,photo=:photo 
			 WHERE id=:id");
		$result = $statement->execute(
			array(
				':noms'	=>	$_POST["noms"],
				':sexe'	=>	$_POST["sexe"],
				':etat_civil'	=>	$_POST["etat_civil"],
				':adresse'	=>	$_POST["adresse"],
				':titre'	=>	$_POST["titre"],
				':email'	=>	$_POST["email"],
				':telephone'	=>	$_POST["telephone"],
				':photo'	=>	$image,
				':id'	=>	$_POST["id_enseignant"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>