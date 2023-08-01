<?php
include('../database/connect.php');
include('../database/function.php');

if($_POST['id'])
{
	$id = $_POST['id'];
	
	$statement = $db->prepare("SELECT * FROM affectation_view WHERE cours=?");
	$statement->execute(array($id));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	?>
    <?php						
	foreach ($result as $row) {
		?>
		<span style="color:blue"><?=$row['enseignant']?></span>
        <?php
	}
}