<?php
require_once __DIR__ ."/DbControl.php";
$db_control = DBControl::getDB("root", "forge_db");


if (isset($_POST['email-accesso']) && isset($_POST['password-accesso'])) {
  $email = $_POST['email-accesso'];
  $password = $_POST['password-accesso'];

  $arr_checking = $db_control->checkUser($email, $password);

  echo json_encode($arr_checking);

  die();
}

if (isset($_POST['nome']) && isset($_POST['cognome']) && isset($_POST['password'])) {


  $nome = $_POST['nome'];
  $cognome = $_POST['cognome'];
  $password = $_POST['password'];

  $output_data['result'] = $db_control->updateUserData($nome, $cognome, $password);

  echo json_encode($output_data);
  die();

}

if (isset($_POST['nominativo']) && isset($_POST['produttore'])) {

  $out = ['id_product' => $db_control->addProduct($_POST)];
  if($out['id_product']){
    $out['date_time'] = time();
  }
  echo json_encode($out);

  die();
}
