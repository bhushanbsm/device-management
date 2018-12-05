<?php $this->load->view('partials/header');?>

<div class="container" id="login">

  <form class="form-signin" id="form-signin" method="POST">
    <div class="alert alert-danger" id="validation_errors" style="display: none">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
    <h2 class="form-signin-heading">Sign in</h2>
    <input type="text" name="username" class="input-block-level" placeholder="Username/Email address" required>
    <input type="password" name="password" class="input-block-level" placeholder="Password" required>
    <label class="checkbox">
      <input type="checkbox" name='remember' value="1"> Remember me
    </label>
    <button id="submit" class="btn btn-large btn-primary" type="submit">Sign in</button>
    <a href="<?=base_url('authentication/forgotpassword')?>" class="pull-right">Forgot Password?</a>
  </form>

</div> <!-- /container -->
<?php $this->load->view('partials/footer');?>
