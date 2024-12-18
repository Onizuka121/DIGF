<?php require_once '../public/php/DbControl.php';
$db_control = DBControl::getDB("root", "forge_db"); ?>
<!doctype html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="https://zammad.com/media/pages/product/features/gitlab-integration/693fc93d4d-1698589015/gitlab_integration.png" type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/footers/footer-2/assets/css/footer-2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css" integrity="sha512-8RxmFOVaKQe/xtg6lbscU9DU0IRhURWEuiI0tXevv+lXbAHfkpamD4VKFQRto9WgfOJDwOZ74c/s9Yesv3VvIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

  <link rel="stylesheet" href="css/style.css">
  <title>DigitalForge</title>
</head>

<body class="bg-dark overflow-hidden">
  <div class='toast-container position-fixed bottom-0 start-0 p-3 font-questrial'>
    <div class='row'>
      <div class='col-auto'>
        <div class='toast toast-modifica-profilo p-1' role='alert' aria-live='assertive' aria-atomic='true'>

        </div>
      </div>
    </div>
  </div>
  <div class='toast-container position-fixed bottom-0 start-0 p-3 font-questrial'>
    <div class='row'>
      <div class='col-auto'>
        <div class='toast toast-product-added p-1' role='alert' aria-live='assertive' aria-atomic='true'>

        </div>
      </div>
    </div>
  </div>
  <div class='toast-container position-fixed bottom-0 start-0 p-3 font-questrial'>
    <div class='row'>
      <div class='col-auto'>
        <div class='toast toast-filter-product p-1' role='alert' aria-live='assertive' aria-atomic='true'>

        </div>
      </div>
    </div>
  </div>
  <nav class="navbar fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-light fs-3 babapro-font">
        <img src="https://zammad.com/media/pages/product/features/gitlab-integration/693fc93d4d-1698589015/gitlab_integration.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top"">
        DIGITALFORGE
      </a> 
      <button class=" btn btn-trasparent text-light d-xl-none d-md-none" id="s6003" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" onload="testload()">
        <span class="material-symbols-outlined text-warning fs-1 align-middle" onload="testload()">
          menu
        </span>
        </button>

        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
          <div class="offcanvas-header">
            <div class="w-auto p-2">
              <span class="material-symbols-outlined text-warning align-middle" style="font-size: 45px;">
                account_circle
              </span>
            </div>
            <h5 class="offcanvas-title font-questrial px-15 text-warning" id="offcanvasRightLabel">
              <?= $db_control->getDatiUser("nome") ?>
              <?= $db_control->getDatiUser("cognome") ?>
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="close"></button>
          </div>
          <div class="offcanvas-body">
            <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3" data-bs-dismiss="offcanvas" onclick="HandleAndView('li-mk-ID','serialMARKET-PLACE')">
              <span class="material-symbols-outlined text-warning align-middle">
                storefront
              </span>
              Market-place
            </a>
            <br>
            <br>

            <?php
            if ($_SESSION['table'] == 'utenti') :
            ?>
              <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3" data-bs-dismiss="offcanvas" onclick="HandleAndView('li-ai-ID','serialAiContainer')">
                <span class="material-symbols-outlined text-warning align-middle">
                  robot_2
                </span>
                Assistente AI
              </a>
              <br>
              <br>
              <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3" data-bs-dismiss="offcanvas" onclick="HandleAndView('li-pre-ID','serialPreferitiContainer')">
                <span class="material-symbols-outlined text-warning align-middle">
                  bookmark
                </span>
                Preferiti
              </a>
            <?php
            endif
            ?>

            <?php
            if ($_SESSION['table'] == "utenti_ads") :
            ?>
              <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3" data-bs-dismiss="offcanvas" onclick="HandleAndView('li-add-ID','serialAddProductContainer')">
                <span class="material-symbols-outlined text-warning align-middle">
                  add_business
                </span>
                Aggiungi prodotto
              </a>
              <br>
            <?php
            endif
            ?>

            <hr class=text-bg-light">
            <br>
            <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3" href="" data-bs-toggle="modal" data-bs-target="#modale-visualizza-profilo">
              <span class="material-symbols-outlined text-warning align-middle">
                visibility
              </span>
              Visualizza profilo
            </a>
            <br>
            <br>
            <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3" href="" data-bs-dismiss="offcanvas" onclick="HandleAndView('li-aiuto-ID','serialHelpContainer')">
              <span class="material-symbols-outlined text-warning align-middle">
                help
              </span>
              Aiuto
            </a>
            <br>
            <br>
            <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3" href="/">
              <span class="material-symbols-outlined text-warning align-middle">
                logout
              </span>
              Esci
            </a>

          </div>
        </div>
        <div class="d-grid gap-2 d-md-block d-none shadow">
          <?php
          if ($_SESSION['table'] == "utenti") :
          ?>
            <button class="btn btn-warning fw-bold font-questrial" type="button" onclick="ChangePage('add-payment')">
              AGGIUNGI METODO DI PAGAMENTO
            </button>
          <?php
          endif
          ?>

          <div class="btn-group">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              <span class="material-symbols-outlined text-warning align-middle" style="font-size: 45px;">
                account_circle
              </span>
            </button>
            <ul class="dropdown-menu dropdown-menu-lg-end bg-dark">
              <li>
                <h4 class="dropdown-header text-warning fs-5 font-questrial">
                  <?= $db_control->getDatiUser("nome") ?>
                  <?= $db_control->getDatiUser("cognome") ?>
                </h4>
              </li>
              <hr class="hr-menu">
              <li><a class="dropdown-item text-light font-questrial p-2 pointer" href="" data-bs-toggle="modal" data-bs-target="#modale-visualizza-profilo">
                  <span class="material-symbols-outlined text-warning align-middle">
                    visibility
                  </span>
                  Visualizza profilo</a></li>
              <li><a class="dropdown-item text-light font-questrial p-2" href="/">
                  <span class="material-symbols-outlined text-warning align-middle">
                    logout
                  </span>
                  Esci</a></li>
            </ul>
          </div>
        </div>

    </div>
  </nav>

  <!-- MODALE PER PROFILO -->
  <div class="modal fade" id="modale-visualizza-profilo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 font-questrial fw-bold w-100 d-flex align-items-center" id="staticBackdropLabel">
            <span class="material-symbols-outlined">
              person
            </span>
            Dettagli profilo
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="DiscardAll()"></button>
        </div>
        <div class="modal-body">
          <form class="row g-4 container mx-auto rounded text-dark font-questrial">
            <div class="col-12">
              <label for="inputEmail" class="form-label">Email</label>
              <input title="Inpit title" class="input_field2 form-control font-questrial" value="<?= $_SESSION['email_user'] ?>" disabled>
            </div>
            <div class="col-xl-6">
              <label for="inputNome" class="form-label">Nome</label>
              <input title="Inpit title" name="nome-profilo" type="text" class="input_field2 form-control font-questrial" id="inputNome" value="<?= $db_control->getDatiUser('nome') ?>" onchange="ViewSalvaModifiche()">
            </div>
            <div class="col-xl-6">
              <label for="inputCognome" class="form-label">Cognome</label>
              <input title="Inpit title" name="cognome-profilo" type="text" class="input_field2 form-control font-questrial" id="inputCognome" value="<?= $db_control->getDatiUser('cognome') ?>" onchange="ViewSalvaModifiche()">
            </div>

            <div class="col-xl-6">
              <label for="password_field" class="form-label">Password</label>
              <input title="Inpit title" name="password-profilo" type="password" class="input_field2 form-control font-questrial gap-3" id="password_field" onchange="CheckPass(true)" value="<?= $db_control->getDatiUser('password') ?>">
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
            <div class="col-xl-7" id="confermaPasswordSerial" style="display: none;">
              <label for="password_field2" class="form-label">Conferma cambio password</label>
              <input placeholder="Conferma la password scelta" title="Inpit title" type="password" class="input_field2 form-control font-questrial" id="password_field2" onchange="CheckConfPass()" disabled>
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
            <?php
            if ($_SESSION['table'] == "utenti") :
            ?>
              <hr>
              <p class="fs-3 align-text-center">
                <span class="material-symbols-outlined">
                  credit_card
                </span>
                Metodo di pagamento
              </p>
              <div class="container-fluid mb-4 d-flex">
                <div class="col-8">
                  <label for="inputCardNum" class="form-label">Numero carta</label>
                  <input placeholder="1234 1234 1234 1234" title="Inpit title" name="numero-carta" type="tel" class="input_field2 form-control font-questrial" maxlength="19" id="inputCardNum" value="4568 3472 0375 9327" readonly>
                </div>
                <div class="col-1 w-10 ps-1 p-0" style="height: 50px; margin-top: 5px;">
                  <span class="material-symbols-outlined fs-1 text-warning mt-4" id="cardTipo">
                    credit_card
                  </span>
                </div>
              </div>
              <div class="container-fluid mb-3">
                <label for="inputNome" class="form-label w-100">Intestatario</label>
                <input placeholder="Marco Rossi" title="Inpit title" name="nome-reg" type="text" class="input_field2 form-control font-questrial" id="inputNome" value="Jhon Bobby" readonly>
              </div>
              <div class="col-5 col-xl-5">
                <label for="scadenza_card" class="form-label">Scadenza</label>
                <input title="Inpit title" name="sacadenza-card" type="text" class="input_field2 form-control font-questrial gap-3" id="scadenza_card" pattern="(0[1-9]|1[0-2])\/[0-9]{2}" maxlength="5" value="12/29" readonly>
              </div>
              <div class="col-6 col-xl-5">
                <label for="cvc" class="form-label">

                  CVC</label>
                <input placeholder="123" title="Inpit title" type="tel" class="input_field2 form-control font-questrial" name="cvc-card" maxlength="3" id="cvc" value="523" readonly>
              </div>
              <div class="col-xl-7">
                <label for="selectStato" class="form-label">Stato</label>
                <select title="Inpit title" name="stato-card" class="input_field2 form-control font-questrial" id="selectStato" disabled>
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Isole Åland">Isole Åland</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="Samoa Americane">Samoa Americane</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antartide">Antartide</option>
                  <option value="Antigua e Barbuda">Antigua e Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaigian">Azerbaigian</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Bielorussia">Bielorussia</option>
                  <option value="Belgio">Belgio</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia ed Erzegovina">Bosnia ed Erzegovina</option>
                  <option value="Botswana">Botswana</option>
                  <option value="Isola di Bouvet">Isola di Bouvet</option>
                  <option value="Brasile">Brasile</option>
                  <option value="Territorio Britannico dell'Oceano Indiano">Territorio Britannico dell'Oceano
                    Indiano</option>
                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambogia">Cambogia</option>
                  <option value="Camerun">Camerun</option>
                  <option value="Canada">Canada</option>
                  <option value="Capo Verde">Capo Verde</option>
                  <option value="Isole Cayman">Isole Cayman</option>
                  <option value="Repubblica Centrafricana">Repubblica Centrafricana</option>
                  <option value="Chad">Chad</option>
                  <option value="Cile">Cile</option>
                  <option value="Cina">Cina</option>
                  <option value="Isola di Natale">Isola di Natale</option>
                  <option value="Isole Cocos (Keeling)">Isole Cocos (Keeling)</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comore">Comore</option>
                  <option value="Congo">Congo</option>
                  <option value="Repubblica Democratica del Congo">Repubblica Democratica del Congo</option>
                  <option value="Isole Cook">Isole Cook</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Costa d'Avorio">Costa d'Avorio</option>
                  <option value="Croazia">Croazia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Cipro">Cipro</option>
                  <option value="Repubblica Ceca">Repubblica Ceca</option>
                  <option value="Danimarca">Danimarca</option>
                  <option value="Gibuti">Gibuti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Repubblica Dominicana">Repubblica Dominicana</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egitto">Egitto</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Guinea Equatoriale">Guinea Equatoriale</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Etiopia">Etiopia</option>
                  <option value="Isole Falkland (Malvine)">Isole Falkland (Malvine)</option>
                  <option value="Isole Faroe">Isole Faroe</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finlandia">Finlandia</option>
                  <option value="Francia">Francia</option>
                  <option value="Guyana Francese">Guyana Francese</option>
                  <option value="Polinesia Francese">Polinesia Francese</option>
                  <option value="Territori Francesi del Sud">Territori Francesi del Sud</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germania">Germania</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibilterra">Gibilterra</option>
                  <option value="Grecia">Grecia</option>
                  <option value="Groenlandia">Groenlandia</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadalupa">Guadalupa</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guernsey">Guernsey</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Isole Heard ed McDonald">Isole Heard ed McDonald</option>
                  <option value="Città del Vaticano">Città del Vaticano</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Ungheria">Ungheria</option>
                  <option value="Islanda">Islanda</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran, Repubblica Islamica">Iran, Repubblica Islamica</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Irlanda">Irlanda</option>
                  <option value="Isola di Man">Isola di Man</option>
                  <option value="Israele">Israele</option>
                  <option value="Italia" selected>Italia</option>
                  <option value="Giamaica">Giamaica</option>
                  <option value="Giappone">Giappone</option>
                  <option value="Jersey">Jersey</option>
                  <option value="Giordania">Giordania</option>
                  option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Repubblica Democratica Popolare di Corea">Repubblica Democratica Popolare di
                    Corea</option>
                  <option value="Repubblica di Corea">Repubblica di Corea</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kirghizistan">Kirghizistan</option>
                  <option value="Repubblica Democratica Popolare del Laos">Repubblica Democratica Popolare del
                    Laos</option>
                  <option value="Lettonia">Lettonia</option>
                  <option value="Libano">Libano</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libia">Libia</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lituania">Lituania</option>
                  <option value="Lussemburgo">Lussemburgo</option>
                  <option value="Macao">Macao</option>
                  <option value="Ex Repubblica Jugoslava di Macedonia">Ex Repubblica Jugoslava di Macedonia
                  </option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malesia">Malesia</option>
                  <option value="Maldive">Maldive</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Isole Marshall">Isole Marshall</option>
                  <option value="Martinica">Martinica</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Messico">Messico</option>
                  <option value="Stati Federati di Micronesia">Stati Federati di Micronesia</option>
                  <option value="Moldova, Repubblica di">Moldova, Repubblica di</option>
                  <option value="Principato di Monaco">Principato di Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montenegro">Montenegro</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Marocco">Marocco</option>
                  <option value="Mozambico">Mozambico</option>
                  <option value="Birmania">Birmania</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Paesi Bassi">Paesi Bassi</option>
                  <option value="Antille Olandesi">Antille Olandesi</option>
                  <option value="Nuova Caledonia">Nuova Caledonia</option>
                  <option value="Nuova Zelanda">Nuova Zelanda</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Isola Norfolk">Isola Norfolk</option>
                  <option value="Isole Marianne settentrionali">Isole Marianne settentrionali</option>
                  <option value="Norvegia">Norvegia</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Territori palestinesi">Territori palestinesi</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua Nuova Guinea">Papua Nuova Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Perù">Perù</option>
                  <option value="Filippine">Filippine</option>
                  <option value="Isole Pitcairn">Isole Pitcairn</option>
                  <option value="Polonia">Polonia</option>
                  <option value="Portogallo">Portogallo</option>
                  <option value="Porto Rico">Porto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Riunione">Riunione</option>
                  <option value="Romania">Romania</option>
                  <option value="Federazione Russa">Federazione Russa</option>
                  <option value="Ruanda">Ruanda</option>
                  <option value="Saint Kitts e Nevis">Saint Kitts e Nevis</option>
                  <option value="Santa Lucia">Santa Lucia</option>
                  <option value="Saint Pierre e Miquelon">Saint Pierre e Miquelon</option>
                  <option value="Saint Vincent e Grenadine">Saint Vincent e Grenadine</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                  <option value="Arabia Saudita">Arabia Saudita</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Serbia">Serbia</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovacchia">Slovacchia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Isole Solomon">Isole Solomon</option>
                  <option value="Somalia">Somalia</option>
                  <option value="Sud Africa">Sud Africa</option>
                  <option value="Georgia del Sud e isole Sandwich meridionali">Georgia del Sud e isole Sandwich
                    meridionali</option>
                  <option value="Spagna">Spagna</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Svezia">Svezia</option>
                  <option value="Svizzera">Svizzera</option>
                  <option value="Repubblica Araba Siriana">Repubblica Araba Siriana</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Tagikistan">Tagikistan</option>
                  <option value="Repubblica Unita di Tanzania">Repubblica Unita di Tanzania</option>
                  <option value="Tailandia">Tailandia</option>
                  <option value="Timor Est">Timor Est</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad">Trinidad</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turchia">Turchia</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Isole Turks e Caicos">Isole Turks e Caicos</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Ucraina">Ucraina</option>
                  <option value="Emirati Arabi Uniti">Emirati Arabi Uniti</option>
                  <option value="Regno Unito">Regno Unito</option>
                  <option value="Stati Uniti d'America">Stati Uniti d'America</option>
                  <option value="Isole minori esterne degli Stati Uniti d'America">Isole minori esterne degli
                    Stati Uniti d'America</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Isole Vergini Britanniche">Isole Vergini Britanniche</option>
                  <option value="Isole Vergini Americane">Isole Vergini Americane</option>
                  <option value="Wallis e Futuna">Wallis e Futuna</option>
                  <option value="Sahara Occidentale">Sahara Occidentale</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                </select>
              </div>
              <hr>
              <div class="container p-3">
                <button type="button" class="btn btn-warning font-questrial mx-auto fw-bold d-flex justify-content-center w-50 g-3" onclick="ChangePage('add-payment.html')">
                  AGGIUNGI METODO DI PAGAMENTO
                </button>
              </div>
            <?php
            endif
            ?>
          </form>
        </div>
        <div class="modal-footer" id="SaveModificheSerial" style="display: none;">
          <button type="button" class="btn btn-warning font-questrial mx-auto fw-bold d-flex justify-content-center w-50 g-3" data-bs-dismiss="modal" id="salva-modifiche-btn">
            <span class="material-symbols-outlined">
              flag
            </span>
            SALVA MODIFICHE
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- FINE MODALE PER PROFILO -->
  <br><br><br>



  <div id="container-modals"></div>


  <div class="container-fluid">
    <do class="row flex-nowrap">
      <div class="col-auto col-xl-2 px-sm-2 px-0 d-none d-sm-none d-xl-block rounded position-relative" style="background-color: #3e44496d;" id="bar-main">

        <span class="position-absolute top-50 start-100 translate-middle badge bg-warning text-dark text-center">
          <span class="material-symbols-outlined m-auto" id="hide-bar">
            chevron_left
          </span>
          <span class="visually-hidden">unread messages</span>
        </span>

        <div class="d-flex flex-column align-items-center align-items-sm-start px-2 pt-2 text-white" style="height: auto !important;" id="bar-child">
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100" id="menu" style="width: 110% !important;">
            <li class="nav-item w-100 p-3 d-flex " id="li-mk-ID" onclick="HandleAndView('li-mk-ID','serialMARKET-PLACE')">
              <div style="border: 1px solid #ffc107; margin-left:-10px; margin-right: 10px; display:block;" id="li-mk-ID-bar"></div>
              <a class="navbar-brand font-questrial user-select-none">
                <span class="material-symbols-outlined text-warning align-middle">
                  storefront
                </span>
                <span class="text-bar">Market-place</span>
              </a>
            </li>
            <?php
            if ($_SESSION['table'] == "utenti") :
            ?>
              <li class="nav-item w-100 p-3 d-flex" id="li-ai-ID" onclick="HandleAndView('li-ai-ID','serialAiContainer')">
                <div style="border: 1px solid #ffc107; margin-left:-10px; margin-right: 10px; display:none;" id="li-ai-ID-bar"></div>

                <a class="navbar-brand font-questrial user-select-none">
                  <span class="material-symbols-outlined text-warning align-middle">
                    robot_2
                  </span>
                  <span class="text-bar">Assistente AI</span>

                </a>
              </li>

              <li class="nav-item w-100 p-3 d-flex" id="li-pre-ID" onclick="HandleAndView('li-pre-ID','serialPreferitiContainer')">
                <div style="border: 1px solid #ffc107; margin-left:-10px; margin-right: 10px;  display:none;" id="li-pre-ID-bar"></div>

                <a class="navbar-brand font-questrial user-select-none">
                  <span class="material-symbols-outlined text-warning align-middle">
                    bookmark
                  </span>
                  <span class="text-bar">Preferiti</span>
              </li>
            <?php
            endif
            ?>
            <?php
            if ($_SESSION['table'] == "utenti_ads") :
            ?>
              <li class="nav-item w-100 p-3 d-flex" id="li-add-ID" onclick="HandleAndView('li-add-ID','serialAddProductContainer')">
                <div style="border: 1px solid #ffc107; margin-left:-10px; margin-right: 10px;  display:none;" id="li-add-ID-bar"></div>

                <a class="navbar-brand font-questrial user-select-none">
                  <span class="material-symbols-outlined text-warning align-middle">
                    add_business
                  </span>
                  <span class="text-bar">Aggiungi prodotto</span>
              </li>

            <?php
            endif
            ?>
            <br>
            <hr class="hr-menu text-secondary">
            <br>
            <li class="nav-item w-100 p-3 d-flex" id="li-aiuto-ID" onclick="HandleAndView('li-aiuto-ID','serialHelpContainer')">
              <div style="border: 1px solid #ffc107; margin-left:-10px; margin-right: 10px;height : 26px; display:none;" id="li-aiuto-ID-bar"></div>

              <a class="navbar-brand font-questrial">
                <span class="material-symbols-outlined text-warning align-middle">
                  help
                </span>
                <span class="text-bar">Aiuto</span>
              </a>
            </li>
        </div>
      </div>
      <div class="col bg-dark" id="serialMARKET-PLACE">
        <nav class="navbar border-top bg-warning border-warning rounded" id="href-test">
          <div class="container-fluid">
            <a class="navbar-brand font-questrial fs-3 text-dark d-none d-sm-block fw-bold ">Market-place</a>
            <div class="d-flex" style="width: auto; min-width: 40% !important;">
              <input class="form-control form-control-sm me-2 fw-bold fs-6 w-100 outline-none font-questrial outiline-none" type="text" placeholder="Cerca prodotto" aria-label="Search" name="ricerca_user" id="cerca-prodotto-input">
              <a href="#text-result-search">
                <button class="btn btn-dark font-questrial" type="button" id="search-product-mk">
                  <span class="material-symbols-outlined text-warning align-middle">
                    search
                  </span>
                </button>
              </a>

            </div>
            <button class="btn btn-dark text-light d-flex justify-content-center position-relative" id="s6003" type="button" data-bs-toggle="offcanvas" data-bs-target="#adjusterSerial" aria-controls="offcanvasRight">
              <span class="material-symbols-outlined text-warning align-middle">
                tune
              </span>
              <span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-danger" style="display:none;" id="span-badge-filtri-nums">
                <span id="nums-badge">2</span>
                <span class="visually-hidden">unread messages</span>
              </span>
            </button>

            <div class="offcanvas offcanvas-start bg-dark p-1" tabindex="-1" id="adjusterSerial" aria-labelledby="offcanvasRightLabel">
              <div class="offcanvas-header">
                <div class="w-auto p-2">
                  <span class="material-symbols-outlined text-warning align-middle">
                    tune
                  </span>
                </div>
                <h5 class="offcanvas-title font-questrial text-warning fs-4" id="offcanvasRightLabel">Filtri ricerca
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="close"></button>
              </div>
              <div class="offcanvas-body" id="style-1">
                <div class="container p-4 g-4 font-questrial">
                  <label for="" class="form-label text-light font-questrial fs-4 fw-bold">Categoria</label>
                  <select title="select-title" class="form-select form-select-lg border-dark" name="categoria-pc" id="selectCategoriaComputer">
                    <option value="">qualsiasi categoria</option>
                    <option value="laptop">PC Notebook</option>
                    <option value="desktop">PC Desktop</option>
                    <option value="desktop">PC All-in-one</option>
                    <option value="hardware">Componenti hardware</option>
                  </select>
                </div>
                <hr class="hr-menu">
                <div class="mb-3 container p-4 g-4 font-questrial">
                  <label for="" class="form-label text-light font-questrial fs-4 fw-bold">Produttore</label>
                  <select title="select-title" class="form-select form-select-lg border-dark" name="produttore" id="serialproduttore">
                    <option value="">qualsiasi produttore</option>
                    <option value="ASUS">ASUS</option>
                    <option value="ACER">ACER</option>
                    <option value="AMD">AMD</option>
                    <option value="APPLE">APPLE</option>
                    <option value="DELL">DELL</option>
                    <option value="HP">HP</option>
                    <option value="LENOVO">LENOVO</option>
                    <option value="MICROSOFT">MICROSOFT</option>
                    <option value="NVIDIA">NVIDIA</option>
                    <option value="INTEL">INTEL</option>
                    <option value="MSI">MSI</option>
                    <option value="GIGABYTE">GIGABYTE</option>
                    <option value="ASROCK">ASROCK</option>
                    <option value="SAMSUNG">SAMSUNG</option>
                    <option value="LG">LG</option>
                    <option value="SONY">SONY</option>
                    <option value="TOSHIBA">TOSHIBA</option>
                    <option value="FUJITSU">FUJITSU</option>
                    <option value="BENQ">BENQ</option>
                    <option value="RAZER">RAZER</option>
                    <option value="CORSAIR">CORSAIR</option>
                    <option value="LOGITECH">LOGITECH</option>
                    <option value="STEELSERIES">STEELSERIES</option>
                    <option value="RAIDMAX">RAIDMAX</option>
                  </select>
                </div>
                <hr class="hr-menu">
                <div class="mb-3 container p-4 g-4 font-questrial">
                  <label for="" class="form-label text-light font-questrial fs-4 fw-bold">Prezzo (€)</label>
                  <select title="select-title" class="form-select form-select-lg border-dark" name="prezzo-min-pc" id="serialprezzo-da">
                    <option value="0" selected>Da qualsiasi prezzo</option>
                    <option value="50">da 50</option>
                    <option value="100">da 100</option>
                    <option value="150">da 150</option>
                    <option value="200">da 200</option>
                    <option value="250">da 250</option>
                    <option value="500">da 500</option>
                    <option value="550">da 550</option>
                    <option value="700">da 700</option>
                    <option value="800">da 800</option>
                    <option value="900">da 900</option>
                    <option value="950">da 950</option>
                    <option value="1000">da 1000</option>
                    <option value="1000">da 1200</option>
                    <option value="1000">da 1250</option>
                    <option value="1000">da 1500</option>
                    <option value="1000">da 2000</option>
                    <option value="1000">da 3000</option>
                  </select>
                  <br>
                  <select title="select-title" class="form-select form-select-lg border-dark" name="prezzo-max-pc" id="serialprezzo-a">
                    <option value="99999" selected>A qualsiasi prezzo</option>
                    <option value="50">a 50</option>
                    <option value="100">a 100</option>
                    <option value="150">a 150</option>
                    <option value="200">a 200</option>
                    <option value="250">a 250</option>
                    <option value="500">a 500</option>
                    <option value="550">a 550</option>
                    <option value="700">a 700</option>
                    <option value="800">a 800</option>
                    <option value="900">a 900</option>
                    <option value="950">a 950</option>
                    <option value="1000">a 1000</option>
                    <option value="1000">a 1200</option>
                    <option value="1000">a 1250</option>
                    <option value="1000">a 1500</option>
                    <option value="1000">a 2000</option>
                    <option value="1000">a 3000</option>
                  </select>
                </div>
                <hr class="hr-menu">
                <br>
                <div class="modal-footer d-flex justify-content-center w-50 mx-auto">
                  <button type="button" class="btn btn-warning font-questrial fw-bold w-75" id="btn-filtri" data-bs-dismiss="offcanvas" aria-label="close">
                    <span class="material-symbols-outlined align-middle">
                      filter_alt
                    </span>
                    APPLICA</button>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <div class="container-fluid overflow-y-auto bg-dark rounded p-4 mt-4" id="style-1">
          <div class="container-fluid vstack">
            <div class="container-fluid" id="container-top">
              <h1 class="text-light fs-2 font-questrial" id="text-result-search">I piu venduti negli store online</h1>
              <div class=" border border-light">
              </div>
              <br>
              <br>
            </div>
            <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1 g-4 d-flex" id="marketPlaceSerial">

            </div>
          </div>
          <br><br>
          <footer class="footer float-bottom border-top border-secondary">
            <!-- Widgets - Bootstrap Brain Component -->
            <section class="bg-dark py-4 py-md-5 py-xl-8 text-light border-bottom border-secondary font-questrial">
              <div class="container overflow-hidden">
                <div class="row gy-4 gy-lg-0 justify-content-xl-between">
                  <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                    <div class="widget">
                      <a class="text-light fw-bold fs-5 text-decoration-none">
                        <img src="https://zammad.com/media/pages/product/features/gitlab-integration/693fc93d4d-1698589015/gitlab_integration.png" alt="DIGITALFORGE" width="60" height="60">DIGITALFORGE
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <div class="widget">
                      <h4 class="widget-title mb-4 fw-bold">Contattaci</h4>
                      <address class="mb-4" href="https://maps.app.goo.gl/rLgtUrixqP7FiUJU7">Via Grottaferrata
                        23,Roma,Italia</address>
                      <p class="mb-1">
                        <a class="link-secondary text-decoration-none">(+32) 351-890-2314</a>
                      </p>
                      <p class="mb-0">
                        <a class="link-secondary text-decoration-none">digitalforge@gmail.com</a>
                      </p>
                    </div>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                    <div class="widget">
                      <h4 class="widget-title mb-4 fw-bold">Scopri di piu'</h4>
                      <ul class="list-unstyled">
                        <li class="mb-2">
                          <a class="link-secondary text-decoration-none">About</a>
                        </li>
                        <li class="mb-2">
                          <a class="link-secondary text-decoration-none">Contact</a>
                        </li>
                        <li class="mb-2">
                          <a class="link-secondary text-decoration-none">Advertise</a>
                        </li>
                        <li class="mb-2">
                          <a class="link-secondary text-decoration-none">Terms of Service</a>
                        </li>
                        <li class="mb-0">
                          <a class="link-secondary text-decoration-none">Privacy Policy</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-12 col-lg-3 col-xl-4">
                    <div class="widget">
                      <h4 class="widget-title mb-4 fw-bold">Nostra Newsletter</h4>
                      <p class="mb-4">Subscribe to our newsletter to get our news & discounts delivered to you.</p>

                      <div class="row gy-4">
                        <div class="col-12">
                          <div class="input-group">
                            <span class="input-group-text" id="email-newsletter-addon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                              </svg>
                            </span>
                            <input type="email" class="form-control" id="email-newsletter" value="" placeholder="Email Address" aria-label="email-newsletter" aria-describedby="email-newsletter-addon" required>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="d-grid">
                            <button class="btn btn-warning" type="submit">Invia</button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="bg-dark py-4 py-md-5 py-xl-8 text-light font-questrial">
              <div class="container overflow-hidden">
                <div class="row gy-4 gy-md-0">
                  <div class="col-xs-12 col-md-7 order-1 order-md-0">
                    <div class="copyright text-center text-md-start">
                      &copy; 2024. All Rights Reserved.
                    </div>
                    <div class="credits text-secondary text-center text-md-start mt-2 fs-7">
                      Built by <a class="link-secondary text-decoration-none">DigitalForgeBrain W.F.</a> with
                      <span class="text-warning">&#9829</span>
                    </div>
                  </div>

                  <div class="col-xs-12 col-md-5 order-0 order-md-1">
                    <ul class="nav justify-content-center justify-content-md-end">
                      <li class="nav-item">
                        <a class="nav-link link-warning">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                          </svg>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-warning">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                          </svg>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-warning" href="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                          </svg>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-warning" href="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <br>
        </div>
      </div>
      <div class="col bg-dark" id="serialAiContainer">
        <nav class="navbar border-top bg-warning border-warning rounded">
          <div class="container-fluid">
            <a class="navbar-brand font-questrial fs-3 text-dark fw-bold">Assistente <em>AI</em>
              <span class="sparkle fs-5 align-top">&#10024;</span>
            </a>
            <button type="button" class="btn btn-dark font-questrial text-warning fw-bold d-flex gap-1" data-bs-toggle="modal" data-bs-target="#modalModuloAI">
              <span class="material-symbols-outlined align-middle">
                robot_2
              </span>
              INZIA
            </button>
          </div>

        </nav>
        <div class="container-fluid overflow-y-auto bg-dark rounded p-4 mt-4" id="style-1">
          <div class="container-fluid vstack" id="tutorialInizio" style="display:block;">
            <div class="container-fluid">
              <h1 class="text-light fs-1 font-questrial fw-bold">Benvenuto alla nostra piattaforma di assistenza per
                computer!</h1>
              <p class="text-light fs-3 font-questrial">Il nostro sistema di assistenza alimentato dall'intelligenza
                artificiale ti guiderà attraverso
                il processo di selezione, aiutandoti a trovare il computer ideale in base alle tue preferenze e alle
                tue
                esigenze specifiche.</p>
              <br><br>
              <div class="card mb-3 font-questrial bg-dark text-light mx-auto w-auto" style="max-width: 850px;">
                <div class="row g-0">
                  <div class="col">
                    <div class="card-body">
                      <h5 class="card-title fs-2 fw-bold">
                        <span class="material-symbols-outlined align-middle text-warning fs-1">
                          keyboard_alt
                        </span>
                        Inserisci le tue preferenze
                      </h5>
                      <p class="card-text fs-5 p-2">Compila il breve modulo qui sotto inserendo informazioni cruciali
                        come
                        la
                        marca desiderata, le specifiche tecniche, il budget e la tipologia di computer che stai
                        cercando.</p>
                      <div class="modal-footer d-flex gap-3">

                        <a class="btn border border-warning font-questrial text-warning fw-bold d-flex gap-1" href="#info-2">
                          AVANTI
                          <span class="material-symbols-outlined align-middle">
                            keyboard_double_arrow_down
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="info-2"></div>
              <br><br><br><br><br><br><br>
              <div class="card mb-3 font-questrial bg-dark text-light mx-auto w-auto" style="max-width: 850px;">
                <div class="row g-0">
                  <div class="col">
                    <div class="card-body">
                      <h5 class="card-title fs-2 fw-bold">
                        <span class="material-symbols-outlined align-middle text-warning fs-1">
                          bolt
                        </span>
                        Ricevi assistenza personalizzata
                      </h5>
                      <p class="card-text fs-5 p-2">Una volta inviato il modulo, il nostro sistema elaborerà le tue
                        informazioni e ti fornirà suggerimenti mirati per il computer perfetto per te.</p>
                      <div class="modal-footer d-flex gap-3">
                        <button type="button" class="btn btn-warning font-questrial fw-bold d-flex gap-1" data-bs-toggle="modal" data-bs-target="#modalModuloAI">
                          <span class="material-symbols-outlined align-middle">
                            robot_2
                          </span>
                          INZIA
                        </button>
                        <a class="btn border border-warning font-questrial text-warning fw-bold d-flex gap-1" href="#info-3">
                          AVANTI
                          <span class="material-symbols-outlined align-middle">
                            keyboard_double_arrow_down
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="info-3"></div>
              <br><br><br><br><br><br><br>
              <div class="card mb-3 font-questrial bg-dark text-light mx-auto w-auto" style="max-width: 850px;">
                <div class="row g-0">
                  <div class="col">
                    <div class="card-body">
                      <h5 class="card-title fs-2 fw-bold">
                        <span class="material-symbols-outlined align-middle text-warning fs-1">
                          receipt_long
                        </span>
                        Esplora le opzioni consigliate
                      </h5>
                      <p class="card-text fs-5 p-2">Dopo aver ricevuto le raccomandazioni, avrai la possibilità di
                        esplorare le opzioni consigliate e confrontare le caratteristiche dei vari modelli.</p>
                      <div class="modal-footer d-flex gap-3">
                        <button type="button" class="btn btn-warning font-questrial fw-bold d-flex gap-1" data-bs-toggle="modal" data-bs-target="#modalModuloAI">
                          <span class="material-symbols-outlined align-middle">
                            robot_2
                          </span>
                          INZIA
                        </button>
                        <a class="btn border border-warning font-questrial text-warning fw-bold d-flex gap-1" href="#info-4">
                          AVANTI
                          <span class="material-symbols-outlined align-middle">
                            keyboard_double_arrow_down
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="info-4"></div>
              <br><br><br><br><br><br><br>
              <div class="card mb-3 font-questrial bg-dark text-light mx-auto w-auto" style="max-width: 850px;">
                <div class="row g-0">
                  <div class="col">
                    <div class="card-body">
                      <h5 class="card-title fs-2 fw-bold">
                        <span class="material-symbols-outlined align-middle text-warning fs-1">
                          done
                        </span>
                        Fai la tua scelta informata
                      </h5>
                      <p class="card-text fs-5 p-2">Grazie alle informazioni dettagliate e alle recensioni
                        disponibili,
                        sarai in grado di prendere una decisione informata e scegliere il computer che meglio si
                        adatta
                        alle tue esigenze.</p>
                      <div class="modal-footer d-flex gap-3">
                        <button type="button" class="btn btn-warning font-questrial fw-bold d-flex gap-1" data-bs-toggle="modal" data-bs-target="#modalModuloAI">
                          <span class="material-symbols-outlined align-middle">
                            robot_2
                          </span>
                          INZIA
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade text-dark font-questrial" id="modalModuloAI" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-4 font-questrial fw-bold text-center" id="staticBackdropLabel">
                          Richiedi assistenza <em>AI</em><span class="sparkle fs-6 align-top">&#10024;</span>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="card-body text-dark">
                          <div class="mb-3 container p-3 g-1 font-questrial">
                            <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                              <span class="material-symbols-outlined align-middle">
                                view_cozy
                              </span>
                              Categoria</label>
                            <select class="form-select form-select-lg border-dark" name="categoria-pc" id="selectCategoriaComputer2" onchange="CheckCategoriaComputer(false)">
                              <option selected>qualsiasi categoria</option>
                              <option value="laptop">PC Notebook</option>
                              <option value="desktop">PC Desktop</option>
                              <option value="desktop">PC All-in-one</option>
                              <option value="hardware">Componenti hardware</option>
                            </select>
                          </div>
                          <hr class="hr-menu">
                          <div class="mb-3 container p-3 g-4 font-questrial">
                            <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                              <span class="material-symbols-outlined align-middle">
                                sports_esports
                              </span>
                              Tipologia di utilizzo</label>
                            <select class="form-select form-select-lg border-dark" id="tipologia-pc" id="selectTipologiaComputer2">
                              <option selected>qualsiasi tipologia</option>
                              <option value="gaming">Gaming</option>
                              <option value="lavoro">Lavoro</option>
                              <option value="multimedia">Multimedia</option>
                              <option value="studio">Studio e creatività</option>
                              <option value="portabilita">Portabilità</option>
                              <option value="professionale">Utilizzo professionale</option>
                              <option value="studente">Utilizzo per studenti</option>
                              <option value="sviluppo">Sviluppo software</option>
                            </select>
                          </div>
                          <div class="mb-3 container p-3 g-4 font-questrial">
                            <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                              <span class="material-symbols-outlined align-middle">
                                precision_manufacturing
                              </span>
                              Produttore</label>
                            <select class="form-select form-select-lg border-dark" id="produttore">
                              <option selected>qualsiasi produttore</option>
                              <option value="ASUS">ASUS</option>
                              <option value="ACER">ACER</option>
                              <option value="AMD">AMD</option>
                              <option value="APPLE">APPLE</option>
                              <option value="DELL">DELL</option>
                              <option value="HP">HP</option>
                              <option value="LENOVO">LENOVO</option>
                              <option value="MICROSOFT">MICROSOFT</option>
                              <option value="NVIDIA">NVIDIA</option>
                              <option value="INTEL">INTEL</option>
                              <option value="MSI">MSI</option>
                              <option value="GIGABYTE">GIGABYTE</option>
                              <option value="ASROCK">ASROCK</option>
                              <option value="SAMSUNG">SAMSUNG</option>
                              <option value="LG">LG</option>
                              <option value="SONY">SONY</option>
                              <option value="TOSHIBA">TOSHIBA</option>
                              <option value="FUJITSU">FUJITSU</option>
                              <option value="BENQ">BENQ</option>
                              <option value="RAZER">RAZER</option>
                              <option value="CORSAIR">CORSAIR</option>
                              <option value="LOGITECH">LOGITECH</option>
                              <option value="STEELSERIES">STEELSERIES</option>
                              <option value="RAIDMAX">RAIDMAX</option>
                            </select>
                          </div>
                          <div class="mb-3 container p-3 g-4 font-questrial">
                            <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                              <span class="material-symbols-outlined align-middle">
                                payments
                              </span>
                              Budget (€)</label>
                            <select class="form-select form-select-lg border-dark" id="budget-min-pc">
                              <option selected>Da qualsiasi budget</option>
                              <option value="50">da 50</option>
                              <option value="100">da 100</option>
                              <option value="150">da 150</option>
                              <option value="200">da 200</option>
                              <option value="250">da 250</option>
                              <option value="500">da 500</option>
                              <option value="550">da 550</option>
                              <option value="700">da 700</option>
                              <option value="800">da 800</option>
                              <option value="900">da 900</option>
                              <option value="950">da 950</option>
                              <option value="1000">da 1000</option>
                              <option value="1000">da 1200</option>
                              <option value="1000">da 1250</option>
                              <option value="1000">da 1500</option>
                              <option value="1000">da 2000</option>
                              <option value="1000">da 3000</option>
                            </select>
                            <br>
                            <select class="form-select form-select-lg border-dark" id="budget-max-pc">
                              <option selected>A qualsiasi budget</option>
                              <option value="50">a 50</option>
                              <option value="100">a 100</option>
                              <option value="150">a 150</option>
                              <option value="200">a 200</option>
                              <option value="250">a 250</option>
                              <option value="500">a 500</option>
                              <option value="550">a 550</option>
                              <option value="700">a 700</option>
                              <option value="800">a 800</option>
                              <option value="900">a 900</option>
                              <option value="950">a 950</option>
                              <option value="1000">a 1000</option>
                              <option value="1000">a 1200</option>
                              <option value="1000">a 1250</option>
                              <option value="1000">a 1500</option>
                              <option value="1000">a 2000</option>
                              <option value="1000">a 3000</option>
                            </select>
                          </div>
                          <div class="mb-3 container p-3 g-4 font-questrial">
                            <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                              <span class="material-symbols-outlined align-middle">
                                memory
                              </span>
                              RAM</label>
                            <select class="form-select form-select-lg border-dark" id="memoria-ram">
                              <option selected>RAM da qualsiasi GB</option>
                              <option value="4GB">da 4GB</option>
                              <option value="8GB">da 8GB</option>
                              <option value="16GB">da 16GB</option>
                              <option value="32GB">da 32GB</option>
                              <option value="64GB">da 64GB</option>
                              <option value="128GB">da 128GB</option>
                            </select>
                          </div>
                          <div class="mb-3 container p-3 g-4 font-questrial">
                            <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                              <span class="material-symbols-outlined align-middle">
                                storage
                              </span>
                              ROM</label>
                            <select class="form-select form-select-lg border-dark" id="memoria-rom">
                              <option selected>ROM da qualsiasi GB</option>
                              <option value="128GB">da 128GB</option>
                              <option value="256GB">da 256GB</option>
                              <option value="512GB">da 512GB</option>
                              <option value="1TB">da 1TB</option>
                              <option value="2TB">da 2TB</option>
                              <option value="4TB">da 4TB</option>
                            </select>
                          </div>
                          <div class="mb-3 container p-3 g-4 font-questrial">
                            <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                              <span class="material-symbols-outlined align-middle">
                                other_admission
                              </span>
                              Altre specifiche</label>
                            <input placeholder="Inserisci preferenze o requisiti" title="Inpit title" id="altre-specifiche" type="text" class="input_field2 form-control font-questrial">
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer w-100">
                        <button type="button" class="btn btn-warning font-questrial fw-bold d-flex mx-auto" data-bs-dismiss="modal" aria-label="Close" onclick="GetDataFromAi()">
                          <span class="material-symbols-outlined align-middle text-dark">
                            bolt
                          </span>
                          GO</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
            </div>
          </div>
          <!-- OUTPUT GPT OPEN AI -->
          <div class="container-fluid vstack" id="assistenzaAIFunzione" style="display:none;">
            <div class="container-fluid">
              <div class="row justify-content-center" id="container-go-riepilogo">

              </div>
              <br>
              <div class="row border-top pt-3 pb-2">
                <h1 class="text-light fs-1 font-questrial fw-bold col">Risposta AI</h1>

              </div>
              <div class="container border border-light p-2 rounded-4 shadow">
                ciao questa e riosposta ai
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col bg-dark" id="serialPreferitiContainer">
        <nav class="navbar border-top bg-warning border-warning rounded">
          <div class="container-fluid">
            <a class="navbar-brand font-questrial fs-3 text-dark d-none d-sm-block fw-bold">
              Preferiti
            </a>
          </div>
        </nav>
        <div class="container-fluid overflow-y-auto bg-dark rounded p-4 mt-4" id="style-1">
          <div id="container-center-no-pre" class="text-center container-fluid m-0 text-light">

          </div>
          <div class="container-fluid vstack gap-4 " style="max-width: 1000px;" id="preferiti-container">


          </div>
        </div>
      </div>
      <?php
      if ($_SESSION['table'] == "utenti_ads") :
      ?>
        <div class="col bg-dark" id="serialAddProductContainer">
          <nav class="navbar border-top bg-warning border-warning rounded">
            <div class="container-fluid">
              <a class="navbar-brand font-questrial fs-3 text-dark d-none d-sm-block fw-bold">
                Aggiungi prodotto
              </a>
              <button type="button" class="btn btn-dark font-questrial text-warning fw-bold d-flex gap-1" data-bs-toggle="modal" data-bs-target="#modalAggiungiProdotto">
                <span class="material-symbols-outlined align-middle">
                  add
                </span>
                AGGIUNGI
              </button>
            </div>
          </nav>
          <div class="container-fluid overflow-y-auto bg-dark rounded p-4 mt-4 " id="style-1">

            <div class="container-fluid vstack gap-4" style="max-width: 840px;">
              <div class="d-flex container-fluid gap-4 flex-column" id="container-added-products">
              </div>

              <div class="modal fade text-dark font-questrial" id="modalAggiungiProdotto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-4 font-questrial fw-bold text-center" id="staticBackdropLabel">
                        Aggiungi prodotto
                      </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="card-body text-dark">
                        <div class="mb-3 container p-3 g-1 font-questrial">
                          <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                            <span class="material-symbols-outlined align-middle">
                              link
                            </span>
                            Link immagini</label>
                          <input placeholder="Incolla qui il link della prima immagine" title="Inpit title" id="url-img-1" type="url" class="input_field2 form-control font-questrial" onchange="ShowImageInDiv('1')">
                          <br>
                          <div class="container" id="container-image-1"></div>
                          <input placeholder="Incolla qui il link della seconda immagine" title="Inpit title" id="url-img-2" type="url" class="input_field2 form-control font-questrial" onchange="ShowImageInDiv('2')">
                          <div class="container" id="container-image-2"></div>
                          <br>
                          <input placeholder="Incolla qui il link della terza immagine" title="Inpit title" id="url-img-3" type="url" class="input_field2 form-control font-questrial" onchange="ShowImageInDiv('3')">
                          <div class="container" id="container-image-3"></div>
                        </div>
                        <hr class="hr-menu">
                        <div class="mb-3 container p-3 g-4 font-questrial">
                          <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                            <span class="material-symbols-outlined align-middle">
                              sports_esports
                            </span>
                            Nominativo</label>
                          <input placeholder="Nominativo prodotto" title="Inpit title" id="nominativo" type="text" class="input_field2 form-control font-questrial">
                        </div>
                        <div class="mb-3 container p-3 g-4 font-questrial">
                          <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                            <span class="material-symbols-outlined align-middle">
                              link
                            </span>
                            Link Dettagli</label>
                          <input placeholder="Link dettagli prodotto" title="Inpit title" id="link-dettagli" type="url" class="input_field2 form-control font-questrial">
                        </div>
                        <div class="mb-3 container p-3 g-1 font-questrial">
                          <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                            <span class="material-symbols-outlined align-middle">
                              view_cozy
                            </span>
                            Categoria</label>
                          <select class="form-select form-select-lg border-dark" id="selectCategoriaComputer-add">
                            <option selected>seleziona categoria</option>
                            <option value="laptop">PC Notebook</option>
                            <option value="desktop">PC Desktop</option>
                            <option value="desktop">PC All-in-one</option>
                            <option value="hardware">Componenti hardware</option>
                          </select>
                        </div>
                        <div class="mb-3 container p-3 g-4 font-questrial">
                          <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                            <span class="material-symbols-outlined align-middle">
                              precision_manufacturing
                            </span>
                            Produttore</label>
                          <select class="form-select form-select-lg border-dark" id="produttore">
                            <option selected>seleziona produttore</option>
                            <option value="ASUS">ASUS</option>
                            <option value="ACER">ACER</option>
                            <option value="AMD">AMD</option>
                            <option value="APPLE">APPLE</option>
                            <option value="DELL">DELL</option>
                            <option value="HP">HP</option>
                            <option value="LENOVO">LENOVO</option>
                            <option value="MICROSOFT">MICROSOFT</option>
                            <option value="NVIDIA">NVIDIA</option>
                            <option value="INTEL">INTEL</option>
                            <option value="MSI">MSI</option>
                            <option value="GIGABYTE">GIGABYTE</option>
                            <option value="ASROCK">ASROCK</option>
                            <option value="SAMSUNG">SAMSUNG</option>
                            <option value="LG">LG</option>
                            <option value="SONY">SONY</option>
                            <option value="TOSHIBA">TOSHIBA</option>
                            <option value="FUJITSU">FUJITSU</option>
                            <option value="BENQ">BENQ</option>
                            <option value="RAZER">RAZER</option>
                            <option value="CORSAIR">CORSAIR</option>
                            <option value="LOGITECH">LOGITECH</option>
                            <option value="STEELSERIES">STEELSERIES</option>
                            <option value="RAIDMAX">RAIDMAX</option>
                          </select>
                        </div>
                        <div class="mb-3 container p-3 g-4 font-questrial">
                          <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                            <span class="material-symbols-outlined align-middle">
                              payments
                            </span>
                            Prezzo (€)</label>
                          <input placeholder="Inserisci prezzo" title="Inpit title" id="prezzo" type="number" class="input_field2 form-control font-questrial">
                        </div>
                        <div class="mb-3 container p-3 g-4 font-questrial">
                          <label for="" class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                            <span class="material-symbols-outlined align-middle">
                              other_admission
                            </span>
                            Descrizione</label>
                          <div class="form-floating">
                            <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Inserisci qui la descrizione</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer w-100">
                      <button type="button" class="btn btn-warning font-questrial fw-bold d-flex mx-auto" data-bs-dismiss="modal" aria-label="Close" id="btn-add-product">
                        AGGIUNGI</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <br><br><br>
            <footer class="footer float-bottom border-top border-secondary">
              <!-- Widgets - Bootstrap Brain Component -->
              <section class="bg-dark py-4 py-md-5 py-xl-8 text-light border-bottom border-secondary font-questrial">
                <div class="container overflow-hidden">
                  <div class="row gy-4 gy-lg-0 justify-content-xl-between">
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                      <div class="widget">
                        <a class="text-light fw-bold fs-5 text-decoration-none" href="">
                          <img src="https://zammad.com/media/pages/product/features/gitlab-integration/693fc93d4d-1698589015/gitlab_integration.png" alt="DIGITALFORGE" width="60" height="60">DIGITALFORGE
                        </a>
                      </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                      <div class="widget">
                        <h4 class="widget-title mb-4 fw-bold">Contattaci</h4>
                        <address class="mb-4"><a class="link-secondary text-decoration-none" href="https://maps.app.goo.gl/rLgtUrixqP7FiUJU7">Via Grottaferrata
                            23,Roma,Italia</a>
                        </address>
                        <p class="mb-1">
                          <a class="link-secondary text-decoration-none">(+39)
                            351-890-2314</a>
                        </p>
                        <p class="mb-0">
                          <a class="link-secondary text-decoration-none">digitalforge@gmail.com</a>
                        </p>
                      </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                      <div class="widget">
                        <h4 class="widget-title mb-4 fw-bold">Scopri di piu'</h4>
                        <ul class="list-unstyled">
                          <li class="mb-2">
                            <a href="" class="link-secondary text-decoration-none">About</a>
                          </li>
                          <li class="mb-2">
                            <a href="" class="link-secondary text-decoration-none">Contact</a>
                          </li>
                          <li class="mb-2">
                            <a href="" class="link-secondary text-decoration-none">Advertise</a>
                          </li>
                          <li class="mb-2">
                            <a href="" class="link-secondary text-decoration-none">Terms of
                              Service</a>
                          </li>
                          <li class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Privacy
                              Policy</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-4">
                      <div class="widget">
                        <h4 class="widget-title mb-4 fw-bold">Nostra Newsletter</h4>
                        <p class="mb-4">Subscribe to our newsletter to get our news & discounts
                          delivered to you.</p>
                        <form action="">
                          <div class="row gy-4">
                            <div class="col-12">
                              <div class="input-group">
                                <span class="input-group-text" id="email-newsletter-addon">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                  </svg>
                                </span>
                                <input type="email" class="form-control" id="email-newsletter" value="" placeholder="Email Address" aria-label="email-newsletter" aria-describedby="email-newsletter-addon" required>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="d-grid">
                                <button class="btn btn-warning" type="submit">Invia</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <div class="bg-dark py-4 py-md-5 py-xl-8 text-light font-questrial">
                <div class="container overflow-hidden">
                  <div class="row gy-4 gy-md-0">
                    <div class="col-xs-12 col-md-7 order-1 order-md-0">
                      <div class="copyright text-center text-md-start">
                        &copy; 2024. All Rights Reserved.
                      </div>
                      <div class="credits text-secondary text-center text-md-start mt-2 fs-7">
                        Built by <a class="link-secondary text-decoration-none">DigitalForgeBrain W.F.</a> with
                        <span class="text-warning">&#9829</span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-5 order-0 order-md-1">
                      <ul class="nav justify-content-center justify-content-md-end">
                        <li class="nav-item">
                          <a class="nav-link link-warning" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link link-warning" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link link-warning" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link link-warning" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
            <br>
          </div>

        </div>
      <?php
      endif
      ?>
      <div class="col bg-dark" id="serialHelpContainer">
        <nav class="navbar border-top bg-warning border-warning rounded">
          <div class="container-fluid">
            <a class="navbar-brand font-questrial fs-3 text-dark d-none d-sm-block fw-bold">
              Aiuto
            </a>
          </div>
        </nav>
        <div class="container-fluid overflow-y-auto bg-dark rounded p-4 mt-4" id="style-1">
          <div class="container-fluid vstack">
            <div class="container-fluid">
              <h1 class="text-light fs-2 font-questrial">Contattaci inviandoci una email a questo
                indirizzo <a href="">digitalforge@gmail.com</a> <br><br>
                Oppure chiamaci al numero (+39) 351-890-2314
              </h1>
              <br>
            </div>

          </div>
          <br><br>
          <footer class="footer float-bottom border-top border-secondary">
            <!-- Widgets - Bootstrap Brain Component -->
            <section class="bg-dark py-4 py-md-5 py-xl-8 text-light border-bottom border-secondary font-questrial">
              <div class="container overflow-hidden">
                <div class="row gy-4 gy-lg-0 justify-content-xl-between">
                  <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                    <div class="widget">
                      <a class="text-light fw-bold fs-5 text-decoration-none" href="">
                        <img src="https://zammad.com/media/pages/product/features/gitlab-integration/693fc93d4d-1698589015/gitlab_integration.png" alt="DIGITALFORGE" width="60" height="60">DIGITALFORGE
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                    <div class="widget">
                      <h4 class="widget-title mb-4 fw-bold">Contattaci</h4>
                      <address class="mb-4"><a class="link-secondary text-decoration-none" href="https://maps.app.goo.gl/rLgtUrixqP7FiUJU7">Via Grottaferrata
                          23,Roma,Italia</a>
                      </address>
                      <p class="mb-1">
                        <a class="link-secondary text-decoration-none">(+39)
                          351-890-2314</a>
                      </p>
                      <p class="mb-0">
                        <a class="link-secondary text-decoration-none">digitalforge@gmail.com</a>
                      </p>
                    </div>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                    <div class="widget">
                      <h4 class="widget-title mb-4 fw-bold">Scopri di piu'</h4>
                      <ul class="list-unstyled">
                        <li class="mb-2">
                          <a href="" class="link-secondary text-decoration-none">About</a>
                        </li>
                        <li class="mb-2">
                          <a href="" class="link-secondary text-decoration-none">Contact</a>
                        </li>
                        <li class="mb-2">
                          <a href="" class="link-secondary text-decoration-none">Advertise</a>
                        </li>
                        <li class="mb-2">
                          <a href="" class="link-secondary text-decoration-none">Terms of
                            Service</a>
                        </li>
                        <li class="mb-0">
                          <a href="" class="link-secondary text-decoration-none">Privacy
                            Policy</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-12 col-lg-3 col-xl-4">
                    <div class="widget">
                      <h4 class="widget-title mb-4 fw-bold">Nostra Newsletter</h4>
                      <p class="mb-4">Subscribe to our newsletter to get our news & discounts
                        delivered to you.</p>
                      <form action="">
                        <div class="row gy-4">
                          <div class="col-12">
                            <div class="input-group">
                              <span class="input-group-text" id="email-newsletter-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                              </span>
                              <input type="email" class="form-control" id="email-newsletter" value="" placeholder="Email Address" aria-label="email-newsletter" aria-describedby="email-newsletter-addon" required>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button class="btn btn-warning" type="submit">Invia</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="bg-dark py-4 py-md-5 py-xl-8 text-light font-questrial">
              <div class="container overflow-hidden">
                <div class="row gy-4 gy-md-0">
                  <div class="col-xs-12 col-md-7 order-1 order-md-0">
                    <div class="copyright text-center text-md-start">
                      &copy; 2024. All Rights Reserved.
                    </div>
                    <div class="credits text-secondary text-center text-md-start mt-2 fs-7">
                      Built by <a class="link-secondary text-decoration-none">DigitalForgeBrain W.F.</a> with
                      <span class="text-warning">&#9829</span>
                    </div>
                  </div>

                  <div class="col-xs-12 col-md-5 order-0 order-md-1">
                    <ul class="nav justify-content-center justify-content-md-end">
                      <li class="nav-item">
                        <a class="nav-link link-warning" href="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                          </svg>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-warning" href="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                          </svg>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-warning" href="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                          </svg>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-warning" href="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <br>
        </div>
      </div>

      <script type="text/javascript">
        $(function() {
          $("#cerca-prodotto-input").autocomplete({
            source: '../php/control.php',
          });
        });
      </script>
</body>




<!-- SCRIPTS JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="js/script.js"></script>



</html>