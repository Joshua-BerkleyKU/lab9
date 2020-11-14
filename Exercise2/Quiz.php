<?php
  $question1 = $_POST["engineering"];
  $question2 = $_POST["Italy"];
  $question3 = $_POST["game"];
  $question4 = $_POST["answer"];
  $question5 = $_POST["youtuber"];

  $correctnum = 0 ;


  echo "<span style='font-size:.8em;'>";

  echo "Question 1: what engineering major is the best<br />";
  if ($question1 == "A: Computer Science")
  {
    $correctnum++;
  }
  echo "&emsp;";
  echo "You answered:" $question1 "<br />" ;
  echo "&emsp;";
  echo "Correct Answer: A: Computer Science<br />";

  echo "<br />";
  echo "Question 2: What was Italy purpose in WW2?:<br />";
  if ($question2 == "B: Flipping sides")
  {
    $correctnum++;
  }
  echo "&emsp;";
  echo "You answered:" $question2 "<br />" ;
  echo "&emsp;";
  echo "Correct Answer: B: Flipping sides<br />";

  echo "<br />";
  echo "Question 3: What is the best vidoe game?<br />";
  if ($question3 == "A: minecraft")
  {
    $correctnum++;
  }
  echo "&emsp;";
  echo "You answered:" $question3 "<br />" ;
  echo "&emsp;";
  echo "Correct Answer: A: minecraft<br />";

  echo "<br />";
  echo "Question 4: Which answer is correct?<br />";
  if ($question4 == "D: what")
  {
    $correctnum++;
  }
  echo "&emsp;";
  echo "You answered:" $question4 "<br />" ;
  echo "&emsp;";
  echo "Correct Answer: D: what<br />";

  echo "<br />";
  echo "Question 5: Who is the best youtuber?<br />";
  if ($question5 == "C: markiplier")
  {
    $correctnum++;
  }
  echo "&emsp;";
  echo "You answered:" $question5 "<br />" ;
  echo "&emsp;";
  echo "Correct Answer: C: markiplier<br />";


echo "hello world";
 ?>
