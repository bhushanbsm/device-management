<?php $this->load->view('partials/header');?>

<div class="container" id="login">

  <form class="form-signin" id="form-forgot-pass" method="POST">
    <div class="alert alert-danger" id="validation_errors" style="display: none">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
    <h2 class="form-signin-heading">Forgot Password</h2>
    <input type="text" name="username" class="input-block-level" placeholder="Username/Email address">
    <button id="submit" class="btn btn-large btn-primary" type="submit">Reset</button>
  </form>

</div> <!-- /container -->
<?php $this->load->view('partials/footer');?>
