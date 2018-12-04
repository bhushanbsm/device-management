<?php $this->load->view('partials/header');?>

<div class="container" id="login">

  <form class="form-signin form-signup" method="POST">
    <div class="alert alert-danger" id="validation_errors" style="display: none">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
    <h2 class="form-signin-heading">Sign Up</h2>
    <input type="text" name="fname" class="input-block-level" placeholder="First Name" required maxlength='32'>
    <input type="text" name="lname" class="input-block-level" placeholder="Last Name" required maxlength='32'>
    <input type="text" name="username" class="input-block-level" placeholder="Username" required maxlength='32' minlength='4'>
    <input type="email" name="email" class="input-block-level" placeholder="Email address" required>
    <input type="password" name="password" class="input-block-level" placeholder="Password" required maxlength='32' minlength="8">
    <input type="password" name="conf_password" class="input-block-level" placeholder="Conf Password" required maxlength="32" minlength="8">
    <?=form_dropdown('account', $account,'', 'id="select01" class="chzn-select"')?>
    <input type="text" name="phone" class="input-block-level" placeholder="Phone">
    <button id="submit" class="btn btn-large btn-primary" type="submit">Sign Up</button>
  </form>

</div> <!-- /container -->
<?php $this->load->view('partials/footer');?>
<style>
select {
  width: 100%;
}
</style>
<script>
  $( ".form-signup" ).submit(function( event ) {
    event.preventDefault();
    $('#submit').html('<div id="spinner" class="text-center"><i class="fa fa-spinner fa-pulse fa-fw"></i> <span class="sr-only">Loading...</span></div>');
    $.ajax({
      url: '<?=base_url('authentication/doregister')?>',
      type: 'post',
      dataType: 'json',
      data: $('.form-signup').serialize(),
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