$(document).ready(function () {
    $('#mappa').hide();
    $('#dove-siamo').click(function () {
        if ($('#mappa').is(':visible')) {
            $('#mappa').hide();
        } else {
            $('#mappa').show();
        }
    });
});