<?php


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




?>