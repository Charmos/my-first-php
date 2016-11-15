<!DOCTYPE html>
<html>
  <head></head>

  <body>
    <?php
      require_once("foodreceiver.php");

      $conn = connectToDb();
      $foodId = $_POST["id"];

      $sqlDelete = "DELETE FROM menu WHERE id = $foodId";

      if ($conn->query($sqlDelete) === TRUE) {
        echo "Entry deleted successfully!";
      } else {
        echo "Deletion unsuccessful.";
      }

      $conn->close();

      header('location: http://localhost/php/display.php');
    ?>

  </body>

</html>
