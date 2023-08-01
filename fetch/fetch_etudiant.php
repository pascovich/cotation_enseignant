<?php
include('../database/connect.php');
include('../database/function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM etudiant ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE noms LIKE "%'.$_POST["search"]["value"].'%" ';
}
// if(isset($_POST["order"]))
// {
// 	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
// }
// else
// {
// 	$query .= 'ORDER BY id DESC ';
// }
// if($_POST["length"] != -1)
// {
// 	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
// }
$statement = $db->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	$image = '';
	if($row["photo"] != '')
	{
		$image = '<img src="img/'.$row["photo"].'" class="img-thumbnail" width="50" />';
	}
	else
	{
		$image = '';
	}
	
	$sub_array = array();
	$sub_array[] = $row["id"];
	$sub_array[] = $image;
	$sub_array[] = $row["noms"];
	$sub_array[] = $row["sexe"];
	$sub_array[] = $row["etat_civil"];
	$sub_array[] = $row["adresse"];
	$sub_array[] = $row["matricule"];
	$sub_array[] = $row["email"];
	$sub_array[] = $row["telephone"];
	
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></button>';
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>