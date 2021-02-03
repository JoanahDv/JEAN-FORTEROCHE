<?php $title = "Login" ;?>
<?php ob_start(); ?>
<form action="index.php?action=login " method="POST" style="padding-top:100px">
  <div class="admin_container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <input type="submit"/>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>