<?php
require_once __DIR__."/DbControl.php";
$db_control = DBControl::getDB("root","forge_db");

$nome = "giacomo";
$cognome = "leopardi";
$email = "ciuao@1234.it";
$password = "ciao12465";

$output_data['result'] = $db_control->updateUserData($nome,$cognome,$password);

echo json_encode($output_data);

?>