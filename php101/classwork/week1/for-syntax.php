<!doctype html>
<html lang="en">
  <head>
    <title>For Syntax</title>
  </head>
  <body>
    <?php
    // fill in the __ spots with the correct syntax
      for ($i = 2; $i < 11; $i += 2) {
      for ($i = 2; $i < 11; $i = $i + 2) {
        echo $i . "<br>";
      }
    ?>
  </body>
</html>
