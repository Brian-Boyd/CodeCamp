<!doctype html>
<html lang="en">
  <head>
    <title>Math</title>
  </head>
  <body>
    <?php
    echo 5 * M_PI;
    $name = "Brian Boyd";
    $result = round($name * M_PI, 3) . '<br>';
    echo $result;
    echo '<br>';
    echo ceil($result);
    // get the length of your full name (first and last)
    $name = "Brian Boyd";
    $nameLength = strlen($name); // 10
    echo $nameLength;
    // multiply that by M_PI and round it to the third decimal place
    //echo round((strlen($name) * M_PI), 3);
    $result = round((strlen($nameLength) * M_PI), 3);
    echo $result . '<br><br>';
    echo $result;
    // print out the result
    //printf(strlen($name) * M_PI);
    // then print out the ceiling value of the result

    // Next use your knowledge of strlen(), substr(), and rand() to print a random character from your name
    $len = strlen($name);
    $num = rand(0, $len);
    echo substr($name, $num, $len);
    ?>
  </body>
</html>
