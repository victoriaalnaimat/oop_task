<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: index.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
  <section class="contents" style="text-align: center; border: 2px brown solid;width: fit-content;padding: 12.74px;margin-left: 35%;">
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off" style="text-align: left;">
      <label for="">Username or Email : </label>
      <input type="text" name="usernameemail" required value=""> <br>
      <label for="">Password</label>
      <input type="password" name="password" required value=""> <br>
      <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <button style="background-color: blanchedalmond; border: 5px brown double;">
      <a href="registration.php" style="text-decoration: none;color: brown;">Sign Up</a>
    </button>
</section>
  </body>
</html>
