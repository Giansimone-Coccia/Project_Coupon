$(document).ready(function() {
    var imagePath = $('#previewImage').attr('src')
    var inputElement = $('#logoOff')[0];
    
    $.ajax({    //viene usato per fare la chiamata ajax al server
        url: imagePath,
        method: 'GET',
        xhrFields: {
            responseType: 'blob'
        },
        success: function(blob) {
            var fileName = imagePath.substring(imagePath.lastIndexOf('/') + 1);
            var file = new File([blob], fileName);
            
            var dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);
            inputElement.files = dataTransfer.files;
        }
    });
});


//serve per caricare il valore dell'immagine attuale al campo di input file img di modifica offerta e azienda
$(document).ready(function() {
    var imagePath = $('#previewImage').attr('src')  
    var inputElement = $('#image')[0]; //è presente [0] perchè in realtà abbiamo una collezione di oggetti di cui dobbiamo prendere il primo, 
                                      //che è anche l'unico. Sopra non abbiamo necessità di farlo usiamo attr che restituisce direttamente il valore dell'attributo del primo elemento del set a cui è applicato
    
    $.ajax({
        url: imagePath, //percorso dell'immagine
        method: 'GET',
        xhrFields: {
            responseType: 'blob'
        },
        success: function(blob) {
            var fileName = imagePath.substring(imagePath.lastIndexOf('/') + 1); //serve a prendere solo la parte finale del path, che indica il nome del file img
            var file = new File([blob], fileName);
            
            var dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);
            inputElement.files = dataTransfer.files;    //usa datatransfer per settare il valore del file all'inputelement
        }
    });
});