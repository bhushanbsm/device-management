<?php $this->load->view('partials/header');?>

<div class="container" id="login">

  <form class="form-signin" method="POST">
    <div class="alert alert-danger" id="validation_errors" style="display: none">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
    <h2 class="form-signin-heading">Sign in</h2>
    <input type="text" name="username" class="input-block-level" placeholder="Username/Email address">
    <input type="password" name="password" class="input-block-level" placeholder="Password">
    <label class="checkbox">
      <input type="checkbox" name='remember' value="1"> Remember me
    </label>
    <button id="submit" class="btn btn-large btn-primary" type="submit">Sign in</button>
  </form>

</div> <!-- /container -->
<?php $this->load->view('partials/footer');?>
<script>
  $( ".form-signin" ).submit(function( event ) {
    event.preventDefault();
    $('#submit').html('<div id="spinner" class="text-center"><i class="fa fa-spinner fa-pulse fa-fw"></i> <span class="sr-only">Loading...</span></div>');
    $.ajax({
      url: '<?=base_url('authentication/dologin')?>',
      type: 'post',
      dataType: 'json',
      data: $('.form-signin').serialize(),
      success: function(data) {
        if (!data.status) {
          $('#validation_errors').html(data.error);
          $('#validation_errors').show();
        }else{
          window.location.replace("<?=base_url('authentication/home')?>");
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
</script>