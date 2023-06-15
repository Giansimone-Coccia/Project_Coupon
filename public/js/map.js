$(document).ready(function () {  // equivale a window.addEventListener('DOMContentLoaded' in js puro
    $('#mappa').hide();
    $('#dove-siamo').click(function () {
        if ($('#mappa').is(':visible')) { //:visible è un selettore di jQuery che viene utilizzato per selezionare gli elementi che sono attualmente visibili nella pagina.
            $('#mappa').hide();
        } else {
            $('#mappa').show();
        }
    });
});