<?php

$username = 'root';
$password = '';
$db = new PDO( 'mysql:host=localhost;dbname=cotation_enseignant', $username, $password );

require 'ses.php';

$user = new USER($db);


?>

