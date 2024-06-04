document
  .getElementById("search-product-mk")
  .addEventListener("click", searchProducts);

let id_divs_nav_bar = [
  "li-mk-ID",
  "li-ai-ID",
  "li-pre-ID",
  "li-aiuto-ID",
  "li-add-ID",
];
let id_divs_container = [
  "serialMARKET-PLACE",
  "serialAiContainer",
  "serialPreferitiContainer",
  "serialHelpContainer",
  "serialAddProductContainer",
];

let visible_bar = true;

getProducts("allmk=true&allpro=false");
if (document.getElementById("container-added-products") != null) {
  getAllProductAdded();
}

try {
  document.getElementById("hide-bar").addEventListener("click", function () {
    let width = "70px";
    let width2 = "125%";
    let display_text_bar = "none";
    let innerText_span = "chevron_right";
    if (!visible_bar) {
      width = "17%";
      display_text_bar = "inline";
      innerText_span = "chevron_left";
      visible_bar = true;
    } else {
      visible_bar = false;
    }
    console.log(visible_bar);
    document.getElementById("bar-main").style.width = width;
    document.getElementById("bar-child").style.width = width2;
    let elements = document.getElementsByClassName("text-bar");
    console.log(typeof elements);
    Array.from(elements).forEach((element) => {
      element.style.display = display_text_bar;
    });
    document.getElementById("hide-bar").innerText = innerText_span;
  });
} catch (error) {
  console.log(error);
}

try {
  document
    .getElementById("btn-accedi-account")
    .addEventListener("click", CheckLogin);
} catch (error) {}
try {
  document
    .getElementById("salva-modifiche-btn")
    .addEventListener("click", SalvaModifiche);
} catch (error) {}

async function GetDataFromAi() {
  console.log("mandata hemini");
  try {
    const formdata_accesso = new FormData();

    formdata_accesso.append(
      "selectCategoriaComputer2",
      document.getElementById("selectCategoriaComputer2").value.trim()
    );
    formdata_accesso.append(
      "tipologia-pc",
      document.getElementById("tipologia-pc").value.trim()
    );
    formdata_accesso.append(
      "produttore",
      document.getElementById("produttore").value.trim()
    );
    formdata_accesso.append(
      "budget-min-pc",
      document.getElementById("budget-min-pc").value.trim()
    );
    formdata_accesso.append(
      "budget-max-pc",
      document.getElementById("budget-max-pc").value.trim()
    );
    formdata_accesso.append(
      "memoria-ram",
      document.getElementById("memoria-ram").value.trim()
    );
    formdata_accesso.append(
      "memoria-rom",
      document.getElementById("memoria-rom").value.trim()
    );
    formdata_accesso.append(
      "altre-specifiche",
      document.getElementById("altre-specifiche").value.trim()
    );

    fetch("../php/get-data-gemini.php", {
      method: "POST",
      header: {
        "Content-Type": "application/json",
      },
      body: formdata_accesso,
    })
      .then((response) => response.json())
      .then((out) => {
        console.log(out);
      });
  } catch (error) {
    console.log(error);
  }
}

async function CheckLogin() {
  try {
    const formdata_accesso = new FormData();
    formdata_accesso.append(
      "email-accesso",
      document.getElementById("email_field").value.trim()
    );
    formdata_accesso.append(
      "password-accesso",
      document.getElementById("password_field").value.trim()
    );
    fetch("../php/control.php", {
      method: "POST",
      header: {
        "Content-Type": "application/json",
      },
      body: formdata_accesso,
    })
      .then((response) => response.json())
      .then((out) => {
        if (!out.email_check || !out.pass_check) {
          let html_toast;
          if (!out.email_check) {
            html_toast = "Utente non registrato";
          } else if (!out.pass_check && out.email_check) {
            html_toast = "Password non coretta";
          }
          $(".toast.toast-logged-output").html(
            "<div class='toast-body'>" + html_toast + "</div>"
          );
          $(".toast.toast-logged-output").toast("show");
        } else {
          ChangePage("home-page");
        }
      });
  } catch (error) {
    console.log(error);
  }
}

async function SalvaModifiche() {
  const formdata = new FormData();
  formdata.append("nome", document.getElementById("inputNome").value.trim());
  formdata.append(
    "cognome",
    document.getElementById("inputCognome").value.trim()
  );
  formdata.append(
    "password",
    document.getElementById("password_field").value.trim()
  );
  try {
    fetch("../php/control.php", {
      method: "POST",
      header: {
        "Content-Type": "application/json",
      },
      body: formdata,
    })
      .then((response) => response.json())
      .then((out) => {
        $(".toast.toast-modifica-profilo").html(
          "<div class='toast-body'> <span class='material-symbols-outlined align-middle p-1'>person_check</span> Profilo aggiornato</div>"
        );
        $(".toast.toast-modifica-profilo").toast("show");
      });
  } catch (error) {}

  DiscardAll();
}

let div_setted_id = "mkplaceID";

ColorOrNotNavItem("li-mk-ID");

function ChangePage(page_path) {
  window.location = page_path;
}

function HandleAndView(
  div_nav_to_color = undefined,
  div_container_to_view = undefined
) {
  ColorOrNotNavItem(div_nav_to_color);
  id_divs_container.forEach((element) => {
    if (
      element != div_container_to_view &&
      document.getElementById(element) != null
    ) {
      document.getElementById(element).style.display = "none";
    }
  });
  document.getElementById(div_container_to_view).style.display = "block";
  document.getElementById(div_nav_to_color + "-bar").style.display = "block";
}

function ColorOrNotNavItem(id_div_nav_bar) {
  id_divs_nav_bar.forEach((element) => {
    if (element != id_div_nav_bar) {
      if (document.getElementById(element) != null) {
        document.getElementById(element).style.cssText =
          ".nav-item:hover{ background-color: #21252937; cursor: pointer; }";
        document.getElementById(element + "-bar").style.display = "none";
      }
    }
  });
  if (document.getElementById(id_div_nav_bar) != null) {
    document.getElementById(id_div_nav_bar).style.backgroundColor = "#212529";
  }
}

function DiscardAll() {
  document.getElementById("confermaPasswordSerial").style.display = "none";
  document.getElementById("invalidPassword2").style.display = "none";
  document.getElementById("invalidPassword1").style.display = "none";
  document.getElementById("validPassword1").style.display = "none";
  document.getElementById("validPassword2").style.display = "none";
  document.getElementById("SaveModificheSerial").style.display = "none";
}

function ViewSalvaModifiche(number_id = "") {
  let display_invalidpass1 =
    document.getElementById("invalidPassword1").style.display;
  let display_invalidpass2 =
    document.getElementById("invalidPassword2").style.display;

  console.log(display_invalidpass1, display_invalidpass2);
  if (display_invalidpass1 == "none" && display_invalidpass2 == "none") {
    document.getElementById("SaveModificheSerial" + number_id).style.display =
      "block";
  }
}

function CheckPass(change = false) {
  if (change) {
    document.getElementById("confermaPasswordSerial").style.display = "block";
    document.getElementById("SaveModificheSerial").style.display = "none";
  }
  let pass = document.getElementById("password_field").value;
  if (pass.length >= 10) {
    document.getElementById("validPassword1").style.display = "flex";
    document.getElementById("invalidPassword1").style.display = "none";
    document.getElementById("password_field2").disabled = false;
    return;
  }
  document.getElementById("validPassword1").style.display = "none";
  document.getElementById("invalidPassword1").style.display = "flex";
  if (document.getElementById("password_field2") != null)
    document.getElementById("password_field2").disabled = true;
}

function CheckConfPass() {
  try {
    document.getElementById("SaveModificheSerial").style.display = "none";
  } catch (error) {}
  if (
    document.getElementById("password_field").value ==
    document.getElementById("password_field2").value
  ) {
    document.getElementById("validPassword2").style.display = "flex";
    document.getElementById("invalidPassword2").style.display = "none";
    if (document.getElementById("btn-crea-account-serial") != null)
      document.getElementById("btn-crea-account-serial").disabled = false;

    ViewSalvaModifiche();
    return;
  }
  document.getElementById("validPassword2").style.display = "none";
  document.getElementById("invalidPassword2").style.display = "flex";
  document.getElementById("SaveModificheSerial").style.display = "none";
  if (document.getElementById("btn-crea-account-serial") != null)
    document.getElementById("btn-crea-account-serial").disabled = true;
}

function CheckCategoriaComputer(isfilter = true) {
  let id = isfilter ? "selectCategoriaComputer" : "selectCategoriaComputer2";
  let id2 = isfilter ? "selectTipologiaComputer" : "selectTipologiaComputer2";
  let categoria_selected = document.getElementById(id).value;
  if (categoria_selected == "hardware") {
    document.getElementById(id2).selectedIndex = 1;
    document.getElementById(id2).disabled = true;
  } else {
    document.getElementById(id2).disabled = false;
    document.getElementById(id2).selectedIndex = 0;
  }
}

function formatCreditCardNumber() {
  var input = document.getElementById("inputCardNum");
  if (input != null) {
    var trimmedValue = input.value.replace(/\s+/g, "").replace(/[^0-9]/gi, "");
    var formattedValue = trimmedValue.replace(/(.{4})/g, "$1 ");
    input.value = formattedValue.trim();
    let image = "";
    if ((input.value + "").startsWith("4")) {
      image = "visa.png";
    } else if ((input.value + "").startsWith("5")) {
      image = "master.png";
    } else if ((input.value + "").startsWith("3")) {
      image = "american-express.png";
    } else if ((input.value + "").startsWith("6")) {
      image = "discover.png";
    } else {
      image = "";
    }
    if (image.length > 0) {
      document.getElementById("cardTipo").innerHTML =
        "<img src='./img/" + image + "' alt='' width='50' height='50'>";
    } else {
      document.getElementById("cardTipo").innerHTML = "credit_card";
    }
  }
}

if (document.getElementById("inputCardNum") != null) {
  document
    .getElementById("inputCardNum")
    .addEventListener("input", formatCreditCardNumber);
  document
    .getElementById("scadenza_card")
    .addEventListener("input", function (event) {
      var inputValue = event.target.value;
      var cleanedInputValue = inputValue.replace(/[^0-9]/g, "");
      var formattedValue = cleanedInputValue.replace(
        /(\d{2})(\d{0,2})/,
        "$1/$2"
      );
      var month = parseInt(cleanedInputValue.substring(0, 2));
      if (month > 12) {
        formattedValue = formattedValue.substring(0, formattedValue.length - 1);
      }
      event.target.value = formattedValue;
    });
}

function CancellaPreferito(id_card_preferito) {
  document.getElementById(id_card_preferito).style.display = "none";
}

function ShowImageInDiv(name_input, mod = false, number_id = null) {
  try {
    var url_image = document.getElementById("url-img-" + name_input).value;

    var html =
      " <img src='" +
      url_image +
      "' class='card-img-top w-75 mx-auto' alt='...'>";

    var id_div_img = "container-image-" + name_input;

    document.getElementById(id_div_img).innerHTML = html;

    if (mod) {
      ViewSalvaModifiche(number_id);
    }
  } catch (error) {}
}

//----------------

try {
  document
    .getElementById("btn-add-product")
    .addEventListener("click", AddProduct);
} catch (error) {}

async function AddProduct() {
  try {
    const formdata_product = new FormData();
    formdata_product.append(
      "url-img-1",
      document.getElementById("url-img-1").value.trim()
    );
    formdata_product.append(
      "url-img-2",
      document.getElementById("url-img-2").value.trim()
    );
    formdata_product.append(
      "url-img-3",
      document.getElementById("url-img-3").value.trim()
    );
    formdata_product.append(
      "nominativo",
      document.getElementById("nominativo").value.trim()
    );
    formdata_product.append(
      "link-dettagli",
      document.getElementById("link-dettagli").value.trim()
    );
    formdata_product.append(
      "produttore",
      document.getElementById("produttore").value
    );
    formdata_product.append(
      "categoria",
      document.getElementById("selectCategoriaComputer-add").value.toUpperCase()
    );
    formdata_product.append(
      "prezzo",
      document.getElementById("prezzo").value.trim()
    );
    formdata_product.append(
      "descrizione",
      document.getElementById("floatingTextarea2").value.trim()
    );

    fetch("../php/control.php", {
      method: "POST",
      header: {
        "Content-Type": "application/json",
      },
      body: formdata_product,
    })
      .then((response) => response.json())
      .then((out) => {
        if (out.id_product >= 0) {
          document
            .getElementById("containerSerialAddedProducts")
            .appendChild(formatCard(formdata_product, 0, out.id_product));
        }
      });
  } catch (error) {
    console.log(error);
  }
}

function searchProducts() {
  let search_text = document.getElementById("cerca-prodotto-input").value;
  document.getElementById("text-result-search").innerText =
    "Risulatati per '" + search_text + "'";
  let query = "allmk=false&allpro=false&search=" + search_text;
  getProducts(query);
}

function getAllProductAdded() {
  try {
    fetch("../php/control.php?allmk=false&allpro=true", {
      method: "GET",
      header: {
        "Content-Type": "application/json",
      },
    })
      .then((response) => response.json())
      .then((out) => {
        out.forEach((product_added) => {
          let product_form = new FormData();
          product_form.append("url-img-1", product_added.link_img1);
          product_form.append("url-img-2", product_added.link_img2);
          product_form.append("url-img-3", product_added.link_img3);
          product_form.append("nominativo", product_added.nominativo);
          product_form.append("categoria", product_added.categoria);
          product_form.append("descrizione", product_added.descrizione);
          product_form.append("prezzo", product_added.prezzo);
          product_form.append("produttore", product_added.produttore);

          document
            .getElementById("container-added-products")
            .appendChild(
              formatCard(
                product_form,
                product_added.data_ora_inserimento,
                product_added.id_prodotto
              )
            );
        });
      });
  } catch (error) {
    console.log(error);
  }
}

function getDescrizioneFormatted(descrizione) {
  let out = "";
  let splitted = descrizione.split("#");
  splitted.forEach((des) => {
    out += `<li class="list-group-item">${des}</li>`;
  });

  return out;
}

function formatCard(formData, timestamp = 0, id_product) {
  let child_card_product = document.createElement("div");
  let prezzo = parseFloat(formData.get("prezzo")).toFixed(2);
  let w_aggiunto = "ADESSO";
  if (timestamp != 0) {
    let date = new Date(timestamp);
    w_aggiunto =
      "AGGIUNTO IL " +
      date.getDate() +
      "/" +
      "" +
      date.getMonth() +
      " alle " +
      date.getHours() +
      " : " +
      date.getMinutes();
  }

  child_card_product.innerHTML = `<div class="card mb-3">
  <span
    class="position-absolute top-0 font-questrial fw-bold fs-6 start-50 translate-middle badge text-dark rounded-pill bg-warning">
    AGGIUNTO ${w_aggiunto}
  </span>
  <div class="row g-0">
    <div class="col-md-4 d-flex justify-content-center">
      <img src="${formData.get("url-img-1")}"
        class="img-fluid mx-auto img-preferiti" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h6 class="text-center"><small class="text-body-secondary font-questrial">${formData.get(
          "categoria"
        )}</small>
        </h6>
        <h5 class="card-title fw-bold fs-4 text-center font-questrial">${formData.get(
          "nominativo"
        )}</h5>
        <h6 class="font-questrial fw-bold text-warning-secondary text-center fs-5">
          $${prezzo}</h6>
        <hr>
        <div class="container-fluid d-flex justify-content-center gap-5">
          <button type="button" class="btn btn-hover-dark-secondary rounded-5 p-3"
            data-bs-toggle="modal" data-bs-target="#modale-aggiunto-${id_product}">
            <span class="material-symbols-outlined align-middle">
              visibility
            </span>
          </button>
          <!-- Modal -->
          <div class="modal fade" id="modale-aggiunto-${id_product}" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 font-questrial fw-bold" id="staticBackdropLabel">${formData.get(
                    "nominativo"
                  )}
                  <span class="badge text-bg-warning text-dark fs-5">AGGIUNTO ${w_aggiunto}</span>
                  </h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div id="carouselExampleDark-${id_product}" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark-${id_product}" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark-${id_product}" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark-${id_product}" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="1000">
                        <img src="${formData.get("url-img-1")}"
                          class="d-block img-carousel" alt="...">
                      </div>
                      <div class="carousel-item" data-bs-interval="1000">
                        <img src="${formData.get("url-img-2")}"
                          class="d-block img-carousel" alt="...">

                      </div>
                      <div class="carousel-item">
                        <img src="${formData.get("url-img-3")}"
                          class="d-block img-carousel" alt="...">
                      </div>
                    </div>
                    <br>
                    <button class="carousel-control-prev" type="button"
                      data-bs-target="#carouselExampleDark-${id_product}" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button"
                      data-bs-target="#carouselExampleDark-${id_product}" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                  </div>
                  <div class="card-body">
                    <h6 class="text-center"><small class="text-body-secondary font-questrial">${formData.get(
                      "categoria"
                    )}</small>
                    </h6>
                    <h5 class="card-title fw-bold fs-4 text-center font-questrial">
                    ${formData.get("nominativo")}</h5>
                    <h6 class="font-questrial fw-bold text-warning-secondary text-center fs-5">
                      $${formData.get("prezzo")}</h6>

                    <hr>
                    <p class="fw-bold fs-5 font-questrial text-center">
                      Descrizione</p>
                    <ul class="list-group font-questrial shadow">
                    ${getDescrizioneFormatted(formData.get("descrizione"))}
                    </ul>
                  </div>
                  <nav class="navbar">
                    <div class="container-fluid d-flex w-100 p-1">
                      <a class="navbar-brand img-logo-source p-2 rounded"
                        href="${formData.get("link-dettagli")}">
                        <img
                          src="${formData.get("produttore")}"
                          alt="Logo" width="20" height="20"
                          class="d-inline-block align-text-center rounded mb-1">
                          ${formData.get("produttore")}
                      </a>
                      <button type="button" class="btn img-logo-source font-questrial">
                        <i class="fa fa-link" aria-hidden="true"></i>
                        Più dettagli
                      </button>
                    </div>
                  </nav>
                </div>
                <div class="modal-footer w-100">
                  <button type="button" class="btn btn-warning font-questrial fw-bold d-flex gap-1"
                    data-bs-toggle="modal" data-bs-target="#modificamodal">
                    <span class="material-symbols-outlined">
                      edit_note
                    </span>
                    MODIFICA</button>
                  <button type="button" class="btn btn-hover-dark-secondary" data-bs-toggle="modal"
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
                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Conferma di voler rimuovere questo prodotto dal market-place
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">ANULLA</button>
                  <button type="button" class="btn btn-warning" data-bs-dismiss="modal">RIMUOVI</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div></div>`;
  return child_card_product;
}

async function getProducts(query) {
  try {
    fetch("../php/control.php?" + query, {
      method: "GET",
      header: {
        "Content-Type": "application/json",
      },
    })
      .then((response) => response.json())
      .then((out) => {
        var href = "#marketPlaceSerial";
        window.location = href;
        document.getElementById("marketPlaceSerial").innerHTML = "";
        out.forEach((product) => {
          document.getElementById("marketPlaceSerial").innerHTML +=
            product.product_html;
          let descrizione_area = document.getElementById(
            "descrizione-" + product.id_product
          );
          descrizione_area.innerHTML = getDescrizioneFormatted(
            product.descrizione_product
          );
        });
        $(document).ready(function () {
          $(".toast").toast();
          $(".bookmark-btn").click(function () {
            if ($(this).hasClass("clicked")) {
              $(".toast.toast-aggiunto").html(
                "<div class='toast-body'> <span class='material-symbols-outlined align-middle'>bookmark_remove</span>Prodotto rimosso tra i preferiti </div>"
              );
            } else {
              $(".toast.toast-aggiunto").html(
                "<div class='toast-body'> <span class='material-symbols-outlined align-middle'>bookmark_added</span>Prodotto aggiunto tra i preferiti </div>"
              );
            }
            $(".toast.toast-aggiunto").toast("show");
            $(this).toggleClass("clicked");
          });
        });
      });
  } catch (error) {
    console.log(error);
  }
}

function formatProductCardMarketPlace(product) {
  return product_html;
}

// async function getIconBrand(name_brand) {
//   let url_icon = "";

//   const options = {
//     method: "GET",
//     headers: {
//       accept: "application/json",
//       Referer: "",
//     },
//   };

//   fetch("https://api.brandfetch.io/v2/search/" + name_brand, options)
//     .then((response) => response.json())
//     .then((response) => {
//       url_icon = response[0].icon;
//       console.log(url_icon, response[0].icon);
//       return url_icon;
//     })
//     .catch((err) => console.error(err));
// }
