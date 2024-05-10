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




/*



<?php
          if (isset($_POST['btn-submit-accesso'])):
            $db_control = DBControl::getDB("root", "forge_db");
            $res = $db_control->checkUser($_POST['email-accesso'], $_POST['password-accesso']);
            if (!$res):
              ?>
               <div class="toast-container position-fixed bottom-0 end-0 p-3 font-questrial">
                        <div class="row">
                          <div class="col-auto">
                            <div class="toast toast-aggiunto p-1" role="alert" aria-live="assertive" aria-atomic="true">

                            </div>
                          </div>
                        </div>
                      </div>
              <?php
            endif
            ?>
            <?php
          endif
          ?>




$conn = new mysqli("db","root","forge_db","digitalforge_db");

if(!$conn){
    die("errore");
}

$sql = "
    SELECT nome,cognome,email_user FROM utenti

";

$result = $conn->query($sql);
$data = [];
while($res = $result->fetch_assoc()){
    $data_tmp['nome'] = $res['nome'];
    $data_tmp['cognome'] = $res['cognome'];
    $data_tmp['email'] = $res['email_user'];

    array_push($data,$data_tmp);
}

echo json_encode($data);


*/
