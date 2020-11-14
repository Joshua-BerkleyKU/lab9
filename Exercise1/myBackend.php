<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<table style='font-size:.5em;'>";
for ($i=1; $i < 100; $i++)
{
  echo "<tr> \n";
  for ($j=0; $j < 100 ; $j++)
  {
    $k = $i * $j;
    echo "<td>$k</td> \n";
  }
  echo "</tr>";
}
echo "</table>"

 ?>
