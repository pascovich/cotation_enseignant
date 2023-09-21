<?php
require_once '../etudiant/partials/connect.php';



if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$statement = $db->prepare("INSERT INTO cotation(charge_horaire,distribution,ponctualite,contenu1,maitrise1,lien_cours_travaux,id_attribution_cours,id_inscription,communication,contenu2,tic,peda,interro,correction_interro,examen,correction_examen,syllabus,maitrise,responsabilite,relation_collegue,relation_etudiant,relation_contact) 
			VALUES (:charge_horaire,:distribution,:ponctualite,:contenu1,:maitrise1,:lien_cours_travaux,:id_attribution_cours,:id_inscription,:communication,:contenu2,:tic,:peda,:interro,:correction_interro,:examen,:correction_examen,:syllabus,:maitrise,:responsabilite,:relation_collegue,:relation_etudiant,:relation_contact)");
		$result = $statement->execute(
			array(
				':charge_horaire'	=>	$_POST["charge_horaire"],
				':distribution'	=>	$_POST["distribution"],
				':ponctualite'	=>	$_POST["ponctualite"],
				':contenu1'	=>	$_POST["contenu1"],
				':maitrise1'	=>	$_POST["maitrise1"],
				':lien_cours_travaux'	=>	$_POST["lien_cours_travaux"],
				':id_attribution_cours'	=>	$_POST["id_cours"],
				':id_inscription'	=>	$_SESSION['user']['id'],
				':communication'	=>	$_POST["communication"],
				':contenu2'	=>	$_POST["contenu2"],
				':tic'	=>	$_POST["tic"],
				':peda'	=>	$_POST["peda"],
				':interro'	=>	$_POST["interro"],
				':correction_interro'	=>	$_POST["correction_interro"],
				':examen'	=>	$_POST["examen"],
				':correction_examen'	=>	$_POST["correction_examen"],
				':syllabus'	=>	$_POST["syllabus"],
				':maitrise'	=>	$_POST["maitrise"],
				':responsabilite'	=>	$_POST["responsabilite"],
				':relation_collegue'	=>	$_POST["relation_collegue"],
				':relation_etudiant'	=>	$_POST["relation_etudiant"],
				':relation_contact'	=>	$_POST["relation_contact"]
			)
		);
		if(!empty($result))
		{
			echo 'enseignant cote avec sucess';
		}else{
            echo 'erreur dans insertion';
        }
		
		// $statement = $db->prepare("INSERT INTO cotation(attente,autres,connaissance,explication,expression,habillement,id_attribution_cours,id_inscription,peda,pratique,regularite,utilite) 
		// 	VALUES (:attente,:autres,:connaissance,:explication,:expression,:habillement,:id_attribution_cours,:id_inscription,:peda,:pratique,:regularite,:utilite)");
		// $result = $statement->execute(
		// 	array(
		// 		':attente'	=>	$_POST["attente"],
		// 		':autres'	=>	$_POST["autres"],
		// 		':connaissance'	=>	$_POST["connaissance"],
		// 		':explication'	=>	$_POST["explication"],
		// 		':expression'	=>	$_POST["expression"],
		// 		':habillement'	=>	$_POST["habillement"],
		// 		':id_attribution_cours'	=>	$_POST["id_cours"],
		// 		':id_inscription'	=>	$_SESSION['user']['id'],
		// 		':peda'	=>	$_POST["peda"],
		// 		':pratique'	=>	$_POST["pratique"],
		// 		':regularite'	=>	$_POST["regularite"],
		// 		':utilite'	=>	$_POST["utilite"]
		// 	)
		// );
		// if(!empty($result))
		// {
		// 	echo 'enseignant cote avec sucess';
		// }else{
  //           echo 'erreur dans insertion';
  //       }

        
// CREATE  VIEW `compte_cotation_view`  AS  select `cotation`.`id_inscription` AS `id_inscription`,`affectation_view`.`id` AS `id`,`affectation_view`.`id_option` AS `id_option`,`affectation_view`.`id_promotion` AS `id_promotion`,`cotation`.`maxs` AS `maxs`,`cotation`.`charge_horaire` AS `charge_horaire`,`cotation`.`date_cotation` AS `date_cotation`,`cotation`.`distribution` AS `distribution`,`cotation`.`ponctualite` AS `ponctualite`,`cotation`.`contenu1` AS `contenu1`,`cotation`.`maitrise1` AS `maitrise1`,`cotation`.`lien_cours_travaux` AS `lien_cours_travaux`,`cotation`.`communication` AS `communication`,`cotation`.`contenu2` AS `contenu2`,`cotation`.`tic` AS `tic`,`cotation`.`peda` AS `peda`,`cotation`.`interro` AS `interro`,`cotation`.`correction_interro` AS `correction_interro`,`cotation`.`examen` AS `examen`,`cotation`.`correction_examen` AS `correction_examen`,`cotation`.`syllabus` AS `syllabus`,`cotation`.`maitrise` AS `maitrise`,`cotation`.`responsabilite` AS `responsabilite`,`cotation`.`relation_collegue` AS `relation_collegue`,`cotation`.`relation_etudiant` AS `relation_etudiant`,`cotation`.`relation_contact` AS `relation_contact`,`cotation`.`charge_horaire` + `cotation`.`distribution` + `cotation`.`ponctualite` + `cotation`.`contenu1` + `cotation`.`maitrise1` + `cotation`.`lien_cours_travaux` + `cotation`.`communication` + `cotation`.`contenu2` + `cotation`.`tic` + `cotation`.`peda` + `cotation`.`interro` + `cotation`.`correction_interro` + `cotation`.`examen` + `cotation`.`correction_examen` + `cotation`.`syllabus` + `cotation`.`maitrise` + `cotation`.`responsabilite` + `cotation`.`relation_collegue` + `cotation`.`relation_etudiant` + `cotation`.`relation_contact` AS `cote`,`affectation_view`.`date_passassion_cours` AS `date_passassion_cours`,`affectation_view`.`prom` AS `prom`,`affectation_view`.`promotion` AS `promotion`,`affectation_view`.`annee` AS `annee`,`affectation_view`.`enseignant` AS `enseignant`,`affectation_view`.`cours` AS `cours` from (`affectation_view` left join `cotation` on(`cotation`.`id_attribution_cours` = `affectation_view`.`id`)) ;

        
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