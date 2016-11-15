<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <?php
      //$currentPage = localhost/php/foodreceiver.php?food=SMB&price=123&submit=Submit;
      //header("location:".php/foodreceiver.php);

      function connectToDb() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "food";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " .$conn->connect_error);
        }
        // returns when connection is successful
        return $conn;
      }


      function addFood($food, $price) {
        $conn = connectToDb();
        $sql = "INSERT INTO menu (name, price) VALUES ('$food', $price)";

          if ($conn->query($sql) === TRUE) {
            echo "New entry created successfully!";
          } else {
            echo "Entry creation unsuccessful.";
          }
          $conn->close();
      }

      function displayEntries() {
        $conn = connectToDb();
        $sqlQuery = "SELECT * FROM menu";
        $foodAndPrice = $conn->query($sqlQuery);

        if ($foodAndPrice->num_rows > 0) {
          $num = 1;
          echo '<table>';
          while($row = $foodAndPrice->fetch_assoc()) {
              echo '<tr>';
              echo '<form action="delete.php" method="POST">';
                echo '<td>' . $num . ' ' . '</td';
                echo '<td>' . $row["name"] . '</td>';
                echo '<td>' . $row["price"] . '</td>';
                echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                echo '<td><input type="submit" class="delete-button" value="Delete"></td>';
              echo '</form>';
              echo '</tr>';
              $num++;
            }
            echo '</table>';
            //header("location:".php/foodreceiver.php);
          } else {
            echo "0 results";
          }
          $conn->close();
        }
     ?>
  </body>

</html>
