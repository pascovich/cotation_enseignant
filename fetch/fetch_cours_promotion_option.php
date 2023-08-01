<?php
include('../database/connect.php');
include('../database/function.php');

if($_POST['id'])
{
	$id = $_POST['id'];
	
	$statement = $db->prepare("SELECT * FROM affectation_view WHERE id_promotion=?");
	$statement->execute(array($id));
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	?>
    <option value="">-------- cours -------</option>
    <?php						
	foreach ($result as $row) {
		?>
        <option value="<?php echo $row['cours']; ?>"><?php echo $row['cours']; ?></option>
        <?php
	}
}