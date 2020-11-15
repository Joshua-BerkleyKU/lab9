<?php
  $email = $_POST["email"];
  $password = $_POST["password"];
  $shipping = $_POST["ship"];
  $item1 = $_POST["minecraft"];
  $item2 = $_POST["Computerparts"];
  $item3 = $_POST["steam"];

  $temp1 = $item1 * 20;
  $temp2 = $item2 * 100;
  $temp3 = $item3 * 10;
  $temp4 = $temp1 + $temp2 + $temp3;

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
    echo "<tr>";
      echo "<td>minecraft</td>";
      echo "<td> $item1 </td>";
      echo "<td>$20</td>";
      echo "<td>$$temp1</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<td>Computer parts</td>";
      echo "<td> $item2 </td>";
      echo "<td>$100</td>";
      echo "<td>$$temp2</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<td>steam</td>";
      echo "<td> $item3 </td>";
      echo "<td>$10</td>";
      echo "<td>$$temp3</td>";
    echo "</tr>";
    if ($shipping == "Free 7 day")
    {
      echo "<tr>";
        echo "<td>$shipping</td>";
        echo "<td> 1 </td>";
        echo "<td>$0</td>";
        echo "<td>$0</td>";
      echo "</tr>";
    }
    if ($shipping == "$50.00 over night")
    {
      echo "<tr>";
        echo "<td>$shipping</td>";
        echo "<td> 1 </td>";
        echo "<td>$50</td>";
        echo "<td>$50</td>";
      echo "</tr>";
      $temp4 = $temp4 + 50;
    }
    if ($shipping == "$5.00 three day") {
      echo "<tr>";
        echo "<td>$shipping</td>";
        echo "<td> 1 </td>";
        echo "<td>$5</td>";
        echo "<td>$5</td>";
      echo "</tr>";
      $temp4 = $temp4 + 5;
    }
    echo "<tr>";
      echo "<td colspan='3'>Total:</td>";
      echo "<td> $$temp4 </td>";
    echo "</tr>";
  echo "</tbody></table>";
?>
