
<?php
include 'database/connect.php';
$enseignant = $_POST['enseignant2'];

$rqt = $db->query("SELECT * from report_cours_cotation WHERE enseignant='$enseignant' limit 1");
$rqt->execute();
$result = $rqt->fetch();

var_dump($result);