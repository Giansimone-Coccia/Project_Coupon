$(document).ready(function() {
      $("#deleteBtn").click(function() {
        $("#confirmPopup").fadeIn();
        $("#overlay").fadeIn();
      });

      $("#yesBtn").click(function() {
        // Azioni da eseguire se l'utente clicca su "Sì"
        $("#confirmPopup").fadeOut();
        $("#overlay").fadeOut();
        // Inserisci qui il codice per eliminare il coupon
      });

      $("#noBtn").click(function() {
        // Azioni da eseguire se l'utente clicca su "No"
        $("#confirmPopup").fadeOut();
        $("#overlay").fadeOut();
      });
    });


//non è stato usato alla fine, era per la visualizzazione del popup