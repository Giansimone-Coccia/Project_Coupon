$(document).ready(function() {
    $('#image').change(function() {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#previewImage').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(this.files[0]);
    });
  });

  $(document).ready(function() {
    $('#logoOff').change(function() {   //quando si va a modificare logoOff, viene fatta partire la funzione che sostituisce l'attributo src attuale con
                                        //il valore di e.target.result. funzione asincrona, l'onload parte solo dopo che viene letto il dataurl
      var reader = new FileReader();
      
      reader.onload = function(e) {  //reader.onload definisce una funzione da eseguire quando il file viene completamente letto.
        $('#previewImage').attr('src', e.target.result); //e.target.result è il risultato dell'evento che fa partire la funzione, ossia reader.readAsDataURL, in e.target.result ci sono i dati del file passato in formato URL data
      }
      
      reader.readAsDataURL(this.files[0]);  //rappresenta il contenuto del file come url 
    });
  });