$(document).ready(function() {
    var imagePath = $('#previewImage').attr('src')
    var inputElement = $('#logoOff')[0];
    
    $.ajax({
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

$(document).ready(function() {
    var imagePath = $('#previewImage').attr('src')
    var inputElement = $('#logo')[0];
    
    $.ajax({
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