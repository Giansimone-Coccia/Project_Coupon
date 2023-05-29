
function showAlert() {
  alert("Sei sicuro di voler eliminare questo elemento?");
}

function showConfirmationAzienda() {
  var result = confirm("Sei sicuro di voler eliminare questa azienda e tutte le offerte relative?");
  
  if (result) {
    // L'utente ha cliccato su "Si"
    console.log("Hai scelto Si");
  } else {
    // L'utente ha cliccato su "No"
    console.log("Hai scelto No");
  }
}


function showConfirmationOfferta(){
  var result = confirm("Sei sicuro di voler eliminare questo elemento?");
  
  if (result) {
    // L'utente ha cliccato su "Si"
    console.log("Hai scelto Si");
  } else {
    // L'utente ha cliccato su "No"
    console.log("Hai scelto No");
  }
}