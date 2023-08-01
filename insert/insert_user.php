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
		$statement = $db->prepare("INSERT INTO users(username,email,pwd,photo) 
			VALUES (:username,:gmail,:password,:photo)");
		$result = $statement->execute(
			array(
				':username'	=>	$_POST["username"],
				':gmail'	=>	$_POST["gmail"],
				':password'	=>	$_POST["password"],
				':photo'		=>	$image
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
		$statement = $db->prepare(
			"UPDATE users 
			SET username = :username, email = :gmail, pwd = :password,photo=:photo  
			WHERE id = :id_user
			"
		);
		$result = $statement->execute(
			array(
				':username'	=>	$_POST["username"],
				':gmail'	=>	$_POST["gmail"],
				':password'	=>	$_POST["password"],
				':photo'		=>	$image,
				':id_user'			=>	$_POST["id_users"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>