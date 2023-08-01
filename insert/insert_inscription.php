<?php
include('../database/connect.php');
include('../database/function.php');


if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{

		
		$statement = $db->prepare("INSERT INTO inscription(motif,id_annee,id_etudiant,id_promotion) 
			VALUES (:motif,:id_annee,:id_etudiant,:id_promotion)");
		$result = $statement->execute(
			array(
				':motif'	=>	$_POST["motif"],
				':id_annee'	=>	$_POST["id_annee"],
				':id_etudiant'	=>	$_POST["id_etudiant"],
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
		
		$statement = $db->prepare("UPDATE inscription SET motif=:motif,id_annee=:id_annee,id_etudiant=:id_etudiant,id_promotion=:id_promotion where inscription.id=:id ");
		$result = $statement->execute(
			array(
				':motif'	=>	$_POST["motif"],
				':id_annee'	=>	$_POST["id_annee"],
				':id_etudiant'	=>	$_POST["id_etudiant"],
				':id_promotion'	=>	$_POST["id_promotion"],
				':id'	=>	$_POST["id_inscription"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>