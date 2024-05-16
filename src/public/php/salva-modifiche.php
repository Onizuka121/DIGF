<?php
require_once __DIR__."/DbControl.php";
$db_control = DBControl::getDB("root","forge_db");

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$password = $_POST['password'];

$output_data['result'] = $db_control->updateUserData($nome,$cognome,$password);

echo json_encode($output_data);