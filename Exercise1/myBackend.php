<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<table style='font-size:.5em;'>";
for ($i=1; $i < 101; $i++)
{
  echo "<tr> \n";
  for ($j=1; $j < 101 ; $j++)
  {
    $k = $i * $j;
    echo "<td>$k</td> \n";
  }
  echo "</tr>";
}
echo "</table>"

 ?>
