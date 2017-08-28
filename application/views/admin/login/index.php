
<?php $this->load->view('admin/shared/header'); ?>

<div>
  <a class="hiddenanchor" id="signup"></a>
  <a class="hiddenanchor" id="signin"></a>

  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <?php if(!empty($_SESSION['result_login'])) { echo $_SESSION['result_login']; }?>
        <form method="post" action="<?php echo base_url('login/post'); ?>">
          <h1>Login Form</h1>
          <div>
            <input type="text" name="email" class="form-control" placeholder="Email" required="" />
          </div>
          <div>
            <input type="password" name="pass" class="form-control" placeholder="Password" required="" />
          </div>
          <div>
            <input class="btn btn-default submit" type="submit" value="Log in">
            <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
          </div>

          <div class="clearfix"></div>

          <!-- <div class="separator">
            <p class="change_link">New to site?
              <a href="#signup" class="to_register"> Create Account </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
              <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
              <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
            </div>
          </div> -->
        </form>
      </section>
    </div>

  </div>
</div>

<?php $this->load->view('admin/shared/footer'); ?>
