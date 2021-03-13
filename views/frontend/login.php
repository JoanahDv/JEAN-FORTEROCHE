<?php $title = "Login"; ?>
<?php ob_start(); ?>


<section id="adminlogin">
  <h1> Admin Login Form </h1>
  <br><br>  
  <form action="index.php?action=login" method="POST">

    <div class="admin_container">

      <label for="uname"><b>USERNAME</b></label><br>
      <input type="text" placeholder="Enter Username" name="uname" required>
       <br><br>

      <label for="psw"><b>PASSWORD</b></label><br>

      <input type="password" placeholder="Enter Password" name="psw" required>
        <br><br>  
      <input type="submit" />

    </div>
    <br><br>  
    <!-- HELP OF PASSWORD IS FORGOTTEN  -->

    <div class="login-help">

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
       <br><br>  

      <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>

    </div>

  </form>

</section>

<?php $content = ob_get_clean(); ?>
<?php require 'views/template.php'; ?>