<?php
require 'function.php';

$select = new Select();

if (!empty($_SESSION["id"])) {
  $user = $select->selectUserById($_SESSION["id"]);
} else {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Index</title>
</head>

<body>
  <section class="contents" style="text-align: center; border: 2px brown solid;width: fit-content;padding: 12.74px;margin-left: 35%;">
    <h1 style="text-align: center;">Welcome <?php echo $user["name"]; ?> !</h1>
    <button style="background-color: blanchedalmond; border: 5px brown double;">
      <a href="logout.php" style="text-decoration: none;color: brown;">Logout</a>
    </button>
  </section>
</body>
</html>
