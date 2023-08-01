<?php
include('../database/connect.php');
include('../database/function.php');


if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{

		
		$statement = $db->prepare("INSERT INTO attribution_cours(date_passassion_cours,motif,id_annee,id_cours,id_enseignant,id_promotion) 
			VALUES (:date_passassion_cours,:motif,:id_annee,:id_cours,:id_enseignant,:id_promotion)");
		$result = $statement->execute(
			array(
				':date_passassion_cours'	=>	$_POST["date_passassion_cours"],
				':motif'	=>	$_POST["motif"],
				':id_annee'	=>	$_POST["id_annee"],
				':id_cours'	=>	$_POST["id_cours"],
				':id_enseignant'	=>	$_POST["id_enseignant"],
				':id_promotion'	=>	$_POST["id_promotion"]
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
		
		$statement = $db->prepare("UPDATE attribution_cours SET date_passassion_cours=:date_passassion_cours,motif=:motif,id_annee=:id_annee,id_cours=:id_cours,id_enseignant=:id_enseignant,id_promotion=:id_promotion where attribution_cours.id=:id ");
		$result = $statement->execute(
			array(
				':date_passassion_cours'	=>	$_POST["date_passassion_cours"],
				':motif'	=>	$_POST["motif"],
				':id_annee'	=>	$_POST["id_annee"],
				':id_cours'	=>	$_POST["id_cours"],
				':id_enseignant'	=>	$_POST["id_enseignant"],
				':id_promotion'	=>	$_POST["id_promotion"],
				':id'	=>	$_POST["id_attribution_cours"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>