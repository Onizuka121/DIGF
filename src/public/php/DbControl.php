<?php
//classe di controllo per il database
declare(strict_types=1);
session_start();

class DBControl
{

    private const URL_DB = "db";
    private const DB_NAME = "digitalforge_db";
    private ?mysqli $conn = null;
    private static ?DBControl $db_control_singelton = null;
    private function __construct(string $user, string $pass)
    {
        $this->conn = new mysqli(self::URL_DB, $user, $pass, self::DB_NAME);
    }

    public static function getDB($user, $pass): DBControl
    {

        if (self::$db_control_singelton == null) {
            self::$db_control_singelton = new DBControl($user, $pass);
        }
        return self::$db_control_singelton;
    }

    public function registraUtente($nome, $cognome, $email, $password): bool
    {
        $sql = "INSERT INTO utenti (nome,cognome,email_user,password)
                VALUES ('{$nome}','{$cognome}','{$email}','{$password}')";


        return (bool) $this->conn->query($sql);
    }

    public function checkUser($email, $password): array
    {

        $tabelle = ['utenti' => 'email_user', 'utenti_ads' => 'email_ads'];

        foreach ($tabelle as $tabella => $nome_campo) {

            $checking = [
                'email_check' => $this->getUserByEmail($email, $tabella, $nome_campo),
                'pass_check' => $this->getUserByPassword($password, $tabella)
            ];

            if ($checking['email_check'] && $checking['pass_check']) {
                $_SESSION['email_user'] = $email;
                $_SESSION['table'] = $tabella;
                $_SESSION['campo'] = $nome_campo;
                break;
            } elseif ($checking['email_check'] || $checking['pass_check']) {
                break;
            }
        }

        return $checking;

    }

    private function getUserByPassword($pass, $tab): bool
    {
        $ris = $this->conn->query("SELECT * FROM $tab WHERE password = '$pass'");
        if ($ris->num_rows == 1) {
            return true;
        }
        return false;
    }
    private function getUserByEmail($email, $tab, $camp): bool
    {
        $ris = $this->conn->query("SELECT * FROM $tab WHERE $camp = '$email'");
        if ($ris->num_rows == 1) {
            return true;
        }
        return false;
    }

    public function getDatiUser($data): string
    {
        //query da cambiare con join con i dati pagamento
        $sql_select = "SELECT * 
                    FROM  {$_SESSION['table']}
                    WHERE {$_SESSION['campo']} = '{$_SESSION['email_user']}';
        ";

        $user_obj = $this->conn->query($sql_select)->fetch_assoc();
        return $user_obj[$data];
    }

    public function test()
    {
        $sql_select = "SELECT * 
                    FROM  {$_SESSION['table']}
                    WHERE {$_SESSION['campo']} = '{$_SESSION['email_user']}';
        ";
        $user_obj = $this->conn->query($sql_select);


        return var_dump($user_obj, $_SESSION['table'], $_SESSION['campo'], $_SESSION['email_user']);
    }

    public function updateUserData($nome, $cognome, $password): string
    {

        $sql_update = " UPDATE {$_SESSION['table']}
                        SET nome = '$nome',cognome = '$cognome',password = '$password'
                        WHERE {$_SESSION['campo']} = '{$_SESSION['email_user']}';
        ";
        $res = $this->conn->query($sql_update);
        return (string) $res;
    }


    public function addProduct($ap): int
    {
        $sql = "INSERT INTO prodotti (nominativo,prezzo,descrizione,link_sito_app,link_img1,link_img2,link_img3,email_ads_add,produttore,categoria)
                VALUES ('{$ap['nominativo']}',
                {$ap['prezzo']},
                '{$ap['descrizione']}',
                '{$ap['link-dettagli']}',
                '{$ap['url-img-1']}',
                '{$ap['url-img-2']}',
                '{$ap['url-img-3']}',
                '{$_SESSION['email_user']}',
                '{$ap['produttore']}',
                '{$ap['categoria']}');
        ";
        $id_product = -1;
        if ($this->conn->query($sql)) {
            $res = $this->conn->query("SELECT id_prodotto FROM prodotti ORDER BY data_ora_inserimento DESC;");
            $id_product = (int)$res->fetch_assoc()['id_prodotto'];
        }
        return $id_product;
    }
}
