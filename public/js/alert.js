function showConfirmationAzienda() {
  var result = confirm("Confermi di voler eliminare questa azienda e tutte le offerte relative?");
  if (result) {
    } 
    else {
    event.preventDefault();
    event.stopPropagation();
  }
}


function showConfirmationOfferta(){
  var result = confirm("Confermi di voler eliminare questa offerta?");
  
  if (result) {
    } 
    else {
    event.preventDefault();
    event.stopPropagation();
  }
}

function showConfirmationUtente(){
  var result = confirm("Confermi di voler eliminare questo utente?");
  
  if (result) {
    } 
    else {
    event.preventDefault();
    event.stopPropagation();
  }
}

function showConfirmationFaq() {
  var result = confirm("Confermi di voler eliminare questa FAQ?");
  if (result) {
    } 
    else {
    event.preventDefault();
    event.stopPropagation();
  }
}

function showConfirmationStaff() {
  var result = confirm("Confermi di voler eliminare questo membro dello staff?");
  if (result) {
    } 
    else {
    event.preventDefault();
    event.stopPropagation();
  }
}

function showConfirmationLogout() {
  var result = confirm("Confermi di voler uscire dalla tua area personale?");
  if (result) {
      document.getElementById('logout-form').submit();
    } 
    else {
    event.preventDefault();
    event.stopPropagation();
  }
}
