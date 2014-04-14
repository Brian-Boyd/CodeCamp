<!doctype html>
<html lang="en">
  <head>
    <title>For Syntax</title>
  </head>
  <body>
    <p><?php
      // write a for loop that echos the numbers 10 to and including 100 counting by 10s
      // next write a for loop that counts down from 50 to 5 counting by 5s
      // build an array with three items, then loop over the array and echo each item
      for ($i = 10; $i <= 100; $i = $i + 10) {
        echo $i . '<br>';
        echo "$i<br>";
      }
    ?></p>

    <p><?php
      for ($i = 50; $i >= 5; $i -= 5) {
        echo $i . '<br>';
      for ($i = 50; $i > 0; $i = $i - 5) {
        echo "$i<br>";
      }
      ?></p>

    <p>
    <ul><?php
      $arr = array("car", "truck", "van");
      foreach ($arr as $vehicle) {
        echo 'Vehicle Type: ' . $vehicle . '<br>';
        echo "Vehicle Type: " . $vehicle . "<br>";
      }
      ?>
    </ul>
  </p>
  </body>
</html>
