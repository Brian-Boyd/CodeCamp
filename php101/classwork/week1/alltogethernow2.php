<!doctype html>
<html lang="en">
  <head>
    <title>All Together Now 2</title>
  </head>
  <body>
    <p>Create two variables one called $guess and another called $number.</p>
    <?php // Write your else if statement to check if the guess is correct
    $guess = 23;
    $number = 13;
    if ($guess < $number){
      echo "too low";
      } elseif ($guess > $number){
      echo "too high";
      } else {
      echo "just right";
    }
    ?>
  </body>
</html>
