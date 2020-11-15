<?php
  $email = $_POST["email"];
  $password = $_POST["password"];
  $shipping = $_POST["ship"];
  $item1 = $_POST["minecraft"];
  $item2 = $_POST["Computerparts"];
  $item3 = $_POST["steam"];

  echo "<link rel='stylesheet' type='text/css' href='style.css' />";
  echo "<p id='welcome'>";
    echo "Welcome $email <br />";
    echo "Your password is $password";
  echo "</p>";

  echo "<table><thead>";
    echo "<th>Item</th>";
    echo "<th>Quantity</th>";
    echo "<th>Cost per Item</th>";
    echo "<th>Sub Total</th>";
  echo "</thead>";
  echo "<tbody>";
?>
