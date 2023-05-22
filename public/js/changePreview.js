$(document).ready(function() {
    $('#logoOff, #image').change(function() {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#previewImage').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(this.files[0]);
    });
  });