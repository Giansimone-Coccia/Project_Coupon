$(document).ready(function() {
    $('#logo').change(function() {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#previewImage').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(this.files[0]);
    });
  });

  $(document).ready(function() {
    $('#logoOff').change(function() {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#previewImage').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(this.files[0]);
    });
  });