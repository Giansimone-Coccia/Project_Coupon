

function showConfirmationAzienda() {
  var result = confirm("Confermi di voler eliminare questa azienda e tutte le offerte relative?");
  
  if (result) {
    // L'utente ha cliccato su "Si"
    console.log("Hai scelto Si");
  } else {
    // L'utente ha cliccato su "No"
    console.log("Hai scelto No");
  }
}


function showConfirmationOfferta(){
  var result = confirm("Confermi di voler eliminare questa offerta?");
  
  if (result) {
    // L'utente ha cliccato su "Si"
    console.log("Hai scelto Si");
  } else {
    // L'utente ha cliccato su "No"
    console.log("Hai scelto No");
  }
}

function showConfirmationUtente(){
  var result = confirm("Confermi di voler eliminare questo utente?");
  
  if (result) {
    // L'utente ha cliccato su "Si"
    console.log("Hai scelto Si");
  } else {
    // L'utente ha cliccato su "No"
    console.log("Hai scelto No");
  }
}