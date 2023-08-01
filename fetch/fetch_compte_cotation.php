<?php
require_once '../etudiant/partials/connect.php';


$output = array();

$pro=$_SESSION['user']['promotion'];
$opt=$_SESSION['user']['option'];
$ins=$_SESSION['user']['id'];
$statement = $db->query("SELECT * FROM compte_cotation_view WHERE (
	(id_option='".$opt."' AND id_promotion='".$pro."') AND 
	 (id_inscription='".$ins."' or id_inscription is null) 
	 )
	 ");


$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
$idd=0;
foreach($result as $row)
{
	$idd++;
	
	$sub_array = array();
	$sub_array[] = $idd;
	$sub_array[] = date( $row["date_passassion_cours"]);
	$sub_array[] = $row["cours"];
	$sub_array[] = $row["enseignant"];
	$sub_array[] = $row["maxs"];
	if(($row["id_inscription"]==$_SESSION['user']['id']) AND ($row["maxs"] !=null)){
		$sub_array[] = $row["cote"];

	}else{
		$sub_array[] = ".....";
		$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-primary btn-xs update"><i class="fa fa-plus"> coter</button>';
	}
		
	// if($row["cote"]==null and $_SESSION['user']['id']==null){
	// 		$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-primary btn-xs update"><i class="fa fa-plus"> coter</button>';
	
	// }
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"data"				=>	$data
);
echo json_encode($output);
?>