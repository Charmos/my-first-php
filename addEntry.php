<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
  </head>

  <body>
    <<?php
      require_once("foodreceiver.php");
      addFood($_POST["food"], $_POST["price"]);
      header('Location: http://localhost/php/display.php');
    ?>

  </body>

</html>
