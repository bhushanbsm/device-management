<?php $this->load->view('partials/header');?>

<div class="container" id="login">

  <form class="form-signin" action='<?=base_url("reset_your_password/$token")?>' method="POST">
    <div class="alert alert-danger" id="validation_errors" style="display: <?=$error?'block':'none'?>">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <?=$error?>
    </div>
    <h2 class="form-signin-heading">Reset Password</h2>
    <input type="text" name="password" class="input-block-level" placeholder="Password">
    <input type="text" name="conf_password" class="input-block-level" placeholder="Conf Password">
    <button id="submit" name="submit" value="1" class="btn btn-large btn-primary" type="submit">Reset</button>
  </form>

</div> <!-- /container -->
<?php $this->load->view('partials/footer');?>
