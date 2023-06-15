function getErrorHtml(elemErrors) {
    if ((typeof (elemErrors) === 'undefined') || (elemErrors.length < 1))
        return;
    var out = '<ul class="errors">';
    for (var i = 0; i < elemErrors.length; i++) {
        out += '<li>' + elemErrors[i] + '</li>'; //stampa tutti i messaggi di errore come lista 
    }
    out += '</ul>';
    return out;
}

function doElemValidation(id, actionUrl, formId) {

    var formElems;

    function addFormToken() {  //serve per associare una chiave csrf, recupera il valore del token csrf della form
        var tokenVal = $("#" + formId + " input[name=_token]").val();
        formElems.append('_token', tokenVal);
    }

    function sendAjaxReq() {  //fa una richiesta post a cui passi l'actionurl, i dati formElems, dataType: il tipo di file di ritorno
        $.ajax({
            type: 'POST',
            url: actionUrl,
            data: formElems,
            dataType: "json",
            error: function (data) {
                console.log(data); //stampa nella console i dati, se c'è un errorre 422, definisce i messaggi di errore che riprende dall'oggetto json che ritorna la richiesta
                if (data.status === 422) {
                    var errMsgs = JSON.parse(data.responseText);
                    $("#" + id).parent().find('.errors').html(' '); //Questa riga cerca l'elemento con l'id corrispondente all'errore e trova il suo genitore (parent). Quindi cerca un elemento con la classe .errors all'interno del genitore e imposta il suo contenuto HTML su uno spazio vuoto, cancellando eventuali messaggi di errore precedenti.
                    
                    $("#" + id).after(getErrorHtml(errMsgs[id])); //Questa riga inserisce un nuovo elemento HTML, ottenuto tramite la funzione getErrorHtml, dopo l'elemento con l'id corrispondente all'errore. L'elemento HTML inserito conterrà il messaggio di errore da visualizzare.



                }
            },
            contentType: false, //si indica alla richiesta AJAX di non impostare automaticamente l'intestazione Content-Type nella richiesta.
            processData: false //si indica alla richiesta AJAX di non elaborare automaticamente i dati dell'oggetto data.
        });
    }

    var elem = $("#" + id);  //prendi l'id dell'elemento
    if (elem.attr('type') === 'file') {
        // elemento di input type=file valorizzato
        if (elem.val() !== '') {
            inputVal = elem.get(0).files[0];
        } else {
            inputVal = new File([""], ""); //crea un file vuoto
        }
    } else {
        // elemento di input type != file
        inputVal = elem.val();
    }
    formElems = new FormData();
    formElems.append(id, inputVal);
    addFormToken();
    sendAjaxReq();

}

function doFormValidation(actionUrl, formId) {

    var form = new FormData(document.getElementById(formId));
    $.ajax({
        type: 'POST',
        url: actionUrl,
        data: form,
        dataType: "json",
        error: function (data) {
            if (data.status === 422) {
                var errMsgs = JSON.parse(data.responseText);
                $.each(errMsgs, function (id) {
                    $("#" + id).parent().find('.errors').html(' ');
                    $("#" + id).after(getErrorHtml(errMsgs[id]));

                });
            }
        },
        success: function (data) {
            window.location.replace(data.redirect); //viene utilizzata per reindirizzare l'utente a un'altra pagina specificata dall'URL
            //                                      //contenuto nella proprietà redirect dell'oggetto data.
        },
        contentType: false,
        processData: false
    });
}