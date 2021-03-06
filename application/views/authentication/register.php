<?php $this->load->view('partials/header');?>

<div class="container" id="login">

  <form class="form-signin" id="form-signup" method="POST">
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
    <input type="text" name="phone" class="input-block-level phone" placeholder="Phone">
    <button id="submit" class="btn btn-large btn-primary" type="submit">Sign Up</button>
  </form>

</div> <!-- /container -->
<?php $this->load->view('partials/footer');?>
<style>
select {
  width: 100%;
}
.phone{
  margin-top: 10px;
}
</style>
