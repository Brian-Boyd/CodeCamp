<!doctype html>
<html lang="en">
  <head>
    <title>First Function</title>
  </head>
  <body>
    <?php
    // Write a function that RETURNS your name  <-- throwing you a curve ball here
    // Then echo the result of that function

    function showName() {
    	return "Brian Boyd";
    }
    echo showName() . '<br>';
    echo strtoupper(showName()) . '<br>';
    echo strtolower(showName()) . '<br>';
    $partial = substr(showName(), 0, 3);
    print $partial
    	echo "Brian Boyd";
    }

    showName();
    ?>
  </body>
</html>
