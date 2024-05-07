<?php

require_once '../public/php/DbControl.php';
$db_control = DBControl::getDB("root","forge_db");

$nome = $_POST['nome-mod'];
$cognome = $_POST['cognome-mod'];
$email = $_POST['email-mod'];
$password = $_POST['password-mod'];

$output_data['result'] = $db_control->updateUserData($nome,$cognome,$email,$password);

echo json_encode($output_data);

?>