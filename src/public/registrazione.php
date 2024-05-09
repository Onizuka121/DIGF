<?php
require_once '../public/php/DbControl.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon"
    href="https://zammad.com/media/pages/product/features/gitlab-integration/693fc93d4d-1698589015/gitlab_integration.png"
    type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/footers/footer-2/assets/css/footer-2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
  <link rel="stylesheet" href="css/style.css">
  <title>Registrazione - DigitalForge</title>
</head>

<body class="body-home-page overflow-y-auto d-flex" id="serialBodyLogin">
  <div class="container align-self-center pt-5" id="div-reg">
    <?php
      if(isset($_POST['btn-submit'])):
        $db_control = DBControl::getDB("root","forge_db");
        $res = $db_control->registraUtente($_POST['nome-reg'],$_POST['cognome-reg'],$_POST['email-reg'],$_POST['password-reg']);   
        if($res):
    ?>
          <div class='toast-body text-success text-center fs-4 font-questrial'> 
            <span class='material-symbols-outlined align-middle'>person_check</span>
            Utente registrato con successo
          </div>
    <?php
        else:
    ?>
          <div class='toast-body text-danger text-center fs-4 font-questrial'> 
            <span class='material-symbols-outlined align-middle'>warning</span>
            Utente già  registrato
          </div>
   <?php
        endif
    ?>      
    <?php
      endif
    ?>
    <form class="row g-4 container mx-auto rounded p-3 text-light font-questrial" action='<?= $_SERVER['PHP_SELF'] ?>'
      method="POST">
      <div class="title_container">
        <p class="title">Crea il tuo account</p>
        <span class="subtitle font-questrial">Per creare il tuo account abbiamo bisogno di alcuni dati</span>
        <br>
      </div>
      <div class="col-xl-6">
        <label for="inputNome" class="form-label">Nome</label>
        <input placeholder="Nome" title="Inpit title" name="nome-reg" type="text"
          class="input_field2 form-control font-questrial" id="inputNome" required>
      </div>
      <div class="col-xl-6">
        <label for="inputCognome" class="form-label">Cognome</label>
        <input placeholder="Cognome" title="Inpit title" name="cognome-reg" type="text"
          class="input_field2 form-control font-questrial" id="inputCognome" required>
      </div>
      <div class="col-12">
        <label for="inputEmail" class="form-label">Email</label>
        <input placeholder="Indirizzo email" title="Inpit title" name="email-reg" type="email"
          class="input_field2 form-control font-questrial" id="inputEmail" required>
      </div>
      <div class="col-xl-6">
        <label for="password_field" class="form-label">Password</label>
        <input placeholder="Scegli una password" title="Inpit title" name="password-reg" type="password"
          class="input_field2 form-control font-questrial gap-3" id="password_field" onchange="CheckPass()">
        <div class="pt-2 text-danger gap-1" id="invalidPassword1" style="display: none !important;">
          <span class="material-symbols-outlined">
            close
          </span>
          password non valida
        </div>
        <div class="pt-2 text-success gap-1" id="validPassword1" style="display: none !important;">
          <span class="material-symbols-outlined">
            done
          </span>
          password valida
        </div>
      </div>
      <div class="col-xl-6">
        <label for="password_field2" class="form-label">Conferma password</label>
        <input placeholder="Conferma la password scelta" title="Inpit title" type="password"
          class="input_field2 form-control font-questrial" id="password_field2" onchange="CheckConfPass()" disabled>
        <div class="pt-2 text-danger gap-1" id="invalidPassword2" style="display: none !important;">
          <span class="material-symbols-outlined">
            close
          </span>
          password non valida
        </div>
        <div class="pt-2 text-success gap-1" id="validPassword2" style="display: none !important;">
          <span class="material-symbols-outlined">
            done
          </span>
          password valida
        </div>
      </div>
      <hr>
      <div class="col-12 d-flex justify-content-center gap-4">
        <button type="button" class="btn text-secondary" style="border: 1px solid #ffc1078b;"
          onclick="ChangePage('index.php')">ANNULLA</button>
        <button type="submit" name="btn-submit" class="btn btn-warning fw-bold" id="btn-crea-account-serial" disabled>CREA
          ACCOUNT</button>
      </div>
      <p id="serialNote2" class="font-questrial">Hai già un account? <a href="login.php">accedi qui</a></p>
    </form>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</html>