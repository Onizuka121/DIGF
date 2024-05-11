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
  } catch (error) {}
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
}

function ColorOrNotNavItem(id_div_nav_bar) {
  id_divs_nav_bar.forEach((element) => {
    if (element != id_div_nav_bar) {
      if (document.getElementById(element) != null) {
        document.getElementById(element).style.cssText =
          ".nav-item:hover{ background-color: #21252937; cursor: pointer; }";
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

function ShowImageInDiv(name_input, mod = false, number_id = null) {
  var url_image = document.getElementsByName("url-img-" + name_input)[0].value;

  var html =
    " <img src='" +
    url_image +
    "' class='card-img-top w-75 mx-auto' alt='...'>";

  var id_div_img = "container-image-" + name_input;

  document.getElementById(id_div_img).innerHTML = html;

  if (mod) {
    ViewSalvaModifiche(number_id);
  }
}
