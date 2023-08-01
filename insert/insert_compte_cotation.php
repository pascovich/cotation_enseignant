<?php
require_once '../etudiant/partials/connect.php';



if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		$statement = $db->prepare("INSERT INTO cotation(attente,autres,connaissance,explication,expression,habillement,id_attribution_cours,id_inscription,peda,pratique,regularite,utilite) 
			VALUES (:attente,:autres,:connaissance,:explication,:expression,:habillement,:id_attribution_cours,:id_inscription,:peda,:pratique,:regularite,:utilite)");
		$result = $statement->execute(
			array(
				':attente'	=>	$_POST["attente"],
				':autres'	=>	$_POST["autres"],
				':connaissance'	=>	$_POST["connaissance"],
				':explication'	=>	$_POST["explication"],
				':expression'	=>	$_POST["expression"],
				':habillement'	=>	$_POST["habillement"],
				':id_attribution_cours'	=>	$_POST["id_cours"],
				':id_inscription'	=>	$_SESSION['user']['id'],
				':peda'	=>	$_POST["peda"],
				':pratique'	=>	$_POST["pratique"],
				':regularite'	=>	$_POST["regularite"],
				':utilite'	=>	$_POST["utilite"]
			)
		);
		if(!empty($result))
		{
			echo 'enseignant cote avec sucess';
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