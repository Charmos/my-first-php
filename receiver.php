<!DOCTYPE HTML>
<html>
  <head></head>
  <body>
    <?php
      $age = array('Jose' => 25, 'Charmos' => 17, 'Maria' => 22);
      $name = $_POST['username'];
      echo 'Hello, ' . $name . '!';
      echo '<br/>';
      if(array_key_exists($name, $age))
        echo 'Your age is ' . $age[$name] . '!';
      else {
        echo 'Your age is unknown but you\'re definitely old.';
      }
     ?>

</html>
