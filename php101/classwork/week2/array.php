<!doctype html>
<html lang="en">
  <head>
    <title>Array</title>
  </head>
  <body>
    <?php
    // assign your name to a variable
    // explode your name to an array
    // reverse the array and the join it

    $name = "Brian Boyd";
    $parts = explode(" ", $name);
    //var_dump($parts);
    $reverse = array_reverse($parts);
    //var_dump($reverse);
    $join = implode("", $reverse);
    //var_dump($join);

    // create a for loop of that iterates 100 times
    // push the number from the for loop into an array if it is divisible by 2
    // once the loop is complete remove the first and last elements of the array
    // print out the number of elements in the array

    for ($i = 1; $i <= 100; $i++) {
      //echo $i . "<br>";
      //$arr = array($i);
      //var_dump($arr);
      if ($i % 2 == 0);   //not sure how to do this
        $arr = array($i);
        var_dump($arr);
    }

    ?>
  </body>
</html>
