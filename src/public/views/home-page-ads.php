<?php
require_once '../public/php/DbControl.php';
$db_control = DBControl::getDB("root", "forge_db");
?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon"
    href="https://zammad.com/media/pages/product/features/gitlab-integration/693fc93d4d-1698589015/gitlab_integration.png"
    type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/footers/footer-2/assets/css/footer-2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css"
    integrity="sha512-8RxmFOVaKQe/xtg6lbscU9DU0IRhURWEuiI0tXevv+lXbAHfkpamD4VKFQRto9WgfOJDwOZ74c/s9Yesv3VvIQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style.css">
    <title>DigitalForge</title>
</head>

<body class="bg-dark overflow-hidden">
    <nav class="navbar fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light fs-3 babapro-font" href="#">
                <img src="https://zammad.com/media/pages/product/features/gitlab-integration/693fc93d4d-1698589015/gitlab_integration.png"
                    alt="Logo" width="40" height="40" class="d-inline-block align-text-top"">
        DIGITALFORGE
      </a>
      <button class=" btn btn-trasparent text-light d-xl-none d-md-none" id="s6003" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="material-symbols-outlined text-warning fs-1 align-middle">
                    menu
                </span>
                </button>

                <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
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
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3"
                            data-bs-dismiss="offcanvas" onclick="HandleAndView('li-mk-ID','serialMARKET-PLACE')">
                            <span class="material-symbols-outlined text-warning align-middle">
                                storefront
                            </span>
                            Market-place
                        </a>
                        <br>
                        <br>
                        <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3"
                        data-bs-dismiss="offcanvas" onclick="HandleAndView('li-add-ID','serialAddProductContainer')">
                        <span class="material-symbols-outlined text-warning align-middle">
                            add_business
                        </span>
                        Aggiungi prodotto
                        </a>
                        <br>
                        <hr class=text-bg-light">
                        <br>
                        <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3" href=""
                            data-bs-toggle="modal" data-bs-target="#modale-visualizza-profilo">
                            <span class="material-symbols-outlined text-warning align-middle">
                                visibility
                            </span>
                            Visualizza profilo
                        </a>
                        <br>
                        <br>
                        <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3"
                            data-bs-dismiss="offcanvas" onclick="HandleAndView('li-aiuto-ID','serialHelpContainer')">
                            <span class="material-symbols-outlined text-warning align-middle">
                                help
                            </span>
                            Aiuto
                        </a>
                        <br>
                        <br>
                        <a class="navbar-brand font-questrial fs-5 text-light align-middle g-3" href="index.html">
                            <span class="material-symbols-outlined text-warning align-middle">
                                logout
                            </span>
                            Esci
                        </a>

                    </div>
                </div>
                <div class="d-grid gap-2 d-md-block d-none shadow">

                    <div class="btn-group">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            data-bs-display="static" aria-expanded="false">
                            <span class="material-symbols-outlined text-warning align-middle" style="font-size: 45px;">
                                account_circle
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end bg-dark">
                            <li>
                                <h4 class="dropdown-header text-warning fs-5 font-questrial">Nome Cognome</h4>
                            </li>
                            <hr class="hr-menu">
                            <li><a class="dropdown-item text-light font-questrial p-2 pointer" href=""
                                    data-bs-toggle="modal" data-bs-target="#modale-visualizza-profilo">
                                    <span class="material-symbols-outlined text-warning align-middle">
                                        visibility
                                    </span>
                                    Visualizza profilo</a></li>
                            <li><a class="dropdown-item text-light font-questrial p-2" href="index.html">
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
    <div class="modal fade" id="modale-visualizza-profilo" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 font-questrial fw-bold w-100 d-flex align-items-center"
                        id="staticBackdropLabel">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        Dettagli profilo
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="DiscardAll()"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-4 container mx-auto rounded text-dark font-questrial">
                        <div class="col-xl-6">
                            <label for="inputNome" class="form-label">Nome</label>
                            <input title="Inpit title" name="nome-profilo" type="text"
                                class="input_field2 form-control font-questrial" id="inputNome" value="Jhon"
                                onchange="ViewSalvaModifiche('1')">
                        </div>
                        <div class="col-xl-6">
                            <label for="inputCognome" class="form-label">Cognome</label>
                            <input title="Inpit title" name="cognome-profilo" type="text"
                                class="input_field2 form-control font-questrial" id="inputCognome" value="Bobby"
                                onchange="ViewSalvaModifiche('1')">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input title="Inpit title" name="email-profilo" type="email"
                                class="input_field2 form-control font-questrial" id="inputEmail"
                                value="jhonbobby@gmail.com" onchange="ViewSalvaModifiche('1')">
                        </div>
                        <div class="col-xl-6">
                            <label for="password_field" class="form-label">Password</label>
                            <input title="Inpit title" name="password-profilo" type="password"
                                class="input_field2 form-control font-questrial gap-3" id="password_field"
                                onchange="CheckPass(true)" value="KoalaFree@2005">
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
                            <input placeholder="Conferma la password scelta" title="Inpit title" type="password"
                                class="input_field2 form-control font-questrial" id="password_field2"
                                onchange="CheckConfPass()" disabled>
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

                    </form>
                </div>
                <div class="modal-footer" id="SaveModificheSerial1" style="display: none;">
                    <button type="button"
                        class="btn btn-warning font-questrial mx-auto fw-bold d-flex justify-content-center w-50 g-3"
                        data-bs-dismiss="modal">
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
    <div class="modal fade font-questrial" id="modificamodal" tabindex="1" aria-labelledby="modificamodal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 font-questrial fw-bold w-100 d-flex align-items-center"
                        id="staticBackdropLabel">
                        <span class="material-symbols-outlined">
                            edit_note
                        </span>
                        Modifica prodotto
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-4 container mx-auto rounded text-dark font-questrial">
                        <div class="col-xl-7">
                            <label for="inputNominativo" class="form-label">Nominativo</label>
                            <input title="Inpit title" name="nominativo-mod" type="text"
                                class="input_field2 form-control font-questrial" id="inputNominativo"
                                value="Apple MacBook Air Test 1" onchange="ViewSalvaModifiche('2')">
                        </div>
                        <div class="col-5">
                            <label for="inputPrezzo" class="form-label">Prezzo</label>
                            <input title="Inpit title" name="prezzo-mod" type="number"
                                class="input_field2 form-control font-questrial" id="inputPrezzo" value="1700.30"
                                onchange="ViewSalvaModifiche('2')">
                        </div>
                        <div class="col-xl-7">
                            <label for="selectCategoria" class="form-label">Categoria</label>
                            <select class="form-select form-select border-dark" name="categoria-pc-mod"
                                id="selectCategoria" onchange="ViewSalvaModifiche('2')">
                                <option value="laptop" selected>PC Notebook
                                </option>
                                <option value="desktop">PC Desktop</option>
                                <option value="desktop">PC All-in-one</option>
                                <option value="hardware">Componenti hardware
                                </option>
                            </select>
                        </div>
                        <div class="col-xl-7">
                            <label for="selectCategoria" class="form-label">Produttore</label>
                            <select class="form-select form-select border-dark" name="produttore-mod"
                                onchange="ViewSalvaModifiche('2')">
                                <option value="ASUS">ASUS</option>
                                <option value="ACER">ACER</option>
                                <option value="AMD">AMD</option>
                                <option value="APPLE" selected>APPLE</option>
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
                        <div class="col-xl-12">
                            <label for="selectCategoria" class="form-label">Descrizione</label>
                            <div class="form-floating">
                                <textarea class="form-control " row="40" cols="300" onchange="ViewSalvaModifiche('2')">
Chip Apple M3 con CPU 8‑core
GPU 8‑core e Neural Engine 16‑core
8GB di memoria unificata
Unità SSD da 256GB
 Display Liquid Retina da 13,6" con True Tone²
Videocamera FaceTime HD a 1080p
Porta MagSafe 3 per la ricarica
Due porte Thunderbolt - USB 4
                                                                        </textarea>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <label for="inputLinkDett" class="form-label">Link
                                Dettagli</label>
                            <input title="Inpit title" name="link-dett-mod" type="url"
                                class="input_field2 form-control font-questrial" id="inputLinkDett"
                                value="https://themewagon.github.io/electro/img/product01.png"
                                onchange="ViewSalvaModifiche('2')">
                        </div>
                        <div class="mb-3 container p-3 g-1 font-questrial">
                            <label for="" class="form-label">
                                Link immagini</label>
                            <input value="https://themewagon.github.io/electro/img/product01.png" title="Inpit title"
                                name="url-img-4" type="url" class="input_field2 form-control font-questrial"
                                onchange="ShowImageInDiv('4',true,'2')">
                            <br>
                            <div class="container" id="container-image-4">
                                <img src='https://themewagon.github.io/electro/img/product01.png'
                                    class='card-img-top w-75 mx-auto' alt='...'>
                            </div>
                            <input value="https://themewagon.github.io/electro/img/product01.png" title="Inpit title"
                                name="url-img-5" type="url" class="input_field2 form-control font-questrial"
                                onchange="ShowImageInDiv('5',true ,'2')">
                            <div class="container" id="container-image-5">
                                <img src='https://themewagon.github.io/electro/img/product01.png'
                                    class='card-img-top w-75 mx-auto' alt='...'>
                            </div>
                            <br>
                            <input value="https://themewagon.github.io/electro/img/product01.png" title="Inpit title"
                                name="url-img-6" type="url" class="input_field2 form-control font-questrial"
                                onchange="ShowImageInDiv('6',true,'2')">
                            <div class="container" id="container-image-6">
                                <img src='https://themewagon.github.io/electro/img/product01.png'
                                    class='card-img-top w-75 mx-auto' alt='...'>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer" id="SaveModificheSerial2" style="display: none;">
                    <button type="button"
                        class="btn btn-warning font-questrial mx-auto fw-bold d-flex justify-content-center w-50 g-3"
                        data-bs-dismiss="modal">
                        <span class="material-symbols-outlined">
                            flag
                        </span>
                        SALVA MODIFICHE
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-xl-2 px-sm-2 px-0 d-none d-sm-none d-xl-block rounded"
                style="background-color: #3e44496d;">
                <div class="d-flex flex-column px-2 pt-2 text-white" style="height: auto !important;">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0" id="menu" style="width: 110% !important;">
                        <li class="nav-item w-100 p-3" id="li-mk-ID"
                            onclick="HandleAndView('li-mk-ID','serialMARKET-PLACE')">
                            <a class="navbar-brand font-questrial">
                                <span class="material-symbols-outlined text-warning align-middle">
                                    store
                                </span>
                                Market-place
                            </a>
                        </li>
                        <li class="nav-item w-100 p-3" id="li-add-ID"
                            onclick="HandleAndView('li-add-ID','serialAddProductContainer')">
                            <a class="navbar-brand font-questrial">
                                <span class="material-symbols-outlined text-warning align-middle">
                                    add_business
                                </span>
                                Aggiungi prodotto
                        </li>
                        <br>
                        <hr class="hr-menu">
                        <br>
                        <li class="nav-item w-100 p-3" id="li-aiuto-ID"
                            onclick="HandleAndView('li-aiuto-ID','serialHelpContainer')">
                            <a class="navbar-brand font-questrial">
                                <span class="material-symbols-outlined text-warning align-middle">
                                    help
                                </span>
                                Aiuto
                            </a>
                        </li>
                </div>
            </div>
            <div class="col bg-dark" id="serialMARKET-PLACE">
                <nav class="navbar border-top bg-warning border-warning rounded">
                    <div class="container-fluid">
                        <a
                            class="navbar-brand font-questrial fs-3 text-dark d-none d-sm-block fw-bold ">Market-place</a>
                        <form class="d-flex" role="search" style="width: auto; min-width: 40% !important;">
                            <input
                                class="form-control form-control-sm me-2 fw-bold fs-6 w-100 outline-none font-questrial"
                                type="search" placeholder="Cerca prodotto" aria-label="Search" name="ricerca_user">
                            <button class="btn btn-dark font-questrial" type="submit">
                                <span class="material-symbols-outlined text-warning align-middle">
                                    search
                                </span>
                            </button>
                        </form>
                        <button class="btn btn-dark text-light d-flex justify-content-center" id="s6003" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#adjusterSerial" aria-controls="offcanvasRight">
                            <span class="material-symbols-outlined text-warning align-middle">
                                tune
                            </span>
                        </button>

                        <div class="offcanvas offcanvas-start bg-dark p-1" tabindex="-1" id="adjusterSerial"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <div class="w-auto p-2">
                                    <span class="material-symbols-outlined text-warning align-middle">
                                        tune
                                    </span>
                                </div>
                                <h5 class="offcanvas-title font-questrial text-warning fs-4" id="offcanvasRightLabel">
                                    Filtri ricerca
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="close"></button>
                            </div>
                            <div class="offcanvas-body" id="style-1">
                                <div class="container p-4 g-4 font-questrial">
                                    <label for=""
                                        class="form-label text-light font-questrial fs-4 fw-bold">Categoria</label>
                                    <select title="select-title" class="form-select form-select-lg border-dark"
                                        name="categoria-pc" id="selectCategoriaComputer"
                                        onchange="CheckCategoriaComputer()">
                                        <option selected>qualsiasi categoria</option>
                                        <option value="laptop">PC Notebook</option>
                                        <option value="desktop">PC Desktop</option>
                                        <option value="desktop">PC All-in-one</option>
                                        <option value="hardware">Componenti hardware</option>
                                    </select>
                                </div>
                                <hr class="hr-menu">
                                <div class="mb-3 container p-4 g-4 font-questrial">
                                    <label for=""
                                        class="form-label text-light font-questrial fs-4 fw-bold">Tipologia</label>
                                    <select title="select-title" class="form-select form-select-lg border-dark"
                                        name="tipologia-pc" id="selectTipologiaComputer">
                                        <option selected>qualsiasi tipologia</option>
                                        <option value="Gaming">Gaming</option>
                                        <option value="Lavoro">Lavoro</option>
                                    </select>
                                </div>
                                <hr class="hr-menu">
                                <div class="mb-3 container p-4 g-4 font-questrial">
                                    <label for=""
                                        class="form-label text-light font-questrial fs-4 fw-bold">Produttore</label>
                                    <select title="select-title" class="form-select form-select-lg border-dark"
                                        name="produttore">
                                        <option selected>qualsiasi produttore</option>
                                        <option value="">ASUS</option>
                                        <option value="">ACER</option>
                                        <option value="">AMD</option>
                                        <option value="">APPLE</option>
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
                                    <label for="" class="form-label text-light font-questrial fs-4 fw-bold">Prezzo
                                        (€)</label>
                                    <select title="select-title" class="form-select form-select-lg border-dark"
                                        name="prezzo-min-pc">
                                        <option selected>Da qualsiasi prezzo</option>
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
                                    <select title="select-title" class="form-select form-select-lg border-dark"
                                        name="prezzo-max-pc">
                                        <option selected>A qualsiasi prezzo</option>
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
                                    <button type="button" class="btn btn-warning font-questrial fw-bold w-75">
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
                        <div class="container-fluid">
                            <h1 class="text-light fs-2 font-questrial">I piu venduti negli store online</h1>
                            <br>
                        </div>
                        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1 g-4 d-flex" id="marketPlaceSerial">
                            <div class="col">
                                <div class="card">
                                    <span
                                        class="position-absolute top-0 font-questrial fw-bold fs-6 start-50 translate-middle badge text-dark rounded-pill bg-warning">
                                        NUOVO
                                    </span>
                                    <img src="https://themewagon.github.io/electro/img/product03.png"
                                        class="card-img-top w-75 mx-auto" alt="...">
                                    <div class="card-body">
                                        <h6 class="text-center"><small
                                                class="text-body-secondary font-questrial">COMPUTER LAPTOP</small>
                                        </h6>
                                        <h5 class="card-title fw-bold fs-4 text-center font-questrial">Apple MacBook Air
                                        </h5>
                                        <h6 class="font-questrial fw-bold text-warning-secondary text-center fs-5">
                                            $1700.30</h6>
                                        <hr>
                                        <div class="container-fluid d-flex justify-content-center gap-5">
                                            <button type="button" class="btn btn-hover-dark-secondary"
                                                data-bs-toggle="modal" data-bs-target="#modale-prodotto-1"
                                                style="border-radius: 100%;">
                                                <span class="material-symbols-outlined align-middle">
                                                    visibility
                                                </span>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="modale-prodotto-1" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel2" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5 font-questrial fw-bold"
                                                                id="staticBackdropLabel2">Apple MacBook
                                                                Air <span
                                                                    class="badge text-bg-warning text-dark">NUOVO</span>
                                                            </h1>

                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div id="carouselExampleDark2"
                                                                class="carousel carousel-dark slide">
                                                                <div class="carousel-indicators">
                                                                    <button type="button"
                                                                        data-bs-target="#carouselExampleDark2"
                                                                        data-bs-slide-to="0" class="active"
                                                                        aria-current="true"
                                                                        aria-label="Slide 1"></button>
                                                                    <button type="button"
                                                                        data-bs-target="#carouselExampleDark2"
                                                                        data-bs-slide-to="1"
                                                                        aria-label="Slide 2"></button>
                                                                    <button type="button"
                                                                        data-bs-target="#carouselExampleDark2"
                                                                        data-bs-slide-to="2"
                                                                        aria-label="Slide 3"></button>
                                                                </div>
                                                                <div class="carousel-inner">
                                                                    <div class="carousel-item active"
                                                                        data-bs-interval="1000">
                                                                        <img src="https://themewagon.github.io/electro/img/product03.png"
                                                                            class="d-block img-carousel" alt="...">
                                                                    </div>
                                                                    <div class="carousel-item" data-bs-interval="1000">
                                                                        <img src="https://themewagon.github.io/electro/img/product03.png"
                                                                            class="d-block img-carousel" alt="...">

                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="https://themewagon.github.io/electro/img/product03.png"
                                                                            class="d-block img-carousel" alt="...">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <button class="carousel-control-prev" type="button"
                                                                    data-bs-target="#carouselExampleDark2"
                                                                    data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon"
                                                                        aria-hidden="true"></span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button"
                                                                    data-bs-target="#carouselExampleDark2"
                                                                    data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon"
                                                                        aria-hidden="true"></span>
                                                                </button>
                                                            </div>
                                                            <div class="card-body">
                                                                <h6 class="text-center"><small
                                                                        class="text-body-secondary font-questrial">COMPUTER
                                                                        LAPTOP</small>
                                                                </h6>
                                                                <h5
                                                                    class="card-title fw-bold fs-4 text-center font-questrial">
                                                                    Apple MacBook Air</h5>
                                                                <h6
                                                                    class="font-questrial fw-bold text-warning-secondary text-center fs-5">
                                                                    $1700.30</h6>

                                                                <hr>
                                                                <p class="fw-bold fs-5 font-questrial text-center">
                                                                    Descrizione</p>

                                                                <ul class="list-group font-questrial shadow">
                                                                    <li class="list-group-item">Chip Apple M3 con CPU
                                                                        8‑core</li>
                                                                    <li class="list-group-item">GPU 8‑core e Neural
                                                                        Engine 16‑core</li>
                                                                    <li class="list-group-item">8GB di memoria unificata
                                                                    </li>
                                                                    <li class="list-group-item">Unità SSD da 256GB</li>
                                                                    <li class="list-group-item">Display Liquid Retina da
                                                                        13,6" con True Tone²</li>
                                                                    <li class="list-group-item">Videocamera FaceTime HD
                                                                        a 1080p</li>
                                                                    <li class="list-group-item">Porta MagSafe 3 per la
                                                                        ricarica</li>
                                                                    <li class="list-group-item">Due porte Thunderbolt -
                                                                        USB 4</li>
                                                                </ul>

                                                            </div>
                                                            <nav class="navbar">
                                                                <div class="container-fluid d-flex w-100 p-1">
                                                                    <a class="navbar-brand img-logo-source p-2 rounded"
                                                                        href="https://www.apple.com/it/">
                                                                        <img src="https://w7.pngwing.com/pngs/121/286/png-transparent-apple-logo-computer-icons-apple-logo-company-heart-logo-thumbnail.png"
                                                                            alt="Logo" width="20" height="20"
                                                                            class="d-inline-block align-text-center rounded mb-1">
                                                                        Apple
                                                                    </a>
                                                                    <button type="button"
                                                                        class="btn img-logo-source font-questrial">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                        Più dettagli
                                                                    </button>
                                                                </div>
                                                            </nav>
                                                        </div>
                                                        <div class="modal-footer w-100">
                                                            <button type="button"
                                                                class="btn btn-warning font-questrial fw-bold d-flex gap-1"
                                                                data-bs-toggle="modal" data-bs-target="#modificamodal">
                                                                <span class="material-symbols-outlined">
                                                                    edit_note
                                                                </span>
                                                                MODIFICA</button>
                                                            <button type="button" class="btn btn-hover-dark-secondary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#cancelproductmodal">
                                                                <span class="material-symbols-outlined align-middle">
                                                                    cancel
                                                                </span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade font-questrial" id="cancelproductmodal" tabindex="1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                Conferma rimozione
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Conferma di voler rimuovere questo prodotto dal market-place
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">ANULLA</button>
                                                            <button type="button" class="btn btn-warning"
                                                                data-bs-dismiss="modal">RIMUOVI</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <span
                                        class="position-absolute top-0 font-questrial fw-bold fs-6 start-50 translate-middle badge text-dark rounded-pill bg-warning">
                                        NUOVO
                                    </span>
                                    <img src="https://themewagon.github.io/electro/img/product01.png"
                                        class="card-img-top w-75 mx-auto" alt="...">
                                    <div class="card-body">
                                        <h6 class="text-center"><small
                                                class="text-body-secondary font-questrial">COMPUTER LAPTOP</small>
                                        </h6>
                                        <h5 class="card-title fw-bold fs-4 text-center font-questrial">Apple MacBook Pro
                                            13</h5>
                                        <h6 class="font-questrial fw-bold text-warning-secondary text-center fs-5">
                                            $1456.20</h6>
                                        <hr>
                                        <div class="container-fluid d-flex justify-content-center gap-5">
                                            <button type="button" class="btn btn-hover-dark-secondary"
                                                style="border-radius: 100%;">
                                                <span class="material-symbols-outlined align-middle">
                                                    visibility
                                                </span>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="https://themewagon.github.io/electro/img/product06.png"
                                        class="card-img-top w-75 mx-auto" alt="...">
                                    <div class="card-body">
                                        <h6 class="text-center"><small
                                                class="text-body-secondary font-questrial">COMPUTER LAPTOP</small>
                                        </h6>
                                        <h5 class="card-title fw-bold fs-4 text-center font-questrial">Acer Aspire 3
                                            Notebook</h5>
                                        <h6 class="font-questrial fw-bold text-warning-secondary text-center fs-5">
                                            $750.00</h6>
                                        <hr>
                                        <div class="container-fluid d-flex justify-content-center gap-5">
                                            <button type="button" class="btn btn-hover-dark-secondary"
                                                style="border-radius: 100%;">
                                                <span class="material-symbols-outlined align-middle">
                                                    visibility
                                                </span>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="shadow-lg card">
                                    <img src="https://themewagon.github.io/electro/img/product08.png"
                                        class="card-img-top w-75 mx-auto" alt="...">
                                    <div class="card-body">
                                        <h6 class="text-center"><small
                                                class="text-body-secondary font-questrial">COMPUTER</small></h6>
                                        <h5 class="card-title fw-bold fs-4 text-center font-questrial">Asus Notebook
                                            Gaming</h5>
                                        <h6 class="font-questrial fw-bold text-warning-secondary text-center fs-5">
                                            $800.00</h6>
                                        <hr>
                                        <div class="container-fluid d-flex justify-content-center gap-5">
                                            <button type="button" class="btn btn-hover-dark-secondary"
                                                style="border-radius: 100%;">
                                                <span class="material-symbols-outlined align-middle">
                                                    visibility
                                                </span>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="https://themewagon.github.io/electro/img/product01.png"
                                        class="card-img-top w-75 mx-auto" alt="...">
                                    <div class="card-body">
                                        <h6 class="text-center"><small
                                                class="text-body-secondary font-questrial">COMPUTER LAPTOP</small>
                                        </h6>
                                        <h5 class="card-title fw-bold fs-4 text-center font-questrial">Apple MacBook Air
                                        </h5>
                                        <h6 class="font-questrial fw-bold text-warning-secondary text-center fs-5">
                                            $2300.00</h6>
                                        <hr>
                                        <div class="container-fluid d-flex justify-content-center gap-5">
                                            <button type="button" class="btn btn-hover-dark-secondary"
                                                style="border-radius: 100%;">
                                                <span class="material-symbols-outlined align-middle">
                                                    visibility
                                                </span>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <footer class="footer float-bottom border-top border-secondary">
                        <!-- Widgets - Bootstrap Brain Component -->
                        <section
                            class="bg-dark py-4 py-md-5 py-xl-8 text-light border-bottom border-secondary font-questrial">
                            <div class="container overflow-hidden">
                                <div class="row gy-4 gy-lg-0 justify-content-xl-between">
                                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                        <div class="widget">
                                            <a class="text-light fw-bold fs-5 text-decoration-none" href="#!">
                                                <img src="https://zammad.com/media/pages/product/features/gitlab-integration/693fc93d4d-1698589015/gitlab_integration.png"
                                                    alt="DIGITALFORGE" width="60" height="60">DIGITALFORGE
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                                        <div class="widget">
                                            <h4 class="widget-title mb-4 fw-bold">Contattaci</h4>
                                            <address class="mb-4"><a class="link-secondary text-decoration-none"
                                                    href="https://maps.app.goo.gl/rLgtUrixqP7FiUJU7">Via Grottaferrata
                                                    23,Roma,Italia</a>
                                            </address>
                                            <p class="mb-1">
                                                <a class="link-secondary text-decoration-none" href="#!">(+39)
                                                    351-890-2314</a>
                                            </p>
                                            <p class="mb-0">
                                                <a class="link-secondary text-decoration-none"
                                                    href="#">digitalforge@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                        <div class="widget">
                                            <h4 class="widget-title mb-4 fw-bold">Scopri di piu'</h4>
                                            <ul class="list-unstyled">
                                                <li class="mb-2">
                                                    <a href="#!" class="link-secondary text-decoration-none">About</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="#!" class="link-secondary text-decoration-none">Contact</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="#!"
                                                        class="link-secondary text-decoration-none">Advertise</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="#!" class="link-secondary text-decoration-none">Terms of
                                                        Service</a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="#!" class="link-secondary text-decoration-none">Privacy
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
                                            <form action="#!">
                                                <div class="row gy-4">
                                                    <div class="col-12">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="email-newsletter-addon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                                </svg>
                                                            </span>
                                                            <input type="email" class="form-control"
                                                                id="email-newsletter" value=""
                                                                placeholder="Email Address"
                                                                aria-label="email-newsletter"
                                                                aria-describedby="email-newsletter-addon" required>
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
                                            Built by <a href="#"
                                                class="link-secondary text-decoration-none">DigitalForgeBrain W.F.</a> with
                                            <span class="text-warning">&#9829</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-5 order-0 order-md-1">
                                        <ul class="nav justify-content-center justify-content-md-end">
                                            <li class="nav-item">
                                                <a class="nav-link link-warning" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-warning" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-warning" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-warning" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
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
            <div class="col bg-dark" id="serialAddProductContainer">
                <nav class="navbar border-top bg-warning border-warning rounded">
                    <div class="container-fluid">
                        <a class="navbar-brand font-questrial fs-3 text-dark d-none d-sm-block fw-bold">
                            Aggiungi prodotto
                        </a>
                        <button type="button" class="btn btn-dark font-questrial text-warning fw-bold d-flex gap-1"
                            data-bs-toggle="modal" data-bs-target="#modalAggiungiProdotto">
                            <span class="material-symbols-outlined align-middle">
                                add
                            </span>
                            AGGIUNGI
                        </button>
                    </div>
                </nav>
                <div class="container-fluid overflow-y-auto bg-dark rounded p-4 mt-4" id="style-1">
                    <div class="container-fluid vstack gap-4" style="max-width: 840px;">
                        <div class="card mb-3">
                            <span
                                class="position-absolute top-0 font-questrial fw-bold fs-6 start-50 translate-middle badge text-dark rounded-pill bg-warning">
                                AGGIUNTO 3 GIORNI FA
                            </span>
                            <div class="row g-0">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <img src="https://themewagon.github.io/electro/img/product03.png"
                                        class="img-fluid mx-auto img-preferiti" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="text-center"><small
                                                class="text-body-secondary font-questrial">COMPUTER LAPTOP</small>
                                        </h6>
                                        <h5 class="card-title fw-bold fs-4 text-center font-questrial">Apple MacBook Air
                                            Test 1</h5>
                                        <h6 class="font-questrial fw-bold text-warning-secondary text-center fs-5">
                                            $1700.30</h6>
                                        <hr>
                                        <div class="container-fluid d-flex justify-content-center gap-5">
                                            <button type="button" class="btn btn-hover-dark-secondary rounded-5 p-3"
                                                data-bs-toggle="modal" data-bs-target="#modale-aggiunto-1">
                                                <span class="material-symbols-outlined align-middle">
                                                    visibility
                                                </span>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modale-aggiunto-1" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5 font-questrial fw-bold"
                                                                id="staticBackdropLabel">Apple MacBook
                                                                Air <span
                                                                    class="badge text-bg-warning text-dark">NUOVO</span>
                                                            </h1>

                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div id="carouselExampleDark"
                                                                class="carousel carousel-dark slide">
                                                                <div class="carousel-indicators">
                                                                    <button type="button"
                                                                        data-bs-target="#carouselExampleDark"
                                                                        data-bs-slide-to="0" class="active"
                                                                        aria-current="true"
                                                                        aria-label="Slide 1"></button>
                                                                    <button type="button"
                                                                        data-bs-target="#carouselExampleDark"
                                                                        data-bs-slide-to="1"
                                                                        aria-label="Slide 2"></button>
                                                                    <button type="button"
                                                                        data-bs-target="#carouselExampleDark"
                                                                        data-bs-slide-to="2"
                                                                        aria-label="Slide 3"></button>
                                                                </div>
                                                                <div class="carousel-inner">
                                                                    <div class="carousel-item active"
                                                                        data-bs-interval="1000">
                                                                        <img src="https://themewagon.github.io/electro/img/product03.png"
                                                                            class="d-block img-carousel" alt="...">
                                                                    </div>
                                                                    <div class="carousel-item" data-bs-interval="1000">
                                                                        <img src="https://themewagon.github.io/electro/img/product03.png"
                                                                            class="d-block img-carousel" alt="...">

                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="https://themewagon.github.io/electro/img/product03.png"
                                                                            class="d-block img-carousel" alt="...">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <button class="carousel-control-prev" type="button"
                                                                    data-bs-target="#carouselExampleDark"
                                                                    data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon"
                                                                        aria-hidden="true"></span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button"
                                                                    data-bs-target="#carouselExampleDark"
                                                                    data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon"
                                                                        aria-hidden="true"></span>
                                                                </button>
                                                            </div>
                                                            <div class="card-body">
                                                                <h6 class="text-center"><small
                                                                        class="text-body-secondary font-questrial">COMPUTER
                                                                        LAPTOP</small>
                                                                </h6>
                                                                <h5
                                                                    class="card-title fw-bold fs-4 text-center font-questrial">
                                                                    Apple MacBook Air</h5>
                                                                <h6
                                                                    class="font-questrial fw-bold text-warning-secondary text-center fs-5">
                                                                    $1700.30</h6>

                                                                <hr>
                                                                <p class="fw-bold fs-5 font-questrial text-center">
                                                                    Descrizione</p>

                                                                <ul class="list-group font-questrial shadow">
                                                                    <li class="list-group-item">Chip Apple M3 con CPU
                                                                        8‑core</li>
                                                                    <li class="list-group-item">GPU 8‑core e Neural
                                                                        Engine 16‑core</li>
                                                                    <li class="list-group-item">8GB di memoria unificata
                                                                    </li>
                                                                    <li class="list-group-item">Unità SSD da 256GB</li>
                                                                    <li class="list-group-item">Display Liquid Retina da
                                                                        13,6" con True Tone²</li>
                                                                    <li class="list-group-item">Videocamera FaceTime HD
                                                                        a 1080p</li>
                                                                    <li class="list-group-item">Porta MagSafe 3 per la
                                                                        ricarica</li>
                                                                    <li class="list-group-item">Due porte Thunderbolt -
                                                                        USB 4</li>
                                                                </ul>

                                                            </div>
                                                            <nav class="navbar">
                                                                <div class="container-fluid d-flex w-100 p-1">
                                                                    <a class="navbar-brand img-logo-source p-2 rounded"
                                                                        href="https://www.apple.com/it/">
                                                                        <img src="https://w7.pngwing.com/pngs/121/286/png-transparent-apple-logo-computer-icons-apple-logo-company-heart-logo-thumbnail.png"
                                                                            alt="Logo" width="20" height="20"
                                                                            class="d-inline-block align-text-center rounded mb-1">
                                                                        Apple
                                                                    </a>
                                                                    <button type="button"
                                                                        class="btn img-logo-source font-questrial">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                        Più dettagli
                                                                    </button>
                                                                </div>
                                                            </nav>
                                                        </div>
                                                        <div class="modal-footer w-100">
                                                            <button type="button"
                                                                class="btn btn-warning font-questrial fw-bold d-flex gap-1"
                                                                data-bs-toggle="modal" data-bs-target="#modificamodal">
                                                                <span class="material-symbols-outlined">
                                                                    edit_note
                                                                </span>
                                                                MODIFICA</button>
                                                            <button type="button" class="btn btn-hover-dark-secondary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#cancelproductmodal2">
                                                                <span class="material-symbols-outlined align-middle">
                                                                    cancel
                                                                </span>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade font-questrial" id="cancelproductmodal2" tabindex="1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                Conferma rimozione
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Conferma di voler rimuovere questo prodotto dal market-place
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">ANULLA</button>
                                                            <button type="button" class="btn btn-warning"
                                                                data-bs-dismiss="modal">RIMUOVI</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade text-dark font-questrial" id="modalAggiungiProdotto"
                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-4 font-questrial fw-bold text-center"
                                            id="staticBackdropLabel">
                                            Aggiungi prodotto
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body text-dark">
                                            <div class="mb-3 container p-3 g-1 font-questrial">
                                                <label for=""
                                                    class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                                                    <span class="material-symbols-outlined align-middle">
                                                        link
                                                    </span>
                                                    Link immagini</label>
                                                <input placeholder="Incolla qui il link della prima immagine"
                                                    title="Inpit title" name="url-img-1" type="url"
                                                    class="input_field2 form-control font-questrial"
                                                    onchange="ShowImageInDiv('1')">
                                                <br>
                                                <div class="container" id="container-image-1"></div>
                                                <input placeholder="Incolla qui il link della seconda immagine"
                                                    title="Inpit title" name="url-img-2" type="url"
                                                    class="input_field2 form-control font-questrial"
                                                    onchange="ShowImageInDiv('2')">
                                                <div class="container" id="container-image-2"></div>
                                                <br>
                                                <input placeholder="Incolla qui il link della terza immagine"
                                                    title="Inpit title" name="url-img-3" type="url"
                                                    class="input_field2 form-control font-questrial"
                                                    onchange="ShowImageInDiv('3')">
                                                <div class="container" id="container-image-3"></div>
                                            </div>
                                            <hr class="hr-menu">
                                            <div class="mb-3 container p-3 g-4 font-questrial">
                                                <label for=""
                                                    class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                                                    <span class="material-symbols-outlined align-middle">
                                                        sports_esports
                                                    </span>
                                                    Nominativo</label>
                                                <input placeholder="Nominativo prodotto" title="Inpit title"
                                                    name="nominativo" type="text"
                                                    class="input_field2 form-control font-questrial">
                                            </div>
                                            <div class="mb-3 container p-3 g-4 font-questrial">
                                                <label for=""
                                                    class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                                                    <span class="material-symbols-outlined align-middle">
                                                        link
                                                    </span>
                                                    Link Dettagli</label>
                                                <input placeholder="Link dettagli prodotto" title="Inpit title"
                                                    name="link-dettagli" type="url"
                                                    class="input_field2 form-control font-questrial">
                                            </div>
                                            <div class="mb-3 container p-3 g-1 font-questrial">
                                                <label for=""
                                                    class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                                                    <span class="material-symbols-outlined align-middle">
                                                        view_cozy
                                                    </span>
                                                    Categoria</label>
                                                <select class="form-select form-select-lg border-dark"
                                                    name="categoria-pc" id="selectCategoriaComputer2">
                                                    <option selected>seleziona categoria</option>
                                                    <option value="laptop">PC Notebook</option>
                                                    <option value="desktop">PC Desktop</option>
                                                    <option value="desktop">PC All-in-one</option>
                                                    <option value="hardware">Componenti hardware</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 container p-3 g-4 font-questrial">
                                                <label for=""
                                                    class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                                                    <span class="material-symbols-outlined align-middle">
                                                        precision_manufacturing
                                                    </span>
                                                    Produttore</label>
                                                <select class="form-select form-select-lg border-dark"
                                                    name="produttore">
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
                                                <label for=""
                                                    class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                                                    <span class="material-symbols-outlined align-middle">
                                                        payments
                                                    </span>
                                                    Prezzo (€)</label>
                                                <input placeholder="Inserisci prezzo" title="Inpit title" name="prezzo"
                                                    type="number" class="input_field2 form-control font-questrial">
                                            </div>
                                            <div class="mb-3 container p-3 g-4 font-questrial">
                                                <label for=""
                                                    class="form-label font-questrial fs-5 fw-bold d-flex gap-1">
                                                    <span class="material-symbols-outlined align-middle">
                                                        other_admission
                                                    </span>
                                                    Descrizione</label>
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="floatingTextarea2"
                                                        style="height: 100px"></textarea>
                                                    <label for="floatingTextarea2">Inserisci qui la descrizione</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer w-100">
                                        <button type="button"
                                            class="btn btn-warning font-questrial fw-bold d-flex mx-auto"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            AGGIUNGI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <footer class="footer float-bottom border-top border-secondary">
                        <!-- Widgets - Bootstrap Brain Component -->
                        <section
                            class="bg-dark py-4 py-md-5 py-xl-8 text-light border-bottom border-secondary font-questrial">
                            <div class="container overflow-hidden">
                                <div class="row gy-4 gy-lg-0 justify-content-xl-between">
                                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                        <div class="widget">
                                            <a class="text-light fw-bold fs-5 text-decoration-none" href="#!">
                                                <img src="https://zammad.com/media/pages/product/features/gitlab-integration/693fc93d4d-1698589015/gitlab_integration.png"
                                                    alt="DIGITALFORGE" width="60" height="60">DIGITALFORGE
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                                        <div class="widget">
                                            <h4 class="widget-title mb-4 fw-bold">Contattaci</h4>
                                            <address class="mb-4"><a class="link-secondary text-decoration-none"
                                                    href="https://maps.app.goo.gl/rLgtUrixqP7FiUJU7">Via Grottaferrata
                                                    23,Roma,Italia</a>
                                            </address>
                                            <p class="mb-1">
                                                <a class="link-secondary text-decoration-none" href="#!">(+39)
                                                    351-890-2314</a>
                                            </p>
                                            <p class="mb-0">
                                                <a class="link-secondary text-decoration-none"
                                                    href="#">digitalforge@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                                        <div class="widget">
                                            <h4 class="widget-title mb-4 fw-bold">Scopri di piu'</h4>
                                            <ul class="list-unstyled">
                                                <li class="mb-2">
                                                    <a href="#!" class="link-secondary text-decoration-none">About</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="#!" class="link-secondary text-decoration-none">Contact</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="#!"
                                                        class="link-secondary text-decoration-none">Advertise</a>
                                                </li>
                                                <li class="mb-2">
                                                    <a href="#!" class="link-secondary text-decoration-none">Terms of
                                                        Service</a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="#!" class="link-secondary text-decoration-none">Privacy
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
                                            <form action="#!">
                                                <div class="row gy-4">
                                                    <div class="col-12">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="email-newsletter-addon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                                </svg>
                                                            </span>
                                                            <input type="email" class="form-control"
                                                                id="email-newsletter" value=""
                                                                placeholder="Email Address"
                                                                aria-label="email-newsletter"
                                                                aria-describedby="email-newsletter-addon" required>
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
                                            Built by <a href="#"
                                                class="link-secondary text-decoration-none">DigitalForgeBrain W.F.</a> with
                                            <span class="text-warning">&#9829</span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-5 order-0 order-md-1">
                                        <ul class="nav justify-content-center justify-content-md-end">
                                            <li class="nav-item">
                                                <a class="nav-link link-warning" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-warning" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-warning" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link link-warning" href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
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
                              <a class="text-light fw-bold fs-5 text-decoration-none" href="#!">
                                <img
                                  src="https://zammad.com/media/pages/product/features/gitlab-integration/693fc93d4d-1698589015/gitlab_integration.png"
                                  alt="DIGITALFORGE" width="60" height="60">DIGITALFORGE
                              </a>
                            </div>
                          </div>
                          <div class="col-12 col-md-4 col-lg-3 col-xl-3">
                            <div class="widget">
                              <h4 class="widget-title mb-4 fw-bold">Contattaci</h4>
                              <address class="mb-4"><a class="link-secondary text-decoration-none"
                                  href="https://maps.app.goo.gl/rLgtUrixqP7FiUJU7">Via Grottaferrata
                                  23,Roma,Italia</a>
                              </address>
                              <p class="mb-1">
                                <a class="link-secondary text-decoration-none" href="#!">(+39)
                                  351-890-2314</a>
                              </p>
                              <p class="mb-0">
                                <a class="link-secondary text-decoration-none" href="#">digitalforge@gmail.com</a>
                              </p>
                            </div>
                          </div>
                          <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                            <div class="widget">
                              <h4 class="widget-title mb-4 fw-bold">Scopri di piu'</h4>
                              <ul class="list-unstyled">
                                <li class="mb-2">
                                  <a href="#!" class="link-secondary text-decoration-none">About</a>
                                </li>
                                <li class="mb-2">
                                  <a href="#!" class="link-secondary text-decoration-none">Contact</a>
                                </li>
                                <li class="mb-2">
                                  <a href="#!" class="link-secondary text-decoration-none">Advertise</a>
                                </li>
                                <li class="mb-2">
                                  <a href="#!" class="link-secondary text-decoration-none">Terms of
                                    Service</a>
                                </li>
                                <li class="mb-0">
                                  <a href="#!" class="link-secondary text-decoration-none">Privacy
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
                              <form action="#!">
                                <div class="row gy-4">
                                  <div class="col-12">
                                    <div class="input-group">
                                      <span class="input-group-text" id="email-newsletter-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                          class="bi bi-envelope" viewBox="0 0 16 16">
                                          <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                      </span>
                                      <input type="email" class="form-control" id="email-newsletter" value=""
                                        placeholder="Email Address" aria-label="email-newsletter"
                                        aria-describedby="email-newsletter-addon" required>
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
                              Built by <a href="#" class="link-secondary text-decoration-none">DigitalForgeBrain W.F.</a> with
                              <span class="text-warning">&#9829</span>
                            </div>
                          </div>
        
                          <div class="col-xs-12 col-md-5 order-0 order-md-1">
                            <ul class="nav justify-content-center justify-content-md-end">
                              <li class="nav-item">
                                <a class="nav-link link-warning" href="#!">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                  </svg>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link link-warning" href="#!">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path
                                      d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                  </svg>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link link-warning" href="#!">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                      d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                  </svg>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link link-warning" href="#!">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
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
</body>

<!-- SCRIPTS JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>

</html>