<?php
//classe di controllo per il database
declare(strict_types=1);
session_start();

class DBControl{

    private const URL_DB = "db";
    private const DB_NAME = "digitalforge_db";
    private ?mysqli $conn = null;
    private static ?DBControl $db_control_singelton = null;
    private function __construct(string $user,string $pass){
        $this->conn = new mysqli(self::URL_DB,$user,$pass,self::DB_NAME);
    }
    
    public static function getDB($user,$pass):DBControl{

        if(self::$db_control_singelton == null){
            self::$db_control_singelton = new DBControl($user,$pass);
        }
        return self::$db_control_singelton;
    }

    public function registraUtente($nome,$cognome,$email,$password):bool{
        $sql = "INSERT INTO utenti (nome,cognome,email_user,password)
                VALUES ('{$nome}','{$cognome}','{$email}','{$password}')";

           
        return (bool) $this->conn->query($sql);
    }

    public function checkUser($email,$password):array{

        $tab = [
                'email_check'=> $this->getUserByEmail($email),
                'pass_check' => $this->getUserByPassword($password)
            ];
        if($tab['email_check'] && $tab['pass_check']){
            $_SESSION['email_user'] = $email;
        }    
        return $tab;
       
    }
    private function getUserByPassword($pass):bool{
        $ris = $this->conn->query("SELECT * FROM utenti WHERE password = '$pass'");
        if($ris->num_rows == 1){
            return true;
        }
        return false;
    }
    private function getUserByEmail($email):bool{

        $ris = $this->conn->query("SELECT * FROM utenti WHERE email_user = '$email'");
        if($ris->num_rows == 1){
            return true;
        }
        return false;
    }
    
    public function getDatiUser($data):string{
        //query da cambiare con join con i dati pagamento
        $sql_select = "SELECT * 
                    FROM utenti
                    WHERE email_user = '{$_SESSION['email_user']}'
        ";
        $user_obj = $this->conn->query($sql_select)->fetch_assoc();
        return $user_obj[$data];
    }

    public function updateUserData($nome,$cognome,$password):string{

        $sql_update = " UPDATE utenti
                        SET nome = '$nome',cognome = '$cognome',password = '$password'
                        WHERE email_user = '{$_SESSION['email_user']}';
        ";
        $res = $this->conn->query($sql_update);
        return (string) $res;
    }

}
