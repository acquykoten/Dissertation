<?php
ob_start();
if(!isset($_SESSION))
    session_start();
$obj = new crud_user();
if(isset($_POST['login'])) {
    $pass = md5($_POST['password']);
    $new_email = $_POST['email'];
    if (($obj->getByEmail($new_email,$pass))){
        extract($obj->getByEmail($new_email,$pass));
        $_SESSION['id_admin'] = $id_user;
        $_SESSION['admin_name'] = $email;
        header('location:?cache=view&module=film');
    }
    else
    {
        ?>
        <script language="JavaScript">
            window.alert("Sing in Fail");
        </script>
    <?php
    }
}
?>
<div class="login">
              <form class="form-signin" action="?cache=view&module=login" method="post">
        <h2 class="form-signin-heading">Please sign in again!</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      </form>
  </div>
  </div>
</form>
                </div>