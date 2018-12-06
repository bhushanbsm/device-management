const base_url = $('#base_url').html();
$( "#form-forgot-pass" ).submit(function( event ) {
  event.preventDefault();
  $('#submit').html('<div id="spinner" class="text-center"><i class="fa fa-spinner fa-pulse fa-fw"></i> <span class="sr-only">Loading...</span></div>');
  $.ajax({
    url: base_url+'authentication/get_reset_link',
    type: 'post',
    dataType: 'json',
    data: $('#form-forgot-pass').serialize(),
    success: function(data) {
      if (!data.status) {
        $('#validation_errors').html(data.error);
        $('#validation_errors').show();
      }else{
        $('#validation_errors').html(data.error);
        $('#validation_errors').show();
        window.location.replace(base_url+'authentication/reset-your-password');
      }
      $('#submit').html('Reset');
    },
    error:function() {
      $('#validation_errors').html('Network Error');
      $('#validation_errors').show();
      $('#submit').html('Reset');
    }
  });
});

$( "#form-signup" ).submit(function( event ) {
  event.preventDefault();
  $('#submit').html('<div id="spinner" class="text-center"><i class="fa fa-spinner fa-pulse fa-fw"></i> <span class="sr-only">Loading...</span></div>');
  $.ajax({
    url: base_url+'authentication/doregister',
    type: 'post',
    dataType: 'json',
    data: $('#form-signup').serialize(),
    success: function(data) {
      if (!data.status) {
        $('#validation_errors').html(data.error);
        $('#validation_errors').show();
      }else{
        window.location.replace(base_url+'dashboard');
      }
      $('#submit').html('Sign Up');
    },
    error:function() {
      $('#validation_errors').html('Network Error');
      $('#validation_errors').show();
      $('#submit').html('Sign Up');
    }
  });
});

$( "#form-signin" ).submit(function( event ) {
  event.preventDefault();
  $('#submit').html('<div id="spinner" class="text-center"><i class="fa fa-spinner fa-pulse fa-fw"></i> <span class="sr-only">Loading...</span></div>');
  $.ajax({
    url: base_url+'authentication/dologin',
    type: 'post',
    dataType: 'json',
    data: $('#form-signin').serialize(),
    success: function(data) {
      if (!data.status) {
        $('#validation_errors').html(data.error);
        $('#validation_errors').show();
      }else{
        window.location.replace(base_url+'dashboard');
      }
      $('#submit').html('Sign Up');
    },
    error:function() {
      $('#validation_errors').html('Network Error');
      $('#validation_errors').show();
      $('#submit').html('Sign Up');
    }
  });
});
$("body").on("click", "#pdfExport", function () {
  html2canvas($('#example')[0], {
    onrendered: function (canvas) {
      var data = canvas.toDataURL();
      var docDefinition = {
        content: [{
          image: data,
          width: 500
        }]
      };
      pdfMake.createPdf(docDefinition).download("Table.pdf");
    }
  });
});
$(document).ready(function($) {
  $(".chzn-select").chosen();
  $(".datepicker").datepicker({autoclose:true});
  $("#csvExport").click(function(){
    $("#example").tableToCSV();
  });
});