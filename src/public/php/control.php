<?php
require_once __DIR__ . '/DbControl.php';
$db_control = DBControl::getDB('root', 'forge_db');

if (isset($_POST['email-accesso']) && isset($_POST['password-accesso'])) {
  $email = $_POST['email-accesso'];
  $password = $_POST['password-accesso'];

  $arr_checking = $db_control->checkUser($email, $password);

  echo json_encode($arr_checking);

  die();
}

if (isset($_POST['add'])) {
  $out = $db_control->addOrRemoveProductFromPreferiti($_POST['add'], $_POST['id_product']);
  echo json_encode(["out" => $out]);
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
  if ($out['id_product']) {
    $out['date_time'] = time();
  }
  echo json_encode($out);

  die();
}

if (isset($_GET)) {
  if (isset($_GET['term'])) {
    echo json_encode($db_control->getNominativoAjax($_GET['term']));
    die();
  }
  if(isset($_GET['preferiti'])){
    $preferiti_product = $db_control->getPreferitiByUser();
    echo json_encode($preferiti_product);
    die();
  }
  if ((isset($_GET['allmk']) && $_GET['allmk'] == "true") || isset($_GET['search'])) {
    //controllo filtri
    $out = [];
    $products = [];
    if ($_GET['allmk'] == "true") {
      $products = $db_control->getAllProduct();
    } elseif (isset($_GET['search'])) {
      $products = $db_control->getProductByTerm($_GET);
    }

    $arr_produttori = [
      'ASUS',
      'AMD',
      'APPLE',
      'DELL',
      'HP',
      'LENOVO',
      'MICROSOFT',
      'INTEL',
      'MSI',
      'GIGABYTE',
      'ASROCK',
      'SAMSUNG',
      'LG',
      'SONY',
      'TOSHIBA',
      'FUJITSU',
      'BENQ',
      'CORSAIR',
      'LOGITECH',
      'STEELSERIES',
      'RAIDMAX'
    ];


    foreach ($products as $product) {
      $options_html = "";
      foreach ($arr_produttori as $produttore) {
        if ($produttore == $product['produttore']) {
          $options_html .= "<option value='$produttore' selected>$produttore</option>";
        } else {
          $options_html .= "<option value='$produttore'>$produttore</option>";
        }
      }
      $bookmark_html = <<<user
      <button type='button' class='btn btn-hover-dark-secondary bookmark-btn' id='btn-bookmark-{$product['id_prodotto']}'>
      <span class='material-symbols-outlined align-middle'>bookmark</span>
      </button>
user;

      $inserted_by = <<<ads
        <hr>
        <p class='text-dark text-center font-questrial'>
          Prodotto inserito da
          <span class='badge text-bg-success align-middle'>{$db_control->getNomeCognomeAdsByProduct($product['id_prodotto'])}</span>
        </p>
ads;
      $modify_cancel = <<<ads
      <button type='button' class='btn btn-warning font-questrial fw-bold d-flex gap-1'
      data-bs-toggle='modal' data-bs-target='#modificamodal{$product['id_prodotto']}'>
      <span class='material-symbols-outlined'>
        edit_note
      </span>
      MODIFICA</button>
    <button type='button' class='btn btn-hover-dark-secondary' data-bs-toggle='modal'
      data-bs-target='#cancelproductmodal{$product['id_prodotto']}'>
      <span class='material-symbols-outlined align-middle'>
        cancel
      </span>
    </button>
ads;
      $buy = <<<user
      <button type='button' class='btn btn-warning font-questrial fw-bold'>
      <i class='fa fa-shopping-bag' aria-hidden='true'></i>
      COMPRA</button>
    
user;

      $alert_cancel_modal_modify = <<<ads
  <div class='modal fade font-questrial' id='cancelproductmodal{$product['id_prodotto']}' tabindex='1'
  aria-labelledby='title{$product['id_prodotto']}' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h1 class='modal-title fs-5' id='title{$product['id_prodotto']}'>
          Conferma rimozione
        </h1>
        <button type='button' class='btn-close' data-bs-dismiss='modal'
          aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        Conferma di voler rimuovere questo prodotto con ID : {$product['id_prodotto']} dal market-place
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>ANULLA</button>
        <button type='button' class='btn btn-warning' data-bs-dismiss='modal'>RIMUOVI</button>
      </div>
    </div>
  </div>
</div>
<div class='modal fade font-questrial' id='modificamodal{$product['id_prodotto']}' data-bs-backdrop='static' data-bs-keyboard='false'
                      tabindex='-1' aria-labelledby='staticBackdropLabel{$product['id_prodotto']}' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-scrollable modal-dialog-centered'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h1 class='modal-title fs-5 font-questrial fw-bold w-100 d-flex align-items-center' id='staticBackdropLabel{$product['id_prodotto']}'>
          <span class='material-symbols-outlined'>
            edit_note
          </span>
          Modifica prodotto
        </h1>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        <form class='row g-4 container mx-auto rounded text-dark font-questrial'>
          <div class='col-xl-7'>
            <label for='inputNominativo{$product['id_prodotto']}' class='form-label'>Nominativo</label>
            <input title='Inpit title' name='nominativo-mod' type='text'
              class='input_field2 form-control font-questrial' id='inputNominativo{$product['id_prodotto']}' value='{$product['nominativo']}'
              onchange='ViewSalvaModifiche({$product['id_prodotto']})'>
          </div>
          <div class='col-5'>
            <label for='inputPrezzo{$product['id_prodotto']}' class='form-label'>Prezzo</label>
            <input title='Inpit title' name='prezzo-mod' type='number'
              class='input_field2 form-control font-questrial' id='inputPrezzo{$product['id_prodotto']}' value='1700.30'
              onchange='ViewSalvaModifiche({$product['id_prodotto']})'>
          </div>
          <div class='col-xl-7'>
            <label for='selectCategoria{$product['id_prodotto']}' class='form-label'>Categoria</label>
            <select class='form-select form-select border-dark' name='categoria-pc-mod' id='selectCategoria{$product['id_prodotto']}'
              onchange='ViewSalvaModifiche({$product['id_prodotto']})'>
              <option value='laptop' selected>PC Notebook
              </option>
              <option value='desktop'>PC Desktop</option>
              <option value='desktop'>PC All-in-one</option>
              <option value='hardware'>Componenti hardware
              </option>
            </select>
          </div>
          <div class='col-xl-7'>
            <label for='selectProduttore{$product['id_prodotto']}' class='form-label'>Produttore</label>
            <select class='form-select form-select border-dark' name='produttore-mod' id = 'selectProduttore{$product['id_prodotto']}'
              onchange='ViewSalvaModifiche({$product['id_prodotto']})'>
             {$options_html}
            </select>
          </div>
          <div class='col-xl-12'>
            <label for='textarea{$product['id_prodotto']}' class='form-label'>Descrizione</label>
            <div class='form-floating'>
              <textarea id='textarea{$product['id_prodotto']}' class='form-control ' row='40' cols='300' onchange='{$product['id_prodotto']}'>
              {$product['descrizione']}
                                                                      </textarea>
            </div>
          </div>
          <div class='col-xl-7'>
            <label for='inputLinkDett{$product['id_prodotto']}' class='form-label'>Link
              Dettagli</label>
            <input title='Inpit title' name='link-dett-mod' type='url'
              class='input_field2 form-control font-questrial' id='inputLinkDett{$product['id_prodotto']}'
              value='{$product['link_sito_app']}' onchange='ViewSalvaModifiche({$product['id_prodotto']})'>
          </div>
          <div class='mb-3 container p-3 g-1 font-questrial'>
            <label for=' class='form-label'>
              Link immagini</label>
            <input value='{$product['link_img1']}' title='Inpit title' name='url-img-{$product['id_prodotto']}-1'
              type='url' class='input_field2 form-control font-questrial' onchange='ShowImageInDiv('{$product['id_prodotto']}-1',true,{$product['id_prodotto']})'>
            <br>
            <div class='container' id='container-image-{$product['id_prodotto']}-1'>
              <img src='{$product['link_img1']}' class='card-img-top w-75 mx-auto'
                alt='...'>
            </div>
            <input value='{$product['link_img2']}' title='Inpit title' name='url-img-{$product['id_prodotto']}-2'
              type='url' class='input_field2 form-control font-questrial' onchange='ShowImageInDiv('{$product['id_prodotto']}-2',true ,{$product['id_prodotto']})'>
            <div class='container' id='container-image-{$product['id_prodotto']}-2'>
              <img src='{$product['link_img2']}' class='card-img-top w-75 mx-auto'
                alt='...'>
            </div>
            <br>
            <input value='{$product['link_img3']}' title='Inpit title' name='url-img-{$product['id_prodotto']}-3'
              type='url' class='input_field2 form-control font-questrial' onchange='ShowImageInDiv('{$product['id_prodotto']}-3',true ,{$product['id_prodotto']})'>
            <div class='container' id='container-image-{$product['id_prodotto']}-3'>
              <img src='{$product['link_img3']}' class='card-img-top w-75 mx-auto'
                alt='...'>
            </div>
          </div>
        </form>
      </div>
      <div class='modal-footer' id='SaveModificheSerial{$product['id_prodotto']}' style='display: none;'>
        <button type='button'
          class='btn btn-warning font-questrial mx-auto fw-bold d-flex justify-content-center w-50 g-3'
          data-bs-dismiss='modal'>
          <span class='material-symbols-outlined'>
            flag
          </span>
          SALVA MODIFICHE
        </button>
      </div>
    </div>
  </div>
</div>

ads;

      if ($_SESSION['table'] == "utenti") {
        $inserted_by = "";
        $modify_cancel = "";
        $alert_cancel_modal_modify = "";
      } elseif ($_SESSION['table'] == "utenti_ads") {
        $buy = "";
        $bookmark_html = "";
      }

      $product_hmtl = <<<html
  <div class='col'>  
  <div class='card'>
      <span
        class='position-absolute top-0 font-questrial fw-bold fs-6 start-50 translate-middle badge text-dark rounded-pill bg-warning'>
        NUOVO
      </span>
      <div class="d-flex h-75">

      <img src='{$product['link_img1']}' class='card-img-top w-75 mx-auto'
      alt='...'>
      </div>
      
      <div class='card-body bottom'>
        <h6 class='text-center'><small class='text-body-secondary font-questrial'>{$product['categoria']}</small>
        </h6>
        <h5 class='card-title fw-bold fs-4 text-center font-questrial'>{$product['nominativo']}</h5>
        <h6 class='font-questrial fw-bold text-warning-secondary text-center fs-5'>$ {$product['prezzo']}</h6>
        <hr>
        <div class='container-fluid d-flex justify-content-center gap-5'>
          <button type='button' class='btn btn-hover-dark-secondary' data-bs-toggle='modal'
            data-bs-target='#modale-prodotto-{$product['id_prodotto']}' style='border-radius: 100%;'>
            <span class='material-symbols-outlined align-middle'>
              visibility
            </span>
          </button>
          {$bookmark_html}

          <div class='toast-container position-fixed bottom-0 end-0 p-3 font-questrial'>
            <div class='row'>
              <div class='col-auto'>
                <div class='toast toast-aggiunto p-1' role='alert' aria-live='assertive' aria-atomic='true'>
                </div>
              </div>
            </div>
          </div>
          

          <!-- Modal -->
          <div class='modal fade' id='modale-prodotto-{$product['id_prodotto']}' data-bs-backdrop='static' data-bs-keyboard='false'
            tabindex='-1' aria-labelledby='title-{$product['id_prodotto']}' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-scrollable modal-dialog-centered'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <h1 class='modal-title fs-5 font-questrial fw-bold' id='title-{$product['id_prodotto']}'>{$product['nominativo']}
                    Air <span class='badge text-bg-warning text-dark'>
                    NUOVO
                    </span></h1>

                  <button type='button' class='btn-close' data-bs-dismiss='modal'
                    aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                  <div id='carouselExampleDark-prodotto-{$product['id_prodotto']}' class='carousel carousel-dark slide'>
                    <div class='carousel-indicators'>
                      <button type='button' data-bs-target='#carouselExampleDark-prodotto-{$product['id_prodotto']}' data-bs-slide-to='0'
                        class='active' aria-current='true' aria-label='Slide 1'></button>
                      <button type='button' data-bs-target='#carouselExampleDark-prodotto-{$product['id_prodotto']}' data-bs-slide-to='1'
                        aria-label='Slide 2'></button>
                      <button type='button' data-bs-target='#carouselExampleDark-prodotto-{$product['id_prodotto']}' data-bs-slide-to='2'
                        aria-label='Slide 3'></button>
                    </div>
                    <div class='carousel-inner'>
                      <div class='carousel-item active' data-bs-interval='1000'>
                        <img src='{$product['link_img1']}'
                          class='d-block img-carousel' alt='...'>
                      </div>
                      <div class='carousel-item' data-bs-interval='1000'>
                        <img src='{$product['link_img2']}'
                          class='d-block img-carousel' alt='...'>

                      </div>
                      <div class='carousel-item'>
                        <img src='{$product['link_img3']}'
                          class='d-block img-carousel' alt='...'>
                      </div>
                    </div>
                    <br>
                    <button class='carousel-control-prev' type='button'
                      data-bs-target='#carouselExampleDark-prodotto-{$product['id_prodotto']}' data-bs-slide='prev'>
                      <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    </button>
                    <button class='carousel-control-next' type='button'
                      data-bs-target='#carouselExampleDark-prodotto-{$product['id_prodotto']}' data-bs-slide='next'>
                      <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    </button>
                  </div>
                  <div class='card-body'>
                    <h6 class='text-center'><small class='text-body-secondary font-questrial'>{$product['categoria']}</small>
                    </h6>
                    <h5 class='card-title fw-bold fs-4 text-center font-questrial'>{$product['nominativo']}</h5>
                    <h6 class='font-questrial fw-bold text-warning-secondary text-center fs-5'>$ {$product['prezzo']}
                    </h6>

                    <hr>
                    <p class='fw-bold fs-5 font-questrial text-center'>Descrizione</p>

                    <ul class='list-group font-questrial shadow' id='descrizione-{$product['id_prodotto']}'>
                     
                    </ul>

                  </div>
                  <nav class='navbar'>
                    <div class='container-fluid d-flex w-100 p-1'>
                      <a class='navbar-brand img-logo-source p-2 rounded' href='{$product['link_sito_app']}'>
                        <img
                          src='https://w7.pngwing.com/pngs/121/286/png-transparent-apple-logo-computer-icons-apple-logo-company-heart-logo-thumbnail.png'
                          alt='Logo' width='20' height='20'
                          class='d-inline-block align-text-center rounded mb-1'>
                        Apple
                      </a>
                      <!--mettere qui link dettagli-->
                      <button type='button' class='btn img-logo-source font-questrial'>
                        <i class='fa fa-link' aria-hidden='true'></i>
                        Più dettagli
                      </button>
                    </div>
                  </nav>
                  <?php
                  {$inserted_by}
                </div>

                <div class='modal-footer w-100'>
                 {$modify_cancel}
                  {$buy}
                </div>
              </div>
            </div>
          </div>
          {$alert_cancel_modal_modify}
        </div>
      </div>
    </div>
  </div>
html;
      $arr['product_html'] = $product_hmtl;
      $arr['descrizione_product'] = $product['descrizione'];
      $arr['produttore_product'] = $product['produttore'];
      $arr['id_product'] = $product['id_prodotto'];
      $arr['table'] = $_SESSION['table'];
      $arr['is_preferito_user'] = $db_control->isPreferitoById($arr['id_product']);
      array_push($out, $arr);
    }

    echo json_encode($out);
    die();
  } else if ($_GET['allpro'] == "true") {

    $products = $db_control->getProductAddedByAds();

    echo json_encode($products);
  }
}
